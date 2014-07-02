/**
 * Created by tyroneswinnie on 6/30/14.
 */

$(document).ready(function(){


if ( $(window).width() <= 1024) {
    //Add your javascript for large screens here
    alert("test");

    $(function() {

        var fonts = ['Logical', 'Designer', 'Mobile Developer', 'UX Developer'];
        var time = setInterval(function() {
//            var newFont = fonts[Math.floor(Math.random()*fonts.length)];
            $('.whoamIOne').fadeOut();

            $('.whoamITwo').fadeIn(100).text(newFont).animate({ top: '57%' }, 4000, 'easeOutElastic');
        },2500);

    });


}
else {
}


});











