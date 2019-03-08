<?php
namespace App\Http\Controllers;

use App\NewsletterSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;

class NewsletterController extends Controller
{
    public function subscribe(Request $request) {
        $rules = ['email' => 'string|required'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            $errors = new MessageBag(['messages' => ['Email cannot be blank']]);
            return redirect()->back()->withErrors($errors);
        }
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ];
        $sub = NewsletterSubscription::create($data);
        Session::flash('message', "You have been subscribed to our newsletter");
        return redirect()->route('home',[],201);
    }
}