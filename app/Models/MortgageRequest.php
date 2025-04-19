<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MortgageRequest extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'user_id', 'house_id', 'interest_id', 'duration', 'bank_name', 'interest', 'dp_total_amount', 'dp_percentage', 'loan_total_amount', 'loan_interest_total_amount', 'house_price', 'monthly_amount', 'status', 'documents'
    ];

    public function customer(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function house(){
        return $this->belongsTo(House::class, 'house_id');
    }

    public function interestModel(){
        return $this->belongsTo(Interest::class, 'interest_id' );
    }

    public function installments(){
        return $this->hasMany(Installment::class, 'mortgage_request_id');
    }

    public function getRemainingLoanAmountAttribute(){
        // Check if these are any installments
        if ($this->installments()->count() === 0){
            return $this->loan_interest_total_amount;
        }

        // Calculate the total paid amount form installments
        $totalPaid = $this->installments()
        ->where('is_paid', true)
        ->sum('sub_total_amount');

        // Substract the total paid form the total loan amount
        return  max($this->loan_interest_total_amount - $totalPaid, 0);
    }

}
