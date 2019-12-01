<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;



class ProfileController extends Controller
{
    public function add()
    {
        return view('admin.profile.create');
    }



    public function create(Request $request)
    {
        $this -> validate($request, Profile::$rules);
        
        $profiles = new Profile;
        $form = $request->all();
        
        unset( $form['_token'] );
        
        $profiles->fill($form) -> save();
        return redirect('admin/profile/create');
    }



    public function edit(Request $request)
    {
        // Profile Model からデータを取得する
        $profiles = Profile::find($request->id);
        
        if( empty($profiles) )
        {
            abort(404);
        }
        
        return view('admin.profile.edit', ['profiles_form'=>$profiles]);
    }



    public function update(Request $request)
    {
        // Validation を行う
        $this -> validate($request, Profile::rules);
        // Profile Model からデータを取得する
        $profiles = Profile::find($request->id);
        
        // 送信されてきたフォームデータを格納する
        $profiles_form = $request->allI();
        unset($profiles_form['_token']);
        
        // 該当データを上書き保存する
        $profiles->fill($profiles_form) -> save();
        
        return redirect('admin/profile');
    }
}
