<?php

namespace App\Http\Controllers;

use App\Models\movie;
use App\Models\img_slider;
use Illuminate\Http\Request;
use App\Mail\MessageReceived;
//agregar para mail
use App\Models\configuration;
use App\Models\movie_category;
use Illuminate\Support\Facades\Mail;


class FrontController extends Controller
{
    public function index(){
        
        $web_config=configuration::find(1);
     //   $img_sliders= img_slider::orderBy('id','DESC')->get();
        $img_sliders= img_slider::orderBy('id','DESC')->paginate(6);
        $movies=movie::orderBy('id','DESC')->paginate(9);
        //alert()->success('Success Message', 'Optional Title');
        return view('layouts_front.front',compact('web_config','img_sliders','movies'));

    }

    public function showMovie($id){
        $web_config=configuration::find(1);
        $movie=movie::find($id);
        return view('layouts_front.smovie',compact('web_config','movie'));
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
        Mail::to('nacho_16_5@hotmail.com')
            ->bcc(['brunoalvarado2805@gmail.com'])
            ->queue(new MessageReceived($msg));

        //vista previa de email
        //return new MessageReceived($msg);
     //   return back()->with('mensaje', 'email enviado');  
        
      //  alert()->success('Success Message', 'Optional Title');
        return response()->json(['success'=>'email enviado']);
    }

    public function listMovies(Request $request){
        //filter
        $id_category=0;
        $title=$request->input('title');

        if($request->input('id_category')){
            $id_category=$request->input('id_category');       
        } 

        $web_config=configuration::find(1);
        $paginate=$web_config->paginateA;
        //filramosw ps4 = 11
        $categories=movie_category::where('id','<>',11)->orderBy('name')->pluck('name','id')->toArray();

        
        if(!$id_category){ 
            $movies=movie::where('id_category','<>',11)
                        ->title($title)
                        ->orderBy('id','desc')
                        ->paginate($paginate);
        }else{
            $movies=movie::where('id_category',$id_category)
                        ->title($title)
                        ->orderBy('title','asc')
                        ->paginate($paginate);
        }

        return view('layouts_front.list_movie',compact('movies','web_config','categories','id_category','title'));
    }

    public function listPlayGame(Request $request){
        //filter
        $game_name='';
        $categoriaPs4=11;
        
        if($request->input('game_name') != ''){
            $game_name=$request->input('game_name');
        } 

        $web_config=configuration::find(1);
        $paginate=$web_config->paginateA;


        if($game_name != ''){
            $movies=movie::where('id_category',$categoriaPs4)
                        ->where('title', 'like', '%'.$game_name.'%')
                        ->orderBy('id','desc')
                        ->paginate($paginate);
        }else{
            $movies=movie::where('id_category',$categoriaPs4)
                        ->orderBy('title','asc')
                        ->paginate($paginate);
        }

        return view('layouts_front.list_playgame',compact('movies','web_config','game_name'));
    }

}
