<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutory</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>
<body>
        {{--post request <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout').submit();">
                        {{ __('Logout') }}
        </a> --}}
    <header>
        <nav class="header__nav">
           <div class="header__logo">
                <p>Tutory</p>
           </div> 
           <ul class="header__menu">
                <li class="header__menu-search">
                    <input type="text" name="search__tutorial"  placeholder="Search for a tutorial">
                </li>
                <li class="header__menu-btn"><a href="">Register</a></li>
                <li class="header__menu-btn"><a href="">Login</a></li>
           </ul>
        </nav>
    </header> 


    <div class="container">
            <section class="hero">
                 <div class="row mb-5">
                   <div class="hero__images-frame">
                    <div class="hero__images-slide">
                        <div class="img-container">
                            <img class="hero__images-pic" src="{{ asset('slide3.png') }}" alt="">
                        </div>
                        <div class="img-container">
                            <img class="hero__images-pic" src="{{ asset('slide2.jpg') }}" alt="">

                        </div>
                        <div class="img-container">
                            <img class="hero__images-pic" src="{{ asset('slide.jpg') }}" alt="">
                        </div>
                    </div>
                    </div> 
                </div>
                {{-- <div class="row mb-5">
                    <div class="hero__images-frame">
                     <div class="hero__images-slide">
                         <div class="img-container">
                             <img class="hero__images-pic" src="{{ asset('slide3.png') }}" alt="">
 
                         </div>
                         <div class="img-container">
                             <img class="hero__images-pic" src="{{ asset('slide2.jpg') }}" alt="">
 
                         </div>
                         <div class="img-container">
                             <img class="hero__images-pic" src="{{ asset('slide.jpg') }}" alt="">
                         </div>
                     </div>
                     </div> 
                </div>   --}}
                
                
                
                <div class="row">
                    <div class="mb-4">
                        <span class="hero__user">My Learning, Orapeleng</span>
                    </div>
                    <div class="mb-4">
                        <div class="row">
                            <div class="hero__video-cards">
                                <a href="http://">
                                    <div class="hero__video-card d-flex">
                                        <div class="hero__vide-card-play">
                                           <img src="https://resilienteducator.com/wp-content/uploads/2012/11/AdobeStock_60467600_cup.jpg" alt="math">
                                        </div>
                                        <div class="hero__video-card-info">
                                           <p class="hero__video-card-info-title">Chemistry</p>
                                           <p class="hero__video-card-info-description">1. This area covers the structure of the nucleus, nuclear ...</p>
                                        </div>   
                                   </div>
                                </a>
                                
                                <a href="http://">
                                    <div class="hero__video-card d-flex">
                                        <div class="hero__vide-card-play">
                                           <img src="https://resilienteducator.com/wp-content/uploads/2012/11/AdobeStock_60467600_cup.jpg" alt="math">
                                        </div>
                                        <div class="hero__video-card-info">
                                           <p class="hero__video-card-info-title">Chemistry</p>
                                           <p class="hero__video-card-info-description">1. This area covers the structure of the nucleus, nuclear ...</p>
                                        </div>   
                                   </div>
                                </a>
                                <a href="">
                                    <div class="hero__video-card d-flex">
                                        <div class="hero__vide-card-play">
                                           <img src="https://resilienteducator.com/wp-content/uploads/2012/11/AdobeStock_60467600_cup.jpg" alt="math">
                                        </div>
                                        <div class="hero__video-card-info">
                                           <p class="hero__video-card-info-title">Chemistry</p>
                                           <p class="hero__video-card-info-description">1. This area covers the structure of the nucleus, nuclear ...</p>
                                        </div>   
                                    </div>
                                </a>
                                <a href="">
                                    <div class="hero__video-card d-flex">
                                        <div class="hero__vide-card-play">
                                           <img src="https://resilienteducator.com/wp-content/uploads/2012/11/AdobeStock_60467600_cup.jpg" alt="math">
                                        </div>
                                        <div class="hero__video-card-info">
                                           <p class="hero__video-card-info-title">Chemistry</p>
                                           <p class="hero__video-card-info-description">1. This area covers the structure of the nucleus, nuclear ...</p>
                                        </div>   
                                    </div>
                                </a>
                        </div>
                       
                        </div>
                     

                    </div>
                </div>

                <div class="row">
                        <div class="mb-5">
                            <span class="hero__user">What to learn next</span>
                        </div>
                        
                    <a href="/student/my-learning">
                    <div class="hero__card" href="/student/my-learning">
                        <div class="hero__card-image col-lg-5 mb-2">
                            <img src="https://cdn1.byjus.com/wp-content/uploads/2022/02/physical-science.png" alt="">
                        </div>
                        {{-- flex this to the right --}}
                        <div class="hero__card-info col-lg-7"> 
                            <p class="hero__card-info--title">Grade 12 Mathematics (CAPS)</p>
                            <p class="hero__card-info--description">Unlock the Magic of Math: Join us for an Enchanting Math Tutorial Session! 🌟 Discover the Secrets to Solving Equations, Navigating Tricky Geometry, and Mastering Mathematical Wizardry</p>
                            <p class="hero__card-info--tutor">By Orapeleng Mathebula</p>
                            <div class="hero__card-info--updates">
                                <p class="">Updated September</p>
                                <p class="hero__card-info--minor">30min</p>
                            </div>
                            
                        </div>
                    </div>
                </a>
                </div>
                
            </section>
        

    </div>
    
    <footer>
        <div>
            <span class="footer__title">Taking your sessions online</span>
            <p class="footer__description">Record your sessions, save your audios and reach your students</p>
        </div>
        <hr>
        <div class="footer__social">
            <i class="fa-solid fa-house"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i> 
        </div>
        <div class="footer__company ">
                Copyright © 2023 | All rights reserved by Tutory | Developed By: <Orapeleng Mathebula>.
        </div>
    </footer>

    <script src="{{ asset('js/slide.js') }}"></script>
</body>
</html>