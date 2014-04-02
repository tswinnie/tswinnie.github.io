/**
 * Created by tyroneswinnie on 3/31/14.
 */

$(".overlayOne").css("opacity","0");
$(".overlayTwo").css("opacity","0");
$(".overlayThree").css("opacity","0");
$(".overlayFour").css("opacity","0");
$(".overlayFive").css("opacity","0");
$(".overlaySix").css("opacity","0");








    $(".workBoxOne").mouseover( function(){

//        $(".overlayOne").fadeIn(300);
//        $(".overlayOne").css("opacity", "1");
//        $(".overlayOne").css("top", "683px");





        $('.overlayOne').animate({ opacity: 0.92,top: 283, duration: "300"})










    });

$(".workBoxTwo").mouseover( function(){

//        $(".overlayOne").fadeIn(300);
//        $(".overlayOne").css("opacity", "1");
//        $(".overlayOne").css("top", "683px");





    $('.overlayTwo').animate({ opacity: 0.92,top: 283, duration: "300"})










});

$(".workBoxThree").mouseover( function(){

//        $(".overlayOne").fadeIn(300);
//        $(".overlayOne").css("opacity", "1");
//        $(".overlayOne").css("top", "683px");





    $('.overlayThree').animate({ opacity: 0.92,top: 283, duration: "300"})










});

$(".workBoxFour").mouseover( function(){

//        $(".overlayOne").fadeIn(300);
//        $(".overlayOne").css("opacity", "1");
//        $(".overlayOne").css("top", "683px");





    $('.overlayFour').animate({ opacity: 0.92,top: 573, duration: "300"})










});

$(".workBoxFive").mouseover( function(){

//        $(".overlayOne").fadeIn(300);
//        $(".overlayOne").css("opacity", "1");
//        $(".overlayOne").css("top", "683px");





    $('.overlayFive').animate({ opacity: 0.92,top: 573, duration: "300"})










});

$(".workBoxSix").mouseover( function(){

//        $(".overlayOne").fadeIn(300);
//        $(".overlayOne").css("opacity", "1");
//        $(".overlayOne").css("top", "683px");




    $('.overlaySix').animate({ opacity: 0.92,top: 573, duration: "300"})










});







$(".overlayOne").mouseout( function(){



    $('.overlayOne').animate({top: 563, opacity: 0, duration: "6000"});



});

$(".overlayTwo").mouseout( function(){



    $('.overlayTwo').animate({top: 563, opacity: 0, duration: "6000"});



});

$(".overlayThree").mouseout( function(){



    $('.overlayThree').animate({top: 563, opacity: 0, duration: "6000"});



});

$(".overlayFour").mouseout( function(){



    $('.overlayFour').animate({top: 267, opacity: 0, duration: "6000"});



});

$(".overlayFive").mouseout( function(){



    $('.overlayFive').animate({top: 267, opacity: 0, duration: "6000"});



});

$(".overlaySix").mouseout( function(){



    $('.overlaySix').animate({top: 267, opacity: 0, duration: "6000"});



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




