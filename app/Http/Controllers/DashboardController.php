<?php

namespace App\Http\Controllers;

use App\Models\Installment;
use App\Models\MortgageRequest;
use App\Services\MortgageService;
use App\Services\PaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    protected $mortgageService;
    protected $paymentService;

    public function __construct(MortgageService $mortgageService, PaymentService $paymentService){
        $this->mortgageService = $mortgageService;
        $this->paymentService = $paymentService;
    }

    public function index(){
        $userId = Auth::id();
        $mortgages = $this->mortgageService->getUserMortgages($userId);
        return view('customer.mortgages.index', compact('mortgages'));
    }

    public function details(MortgageRequest $mortgageRequest){
        $details = $this->mortgageService->getMortgageDetails($mortgageRequest);
        return view('customer.mortgages.details', $details);
    }

    public function installment_details(Installment $installment){
        $installmentDetails = $this->mortgageService->getInstallmentDetails($installment);
        return view('customer.installments.index', compact('installmentDetails'));
    }

    public function installment_payment(MortgageRequest $mortgageRequest){
        $paymentDetails = $this->mortgageService->getInstallmentPaymentDetails($mortgageRequest);
        return view('customer.installments.pay_installment', $paymentDetails);
    }

    public function paymentStoreMidtrans(Request $request){
        try {
            $mortgageRequest = $this->mortgageService->getMortgageRequest($request->input('mortgage_request_id'));
            $snapToken = $this->paymentService->createPayment($mortgageRequest);
            return response()->json(['snap_token' => $snapToken], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Payment failed: ' . $e->getMessage()], 500);
        }
    }
    // public function paymentStoreMidtrans(Request $request)
    // {
    //     try {
    //         // Retrieve mortgage request by ID
    //         $mortgageRequest = $this->mortgageService->getMortgageRequest($request->input('mortgage_request_id'));

    //         // Ensure the object is of the correct type
    //         if (!$mortgageRequest instanceof MortgageRequest) {
    //             throw new \Exception('Invalid mortgage request');
    //         }

    //         // Create payment with the correct mortgage request object
    //         $snapToken = $this->paymentService->createPayment($mortgageRequest);

    //         // Return the snap token in the response
    //         return response()->json(['snap_token' => $snapToken], 200);
    //     } catch (\Exception $e) {
    //         // Return error message if something goes wrong
    //         return response()->json(['error' => 'Payment failed: ' . $e->getMessage()], 500);
    //     }


    public function paymentMidtransNotification(Request $request){
        try {
            $this->paymentService->processNotification();

            return response()->json(['status' => 'success'], 200);
        } catch (\Exception $e){
            return response()->json(['error' => 'Failed to process notification: ' . $e->getMessage()], 500);
        }
    }
}