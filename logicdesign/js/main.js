/**
 * Created by tyroneswinnie on 6/25/14.
 */
//
//var myVideo = document.getElementById('#videohome');
//if (typeof myVideo.loop == 'boolean') { // loop supported
//    myVideo.loop = true;
//} else { // loop property not supported
//    myVideo.on('ended', function () {
//        this.currentTime = 0;
//        this.play();
//    }, false);
//}
//myVideo.play();
//


$(document).ready(function(){


//    jQuery(function($){
//        (function swoop(element) {
//            element
//                .animate({top:'62%', easing: 'easeOutElastic'}, 1000, function(){
//                    setTimeout(function(){
//                        swoop(element);
//                    }, 5000);
//                });
//        })($('.whoamIOne'));
//    });
//
//var myArry =  ["Logical","Designer","User Minded", "Mobile Designer", "Front End Enthusiast"];
//
//       $(".whoamIOne").append("&nbsp;").append(myArry[Math.floor(myArry.length * Math.random())]);
//    setInterval(function() {
//
//       $(".whoamIOne").animate({top: "62%", easing: "easeOutElastic"}, 1000);
//
//
//   });


//    setInterval(function() {
//
//        var myArry =  ["Logical","Designer","User Minded", "Mobile Designer", "Front End Enthusiast"];
//
//        $(".whoamIOne").append(myArry[Math.random()]);
//        setInterval(function() {
//
//            $(".whoamIOne").animate({top: "62%", easing: "easeOutElastic"}, 1000);
//
//
//
//
//
//    });
//    }, 3000);
//
//







    $(function() {

        var fonts = ['Logical', 'Designer', 'Mobile Developer', 'UX Developer'];
        var time = setInterval(function() {
            var newFont = fonts[Math.floor(Math.random()*fonts.length)];
            $('.whoamIOne').fadeOut();

            $('.whoamITwo').fadeIn(100).text(newFont).animate({ top: '56%' }, 4000, 'easeOutElastic');
        },2500);

    });








    });