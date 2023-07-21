@extends('template')

<link rel="stylesheet" href="{{url('css/services.css')}}">

@section('title','My Services')
@section('main')
    <div class="services">
        <h1>My <span class="colored">Services</span></h1>
        <div class="services-container">
            <div class="services-item">
                <i class="fa-solid fa-code" style="background-color: #48CDA0"></i>
                <h3>Web Development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus magnam.</p>
            </div>
            <div class="services-item">
                <i class="fa-solid fa-paintbrush" style="background-color: var(--color-one)"></i>
                <h3>Creative Design</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus magnam.</p>
            </div>
            <div class="services-item">
                <i class="fa-solid fa-globe" style="background-color: #007EFF"></i>
                <h3>Project Consultancy</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus magnam.</p>
            </div>
            <div class="services-item">
                <i class="fa-solid fa-headphones" style="background-color: #E6BC13"></i>
                <h3>24/7 Support</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus magnam.</p>
            </div>
            <div class="services-item">
                <i class="fa-solid fa-lightbulb" style="background-color: #ED38D1"></i>
                <h3>Awesome Idea</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus magnam.</p>
            </div>
            <div class="services-item">
                <i class="fa-solid fa-car" style="background-color: #A348CD"></i>
                <h3>UI/UX Design</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus magnam.</p>
            </div>
        </div>
        <div class="stat">
            <div class="stat-item">
                <div class="circle">+2</div>
                <h3>Years of Experience</h3>
            </div>
            <div class="stat-item">
                <div class="circle">+13</div>
                <h3>Satisfied Clients</h3>
            </div>
            <div class="stat-item">
                <div class="circle">+30</div>
                <h3>Success Project</h3>
            </div>
            <div class="stat-item">
                <div class="circle">+8</div>
                <h3>Award Gained</h3>
            </div>
        </div>
    </div>
@endsection