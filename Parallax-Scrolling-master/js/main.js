/**
 * Created by tyroneswinnie on 3/31/14.
 */

$(".overlayOne").css("opacity","0");
$(".overlayTwo").css("opacity","0");
$(".overlayThree").css("opacity","0");
$(".overlayFour").css("opacity","0");
$(".overlayFive").css("opacity","0");
$(".overlaySix").css("opacity","0");








    $(".overlayOne").mouseover( function(){

//        $(".overlayOne").fadeIn(300);
//        $(".overlayOne").css("opacity", "1");
//        $(".overlayOne").css("top", "683px");





        $('.overlayOne').animate({ opacity: 0.92, duration: "300"})










    });

$(".overlayTwo").mouseover( function(){

//        $(".overlayOne").fadeIn(300);
//        $(".overlayOne").css("opacity", "1");
//        $(".overlayOne").css("top", "683px");





    $('.overlayTwo').animate({ opacity: 0.92, duration: "300"})










});

$(".overlayThree").mouseover( function(){

//        $(".overlayOne").fadeIn(300);
//        $(".overlayOne").css("opacity", "1");
//        $(".overlayOne").css("top", "683px");





    $('.overlayThree').animate({ opacity: 0.92, duration: "300"})










});

$(".overlayFour").mouseover( function(){

//        $(".overlayOne").fadeIn(300);
//        $(".overlayOne").css("opacity", "1");
//        $(".overlayOne").css("top", "683px");





    $('.overlayFour').animate({ opacity: 0.92, duration: "300"})










});

$(".overlayFive").mouseover( function(){

//        $(".overlayOne").fadeIn(300);
//        $(".overlayOne").css("opacity", "1");
//        $(".overlayOne").css("top", "683px");





    $('.overlayFive').animate({ opacity: 0.92,duration: "300"})










});

$(".overlaySix").mouseover( function(){

//        $(".overlayOne").fadeIn(300);
//        $(".overlayOne").css("opacity", "1");
//        $(".overlayOne").css("top", "683px");




    $('.overlaySix').animate({ opacity: 0.92, duration: "300"})










});







$(".overlayOne").mouseout( function(){



    $('.overlayOne').animate({opacity: 0, duration: "6000"});



});

$(".overlayTwo").mouseout( function(){



    $('.overlayTwo').animate({ opacity: 0, duration: "6000"});



});

$(".overlayThree").mouseout( function(){



    $('.overlayThree').animate({opacity: 0, duration: "6000"});



});

$(".overlayFour").mouseout( function(){



    $('.overlayFour').animate({ opacity: 0, duration: "6000"});



});

$(".overlayFive").mouseout( function(){



    $('.overlayFive').animate({ opacity: 0, duration: "6000"});



});

$(".overlaySix").mouseout( function(){



    $('.overlaySix').animate({ opacity: 0, duration: "6000"});



});






//
//$(".friends").click( function(){
//
//
//    $(".trybutton").css("opacity", "0");
//
//
//});

//if($(".friends").click)( function(){
//
//    alert("test");
//
//});

//$(".friends").click(function(){
//
//        $(".trybutton").css("opacity", "0");
//
//
//
//});
//
//
//$(window).click(function(){
//
//    $("#first").css("opacity", "1");
//
//
//
//});





//$(".friends").click(function(){
//    if($(".friends").click()){
//        $(".trybutton").css("opacity", "0");
//    }else{
//        $(".trybutton").css("opacity", "1");
//    }
//});



$(".friends").click(function(){


        $(".trybutton").css("display", "none");


});

$(".close").click(function(){


    $(".trybutton").fadeIn();


});

$("section").click(function(){


    $(".trybutton").fadeIn();


});





$(".mac").hide();

$(".getStarted").click(function(){

    $(".slidetwoSubWorkFour").hide();
    $(".slidetwoContentFour").hide();
    $(".reviewSide").hide();
    $(".reviewOne").hide();

    $(".reviewTwo").hide();
    $(".getStarted").hide();
    $(".iphone").hide();
    $(".ipad").hide();

    $(".mac").fadeIn().animate({top: 17, duration: "6000"});














});

$(".back").click(function(){



    $(".mac").fadeOut().animate({top: 45, duration: "6000"});

    $(".slidetwoSubWorkFour").fadeIn();
    $(".slidetwoContentFour").fadeIn();
    $(".reviewSide").fadeIn();
    $(".reviewOne").fadeIn();

    $(".reviewTwo").fadeIn();
    $(".getStarted").fadeIn();
    $(".iphone").fadeIn();
    $(".ipad").fadeIn();





});