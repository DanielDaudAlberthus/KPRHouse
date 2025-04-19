<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Midtrans\Config;
use Midtrans\Notification;
use Midtrans\Snap;

class MidtransService{
    public function __construct(){
        // Set Midtrans configuration
        Config::$serverKey      = config('midtrans.serverKey');
        Config::$isProduction   = config('midtrans.isProduction');
        Config::$isSanitized    = config('midtrans.IsSanitized');
        Config::$is3ds          = config('midtrans.serverKey');
    }

    public function createSnapToken(array $params): string{
        try{
            return Snap::getSnapToken($params);
        } catch(\Exception $e){
            Log::error('Failed to create Snap token: ' . $e->getMessage());
            throw $e;
        }
    }

    public function handleNotifications(): array {
        try {
            $notification = new Notification(); //Automatically loads data from the request
            return [
                'order_id'              => $notification->order_id,
                'transaction_status'    => $notification->transaction_status,
                'gross_amount'          => $notification->gross_amount,
                'custom_field1'         => $notification->custom_field1, // User IF
                'custom_field2'         => $notification->custom_field2, // mortgage request ID
            ];
        } catch (\Exception $e){
            Log::error('Midtrans notifications error: ' . $e->getMessage());
            throw $e;
        }
    }
}
