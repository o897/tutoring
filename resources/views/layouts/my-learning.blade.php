<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutory</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>

</head>
<body class="">
    <header>
        <nav class="header__nav">
            <div class="header__logo">
                <h4>Tutory | </h4>
            </div>
            <ul class="header__menu">
              
                <li>
                    
                    <a href="favorites">Mathematics Grade 12 (CAPS)</a>
                </li>
                <li>
                    <a href="">Orapeleng</a>
                </li>
            </ul>
        </nav>
    </header>

        <div class="tutorial d-flex mt-5">
            <div class="tutorial__section col-lg-9">
                <div class="tutorial__video ">
                    {{-- changes when user click another --}}
                    <video controls>
                    <source src="{{ asset('math.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                {{-- section --}}
                <div class="lesson">
                    <div class="lesson__sections d-flex mb-3">
                        <a >Q&A</a>
                        <a >Announcement</a> 
                    </div>
                    <hr>
                    {{-- component --}}
                    <div class="lesson__overview">
                        <div class="mb-3">
                            <h2 class="lesson__about">About this chapter</h2> 
                            <p class="lesson__description">Learn Java In This Course And Become a Computer Programmer. Obtain valuable Core Java Skills And Java Certification</s>
                            <hr>
                        </div>
                        <div class="lesson__tutor mb-3">
                            <div class="tutor__info">
                                 <div class="tutor__info-title">Tutor</div>
                                 <div class="tutor__info-details">
                                    
                                    {{-- Go to a card --}}
                                    <p class="tutor__info-name"><strong><a href="/tutor-info">Emmanuel Adebayor</a></strong> </p>
                                 </div>
                            </div>
                            <hr>
                            <div class="tutor__info ml-5">
                                <div class="tutor__info">
                                   <p class="tutor__info-title">Subjects Taught:</p> 
                                </div>
                                <div class="tutor__info-details">
                                    <ul>
                                        <li>Mathematics</li>
                                        <li>Physical Science</li>
                                        <li>Life Science</li>
                                    </ul>
                                </div>
                            </div>
                            <hr>
                            <div class="tutor__info ml-5">
                                <div class="tutor__info">
                                   <p class="tutor__info-title">Description</p> 
                                </div>
                                <div class="tutor__info-details">
                                    <p>Are numbers, equations, and mathematical concepts causing you frustration or confusion? Whether you're a student striving for academic success, a professional seeking to sharpen your skills, or simply someone who wants to conquer the world of numbers, our comprehensive math tutorial</p>
                                </div>
                            </div>
                           
                        
                        </div>
                    </div>                 
                </div>
            </div>
            
             <div class="tutorial_section-sidebar">
                <div>Tutorial Content</div>
                <hr>
                <div class="tutorial__video-card d-flex col-lg-3">
                <div class="tutorial__check">
                    <input type="checkbox" name="" id="">
                </div>
                <div class="tutorial__video-chapter">
                    <div class="">
                        <div class="tutorial__video-title">1. Pobability</div>
                    </div>
                    <div class="tutorial__video-info">
                        <span>6min</span>
                        <span class="tutorial__video-info-btn" ><i class="fa-solid fa-folder-open " ></i><a href="http://goole.com"> Resources</a></span>    
                    </div>                
                </div> 
                </div> 
             </div>
            
        </div>


        {{-- Does not change --}}
        <footer>
            <div class="footer__social">
                <i class="fa-solid fa-house"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i> 
            </div>
        </footer>
         
  
    {{-- slideshow.css --}}
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>