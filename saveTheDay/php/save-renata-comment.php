<?php
//Get the user's comment.
//$comment = $_POST['comment'];
$first = $_POST['first'];
//Append it to the comments file.
$f = fopen('renata_comments.txt', 'a');
fwrite($f, "<p>$first</p><hr>");
fclose($f);
//Jump back to Renata's page.
?>