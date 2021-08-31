@extends('layouts.app')

@section('content')
<section>
  <div class="mainvisual w-100 d-flex align-items-center">
        <h1 class="container-md text-white text-center w-75">Japan Ⓖame Ⓓev Ⓟot</div>
</section>

<div class="container mt-4">
        <section class="row">

            <!-- 左サイドバー -->
            <section class="col-md-2 mb-2">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        About
                        <span class="badge badge-primary badge-pill"></span>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    Youtubers
                    <span class="badge badge-primary badge-pill">20</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    Japanese learning apps
                    <span class="badge badge-primary badge-pill">20</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    Interview columns
                    <span class="badge badge-primary badge-pill">20</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    Language schools
                    <span class="badge badge-primary badge-pill">20</span>
                    </li>
                    </ul>
            </section>
            <!-- メインコンテンツ -->
            <section class="col-md-8 mb-2">
                <h3 class="border-bottom"><a href='about'>About</a></h3>
                <p>JapanGameDevPot is the curation media to collect the info about Japanese learning tool for job seekers who eager 
                    to work for a gaming and IT company in Japan. Most of Japanese companies are so conservative that engineers communicate 
                    in Japanese.Therefore, they set high goal line of Japanese proficiency. As I have supported international students to get 
                    job offers from Japanese companies, the fastest way to imrpove Japanese is to find the way to learn Japanese as they like
                    and continue e.g. Youtubers, actress, online chat, anime, games. The website helps you find your favorite Japanese learning
                    tools. In addition, I wanna show role models who work and will work for Japanese gaming&IT companies to see how to improve 
                    your Japanese skill.</p>
            </section>

            <!-- 右サイドバー -->
            <section class="col-md-2 d-none d-md-block d-lg-block d-xl-block border rounded mb-2">
                <p class="text-center font-weight-bold border-bottom mt-2 mb-2">Global HR agents</p>
                <a href='https://www.studygoworkjapan.com/'><img class="d-block mx-auto" src="/images/atoj.jpg" height="100" width="100">
                </a>
                <div class="text-center">
                    <a class="font-weight-bold border-bottom mt-2" href='https://www.studygoworkjapan.com/'>ASIA to JAPAN</a></div>
                <p class="text-center">It supports you to find jobs in Japanese gaming&IT companies</p>
            </section>

            <!-- 二つ目のコンテンツ -->
            <!-- 左サイドバー -->
            <section class="col-md-2 mt-4 mb-2">
                
            </section>
            <!-- メインコンテンツ -->
            <section class="col-md-8 mb-2">
                <h3 class="border-bottom"><a href="{{url('/youtubers')}}">Featured Youtube Channels </a><img src='/images/youtubelogo.png' height="50" width="100" margin="auto"></h3>

                <p>YouTube is one of the best way to learn Japanese along with your interest. Many YouTubers pick up the topics that interests 
                    Japanese learners to teach Japanese. Some use pop music and anime as lesson topic. Others focus on grrammers, JLPT tests 
                    and conversational phrases.   </p>
                    
                <iframe class="container-md" width="560" height="315" src="https://www.youtube.com/embed/K1CX6hWwqz8" title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </section>

             <!-- 右サイドバー -->
            <section class="col-md-2 d-none d-md-block d-lg-block d-xl-block border rounded mb-2">
                <p class="text-center font-weight-bold border-bottom mt-2 mb-2">Scholarship info</p>
                <a href='https://aseanop.com/the-university-of-tokyo-japanese-government-mext-scholarship-2022/'> 
                    <img class="d-block mx-auto" src="/images/todai.png" height="100" width="150">
                </a>
                <div class="text-center">
                    <a class="font-weight-bold border-bottom mt-2" href='https://aseanop.com/the-university-of-tokyo-japanese-government-mext-scholarship-2022/'> MEXT scholarship
                    </a>
                        
                    </div>
                <p class="text-center">The University of Tokyo Japanese Government (MEXT) Scholarship 2022 fully funded Master & PhD</p>
            </section>

            <!-- 三つ目のコンテンツ -->
            <!-- 左サイドバー -->
            <section class="col-md-2 mb-2">
                  
            </section>
            <!-- メインコンテンツ -->
            <section class="col-md-8 mb-2">
                <h3 class="border-bottom">
                    <a href="{{url('/learningapps')}}">Featured Online Japanese learning apps </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                    </svg>
                </h3>
                <p class="ml-auto mr-auto">Online Japanese learning apps are the ways to reignforce your weak skills.Some apps have quiz formats so that Japanese learners 
                    do not get bored or give up. Others have the interactive activities you can communicate with native speakers.     </p>
                <iframe class="container-md" width="560" height="315" src="https://www.youtube.com/embed/DY5aUyR32NQ" title="YouTube video player" 
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </section>
                    
            <!-- 右サイドバー -->
            <section class="col-md-2 mb-2">
                  
            </section>

            <!-- 四つ目のコンテンツ -->
            <!-- 左サイドバー -->
            <section class="col-md-2 mb-2">
                  
            </section>

            <!-- メインコンテンツ -->
            <section class="col-md-8 mb-2">
                <h3 class="border-bottom"><a href="{{url('/interviews')}}">The interview of Game engineers working in Japan </a></h3>
                <p class="XX">Seeing the role model of successful game engineers working in Japan might be good incentives to improve your skill. </p>
                <a href="interviews"><img class="container-md" width="560"  src="/images/gamedeveloper.jpg" ></a>
           
            </section>
                <!-- 右サイドバー -->
            <section class="col-md-2 mb-2">
                  
            </section>

            <!-- 四つ目のコンテンツ -->
            <!-- 左サイドバー -->
            <section class="col-md-2 mb-2">
                  
            </section>

            <!-- メインコンテンツ -->
            <section class="col-md-8 mb-2">
                <div>
                  <h3 class="border-bottom"><a href="{{url('/schools')}}">Japanese schools</a>
                   </h3>
                </div>
                <p class="ml-auto mr-auto">Going to Japanese school in Japan is the fast way to improve Japanese. Currently, it is difficult to
                    go to Japan and learn in the school. In the future we will introduce recommended Japanese schools here.</p>
                <a href="schools"><img class="container-md" width="560"  src="/images/lesson.jpg" ></a>
            </section>
            <!-- 右サイドバー -->
            <section class="col-md-2 mb-2">
                  
            </section>

            


        </section>
    </div>

          
@endsection
