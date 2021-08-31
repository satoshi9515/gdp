<!-- resources/views/posts.blade.php -->
@extends('layouts.app')
@section('content')
<h2 class="text-center mt-3 mb-2">Featured Youtube Channels <img src='/images/youtubelogo.png' height="50" width="100" margin="auto"></h2>

<div class="container">
        <section class="row">
            <!-- 左サイドバー -->
            <section class="col-md-2 mb-4 border-primary mb-5">
                <ul class="list-group border-primary">
                     <li class="list-group-item d-flex justify-content-between align-items-center border-primary">
                        <a href="youtubers">All category</a>
                        <span class="badge badge-primary badge-pill">20</span>
                    </li>
                    
                    <li class="list-group-item d-flex justify-content-between align-items-center border-primary">
                        <a href="comedyyoutubers">Comedy</a>
                        <span class="badge badge-primary badge-pill">20</span>
                    </li>
                    
                    <li class="list-group-item d-flex justify-content-between align-items-center border-primary">
                        <a href="animeyoutubers">Anime Game</a>
                        <span class="badge badge-primary badge-pill">20</span>
                    </li>
                    
                    <li class="list-group-item d-flex justify-content-between align-items-center border-primary">
                        <a href="jlptyoutubers">JLPT</a>
                        <span class="badge badge-primary badge-pill">20</span>
                    </li>
                    
                    <li class="list-group-item d-flex justify-content-between align-items-center border-primary">
                        <a href="conversationyoutubers">Conversation</a>
                        <span class="badge badge-primary badge-pill">20</span>
                    </li>
                
                        
                    <li class="list-group-item d-flex justify-content-between align-items-center border-primary">
                        <a href="prettyyoutubers">Pretty</a>
                        <span class="badge badge-primary badge-pill">20</span>
                    </li>
                    
                    <li class="list-group-item d-flex justify-content-between align-items-center border-primary">
                        <a href="handsomeyoutubers">Handsome</a>
                        <span class="badge badge-primary badge-pill">20</span>
                    </li>
                    
                    
                    </ul>
            </section>
            <!-- メインコンテンツ -->
           
            <!-- 全ての登録リスト -->
            @if (count($youtubers) > 0)
                @foreach ($youtubers as $youtuber)

                        <section class="col-md-8  mb-5  align-items-start">
                            
                            <h3 class="border-bottom pb"><a target=”_blank” href="{{ $youtuber->channel }}">{{ $youtuber->name }}</a></h3>
    
                            <p class="">{{ $youtuber->comment }}</p>
                                
                            <iframe class="container-md" width="560" height="315" src="{{ $youtuber->url }}" 
                            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen target=”_blank”></iframe>
                        </section>
    
                        <!-- 右サイドバー -->
                        <section class="col-md-2 d-none d-md-block d-lg-block d-xl-block border rounded mb-5">
                            <p class="text-center font-weight-bold border-bottom mt-2 mb-2">Global HR agents</p>
                            <a href='https://www.studygoworkjapan.com/'><img class="d-block mx-auto" src="/images/atoj.jpg" height="100" width="100">
                            </a>
                            <div class="text-center">
                                <a class="font-weight-bold border-bottom mt-2" href='https://www.studygoworkjapan.com/'>ASIA to JAPAN</a></div>
                            <p class="text-center">It supports you to find jobs in Japanese gaming&IT companies</p>
                        </section>
                        
                         <!-- 右サイドバー -->
                        <section class="col-md-2 mt-4 mb-2">
                    
                        </section>
                    
                @endforeach
                　　　{{ $youtubers->links()}}
            @endif
            

            


        </section>
        
    </div>
@endsection
