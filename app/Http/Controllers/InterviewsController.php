<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interview; //この行を上に追加
use App\User;//この行を上に追加
use Auth;//この行を上に追加
use Validator;//この行を上に追加

class InterviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function interviews()
    {
        //
        $interviews = Interview::orderBy('created_at', 'asc')->paginate(5);
        return view('interviews',[
            'interviews'=> $interviews
            ]);   
        return view('/interviews');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mobile()
    {
        //
        $interviews = Interview::where('category','mobile')->paginate(5);
        return view('interviews',[
            'interviews'=> $interviews
            ]);   
        return view('/interviews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function console()
    {
        //
        $interviews = Interview::where('category','console')->paginate(5);
        return view('interviews',[
            'interviews'=> $interviews
            ]);   
        return view('/interviews');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function online()
    {
        //
        $interviews = Interview::where('category','online')->paginate(5);
        return view('interviews',[
            'interviews'=> $interviews
            ]);   
        return view('/interviews');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function otherinterviews()
    {
        //
        $interviews = Interview::where('category','otherinterviews')->paginate(5);
        return view('interviews',[
            'interviews'=> $interviews
            ]);   
        return view('/interviews');
    }
    
    public function inter1()
    {
        //
        
        return view('/interview1');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function setinterviews(Request $request)
    {
        //バリデーション 
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'comment' => 'required|max:1000',
        ]);
        
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        
        //以下に登録処理を記述（Eloquentモデル）
        $interviews = new Interview;
        $interviews->category = $request->category;
        $interviews->name = $request->name;
        $interviews->comment = $request->comment;
        $interviews->channel = $request->channel;
        $interviews->save();
        
        return view('/settubes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
}
