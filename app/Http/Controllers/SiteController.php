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
    public function services() {
        return view('services');
    }

    public function handleServiceRequest(Request $request) {
        $rules = [

        ];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            $errors = new MessageBag(['messages' => ['Email cannot be blank']]);
            return redirect()->back()->withErrors($errors);
        }
        if ($request->hasFile('style_file')) {
            $styleFile = $request->file('style_file');
            $filename = 'tng-'.Str::random(12).".".$styleFile->guessExtension();
            $styleFile->move(public_path('/images/styles'), $filename);
        } else {
            $filename = "n/a";
        }
        $serviceRequest = new Order(['style_description' => $request->input('style_description'),
            'style_file' => $filename,
            'fabric_source' => $request->input('fabric_source'),
            'measurement_source' => $request->input('measurement_source'),
            'name' => $request->input('name'), 'phone' => $request->input('name'),
            'address' => $request->input('address'),
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
        return redirect()->route('services',[],201);
    }
}