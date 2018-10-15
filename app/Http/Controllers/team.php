<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;

class team extends Controller
{
    //

    public function Viewinfo() {
        $info = Info::all();
        $arr = Array('info' => $info);
        return view('All_views.add', $arr);
    }

    public function submit(){

        return view('All_views.submit');
    }

    public function add(Request $req){

        if($req->isMethod('post')){


            $this->validate($req,[

                'inputEmail4'=>'required|max:30',
                'inputPassword4'=>'required|min:6|max:15'

            ]);

        $new_user=new Info();
        $new_user->email=$req->input('inputEmail4');
        $new_user->password=$req->input('inputPassword4');
        $new_user->adress=$req->input('inputAddress');
        $new_user->city=$req->input('inputCity');
        $new_user->country=$req->input('inputState');
       // $new_user->check=$req->input('gridCheck');

        $new_user->save();

        }
        return $this->Viewinfo();
    }


    public function delete($id){

        $delete=Info::find($id);
        $delete->delete();

        return redirect("add");
    }
}
