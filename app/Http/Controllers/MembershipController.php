<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function index()
    {

        return view('membership.index', [


        ]);
    }
    public function create()
    {

        return view('membership.create', [


        ]);
    }
    public function store(Request $request)
    {

        $formFields = $request->validate(
            [
                'name' => 'required',
                'email' => ['required', 'email'],
                'phone' => 'required|min:10|max:10|regex:/^[0-9]+$/',
                'planname' => 'required',
                'duration' => 'required|regex:/^[0-9]+$/'
            ],
            [

                'required' => 'Empty Fields',
                'email' => 'Invalid Email',
                'min' => 'Invalid Phone Number',
                'max' => 'Invalid Phone Number',
                'regex' => 'Invalid Phone Number'

            ]
        );

        membership::create($formFields);
        return redirect('/')->with('message', ' Plan Booked Successfully');

    }
}