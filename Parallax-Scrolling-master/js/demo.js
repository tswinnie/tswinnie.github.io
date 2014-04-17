$(function(){

    $("#btn-reverse").on("click",function(e){
        $(".textBox").flippyReverse();
        e.preventDefault();
    });
        
    $("#btn-left").on("click",function(e){
        $(".textBox").flippy({
//            color_target: "red",
//            direction: "left"
//            duration: "250",
         });
//         e.preventDefault();
    });
    
//    $("#btn-right").on("click",function(e){
//        $(".textBox").flippy({
//            color_target: "red",
//            direction: "right",
//            duration: "750",
//            verso: "<div id=\"right-content\"><img src=\"http://placekitten.com/610/300\" alt=\"placeholder\"/></div>",
//         });
//         e.preventDefault();
//    });
//
//    $("#btn-top").on("click",function(e){
//        $(".textBox").flippy({
//            color_target: "#b6d635",
//            direction: "top",
//            duration: "750",
//            verso: "<span class=\"big\">Great !</span>",
//         });
//         e.preventDefault();
//    });
//
//    $("#btn-bottom").on("click",function(e){
//        $(".textBox").flippy({
//            color_target: "#03588C",
//            direction: "bottom",
//            duration: "750",
//            verso: "<span class=\"big\">Flip !</span>",
//         });
//         e.preventDefault();
//    });
    
//    SyntaxHighlighter.all();
});