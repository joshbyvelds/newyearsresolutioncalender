$(function(){

    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();


    today = yyyy + '-' + mm + '-' + dd;
    $("td[data-date='"+ today +"']").addClass("aqua-gradient").append("<div class=\"buttons\"><button data-task=\"1\">1</button><button data-task=\"2\">2</button></div></buttons>");

    // Get Calender Data from database..
    $.post("post/checkdays.php", {}, function(j){
        var json = JSON.parse(j);

        // First check for what days have been completed..
        json.completed_days.forEach(function(date){
            $("td[data-date='"+ date +"']").not('.aqua-gradient').addClass("dusty-grass-gradient");
        });

        // Then mark all other days before todays as incomplete
        $("td[data-date='"+ today +"']").prevAll('td').not('.dusty-grass-gradient').not('.empty').addClass('young-passion-gradient');
        $("td[data-date='"+ today +"']").parent().prevAll('tr').find('td').not('.dusty-grass-gradient').not('.empty').addClass('young-passion-gradient');

        // check which of todays tasks have been checked..
        json.today_tasks.forEach(function(task){
            $("td button[data-task='" + task + "'").html("<i class=\"fas fa-check\"></i>").attr("data-complete", true);
            $("li[data-task=\"" + task + "\"]").addClass("complete");
        });

        updatePoints();
    });

    $('.buttons').off().on('click', 'button', function(){
        var $btn = $(this);

        // check if task is already complete..
        if($(this).attr('data-complete')){
            return;
        }

        // store completed task in DB.
        $.post("post/completetask.php", {'task':$btn.attr('data-task')}, function(j){
            var json = JSON.parse(j);
            $btn.html("<i class=\"fas fa-check\"></i>").attr("data-complete", true);
            updatePoints();
        });
    });

    function updatePoints(){
        var points = $('button[data-complete="true"]').length + ($('td.dusty-grass-gradient').length * 2);
        $("#points_amount").html(points);
        $("#points_progress_bar").attr("aria-valuenow", points).css("width", (points/732) * 100 + "%")

    }

   function adjustCalenderHeight(){
       $("#calender-wrapper").css("max-height", ($(window).height() - $("header").outerHeight() - 20) + "px");
   }

    adjustCalenderHeight();

});