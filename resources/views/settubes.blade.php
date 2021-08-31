<!-- resources/views/posts.blade.php -->
@extends('layouts.app')
@section('content')

<div class="container mt-4 d-flex">
        <section class="row  w-50">      
            <div class="card-body ">
                <div class="card-title">
                    Youtubeチャネル登録フォーム
                </div>
                
                <!-- バリデーションエラーの表示に使用-->
                @include('common.errors')
                <!-- 投稿フォーム -->
                <form method="post" action='settubes'  class="form-horizontal" >
                    {{ csrf_field() }}
                    <!-- カテゴリー -->
                    <div>Youtubeチャネル</div>
                    <div class="form-group">
                        カテゴリー
                        <div class="col-sm-6">
                            <select name="category" class="form-control">
                                <option value="Comedy">Comedy</option>
                                <option value="Anime">Anime</option>
                                <option value="Pretty">Pretty</option>
                                <option value="Handsome">Handsome</option>
                                <option value="JLPT">JLPT</option>
                                <option value="Conversation">Conversation</option>
                            </select>
                        </div>
                    </div>
                    <!-- Youtubeのタイトル -->
                    <div class="form-group">
                        Youtubeのタイトル
                        <div class="col-sm-6">
                            <input type="name" name="name" class="form-control">
                        </div>
                    </div>

                    <!-- Youtubeのコメント -->
                    <div class="form-group">
                        Youtubeのコメント
                        <div class="col-sm-6">
                            <input type="name" name="comment" class="form-control">
                        </div>
                    </div>
                    
                     <div class="form-group">
                        Youtubeチャンネル
                        <div class="col-sm-6">
                            <input type="name" name="channel" class="form-control">
                        </div>
                    </div>

                    <!-- YoutubeのURL -->
                    <div class="form-group">
                        Youtube埋込URL
                        <div class="col-sm-6">
                            <input type="name" name="url" class="form-control">
                        </div>
                    </div>
                    
                    

                    <!--　登録ボタン -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-primary">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            

        </section>
        
        
        <section class="row w-50 ">      
            <div class="card-body ">
                <div class="card-title">
                    日本語学習アプリ登録フォーム
                </div>
                
                <!-- バリデーションエラーの表示に使用-->
                @include('common.errors')
                <!-- 投稿フォーム -->
                <form method="post" action='setapps'  class="form-horizontal" >
                    {{ csrf_field() }}
                    <!-- カテゴリー -->
                    <div>日本語学習アプリ</div>
                    <div class="form-group">
                        カテゴリー
                        <div class="col-sm-6">
                            <select name="category" class="form-control">
                                <option value="Grammar">Grammer</option>
                                <option value="Speaking">Speaking</option>
                                <option value="Writing">Writing</option>
                                <option value="Listening">Listening</option>
                                <option value="Reading">Reading</option>
                            </select>
                        </div>
                    </div>
                    <!-- Youtubeのタイトル -->
                    <div class="form-group">
                        日本語学習アプリのタイトル
                        <div class="col-sm-6">
                            <input type="name" name="name" class="form-control">
                        </div>
                    </div>

                    <!-- Youtubeのコメント -->
                    <div class="form-group">
                        日本語学習アプリのコメント
                        <div class="col-sm-6">
                            <input type="name" name="comment" class="form-control">
                        </div>
                    </div>
                    
                     <div class="form-group">
                        日本語学習アプリトップビジュアル
                        <div class="col-sm-6">
                            <input type="name" name="channel" class="form-control">
                        </div>
                    </div>

                    <!-- YoutubeのURL -->
                    <div class="form-group">
                        日本語学習アプリURL
                        <div class="col-sm-6">
                            <input type="name" name="url" class="form-control">
                        </div>
                    </div>
                    
                    

                    <!--　登録ボタン -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-primary">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            

        </section>
    </div>
          
@endsection
