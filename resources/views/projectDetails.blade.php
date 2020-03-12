@extends('layouts.template')
@section('title', 'GEEC - Projeto x')

@section('content')
<div class="section  blue darken-3 ">
    <div class="container">
        <div class="row">
            <div class="col s12 m6 ">
            <h5 class="start white-text">{{$projects->name}}</h5>
                <p class="white-text">
                </p>
                <ul class="lista-template">
                   {{ $projects->descripition }}
                </ul>
            </div>
            <div class="col s6 offset-s3 m6 center">
            <img class="responsive-img" src="{{url('/storage/' . $projects->logo)}}">
            </div>
        </div>

    </div>
</div>
<div class="container">
    <div class="row mt-2">
        <div class="col s12 m6 l4 card-width">
          <div class="card-panel border-radius-6 mt-10 card-animation-1">
            <img class="responsive-img border-radius-8 z-depth-4 image-n-margin" src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-3/images/cards/news-fashion.jpg" alt="images">
            <h6><a href="#" class="mt-5">Fashion</a></h6>
            <p>Fashion is a popular style, especially in clothing, footwear, lifestyle, accessories,
              makeup,
              hairstyle and
              body.</p>
            <div class="row mt-4">
              <div class="col s2">
                <a href="#"><img src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-3/images/user/9.jpg" width="40" alt="fashion" class="circle responsive-img mr-3"></a>
              </div>
              <a href="#">
                <div class="col s3 p-0 mt-1"><span class="pt-2">Taniya</span></div>
              </a>
              <div class="col s7 mt-1 right-align">
                <a href="#"><span class="material-icons">favorite_border</span></a>
                <span class="ml-3 vertical-align-top">340</span>
                <a href="#"><span class="material-icons ml-10">chat_bubble_outline</span></a>
                <span class="ml-3 vertical-align-top">80</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4 card-width">
          <div class="card-panel border-radius-6 mt-10 card-animation-1">
            <img class="responsive-img border-radius-8 z-depth-4 image-n-margin" src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-3/images/cards/news-apple.jpg" alt="images">
            <h6><a href="#" class="mt-5">Apple News</a></h6>
            <p>More than 40% users have reported their new phones won't charge when plugged into
              lightning cables.</p>
            <div class="row mt-4">
              <div class="col s2">
                <a href="#"><img src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-3/images/user/1.jpg" width="40" alt="news" class="circle responsive-img mr-3"></a>
              </div>
              <a href="#">
                <div class="col s3 p-0 mt-1"><span class="pt-2">Mike</span></div>
              </a>
              <div class="col s7 mt-1 right-align">
                <a href="#"><span class="material-icons">favorite_border</span></a>
                <span class="ml-3 vertical-align-top">434</span>
                <a href="#"><span class="material-icons ml-10">chat_bubble_outline</span></a>
                <span class="ml-3 vertical-align-top">34</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4 card-width">
          <div class="card-panel border-radius-6 mt-10 card-animation-1">
            <img class="responsive-img border-radius-8 z-depth-4 image-n-margin" src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-3/images/cards/news-twitter.jpg" alt="">
            <h6><a href="#" class="mt-5">Twitter Brings Its 'Data Saver'</a></h6>
            <p>Microblogging site Twitter has rolled out its latest update for Android and iOS users
              with the "data
              saver"
              twitter.
            </p>
            <div class="row mt-4">
              <div class="col s2">
                <a href="#"><img src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-3/images/user/8.jpg" width="40" alt="news" class="circle responsive-img mr-3"></a>
              </div>
              <a href="#">
                <div class="col s3 p-0 mt-1"><span class="pt-2">Emma</span></div>
              </a>
              <div class="col s7 mt-1 right-align">
                <a href="#"><span class="material-icons">favorite_border</span></a>
                <span class="ml-3 vertical-align-top">234</span>
                <a href="#"><span class="material-icons ml-10">chat_bubble_outline</span></a>
                <span class="ml-3 vertical-align-top">45</span>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
