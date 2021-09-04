<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game; //この行を上に追加
use App\User;//この行を上に追加
use Auth;//この行を上に追加
use Validator;//この行を上に追加

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gaming()
    {
        //
        $games = Game::orderBy('created_at', 'asc')->paginate(5);
        return view('games',[
            'games'=> $games
            ]);   
        return view('/games');
    }
    
     public function playstation()
    {
        //
        $games = Game::where('category','playstation')->paginate(5);
        return view('games',[
            'games'=> $games
            ]);   
        return view('/games');
    }
    
     public function nintendo()
    {
        //
        $games = Game::where('category','nintendo')->paginate(5);
        return view('games',[
            'games'=> $games
            ]);   
        return view('/games');
    }
    
     public function online()
    {
        //
        $games = Game::where('category','online')->paginate(5);
        return view('games',[
            'games'=> $games
            ]);   
        return view('/games');
    }
    
    public function othergames()
    {
        //
        $games = Game::where('category','othergames')->paginate(5);
        return view('games',[
            'games'=> $games
            ]);   
        return view('/games');
    }

public function setgames(Request $request)
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
        $games = new Game;
        $games->category = $request->category;
        $games->name = $request->name;
        $games->comment = $request->comment;
        $games->channel = $request->channel;
        $games->url = $request->url;
        $games->save();
        
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
