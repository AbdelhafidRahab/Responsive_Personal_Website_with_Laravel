@extends('template')

<link rel="stylesheet" href="{{url('css/about.css')}}">

@section('title','About Me')
@section('main')
    <div class="about">
        <h1>About <span class="colored">Me</span></h1>
        <div class="about-me">
            <div>
                <h2>I Can Develop All Kinds Of Websites</h2>
                <a href="/contact">Hire Me</a>
            </div>
            <p><span class="colored">+30</span>Projects</p>
        </div>
        <div class="bar"></div>
        <div class="experience-and-education">
            <div class="head">
                <h2>Resume of <span class="colored">Experience</span> and <span class="colored">Education</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum incidunt, distinctio aut voluptate aliquam ducimus nisi corporis officia ad voluptatem.</p>
            </div>
            <div class="experience-and-education-container">
                <div class="experience">
                    <div class="ex-ed-item">
                        <i class="fa-solid fa-briefcase"></i>
                        <div>
                            <h3>UI/UX DESIGNER <span class="workORstudy-place">Facebook</span></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum repellendus minus modi facilis.</p>
                            <div class="year">2023</div>
                        </div>
                    </div>
                    <div class="ex-ed-item">
                        <i class="fa-solid fa-briefcase"></i>
                        <div>
                            <h3>WEB DEVELOPER <span class="workORstudy-place">Google</span></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum repellendus minus modi facilis.</p>
                            <div class="year">2022</div>
                        </div>
                    </div>
                    <div class="ex-ed-item">
                        <i class="fa-solid fa-briefcase"></i>
                        <div>
                            <h3>WEB DESIGNER <span class="workORstudy-place">Udemy</span></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum repellendus minus modi facilis.</p>
                            <div class="year">2021</div>
                        </div>
                    </div>
                </div>
                <div class="education">
                    <div class="ex-ed-item">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <div>
                            <h3>Software Engineer<span class="workORstudy-place">Harvard</span></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum repellendus minus modi facilis.</p>
                            <div class="year">2022</div>
                        </div>
                    </div>
                    <div class="ex-ed-item">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <div>
                            <h3>Master's Degree<span class="workORstudy-place">Oxford</span></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum repellendus minus modi facilis.</p>
                            <div class="year">2020</div>
                        </div>
                    </div>
                    <div class="ex-ed-item">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <div>
                            <h3>Bachelor's Degree<span class="workORstudy-place">Kiev</span></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum repellendus minus modi facilis.</p>
                            <div class="year">2018</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bar"></div>
        <div class="skills">
            <div class="head">
                <h2>Mastered <span class="colored">skills</span> and <br><span class="colored">techniques</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum incidunt, distinctio aut voluptate aliquam ducimus nisi corporis officia ad voluptatem.</p>
            </div>
            <div class="skills-container">
                <div class="skill-item">
                    <h4>HTML</h4>
                    <div class="prog">
                        <span class="fill" style="width: 90%"></span>
                        <span class="percentage" style="left: 90%">90%</span>
                    </div>
                </div>
                <div class="skill-item">
                    <h4>CSS</h4>
                    <div class="prog">
                        <span class="fill" style="width: 85%"></span>
                        <span class="percentage" style="left: 85%">85%</span>
                    </div>
                </div>
                <div class="skill-item">
                    <h4>JS</h4>
                    <div class="prog">
                        <span class="fill" style="width: 70%"></span>
                        <span class="percentage" style="left: 70%">70%</span>
                    </div>
                </div>
                <div class="skill-item">
                    <h4>PHP</h4>
                    <div class="prog">
                        <span class="fill" style="width: 70%"></span>
                        <span class="percentage" style="left: 70%">70%</span>
                    </div>
                </div>
                <div class="skill-item">
                    <h4>MySQL</h4>
                    <div class="prog">
                        <span class="fill" style="width: 75%"></span>
                        <span class="percentage" style="left: 75%">75%</span>
                    </div>
                </div>
                <div class="skill-item">
                    <h4>Laravel</h4>
                    <div class="prog">
                        <span class="fill" style="width: 50%"></span>
                        <span class="percentage" style="left: 50%">50%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection