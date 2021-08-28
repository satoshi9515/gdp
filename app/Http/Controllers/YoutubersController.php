<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Youtuber; //この行を上に追加
use App\User;//この行を上に追加
use Auth;//この行を上に追加
use Validator;//この行を上に追加

class YoutubersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('home');
    }
    
    public function youtube()
    {
         // 全ての投稿を取得
        $youtubers = Youtuber::orderBy('created_at', 'asc')->paginate(5);
        
        return view('youtubers',[
            'youtubers'=> $youtubers
            ]);   
        return view('/youtubers');
    }
    
    public function comedyyoutubers()
    {
         // 全ての投稿を取得
        $youtubers = Youtuber::where('category','comedy')->paginate(5);
        
        return view('youtubers',[
            'youtubers'=> $youtubers
            ]);   
        return view('/youtubers');
    }
    
    public function prettyyoutubers()
    {
         // 全ての投稿を取得
        $youtubers = Youtuber::where('category','Pretty')->paginate(5);
        
        return view('youtubers',[
            'youtubers'=> $youtubers
            ]);   
        return view('/youtubers');
    }
    
    public function handsomeyoutubers()
    {
         // 全ての投稿を取得
        $youtubers = Youtuber::where('category','Handsome')->paginate(5);
        
        return view('youtubers',[
            'youtubers'=> $youtubers
            ]);   
        return view('/youtubers');
    }
    
    public function jlptyoutubers()
    {
         // 全ての投稿を取得
        $youtubers = Youtuber::where('category','jlpt')->paginate(5);
        
        return view('youtubers',[
            'youtubers'=> $youtubers
            ]);   
        return view('/youtubers');
    }
    
    public function conversationyoutubers()
    {
         // 全ての投稿を取得
        $youtubers = Youtuber::where('category','conversation')->paginate(5);
        
        return view('youtubers',[
            'youtubers'=> $youtubers
            ]);   
        return view('/youtubers');
    }
    
    public function animeyoutubers()
    {
         // 全ての投稿を取得
        $youtubers = Youtuber::where('category','Anime')->paginate(5);
        
        return view('youtubers',[
            'youtubers'=> $youtubers
            ]);   
        return view('/youtubers');
    }
    
    public function about()
    {
        
        return view('/about');
    }
    
    public function learningapps()
    {
        
        return view('/learningapps');
    }

    public function schools()
    {
        
        return view('/schools');
    }
    
    public function interviews()
    {
        
        return view('/interviews');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function setyoutubes(Request $request)
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
        $youtubers = new Youtuber;
        $youtubers->category = $request->category;
        $youtubers->name = $request->name;
        $youtubers->comment = $request->comment;
        $youtubers->channel = $request->channel;
        $youtubers->url = $request->url;
        $youtubers->save();
        
        return view('/settubes');
    }
    
    public function regi()
    {
        //
        return view('/settubes');
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
