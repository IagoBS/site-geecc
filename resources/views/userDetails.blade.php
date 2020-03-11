@extends('layouts.template') @section('title', 'Perfil') @section('content')
<br>
<div class="container">


    <div class="card-content card-border-gray">
        <div class="row">
            <div class="col s12 center-align">
                <img class="responsive-img circle z-depth-5" width="120" height="100" src="https://lh5.googleusercontent.com/p/AF1QipNze23CyOwXfeYUzctlWmsF2cgpkmZH4gugR4b2=w160-h160-k-no" alt="">
            <h5>{{$user->name}}</h5>
                <br>
            <h6>{{$user->about}}</h6>
                <hr>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col s1 pr-0 circle">
                <a href="#"><img class="responsive-img circle" src="https://lh5.googleusercontent.com/p/AF1QipNze23CyOwXfeYUzctlWmsF2cgpkmZH4gugR4b2=w160-h160-k-no" alt=""></a>
            </div>
            <div class="col s11">
                <a href="#">
                <p class="m-0">{{$user->name}}<span>

                        </a>
                        <div class="row">
                            @foreach ($news as $noticia)

                            <div class="col s12">
                                <div class="card card-border z-depth-2">
                                    <div class="card-image">
                                        <img
                                    src="{{$noticia->photo}}"
                                        alt="">
                                    </div>
                                    <div class="card-content">
                                        <h6 class="font-weight-900
                                    text-uppercase"><a href="#">{{$noticia->title}}</a></h6>

                                        </div>
                                    </div>

                                </div>
                                @endforeach
                        </div>
                    </div>
                </div>
                <hr>

            </div>
        </div>
    </div>
    </div
    @endsection
