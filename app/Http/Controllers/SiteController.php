<?php
namespace App\Http\Controllers;
use App\Order;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SiteController extends Controller
{
    public function about() {
        return view('about');
    }

    public function services() {
        $reference = strtoupper(str_random(16));
        $data = [
            'reference' => $reference,
        ];
        Session::put('p_reference', $reference);
        return view('services', $data);
    }

    public function handleServiceRequest(Request $request) {
        $messages = [
            'email.required' => 'Please provide a valid e-mail address',
            'email.string' => '',
            'reference.required' => 'Could not validate your transaction',
            'address.required' =>  "Please provide your address"
        ];
        $rules = [
            'email' => 'string|required',
            'phone' => 'string|required',
            'reference' => 'string',
            'address' => 'string|required',
        ];
        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        if ($request->hasFile('style_file')) {
            $styleFile = $request->file('style_file');
            $filename = 'tng-'.Str::random(12).".".$styleFile->guessExtension();
            $styleFile->move(public_path('/images/styles'), $filename);
        } else {
            $filename = "n/a";
        }

        // check if payment has been made using this reference
        $reference = $request->input('reference');
        $stored_ref = Session::get('p_reference');
        if ($reference != $stored_ref) {
            Session::flash('error', 
            $reference. " and ".$stored_ref." does not match");
            return redirect()->route('services.payment-error');
        }
        
        if ($this->verifyPayment($reference)) {
        $serviceRequest = new Order(['style_description' => $request->input('style_description'),
            'style_file' => $filename,
            'fabric_source' => $request->input('fabric_source'),
            'measurement_source' => $request->input('measurement_source'),
            'name' => $request->input('name'), 'phone' => $request->input('name'),
            'address' => $request->input('address'),
            'reference' => $reference,
            'payment_status' => 'paid',
            'measurement_shoulder_back' => $request->input('measurement_shoulder_back'),
            'measurement_chest' => $request->input('measurement_chest'),
            'measurement_top_length' => $request->input('measurement_top_length'),
            'measurement_neck' => $request->input('measurement_neck'),
            'measurement_body_stomach' => $request->input('measurement_body_stomach'),
            'measurement_sleeves' => $request->input('measurement_sleeves'),
            'measurement_round_sleeves' => $request->input('measurement_round_sleeves'),
            ]);
        $serviceRequest->save();
        Session::flash('message', "Your request has been received and we will get to you shortly.");
        return redirect()->route('services.payment-verified');
        dd($request->all());
        } else {
            Session::flash('error', 
            "Could not verify your payment status. Please reach out to us if you feel this was in error.");
            return redirect()->route('services.payment-error');
        }
    }

    public function paymentError() {
        if (Session::has('error')) {
            $msg = Session::get('error');
        } else {
            $msg = "Failed to complete your payment. If this was in error, kindly contact us";
        }
        $data = [
            'message' => $msg,
        ];
        return view('payment_error', $data);
    }

    public function paymentSuccess() {
        if (Session::has('message')) {
            $msg = Session::get('message');
        } else {
            $msg = "Your request has been completed and we would get back to you shortly.";
        }
        $data = [
            'message' => $msg,
        ];
        return view('payment_success', $data);
    }

    private function verifyPayment($reference) {
        if (!$reference) {die("No Order reference provided");}
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                "accept: application/json",
                "authorization: Bearer sk_test_407c7e1df1d7d4dc01d57ef5240355f399a75a31",
                "cache-control: no-cache"
            ],
        ]);
        $response = curl_exec($curl);
        $err = curl_error($curl);

        if($err){
            // there was an error contacting the Paystack API
            die('Curl returned error: ' . $err);
        }

        $tranx = json_decode($response);

        if(!$tranx->status){
            // there was an error from the API
            die('API returned error: ' . $tranx->message);
        }
        $data = [];
        return ('success' == $tranx->data->status);
    }
}