<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        {{-- <link rel="stylesheet" href="css/app.css">\ --}}
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
        <script src="{{ asset('js/home.js') }}"></script>
       
        
        {{-- <script src="{{ mix('/js/app.js') }}"></script> --}}

    </head>
    <body>
       
        <header class="header">
                {{-- <img src={{asset('../images/mtn.jpg')}} alt="picture of a mtn" class="bg-photo"> --}}
            <div class = "navigation">
                <div class="navigation__container">
                    <div class="navigation__brand"> 
                        <div class="navigation__logo-background">
                            <i class="fa fa-home"></i>
                        </div>
                        <h3 class="navigation__name">InstaLend</h3> 
                    </div>
                <div class = "navigation__box"> 
                    <ul class="navigation__list"> 
                        <li class="navigation__item"> <a href="#"  class="navigation__link" >Home</a></li>
                        <li class="navigation__item"> <a href="#"  class="navigation__link" >Investor<i class="fa fa-chevron-down"></i></a></li>
                        <li class="navigation__item"> <a href="#" class="navigation__link" >Borrower<i class="fa fa-chevron-down"></i> </a> </li>
                        <li class="navigation__item"> <a href="#" class="navigation__link" >Company</a></li>
                    </ul>
                </div>
                <ul class="navigation__authorization-box">
                        <li class="navigation__login"><a href="#" class="navigation__link navigation__link--less-padding">login</a></li>  
                        <li class="navigation__sign-up"> <a href="#"  class="navigation__link  btn btn--green">Sign up</a></li>
                </ul>
            </div>
                    
                   
            </div>

            <div class="row">
               
                <div class="col-1-of-4" >
                        
                    <div class="header__text-box">
                        <h1 class="heading-primary">
                            <span  class='heading-primary--main' > Earn monthly cash flow </span>
                            <span class="header-primary heading-primary--sub paragraph u-margin-bottom-small">Invest online in senior debt real estate opportunities and earn monthly distributions.</span>
                         </h1>
                        <a href="#" class="btn btn--green-large">Success Stories</a>
                    </div>
                </div>
            </div>

        </header>
        <section class="section-about">
              
            <div class="about__text-box">

                        <h3 class="heading-secondary u-margin-bottom-small">About Us <h3>
                        <p class="about__paragraph about__paragraph--large">InstaLend is an online lending platform that provides accredited investors with access to senior debt investment offerings.  </p>
            </div>

            <div class="row">
                <div class="col-1-of-3" >
                    <div class="composition c-1"> 
                        <img src={{asset('/images/img-about1.svg')}} alt="home owner image" class="svg svg-1">
                        <div class="about__number" > 1</div>  
                        <h3 class="heading-tertiary u-margin-bottom-small-med">Borrowers <h3>
                        <p class="about__paragraph about__paragraph--small">Borrowers seeking flexible short-term financing for acquiring and renovating residential real estate approach InstaLend.</p>
                    </div>
                </div>    
                
                <div class="col-1-of-3" >
                        <div class="composition c-2"> 
                                <img src={{asset('/images/img-about2.svg')}} alt="home owner image" class="svg svg-2">
                                <div class="about__number" > 2</div>  
                                <h3 class="heading-tertiary u-margin-bottom-small-med">instalend   <h3>
                                <p class="about__paragraph about__paragraph--small"> InstaLend underwrites the borrower loan request to provide a senior debt investment opportunity to its Investors.</p>
                        </div>
                    </div>  

                    <div class="col-1-of-3" >
                            
                            <div class="composition c-3"> 
                                    <img src={{asset('/images/img-about3.svg')}} alt="home owner image" class="svg svg-3">
                                    <div class="about__number" > 3</div>  
                                    <h3 class="heading-tertiary u-margin-bottom-small-med">Investors   <h3>
                                    <p class="about__paragraph about__paragraph--small"> Investors get access to income-generating short-term investment opportunities via InstaLend.</p>
                            </div>
                        </div>  
            </div>
            <div class="horizontal-rule">
                    <i class="fa fa-check-circle about__check about__check-1"></i> 
                    {{-- have to use js to highlight these as they are --}}
                    <i class="fa fa-check-circle about__check about__check-2"></i>
                    <i class="fa fa-check-circle about__check about__check-3"></i>
            </div>
                    
        </section>   
        <section class="section-2">
            <div class="steps">
                <div class="steps__container">
                        
                                <a class="steps__item active" id="step-link-sign-up"><span>1 </span> Sign Up</a>
                                <a class="steps__item" id="step-link-browse"><span>2</span> Browse</a>
                                <a class="steps__item" id="step-link-review"><span>3 </span> Review</a>
                                <a class="steps__item" id="step-link-invest"> <span>4</span>  Invest</a>
                                <a class="steps__item" id="step-link-monitor"> <span>5 </span> Monitor</a>
                             
                </div>
            </div>


            <div class="row">
                <div class="tab" >
                    <div class="tab__pane active" id="step-pane-sign-up">    
                        <div class="col-1-of-2" >
                        <div class="steps__image-container">
                                <img src={{asset('/images/img-home-sec2-1.png')}} alt="sign up image" class="steps__img steps__img-1">
                        </div>
                        </div>
                        <div class="col-1-of-2" >
                            <div class="steps__number-container">
                            <img src={{asset('/images/img-home-step-1.svg')}} alt="number 1" class="steps__number steps__number-1">
                            </div>
                            <div class="steps__text-box">
                                    <img src={{asset('/images/icon-home-sec2-1.svg')}} alt="sign up icon" class="steps__icon steps__icon-1">
                                    <h2 class="">Sign Up for <br> InstaLend</h2>
                                    <p>Accredited investors can sign up for a FREE InstaLend account within 30 seconds.</p>
                                    <a href="#"  class="btn btn--green">Get Started</a>
                                    
                            </div>
                                
                        </div>
                    </div> 

                    <div class="tab__pane" id="step-pane-browse">    
                            <div class="col-1-of-2" >
                            <div class="steps__image-container">
                                    <img src={{asset('/images/img-home-sec2-2.png')}} alt="sign up image" class="steps__img steps__img-2">
                            </div>
                            </div>
                            <div class="col-1-of-2" >
                                {{-- <div class="steps__number-container"> --}}
                                <img src={{asset('/images/img-home-step-2.svg')}} alt="number 2" class="steps__number steps__number-2">
                                {{-- </div> --}}
                                <div class="steps__text-box">
                                        <img src={{asset('/images/icon-home-sec2-2.svg')}} alt="sign up icon" class="steps__icon steps__icon-2">
                                        <h2 class="">Browse <br> Investment Listings</h2>
                                        <p>Upon signing up, investors gain full access to review all of our listed senior debt offerings.</p>
                                        <a href="#"  class="btn btn--green">Get Started</a>
                                        
                                </div>
                                    
                            </div>
                        </div> 

                </div>       
            </div>
           
        </section>
        
<!-- ok so left off with oadding/margin error that is the navagation-link class adds padding to the right
this is fine for the center eles but not for the login and sign up its too much need more elegant solution than adding on a class that
just minus's the margin right
also need to make the top white space before the nav uniform due to different sizes and margins its nto quite right
after those bug fixes it is on to the bg image with the caption text and button -->
      
     
    </body>
</html>
