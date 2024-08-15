<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\BasicController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Modules\Slider\Entities\Model as Slider;
use Modules\Contact\Entities\Model as Contact;
use Modules\Package\Entities\Model as Package;
use Modules\Service\Entities\Model as Service;
use Modules\Setting\Entities\Model as Setting;
use Modules\Subscriber\Entities\Model as Subscriber;

class HomeController extends BasicController
{
    
    public function home(Request $request)
    {
        $sliders = Slider::Active()->get();
        $packages = Package::Active()->whereHas('items')->get();
        $services = Service::Active()->get();
        return view('client.index',compact('sliders','services','packages'));
    }

    
    public function contact(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:500',
        ]);

        // Combine phone_code and phone into a single phone number
        $phone = $request->input('phone_code') . $request->input('phone');

        // Create a new contact entry with the combined phone number
        Contact::create([
            'name' => $request->input('name'),
            'phone' => $phone,  // Use the combined phone number
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ]);
        session()->flash('toast_message', ['type' => 'success', 'message' => __('trans.We Will Contact You as soon as possible')]);
        return redirect()->back();
    }


    /*** sidePages (terms, privacy, faq) ***/
    public function sidePages($type)
    {
        $type = Setting::where('type',$type)->first()->type;
        return view('client.sidePages',compact('type'));
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email'=>'required|email'
        ]);

        Subscriber::create($request->only('email'));
        session()->flash('toast_message', ['type' => 'success', 'message' => __('trans.subscription_successful')]);

        return redirect()->back();
    }


} //end of class
