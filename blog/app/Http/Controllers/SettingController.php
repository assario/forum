<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\User;

class SettingController extends Controller
{
    //
    public function setting() {
    	return view('setting', array('user' => Auth::user() ));
    }

    public function delete($id) {
        if(isset($_POST['submit_del'])) {

            $user = User::find($id);

            $user->delete(); 

            return redirect('/register');
        }

    return view('setting', compact('id'));

    }

    public function change_login(Request $request) {
        
        if($request->has('name')) {
            
            $new_name = $request->last('name');
            $user = User::find($id);
            $user->name = $new_name;
            $user->save();

        }

        return view('setting', compact('id'));
    }
}


