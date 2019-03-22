<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{-- <link rel="stylesheet" href="css/app.css">\ --}}
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        {{-- <script src="{{ mix('/js/app.js') }}"></script> --}}

    </head>
    <body>
       <div class = "navigation"> 
           <ul class="navigation__list"> 
           <li class="navigation__item"> <a class="navigation__link" > Home </a> </li>
           <li class="navigation__item"> <a class="navigation__link" > Investor </a> </li>
           <li class="navigation__item"> <a class="navigation__link" > Borrower </a> </li>
           <li class="navigation__item"> <a class="navigation__link" > Company </a> </li>
           
           </ul>
          
       </div>
    </body>
</html>
