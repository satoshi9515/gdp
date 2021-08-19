@extends('layouts.app')

@section('content')
<section>
  <div class="mainvisual container-fluid">
    <div class="mainvisual-text text-white">JapanGameDevPot is the curation media<br>to collect the info about Japanese learning apps 
      <br>for job seekers who eager to work<br>for a gaming and IT company in Japan <div>
  </div>
</section>

<div class="container mt-3">
<section class="row">
<section class="col-md-2 mb-4">
<ul class="list-group">
<li class="list-group-item d-flex justify-content-between align-items-center">
Youtubers
<span class="badge badge-primary badge-pill">20</span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center">
Japanese Study apps
<span class="badge badge-primary badge-pill">20</span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center">
Language schools
<span class="badge badge-primary badge-pill">20</span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center">
Interview columns
<span class="badge badge-primary badge-pill">20</span>
</li>
</ul>
</section>

<!--//アプリ概要説明パート-->
<section class="col-md-8">
<header class="border-bottom pb-2 mb-3 d-flex align-items-center">
<h1 class="fs-5 m-0">About</h1>

</header>
<p>JapanGameDevPot is the curation media to collect the info about Japanese learning tool for job seekers who eager 
to work for a gaming and IT company in Japan. Most of Japanese companies are so conservative that engineers communicate 
in Japanese.Therefore, they set high goal line of Japanese proficiency. As I have supported international students to get 
job offers from Japanese companies, the fastest way to imrpove Japanese is to find the way to learn Japanese as they like
and continue e.g. Youtubers, actress, online chat, anime, games. The website helps you find your favorite Japanese learning
tools. In addition, I wanna show role models who work and will work for Japanese gaming&IT companies to see how to improve 
your Japanese skill.</p>
</section>

<!--//日本学習Youtubeパート-->
<div class="container mt-3">
<section class="row">
<section class="col-md-2 mb-4">
</section>
<section class="col-md-8">
<header class="border-bottom pb-2 mb-3 d-flex align-items-center">
<h1 class="fs-5 m-0"><a href="{{url('/youtubers')}}">Featured Youtube Channels </a><img src='/images/youtubelogo.png' height="50" width="100" margin="auto"></h1>

</header>
<p>YouTube is one of the best way to learn Japanese along with your interest. Many YouTubers pick up the topics that interests 
Japanese learners to teach Japanese. Some use pop music and anime as lesson topic. Others focus on grrammers, JLPT tests 
and conversational phrases.   </p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/K1CX6hWwqz8" title="YouTube video player" frameborder="0" 
allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</section>

<!--日本学習アプリパート-->
<div class="container mt-3 ">
<section class="row">
<section class="col-md-2 mb-4 ">
</section>
<section class="col-md-8">
<header class="border-bottom pb-2 mb-3 d-flex">
<h1 class="fs-5 ml-auto mr-auto"><a href="{{url('/learningapps')}}">Featured Online Japanese learning apps </a>
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
</svg></h1>

</header >
<p class="ml-auto mr-auto">Online Japanese learning apps are the ways to reignforce your weak skills.Some apps have quiz formats so that Japanese learners 
do not get bored or give up. Others have the interactive activities you can communicate with native speakers.     </p>

<iframe class="m-auto" width="560" height="315" src="https://www.youtube.com/embed/DY5aUyR32NQ" title="YouTube video player" 
frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</section>


<!--語学学校アプリパート-->
<div class="container mt-3 ">
<section class="row">
<section class="col-md-2 mb-4 ">
</section>
<section class="col-md-8">
<header class="border-bottom pb-2 mb-3 d-flex">
<h1 class="fs-5 ml-auto mr-auto"><a href="{{url('/schools')}}">Japanese schools(The page is open after travel ban is undone!) </a>
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
</svg></h1>

</header >
<p class="ml-auto mr-auto">Going to Japanese school in Japan is the fast way to improve Japanese. Currently, it is difficult to
go to Japan and learn in the school. In the future we will introduce recommended Japanese schools here.</p>
</section>

<!--インタビューパート-->
<div class="container mt-3 ">
<section class="row">
<section class="col-md-2 mb-4 ">
</section>
<section class="col-md-8">
<header class="border-bottom pb-2 mb-3 d-flex">
<h1 class="fs-5 ml-auto mr-auto"><a href="{{url('/interviews')}}">The interview of Game engineers working in Japan </a></h1>

</header >
<p class="ml-auto mr-auto">Seeing the role model of successful game engineers working in Japan might be good incentives to improve your skill. </p>


</section>


          
@endsection
