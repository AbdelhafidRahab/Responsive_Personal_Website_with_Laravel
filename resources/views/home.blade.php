@extends('template')

<link rel="stylesheet" href="{{url('css/home.css')}}">

@section('title','Home')
@section('main')
    <div class="home">
        <p class="hello">Hello I'm</p>
        <h1 style="text-align: start">Abdelhafid Rahab</h1>
        <p class="wk">Web Developer</p>
        <p class="quote">“Websites promote you 24/7: No employee will do that.”</p>
        <div>Follow Me : 
            <span>
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href="https://github.com/AbdelhafidRahab"><i class="fa-brands fa-github"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
            </span>
        </div>
    </div>
@endsection