//should consider architecture for this if alot of files      

//dont have access to jquery here so ....
//fufuaufusdufuasdufuasdufuasd
$(document).ready(function() {
var eleToAddGreen;
    //also refactor this brad schiff style

    $(".composition").hover(
        
        function() {

          if ( $(this).hasClass("c-1") ) {
            eleToAddGreen = '.about__check-1';
          }
         else if (  $(this).hasClass("c-2") ) {
            eleToAddGreen = '.about__check-2';
         }
            
         else if ( $(this).hasClass("c-3")  ) {
            eleToAddGreen = '.about__check-3';
         }
            $(eleToAddGreen).toggleClass("green");
            console.log("ele is : ",eleToAddGreen);
            // cant select a psuedo class in jquery so need different solution or change how the icon is used
      

        }
    )

    



});

// tasks make this button hover work
// polish home page top
//work on section 2 add svgs
//work on new section
