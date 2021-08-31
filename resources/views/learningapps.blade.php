<!-- resources/views/posts.blade.php -->
@extends('layouts.app')
@section('content')
<h2 class="text-center mt-3 mb-2">Featured Japanese learning apps </h2>

<div class="container">
        <section class="row">
            <!-- 左サイドバー -->
            <section class="col-md-2 mb-4 border-primary mb-5">
                <ul class="list-group border-primary">
                     <li class="list-group-item d-flex justify-content-between align-items-center border-primary">
                        <a href="learningapps">All category</a>
                        <span class="badge badge-primary badge-pill">20</span>
                    </li>
                    
                    <li class="list-group-item d-flex justify-content-between align-items-center border-primary">
                        <a href="grammar">Phrases</a>
                        <span class="badge badge-primary badge-pill">20</span>
                    </li>
                    
                    <li class="list-group-item d-flex justify-content-between align-items-center border-primary">
                        <a href="speaking">Speaking</a>
                        <span class="badge badge-primary badge-pill">20</span>
                    </li>
                    
                    <li class="list-group-item d-flex justify-content-between align-items-center border-primary">
                        <a href="listening">Listening</a>
                        <span class="badge badge-primary badge-pill">20</span>
                    </li>
                    
                    <li class="list-group-item d-flex justify-content-between align-items-center border-primary">
                        <a href="reading">Reading</a>
                        <span class="badge badge-primary badge-pill">20</span>
                    </li>
                
                        
                    <li class="list-group-item d-flex justify-content-between align-items-center border-primary">
                        <a href="writing">Writing</a>
                        <span class="badge badge-primary badge-pill">20</span>
                    </li>
                    
                </ul>
            </section>
            <!-- メインコンテンツ -->
           
            <!-- 全ての登録リスト -->
            @if (count($learningapps) > 0)
                @foreach ($learningapps as $learningapp)

                        <section class="col-md-8  mb-5  align-items-start">
                            
                            <h3 class="border-bottom pb"><a target=”_blank” href="{{ $learningapp->url }}">{{ $learningapp->name }}</a></h3>
    
                            <p class="">{{ $learningapp->comment }}</p>
                                
                            <a href="{{ $learningapp->url }}">
                                <img class="container-md" width="300"  src="{{ $learningapp->channel }}"  target=”_blank”>
                            </a>
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
                        <section class="col-md-2 mt-4  mb-5">
                    
                        </section>
                    
                @endforeach
                　　　{{ $learningapps->links()}}
            @endif
            

            


        </section>
        
    </div>
          
@endsection
