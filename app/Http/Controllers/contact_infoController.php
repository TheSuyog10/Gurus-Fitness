<?php

namespace App\Http\Controllers;

use App\Models\contact_info;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class contact_infoController extends Controller
{
    public function create()
    {
        return view('contact_info.contactUs', [


        ]);
    }

    public function store(Request $request)
    {

        $formFields = $request->validate(
            [
                'name' => 'required',
                'email' => ['required', 'email'],
                'phone' => 'required|min:10|max:10',
                'subject' => 'required',
                'message' => 'required'
            ],
            [

                'required' => 'Empty Fields',
                'email' => 'Invalid Email',
                'min' => 'Invalid Phone Number',
                'max' => 'Invalid Phone Number'

            ]
        );

        contact_info::create($formFields);
        echo ' <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
        return redirect('contactUs')->with('alert', 'Message Sent, We will Contact You Soon');

    }
}
?>