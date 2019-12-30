$(function(){

    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();


    today = yyyy + '-' + mm + '-' + dd;
    $("td[data-date='"+ today +"']").addClass("aqua-gradient").append("<div class=\"buttons\"><button><i class=\"fas fa-check\"></i></button><button>2</button></div></buttons>");

    // First check all the "complete days from database"
    $.post("")

    // Then mark all other days before todays as incomplete

    // check which of todays tasks have been checked..


   function adjustCalenderHeight(){
       $("#calender-wrapper").css("max-height", ($(window).height() - $("header").outerHeight() - 20) + "px");
   }

   adjustCalenderHeight();

});