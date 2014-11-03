<?php

if(isset($_POST['email'])) {






    function died($error) {

        // your error code can go here

        echo "We are very sorry, but there were error(s) found with the form you submitted. ";

        echo "These errors appear below.<br /><br />";

        echo $error."<br /><br />";

        echo "Please go back and fix these errors.<br /><br />";

        die();

    }



    // validation expected data exists

    if(!isset($_POST['first']) ||

        !isset($_POST['last']) ||

        !isset($_POST['company']) ||

        !isset($_POST['phone']) ||

        !isset($_POST['email']) ||

        !isset($_POST['salesTeam']))  {

        died('We are sorry, but there appears to be a problem with the form you submitted.');

    }






    $first_name = $_POST['first']; // required

    $last_name = $_POST['last']; // required

    $comp = $_POST['company']; // required

    $telephone = $_POST['phone']; // not required

     $email_from  = $_POST['email']; // required

    $sale = $_POST['salesTeam']; // required

//    $custMessgTitle = '';


    // EDIT THE 2 LINES BELOW AS REQUIRED

    $email_to = $email_from;

    $email_subject = "RSVP Confirmation";








    $error_message = "";

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp, $email_from)) {

    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';

  }

    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp, $first_name)) {

    $error_message .= 'The First Name you entered does not appear to be valid.<br />';

  }

  if(!preg_match($string_exp,$last_name)) {

    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';

  }

//  if(strlen($comments) < 2) {
//
//    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
//
//  }

  if(strlen($error_message) > 0) {

    died($error_message);

  }

    $email_message = "Form details below.\n\n";



    function clean_string($string) {

      $bad = array("content-type","bcc:","to:","cc:","href");

      return str_replace($bad,"",$string);

    }



//    $email_message .= "First Name: ".clean_string($first_name)."\n";
//
//    $email_message .= "Last Name: ".clean_string($last_name)."\n";
//
//    $email_message .= "Email: ".clean_string($email_from)."\n";
//
//    $email_message .= "Telephone: ".clean_string($telephone)."\n";
//
//    $email_message .= "Company: ".clean_string($comp)."\n";
//
//    $email_message .= "Sales: ".clean_string($sale)."\n";

//    $email_message .= "Time: ".clean_string($times)."\n";






////Get the user's comment.
////$comment = $_POST['comment'];
//$first_name = $_POST['first'];
////Append it to the comments file.
//$f = fopen('/php/renata_comments.txt', 'a');
//fwrite($f, "<p>$first_name</p><hr>");
//fclose($f);
////Jump back to Renata's page.


//$file = 'renata_comments.txt';
//// Open the file to get existing content
//$current = file_get_contents($file);
//// Append a new person to the file
//$current .= "John Smith\n";
//// Write the contents back to the file
//file_put_contents($file, $current);




                    $file = '../renata_comments.txt';
                    // Open the file to get existing content
                    $current = file_get_contents($file);
                    // Append a new person to the file
                    $current .= "John Smith\n";
                    // Write the contents back to the file
                    file_put_contents($file, $current);





//$reply = 'susanna.toppa@sundanceorlando.com';
$from = 'susanna.toppa@sundanceorlando.com';









// create email headers

$headers = 'From: '.$from."\r\n".

'Reply-To: '.$from."\r\n" .

'X-Mailer: PHP/' . phpversion();

$headers .= "MIME-Version: 1.0\r\n";

$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$email_message = '<html> <head><style type="text/css">


  <!-- Styles -->

</style></head><body>';
$email_message .= '

     <div class="mapContainer">
                    <h3 class="confText">Thank you for your confirmation to our Annual Holiday Party.</h3>
                    <p class="confTextSub"><b>Date:</b> Thursday, December 5, 2013</p>
                    <p class="confTextSub"><b>Time:</b>  5:30pm – 10:00pm</p>
                    <p class="confTextSub"><b>Location: </b> Home of John and Audrey Ruggieri<br/>5083 Isleworth Country Club Drive<br/>Windermere, Florida 34786</p>
                    <p class="confTextSub"><b>Google Maps:  </b> <a href="https://maps.google.com/maps?q=5083+Isleworth+Country+Club+Drive+Windermere,+Florida+34786&ie=UTF-8&hq=&hnear=0x88e781e323c64279:0xd5b894f4b613a9d7,5083+Isleworth+Country+Club+Dr,+Windermere,+FL+34786&gl=us&daddr=5083+Isleworth+Country+Club+Dr,+Windermere,+FL+34786&ei=ZQCLUoGGGpit4APttYCYAw&ved=0CC8QwwUwAA" style="color: inherit; text-decoration: underline !important;">View On Google Maps</a></p>

                    <p class="confTextSub"><b>From I-4 East:</b>Take exit 74A for FL-482W (Sand Lake Road) <br/>Turn right onto S Apopka Vineland Road (3.2 mi)<br/>Turn left onto Conroy Windermere Road (0.7 mi)<br/>Turn left onto Isleworth Country Club Drive (0.3 mi)<br/>The Ruggieri home will be the fifth house on the left</p>
                    <p class="confTextSub"><b>From I-4 West:</b>Take exit 78 for Conroy Road <br/>Keep right and merge onto Conroy Road (will turn into Conroy Windermere Road) (5.2 mi)<br/>Turn left onto Isleworth Country Club Drive (0.3 mi)<br/>The Ruggieri home will be the fifth house on the left</p>
                    <p class="confTextSub"><b>You will need a valid ID to enter past the gate.  Please call (407) 876-6789 if you have any issues.</b>
                    <p class="confTextSub">Valet Parking is provided.</p>
                    <p class="confTextSub">Dress: Work Attire</p>
                    <p class="confTextSub">If you have any changes to your plans on 12/5, please contact your sales representative or call (407) 876-6789.</p>









                    <!--<img src="images/mapImage.png" width="100%" height="100%" alt="map of party location" id="mapImage"/>-->




                    </div>





';
$email_message .= '</body></html>';



@mail($email_to, $email_subject, $email_message, $headers);

?>


//<style>
//
//   .mapContainer {
//        width: 312px;
//        height: 1251px;
//        margin: 0 auto;
//        background: #ecf0f1;
//    }
//
//    .confText {
//        text-align: center;
//        line-height: 1;
//        padding-top: 19px;
//        padding-bottom: 0px;
//        margin-bottom: -50px;
//        font-size: 1.2em;
//    }
//
//   .confTextSub {
//        line-height: 1.7;
//        font-size: 1em;
//        text-align: left;
//        /* padding: 68px; */
//        margin-top: 68px;
//        padding-left: 21px;
//        margin-bottom: -55px;
//        padding-right: 15px;
//    }
//
//
//</style>


<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">

    <title>Save The Date</title>

    <!-- Behavioral Meta Data -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Core Meta Data -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

     <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="../css/styles.css"/>
    <link rel="stylesheet" type="text/css" href="../css/demo.css" />
    <link rel="stylesheet" type="text/css" href="../css/component.css" />
    <link rel="stylesheet" type="text/css" href="../css/examples.css" />


    <!-- Favicon -->
    <!--<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">-->
    <!--<link rel="shortcut icon" href="/favicon.png" type="image/png">-->
    <!--<link rel="shortcut icon" href="http://wagerfield.github.io/parallax/favicon.png" type="image/png">-->

    <!-- Apple Touch Icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-57x57-precomposed.png">

    <!-- Apple Startup Images -->
    <link rel="apple-touch-startup-image" href="apple-touch-startup-image-320x460.png" media="(device-width: 320px)">
    <link rel="apple-touch-startup-image" href="apple-touch-startup-image-640x920.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)">
    <link rel="apple-touch-startup-image" href="apple-touch-startup-image-768x1004.png" media="(device-width: 768px) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="apple-touch-startup-image-748x1024.png" media="(device-width: 768px) and (orientation: landscape)">
    <link rel="apple-touch-startup-image" href="apple-touch-startup-image-1536x2008.png" media="(device-width: 1536px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)">
    <link rel="apple-touch-startup-image" href="apple-touch-startup-image-2048x1496.png" media="(device-width: 1536px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)">
    <link href="https://fontastic.s3.amazonaws.com/EX5vThHnfUWWhKCXqQANtS/icons.css" rel="stylesheet">
    <script src="../js/modernizr.custom.js"></script>





</head>
<body>

<div id="fb-root"></div>

<div id="container" class="wrapper">
    <ul id="scene" class="scene unselectable"
        data-friction-x="0.1"
        data-friction-y="0.1"
        data-scalar-x="25"
        data-scalar-y="15">
        <li class="layer" data-depth="0.00"></li>
        <li class="layer" data-depth="0.10"><div class="background"></div></li>
        <li class="layer" data-depth="0.10"><div class="light orange b phase-4"></div></li>
        <li class="layer" data-depth="0.10"><div class="light purple c phase-5"></div></li>
        <li class="layer" data-depth="0.10"><div class="light orange d phase-3"></div></li>
        <li class="layer" data-depth="0.15">
            <ul class="rope depth-10">
                <li><img src="../images/rope.png" alt="Rope"></li>
                <li class="hanger position-2">
                </li>
                <li class="hanger position-4">
                    <div class="board cloud-1 swing-3"></div>
                </li>

                <li class="hanger position-8">
                </li>
            </ul>
        </li>
        <li class="layer" data-depth="0.20"><h1 class="title"><em></em></h1></li>
        <li class="layer" data-depth="0.30">
            <ul class="rope depth-30">
                <li><img src="../images/rope.png" alt="Rope"></li>
                <li class="hanger position-1">
                    <div class="board cloud-1 swing-3" style="position: relative; top: -20px;"></div>
                </li>

                <li class="hanger position-1">
                    <div class="Two cloud-5 swing-3" id="cottonCandy"></div>
                </li>
                <li class="hanger position-1">
                    <div class="Two cloud-5 swing-3" id="cottonCandyTwo"></div>
                </li>

                <!--<li class="hanger position-5">-->
                    <!--<div class="board cloud-4 swing-1"></div>-->
                <!--</li>-->
            </ul>
        </li>
        <li class="layer" data-depth="0.30"><div class="backSun depth-10"  id="sun"></div></li>

        <li class="layer" data-depth="0.30"><div class="wave paint depth-30"  id="one"></div></li>
        <li class="layer" data-depth="0.60"><div class="lighthouseTwo depth-60" id="ballonTwo"  ></div></li>

        <li class="layer" data-depth="0.40"><div class="wave plain depth-40"  id="two"></div></li>
        <li class="layer" data-depth="0.60"><div class="lighthouseThree depth-60" id="ballonThree"  ></div></li>

        <li class="layer" data-depth="0.50"><div class="wave paint depth-50"  id="three" ></div></li>
        <li class="layer" data-depth="0.60"><div class="lighthouse depth-60" id="ballonOne"  ></div></li>
        <li class="layer" data-depth="0.60">
            <ul class="rope depth-60">
                <li><img src="../images/rope.png" alt="Rope"></li>
                <li class="hanger position-3">
                </li>

                <li class="hanger position-6">
                    <div class="board cloud-2 swing-2"></div>
                </li>
                <li class="hanger position-8">
                    <div class="board cloud-4 swing-4"></div>
                </li>

                <li class="hanger position-3">
                    <div class="banner swing-4"></div>
                </li>

            </ul>
        </li>
        <li class="layer" data-depth="0.60"><div class="wave plain depth-60"   id="five"></div></li>
        <li class="layer" data-depth="0.80"><div class="wave plain depth-80"  id="six"></div></li>
        <li class="layer" data-depth="1.00"><div class="wave paint depth-100"  id="seven"></div></li>
    </ul>
    <section id="about" class="wrapper about hide accelerate">
        <div class="cell accelerate">
            <div class="cables center accelerate">

                <!-- pop up for RSVP form-->
                <div id="my_popup">

                    <!--<form method="" action="" id="rsvp">-->

                        <!--<p class="rsvpText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean</p>-->
                        <!--<input type="text" alt="first name" name="first" id="first" placeholder="First Name" style="position: relative; top: 50px;"/>-->
                        <!--<input type="text" alt="last name" name="last" id="first" placeholder="Last Name" style="position: relative; top: 50px;"/>-->
                        <!--<input type="text" alt="company name" name="company" id="first" placeholder="Company" style="position: relative; top: 33px;"/>-->
                        <!--<input type="text" alt="phone number" name="phone" id="first" placeholder="Phone Number" style="position: relative; top: 33px;"/>-->
                        <!--<input type="text" alt="email" name="email" id="first" placeholder="Email" style="position: relative; top: 16px;"/>-->
                        <!--<select name="sales" id="first" style="position: relative; top: 16px;">-->
                            <!--<option value="Todd">Todd</option>-->
                            <!--<option value="Todd">Katie</option>-->
                            <!--<option value="Todd">Dean</option>-->
                            <!--<option value="Todd">Brad</option>-->
                            <!--<option value="Todd">JohnHenry</option>-->
                            <!--<option value="Todd">Audrey</option>-->
                         <!--</select>-->
                        <!--<input type="submit" value="submit" id="submit"/>-->




                    <!--</form>-->


s
                    <form name="myForm" method="POST" action="php/mailForm.php" id="rsvp" >

                        <!--<p class="rsvpText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean</p>-->

                        <div class="topBox">
                            <img src="../images/topBanner.jpg" alt="top banner" width="100%" height="90px;" />

                        </div>
                        <div class="icon-id-card" style="color: #fff;"></div>

                        <input type="text" alt="first name" name="first" id="first" placeholder="First Name" style="margin-top: 55px;"/>
                        <input type="text" alt="last name" name="last" id="first" placeholder="Last Name"/>
                        <input type="text" alt="company name" name="company" id="first" placeholder="Company"/>
                        <input type="text" alt="phone number" name="phone" id="first" placeholder="Phone Number"/>
                        <input type="text" alt="email" name="email" id="first" placeholder="Email"/>
                        <select name="salesTeam" id="sales">
                            <option disabled="disabled" selected="selected">Select Sales Representative</option>
                            <option>Todd</option>
                            <option>Katie</option>
                            <option>Dean</option>
                            <option>Brad</option>
                            <option>JohnHenry</option>
                            <option>Audrey</option>
                        </select>
                        <input type="submit" value="submit" id="submit"/>




                    </form>



                    <?php


                    ?>



                </div>

                <!--GALLERY POPUP CONTENT-->

                <div id="my_popuptwo">


                <div class="container">

                <div id="grid-gallery" class="grid-gallery">
                <section class="grid-wrap">
                    <ul class="grid">
                        <li class="grid-sizer"></li><!-- for Masonry column width -->
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5165.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5168.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5171.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5172.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5183.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5187.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5192.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5195.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5199.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5200.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5205.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5207.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5208.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5209.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5210.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5214.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5216.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5217.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5218.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5219.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5220.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5221.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5222.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5223.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5224.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5225.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5226.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5227.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5228.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5229.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5233.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5235.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5249.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5250.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5251.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5252.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5253.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5254.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5256.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5260.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5261.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5262.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5263.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5264.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5265.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5270.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5271.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5272.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5274.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5275.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5276.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5277.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5278.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5279.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5280.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5282.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5283.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5285.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5286.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5287.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5288.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5290.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5291.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5293.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5295.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5297.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5304.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5305.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5307.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5310.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5313.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5318.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5319.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5325.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5326.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5327.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5328.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5331.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5333.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5334.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5336.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5337.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5338.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5340.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5341.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5342.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5343.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5344.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5345.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5347.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5348.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5351.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5354.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5355.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5360.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5361.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_5362.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_6837.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/_MG_6837.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6839.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6840.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6842.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6843.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6850.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6860.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6862.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6865.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6868.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6870.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6873.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6874.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6876.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6892.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6899.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6899.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6900.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6903.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6906.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6919.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6925.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6927.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6933.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6939.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6940.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6940.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6944.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6949.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6960.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6963.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6970.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6973.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6975.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6978.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6983.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6983.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6990.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6994.jpg" alt="img01"/>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="../images/gallery/20131205-_MG_6995.jpg" alt="img01"/>
                            </figure>
                        </li>
                    </ul>
                </section><!-- // grid-wrap -->
                <section class="slideshow">
                    <ul>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5165.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5168.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5171.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5172.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5183.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5187.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5192.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5195.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5199.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5200.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5205.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5207.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5208.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5209.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5210.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5214.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5216.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5217.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5218.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5219.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5220.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5221.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5222.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5223.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5224.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5225.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5226.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5227.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5228.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5229.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5233.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5235.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5249.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5250.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5251.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5252.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5253.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5254.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5256.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5260.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5261.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5262.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5263.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5264.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5265.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5270.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5271.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5272.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5274.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5275.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5276.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5277.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5278.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5279.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5280.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5282.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5283.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5285.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5286.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5287.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5288.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5290.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5291.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5293.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5295.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5297.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5304.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5305.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5307.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5310.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5313.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5318.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5319.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5325.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5326.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5327.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5328.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5331.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5333.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5334.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5336.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5337.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5338.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5340.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5341.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5342.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5343.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5344.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5345.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5347.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5348.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5351.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5354.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5355.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5360.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5361.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_5362.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_6837.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/_MG_6837.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6839.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6840.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6842.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6843.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6850.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6860.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6862.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6865.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6868.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6870.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6873.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6874.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6876.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6892.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6899.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6899.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6900.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6903.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6906.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6919.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6925.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6927.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6933.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6939.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6940.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6940.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6944.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6949.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6960.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6963.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6970.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6973.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6975.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6978.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6983.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6983.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6990.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6994.jpg" alt="img01"/>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="../images/gallery/20131205-_MG_6995.jpg" alt="img01"/>
                        </figure>
                    </li>
                    </ul>
                    <nav>
                        <span class="icon nav-prev"></span>
                        <span class="icon nav-next"></span>
                        <span class="icon nav-close" id="my_popup_close"></span>
                    </nav>
                    <div class="info-keys icon">Navigate with arrow keys</div>
                </section>
                </div>


                </div>


                <a href="index.html"><div class="close">Close</div></a>



                </div>

                <div id="my_popupthree">

                <div class="mapContainer">
                  <div class="innerContainer">
                                        <div class="innerContainerTwo">
                                            <div class="innerContainerThree">
                    <h3 class="confText">Thank you for your confirmation to our Annual Holiday Party.</h3>
                    <p class="confTextSub"><b>Date:</b> Thursday, December 5, 2013</p>
                    <p class="confTextSub"><b>Time:</b>  5:30pm – 10:00pm</p>
                    <p class="confTextSub"><b>Location: </b> Home of John and Audrey Ruggieri<br/>5083 Isleworth Country Club Drive<br/>Windermere, Florida 34786</p>
                    <p class="confTextSub"><b>Google Maps:  </b> <a href="https://maps.google.com/maps?q=5083+Isleworth+Country+Club+Drive+Windermere,+Florida+34786&ie=UTF-8&hq=&hnear=0x88e781e323c64279:0xd5b894f4b613a9d7,5083+Isleworth+Country+Club+Dr,+Windermere,+FL+34786&gl=us&daddr=5083+Isleworth+Country+Club+Dr,+Windermere,+FL+34786&ei=ZQCLUoGGGpit4APttYCYAw&ved=0CC8QwwUwAA" style="color: inherit; text-decoration: underline !important;">View On Google Maps</a></p>

                    <p class="confTextSub"><b>From I-4 East:</b>Take exit 74A for FL-482W (Sand Lake Road) <br/>Turn right onto S Apopka Vineland Road (3.2 mi)<br/>Turn left onto Conroy Windermere Road (0.7 mi)<br/>Turn left onto Isleworth Country Club Drive (0.3 mi)<br/>The Ruggieri home will be the fifth house on the left</p>
                    <p class="confTextSub"><b>From I-4 West:</b>Take exit 78 for Conroy Road <br/>Keep right and merge onto Conroy Road (will turn into Conroy Windermere Road) (5.2 mi)<br/>Turn left onto Isleworth Country Club Drive (0.3 mi)<br/>The Ruggieri home will be the fifth house on the left</p>
                    <p class="confTextSub"><b>You will need a valid ID to enter past the gate.  Please call (407) 876-6789 if you have any issues.</b>
                    <p class="confTextSub">Valet Parking is provided.</p>
                    <p class="confTextSub">Dress: Work Attire</p>
                    <p class="confTextSub">If you have any changes to your plans on 12/5, please contact your sales representative or call (407) 876-6789.</p>

                    <?php

                    if( file_exists('../renata_comments.txt') ) {

                    readfile('../renata_comments.txt');

                    }else {

                    print '<p>There are no comments yet.</p>';
                    }

                    ?>


                    <a href="index.html"><div class="close">Close</div></a>







                    <!--<img src="images/mapImage.png" width="100%" height="100%" alt="map of party location" id="mapImage"/>-->



                            </div>
                         </div>
                        </div>


                    </div>



                </div>

                <div class="panel accelerate">
                    <!--menu content-->


<div class="menuBox">
    <!--<img src="images/gradientBest.jpg" width="100%" height=100%" style="margin-bottom: -350px;" />-->
    <div class="menuItemsBox">
                    <p>Menu</p>
                    <ul>
                        <a href="index.html"><li class="menuBT"  style="border-right: 3px solid #e93710;" >Home</li></a>
                        <a href="#"><li class="my_popup_open"  style="border-right: 3px solid #FFC50C;">RSVP</li></a>
                        <a href="#"><li class="my_popuptwo_open"  style="border-right: 3px solid #098870;">Gallery</li></a>
                        <a href="#"><li class="my_popupthree_open"  style="border-right: 3px solid #e93710;">Directions</li></a>
                    </ul>
    </div>
</div>


                    <div class="social">

                    </div>

                </div>
            </div>
        </div>
    </section>

    <button id="toggle" class="toggle i">
        <div class="icon-menu"></div>

    </button>

    <footer>
    </footer>

</div>


<!-- Scripts -->

<script src="../js/libraries.min.js"></script>
<script src="../js/jquery.parallax.js"></script>
<script src="../js/imagesloaded.pkgd.min.js"></script>
<script src="../js/classie.js"></script>
<script src="../js/cbpGridGallery.js"></script>

<script>
    new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
</script>

<script type="text/javascript">


$(window).bind("load", function() {
    $(".my_popupthree_open").click();
});

</script>



<!-- Include jQuery Popup Overlay -->
<script src="http://vast-engineering.github.io/jquery-popup-overlay/jquery.popupoverlay.js"></script>

<script>
    $(document).ready(function() {

        // Initialize the plugin
        $('#my_popup').popup();
        $('#my_popuptwo').popup();
        $('#my_popupthree').popup();

        $('.my_popup_close').popup();



    });
</script>


<script>

    // jQuery Selections
    var $html = $('html'),
            $container = $('#container'),
            $prompt = $('#prompt'),
            $toggle = $('#toggle'),
            $about = $('#about'),
            $scene = $('#scene');

    // Hide browser menu.
    (function() {
        setTimeout(function(){window.scrollTo(0,0);},0);
    })();

    // Setup FastClick.
    FastClick.attach(document.body);

    // Add touch functionality.
    if (Hammer.HAS_TOUCHEVENTS) {
        $container.hammer({drag_lock_to_axis: true});
        _.tap($html, 'a,button,[data-tap]');
    }

    // Add touch or mouse class to html element.
    $html.addClass(Hammer.HAS_TOUCHEVENTS ? 'touch' : 'mouse');

    // Resize handler.
    (resize = function() {
        $scene[0].style.width = window.innerWidth + 'px';
        $scene[0].style.height = window.innerHeight + 'px';
        if (!$prompt.hasClass('hide')) {
            if (window.innerWidth < 600) {
                $toggle.addClass('hide');
            } else {
                $toggle.removeClass('hide');
            }
        }
    })();

    // Attach window listeners.
    window.onresize = _.debounce(resize, 200);
    window.onscroll = _.debounce(resize, 200);

    function showDetails() {
        $about.removeClass('hide');
        $toggle.removeClass('i');
    }

    function hideDetails() {
        $about.addClass('hide');
        $toggle.addClass('i');
    }

    // Listen for toggle click event.
    $toggle.on('click', function(event) {
        $toggle.hasClass('i') ? showDetails() : hideDetails();
    });

    // Pretty simple huh?
    $scene.parallax();

    // Check for orientation support.
    setTimeout(function() {
        if ($scene.data('mode') === 'cursor') {
            $prompt.removeClass('hide');
            if (window.innerWidth < 600) $toggle.addClass('hide');
            $prompt.on('click', function(event) {
                $prompt.addClass('hide');
                if (window.innerWidth < 600) {
                    setTimeout(function() {
                        $toggle.removeClass('hide');
                    },1200);
                }
            });
        }
    },1000);


</script>



</body>
</html>







<?php

}

?>