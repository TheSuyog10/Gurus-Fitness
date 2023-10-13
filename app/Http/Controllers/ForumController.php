<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        $forum = \App\Models\Forum::all();
        return view('forum.index', [
            'forum' => $forum

        ]);
    }
    public function create()
    {
        return view('forum.create', [

        ]);
    }
    public function store(Request $request)
    {

        $formFields = $request->validate(
            [
                'name' => 'required',
                'description' => ['required'],

            ],
            [

                'required' => 'Empty Fields',

            ]
        );
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('image', 'public');
        }
        Forum::create($formFields);

        return redirect('forum')->with('message', 'Post on Forum Added Successfully');

    }
}