<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Learningapp; //この行を上に追加
use App\User;//この行を上に追加
use Auth;//この行を上に追加
use Validator;//この行を上に追加

class LearningappsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function learningapp()
    {
         // 全ての投稿を取得
        $learningapps = Learningapp::orderBy('created_at', 'asc')->paginate(5);
        return view('learningapps',[
            'learningapps'=> $learningapps
            ]);   
        return view('/learningapps');
    }
    
    public function grammar()
    {
         // 全ての投稿を取得
        $learningapps = Learningapp::where('category','Grammar')->paginate(5);
        return view('learningapps',[
            'learningapps'=> $learningapps
            ]);   
        return view('/learningapps');
         
    }
    
     public function speaking()
    {
         // 全ての投稿を取得
        $learningapps = Learningapp::where('category','Speaking')->paginate(5);
        return view('learningapps',[
            'learningapps'=> $learningapps
            ]);   
        return view('/learningapps');
         
    }
    
     public function listening()
    {
         // 全ての投稿を取得
        $learningapps = Learningapp::where('category','Listening')->paginate(5);
        return view('learningapps',[
            'learningapps'=> $learningapps
            ]);   
        return view('/learningapps');
         
    }
    
    public function reading()
    {
         // 全ての投稿を取得
        $learningapps = Learningapp::where('category','Reading')->paginate(5);
        return view('learningapps',[
            'learningapps'=> $learningapps
            ]);   
        return view('/learningapps');
         
    }
    
    public function writing()
    {
         // 全ての投稿を取得
        $learningapps = Learningapp::where('category','Writing')->paginate(5);
        return view('learningapps',[
            'learningapps'=> $learningapps
            ]);   
        return view('/learningapps');
         
    }
    
    
    public function learning()
    {
        //
        return view('learningapps');
    }
    
    public function setapps(Request $request)
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
        $learningapps = new Learningapp;
        $learningapps->category = $request->category;
        $learningapps->name = $request->name;
        $learningapps->comment = $request->comment;
        $learningapps->channel = $request->channel;
        $learningapps->url = $request->url;
        $learningapps->save();
        
        return view('/settubes');
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
