//should consider architecture for this if alot of files      

//dont have access to jquery here so ....
//fufuaufusdufuasdufuasdufuasd
$(document).ready(function() {
var eleToAddGreen;
    //also refactor this brad schiff style

    // $(".composition").hover(
        
    //     function() {

    //       if ( $(this).hasClass("c-1") ) {
    //         eleToAddGreen = '.about__check-1';
    //       }
    //      else if (  $(this).hasClass("c-2") ) {
    //         eleToAddGreen = '.about__check-2';
    //      }
            
    //      else if ( $(this).hasClass("c-3")  ) {
    //         eleToAddGreen = '.about__check-3';
    //      }
    //         $(eleToAddGreen).toggleClass("green");
    //         console.log("ele is : ",eleToAddGreen);
    //         // cant select a psuedo class in jquery so need different solution or change how the icon is used
      

    //     }
    // );

    

    $(".steps__item").click(function() {
        $(".steps__item").removeClass("active");
        console.log("you hovered me you bitch",this)
        $(this).addClass("active");

        var id = $(this).attr('id');
        console.log("this is id: ", id);
        // can use this id to select apprprite tab pane

        for (var i = 0 ; i <arrLinks.length;i++) {
            if (id ===arrLinks[i]) {
                $(arrPanes[i]).addClass("active");
            }
            else {
                $(arrPanes[i]).removeClass("active");
            }
        }
        
    })


    var arrLinks = ["step-link-sign-up","step-link-browse","step-link-review","step-link-invest","step-link-monitor"];
    var arrPanes = ["#step-pane-sign-up","#step-pane-browse","#step-pane-review","#step-pane-invest","#step-pane-monitor"];


});

// tasks make this button hover work
// polish home page top
//work on section 2 add svgs
//work on new section
