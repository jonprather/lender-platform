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
        <div class="brand">ill float this left and add the icon in here with css class to target it</div>
       <div class = "navigation"> 
           <ul class="navigation__list"> 
           <li class="navigation__item"> <a class="navigation__link" > Home </a> </li>
           <li class="navigation__item"> <a class="navigation__link" > Investor <i class="fa fa-chevron-down"></i>
           </a> </li>
           <li class="navigation__item"> <a class="navigation__link" > Borrower <i class="fa fa-chevron-down"></i> </a> </li>
           <li class="navigation__item"> <a class="navigation__link" > Company </a> </li>
           
           </ul>
          
       </div>
       {{-- not sure if this is exactly the BEM structure i want to use here but gtg --}}
       <div class="registration">
           <div class="registration__login">
              <a>login </a> </div>  
           <div class="registration__sign-up">here will be a button and a link to another page ; can float right if needed or can put all of this into the navigation and make it a reusable blade layout</div>  
       </div>
    </body>
</html>
