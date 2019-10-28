<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin¥ProfileController extends Controller
{
    //
    public function add()
    {
        return view('admin.profile.create');
    }


    public function create(Request $request)
    {
        $validatedData = $request -> validate ([
            'name'         => 'required',
            'gender'       => 'required',
            'hobby'        => '',
            'introduction' => '',
        ]);
        
        $profile = new Profile();
        $profile->name         = $validatedData['name'];
        $profile->gender       = $validatedData['gender'];
        $profile->hobby        = $validatedData['hobby'];
        $profile->introduction = $validatedData['introduction'];
        
        $profile->save();
        return redirect('admin.profile.create');
    }


    public function edit()
    {
        return view('admin.profile.edit');
    }
    
    public function update()
    {
    return redirect('admin/profile/edit');
    }
}
