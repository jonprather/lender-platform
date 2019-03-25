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
       
        
        {{-- <script src="{{ mix('/js/app.js') }}"></script> --}}

    </head>
    <body>
       
        <header class="header">
            
            <div class = "navigation">
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
                <div class="navigation__authorization-box">
                        <div class="navigation__login"><a href="#" class="navigation__link navigation__link--less-padding">login</a></div>  
                        <div class="navigation__sign-up"> <a href="#"  class="navigation__link  btn btn--green">Sign up</a></div>
                </div>   
            </div>

            <div class="header__text-box">
                <div class="header__headline">
                    <h1>Earn monthly cash flow</h1>
                </div>
                <p>Invest in senior real estate debp and earn monthly distributions</p>
                <a href="#" class="btn btn--green">
                    Get Started
                </a>
            </div>

        </header>

        
<!-- ok so left off with oadding/margin error that is the navagation-link class adds padding to the right
this is fine for the center eles but not for the login and sign up its too much need more elegant solution than adding on a class that
just minus's the margin right
also need to make the top white space before the nav uniform due to different sizes and margins its nto quite right
after those bug fixes it is on to the bg image with the caption text and button -->
      
     
    </body>
</html>
