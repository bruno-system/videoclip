<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\configuration;
use App\Models\img_slider;
use App\Models\movie;
//agregar para mail
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;


class FrontController extends Controller
{
    public function index(){
        
        $web_config=configuration::findOrFail(1);
        $img_sliders= img_slider::orderBy('id','DESC')->get();
        $movies=movie::orderBy('id','DESC')->paginate(6);
        return view('layouts_front.main',compact('web_config','img_sliders','movies'));

    }

    public function contact(Request $request){

        $msg = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'content' => 'required|min:3|max:140',
        ]
        /* ,[
            'name.required' => __('Nombre es obligatorio')
        ] */
    );
        //envia email
        Mail::to('brunoalvarado2805@gmail.com')->queue(new MessageReceived($msg));

        //vista previa de email
        //return new MessageReceived($msg);
        
        return back()->with('mensaje', 'email enviado');
        
    }

}