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
//
//$(".getStarted").click(function(){
//
//    $(".whatCiirusFour").hide();
//    $(".reviewSide").hide();
//    $(".reviewOne").hide();
//
//    $(".reviewTwo").hide();
//    $(".getStarted").hide();
//    $(".iphone").hide();
//    $(".ipad").hide();
//
//    $(".mac").fadeIn();
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//});

$(".back").click(function(){



    $(".mac").hide();

    $(".whatCiirusFour").fadeIn();
    $(".reviewSide").fadeIn();
    $(".reviewOne").fadeIn();

    $(".reviewTwo").fadeIn();
    $(".getStarted").fadeIn();
    $(".iphone").fadeIn();
    $(".ipad").fadeIn();





});

//$(".slideOneFeature").hide();

$(".slideTwoFeature").hide();
$(".slideThreeFeature").hide();
$(".slideFourFeature").hide();
$(".slideFiveFeature").hide();

$("#easy").click(function(){

    $(".slideOneFeature").hide();

    $(".slideThreeFeature").hide();
    $(".slideFourFeature").hide();
    $(".slideFiveFeature").hide();


    $(".slideTwoFeature").fadeIn(100).animate({top: 45, duration: "6000"});

//
//    $(".slidetwoSubWorkFour").fadeIn();
//    $(".slidetwoContentFour").fadeIn();
//    $(".reviewSide").fadeIn();
//    $(".reviewOne").fadeIn();
//
//    $(".reviewTwo").fadeIn();
//    $(".getStarted").fadeIn();
//    $(".iphone").fadeIn();
//    $(".ipad").fadeIn();





});
$("#intergrated").click(function(){


    $(".slideOneFeature").hide();

    $(".slideTwoFeature").hide();
    $(".slideFourFeature").hide();
    $(".slideFiveFeature").hide();


    $(".slideThreeFeature").fadeIn().animate({top: 45, duration: "6000"});

//
//    $(".slidetwoSubWorkFour").fadeIn();
//    $(".slidetwoContentFour").fadeIn();
//    $(".reviewSide").fadeIn();
//    $(".reviewOne").fadeIn();
//
//    $(".reviewTwo").fadeIn();
//    $(".getStarted").fadeIn();
//    $(".iphone").fadeIn();
//    $(".ipad").fadeIn();





});

$("#homeF").click(function(){


    $(".slideOneFeature").hide();

    $(".slideTwoFeature").hide();
    $(".slideThreeFeature").hide();

    $(".slideFiveFeature").hide();
    $(".slideFourFeature").fadeIn().animate({top: 45, duration: "6000"});

//
//    $(".slidetwoSubWorkFour").fadeIn();
//    $(".slidetwoContentFour").fadeIn();
//    $(".reviewSide").fadeIn();
//    $(".reviewOne").fadeIn();
//
//    $(".reviewTwo").fadeIn();
//    $(".getStarted").fadeIn();
//    $(".iphone").fadeIn();
//    $(".ipad").fadeIn();





});

$("#secure").click(function(){

    $(".slideOneFeature").hide();

    $(".slideTwoFeature").hide();
    $(".slideThreeFeature").hide();
    $(".slideFourFeature").hide();
    $(".slideFiveFeature").fadeIn().animate({top: 45, duration: "6000"});

//
//    $(".slidetwoSubWorkFour").fadeIn();
//    $(".slidetwoContentFour").fadeIn();
//    $(".reviewSide").fadeIn();
//    $(".reviewOne").fadeIn();
//
//    $(".reviewTwo").fadeIn();
//    $(".getStarted").fadeIn();
//    $(".iphone").fadeIn();
//    $(".ipad").fadeIn();





});

$("#reservation").click(function(){

    $(".slideTwoFeature").hide();
    $(".slideThreeFeature").hide();
    $(".slideFourFeature").hide();
    $(".slideFiveFeature").hide();
    $(".slideOneFeature").fadeIn().animate({top: 45, duration: "6000"});

//
//    $(".slidetwoSubWorkFour").fadeIn();
//    $(".slidetwoContentFour").fadeIn();
//    $(".reviewSide").fadeIn();
//    $(".reviewOne").fadeIn();
//
//    $(".reviewTwo").fadeIn();
//    $(".getStarted").fadeIn();
//    $(".iphone").fadeIn();
//    $(".ipad").fadeIn();





});




$('#home').click(function(){
    window.location.href='index.aspx';
});

$('#features').click(function(){
   
    window.location.href='features.html';
});

$('#team').click(function(){
    window.location.href='team.html';
});

$('#contact').click(function(){
    window.location.href='contact.html';
});
$('#test').click(function(){
    window.location.href='http://support.ciirus.com/anonymous_requests/new';
});
$('#sDemo').click(function(){
    window.location.href='demo.aspx';
});

  $('#about').click(function(){
      window.location.href='About.aspx';
  });

  $('#downloadC').click(function(){
      window.location.href='http://www.ciirus.com/propertymanager/download.aspx';
  });

  $('#trial').click(function(){
      window.location.href='Trial.html';
  });




//$('.pTwoText').hide();



$(".coverBox").click(function(){

   $ ('.coverBox').slideUp(350);

//    $('.pTwoText').fadeIn().animate({marginTop:'0px'},600);



});


$(".coverBoxTwo").click(function(){

    $ ('.coverBoxTwo').slideUp(350);

//    $('.pTwoText').fadeIn().animate({marginTop:'0px'},600);



});


$(".coverBoxThree").click(function(){

    $ ('.coverBoxThree').slideUp(350);

//    $('.pTwoText').fadeIn().animate({marginTop:'0px'},600);



});


$(".coverBoxFour").click(function(){

    $ ('.coverBoxFour').slideUp(350);

//    $('.pTwoText').fadeIn().animate({marginTop:'0px'},600);



});


$(".coverBoxFive").click(function(){

    $ ('.coverBoxFive').slideUp(350);

//    $('.pTwoText').fadeIn().animate({marginTop:'0px'},600);



});


$(".coverBoxSixSix").click(function(){

    $ ('.coverBoxSixSix').slideUp(350);
//    $('.pTwoText').fadeIn().animate({marginTop:'0px'},600);



});


$(".coverBoxSeven").click(function(){

    $ ('.coverBoxSeven').slideUp(350);

//    $('.pTwoText').fadeIn().animate({marginTop:'0px'},600);



});


$(".coverBoxEight").click(function(){

    $ ('.coverBoxEight').slideUp(350);

//    $('.pTwoText').fadeIn().animate({marginTop:'0px'},600);



});


$(".coverBoxNine").click(function(){

    $ ('.coverBoxNine').slideUp(350);

//    $('.pTwoText').fadeIn().animate({marginTop:'0px'},600);



});

  $(".coverBoxNineOne").click(function(){

      $ ('.coverBoxNineOne').slideUp(350);

//    $('.pTwoText').fadeIn().animate({marginTop:'0px'},600);



  });

  $(".coverBoxNineTwo").click(function(){

      $ ('.coverBoxNineTwo').slideUp(350);

//    $('.pTwoText').fadeIn().animate({marginTop:'0px'},600);



  });

  $(".coverBoxNineThree").click(function(){

      $ ('.coverBoxNineThree').slideUp(350);

//    $('.pTwoText').fadeIn().animate({marginTop:'0px'},600);



  });

  $(".coverBoxNineFour").click(function(){

      $ ('.coverBoxNineFour').slideUp(350);

//    $('.pTwoText').fadeIn().animate({marginTop:'0px'},600);



  });


$(".coverBoxTen").click(function(){

    $ ('.coverBoxTen').slideUp(350);

//    $('.pTwoText').fadeIn().animate({marginTop:'0px'},600);



});




//
//
//
$(".pTwoText").click(function(){

    $ ('.coverBox').slideDown(250).stop().animate({height:'270px'}, 250);






});

$(".pTwoTextTwo").click(function(){

    $ ('.coverBoxTwo').slideDown(250).stop().animate({height:'270px'}, 250);






});

$(".pTwoTextThree").click(function(){

    $ ('.coverBoxThree').slideDown(250).stop().animate({height:'270px'}, 250);





});

$(".pTwoTextFour").click(function(){

    $ ('.coverBoxFour').slideDown(250).stop().animate({height:'270px'}, 250);






});

$(".pTwoTextFive").click(function(){

    $ ('.coverBoxFive').slideDown(250).stop().animate({height:'270px'}, 250);






});

$(".pTwoTextSix").click(function(){

    $ ('.coverBoxSixSix').slideDown(250).stop().animate({height:'270px'}, 250);






});

$(".pTwoTextSeven").click(function(){

    $ ('.coverBoxSeven').slideDown(250).stop().animate({height:'270px'}, 250);






});

$(".pTwoTextEight").click(function(){

    $ ('.coverBoxEight').slideDown(250).stop().animate({height:'270px'}, 250);






});

$(".pTwoTextNine").click(function(){

    $ ('.coverBoxNine').slideDown(250).stop().animate({height:'270px'}, 250);






});



  $(".pTwoTextNineOne").click(function(){

      $ ('.coverBoxNineOne').slideDown(250).stop().animate({height:'270px'}, 250);






  });

  $(".pTwoTextNineTwo").click(function(){

      $ ('.coverBoxNineTwo').slideDown(250).stop().animate({height:'270px'}, 250);






  });

  $(".pTwoTextNineThree").click(function(){

      $ ('.coverBoxNineThree').slideDown(250).stop().animate({height:'270px'}, 250);






  });

  $(".pTwoTextNineFour").click(function(){

      $ ('.coverBoxNineFour').slideDown(250).stop().animate({height:'270px'}, 250);






  });


$(".pTwoTextTen").click(function(){

    $ ('.coverBoxTen').slideDown(250).stop().animate({height:'270px'}, 250);






});





  $("#demoName").click(function(){

//      $ ('value').hide();

$("#demoName").val("");





  });


  $("#demoPhone").click(function(){

//      $ ('value').hide();

      $("#demoPhone").val("");





  });



  $("#demoEmail").click(function(){

//      $ ('value').hide();

      $("#demoEmail").val("");





  });



  $("#demoBuiss").click(function(){

//      $ ('value').hide();

      $("#demoBuiss").val("");





  });




  $("#demoMessage").click(function(){

//      $ ('value').hide();

      $("#demoMessage").val("");





  });












  $("#demoNameTwo").click(function(){

//      $ ('value').hide();

      $("#demoNameTwo").val("");





  });


  $("#demoPhoneTwo").click(function(){

//      $ ('value').hide();

      $("#demoPhoneTwo").val("");





  });



  $("#demoEmailTwo").click(function(){

//      $ ('value').hide();

      $("#demoEmailTwo").val("");





  });



  $("#demoBuissTwo").click(function(){

//      $ ('value').hide();

      $("#demoBuissTwo").val("");





  });




  $("#demoMessageTwo").click(function(){

//      $ ('value').hide();

      $("#demoMessageTwo").val("");





  });





