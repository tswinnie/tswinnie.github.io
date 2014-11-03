<head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script type="text/javascript">
        $(function() {
            $( "#datepicker" ).datepicker()
            $("#datepicker").datepicker("setDate", "+2d");


        });
    </script>


    <script type="text/javascript">
        $(function() {
            $( "#datepickerTwo" ).datepicker();
            $("#datepickerTwo").datepicker("setDate", "+2d");
        });
    </script>


    <script type="text/javascript">
        $(function() {
            $( "#datepickerThree" ).datepicker();
            $("#datepickerThree").datepicker("setDate", "+2d");
        });
    </script>

</head>


<?php

require_once ('FileMaker.php'); //Add the Filemaker PHP API File
require('convert.php');

$fm = new FileMaker();
$fm->setProperty('database', 'OnTrack'); 
$fm->setProperty('username', 'web-api'); 
$fm->setProperty('password', 'h5nP4s$d6d'); //Set variable with login credentials for Filemaker Database
//dbname = Name of Filemaker Database
//ipaddress = Filemaker Server Address
//username = Username for account
//Password = Password for account

$pdfDir = 'pdf/'; //Set the PDF Directory
$jpgDir = 'img/'; //Set the JPG Directory
$oldDir = 'old'; //Set the Directory for Old (Deleted) files

$pdfPaths = glob($pdfDir.'*.pdf'); //Set an array with the paths to all PDF files in the PDF Directory
$jpgPaths = glob($jpgDir.'*.jpg'); //Set an array with the paths to all JPG files in the JPG Directory

$pdfNames = array(); //Set an empty array to house the Names of all PDFs without Extensions or Paths
$jpgNames = array(); //Set an empty array to house the Names of all JPGs without Extensions or Paths

foreach($pdfPaths as $aPDF){
    $pdfInfo = pathinfo($aPDF); //Set array with values for each element of the file path
    array_push($pdfNames, $pdfInfo['filename']); //Push the name of the PDF without path or extension to the pdfNames array
}

foreach($jpgPaths as $aJPG){
    $jpgInfo = pathinfo($aJPG); //Set array with values for each element of the file path
    array_push($jpgNames, $jpgInfo['filename']); //Push the name of the JPG without path or extensions to the jpgNames array
}

foreach($pdfPaths as $pdf){
    $pdfName = pathinfo($pdf);
    /*print_r($pdfName);
    echo '<br />';
    print_r($pdf);
    echo '<br />';
    echo $pdfName['filename'].'<br />';
    print_r($jpgNames);
    echo '<br /><br />';*/
    if(!in_array($pdfName['filename'], $jpgNames)){ //Check if there are any PDF names that don't have a matching JPG file
        
        /*$f = fopen($pdf, 'r');
        fseek($f, 0);
        $im = new imagick();
        $im->setResolution(425,0);
        $im->readimagefile($f);
        fclose($f);
        $im->setImageFormat('jpeg');
        $im->writeImage($jpgDir.$pdfInfo['filename'].'.jpg');
        $im->clear();
        $im->destroy();*/
        
        
        
        $im = new Imagick();
        $im->setResolution(72,72);
        $im->readimage($pdf.'[0]'); 
        $im->setImageBackgroundColor('white');
        //$im->setImageColorspace(22);
        
        $im = $im ->flattenImages();
        
        $im->setImageFormat('jpeg');    
        $im->writeImage($jpgDir.$pdfInfo['filename'].'.jpg'); 
        $im->clear(); 
        $im->destroy();
        
        echo $pdfName['filename'].' uploaded!';
    } else {
//        echo '<p class="successMessage">'.$pdf.' is all set.</p>';
    }
}

if (isset($_POST['formMethod'])){ //Check if the formMethod field is anything but NULL
    switch($_POST['formMethod']){ //Start conditional check 
        case 'Print Existing': //If formMethod value is equal to Print Existing
            unset($_POST['formMethod']); //Set the formMethod to NULL so it doesn't pass to FileMaker

            $imageName = pathinfo($_POST['printFile']); //Set array with values for each element of the file path

            $_POST['printFile'] = $imageName['basename']; //Set the POST printFile equal to the name of the file without path
            $_POST['quantity'] = $_POST['existingFileQuantity']; //Set the POST quantity equal to the quantity selected in the form (Needs to be generic to communicate with FileMaker



            unset($_POST['existingFileQuantity']); //Set the individual form's quantity to null so it doesn't pass to FileMaker

            $fmrec = $fm->newAddCommand('Nelson_Plastics_Test', $_POST); //Add a new record to the Nelson_Plastics_Test table and pass the values of POST
            $fmresult = $fmrec->execute(); //Executes the above line
            if (FileMaker::isError($fmresult)) { //Checks if FileMaker returned any errors
                $fmerror = $fmresult->getMessage().' - '.$fmresult->getCode(); //Sets the fmerror variable equal to a human readable error message
                echo($fmerror); //Prints the error message to screen
            } else { //If there are no FileMaker errors
                echo '<p class="successMessage">Your order has been placed.</p>';
            }
            break; //End the conditional check
        case 'New Upload': //If formMethod value is equal to New Upload
            $newFileName = $_FILES['newFile']['name']; //Set a variable with the name of the uploaded file
            $newFileTmpName = $_FILES['newFile']['tmp_name']; //Set a variable with the temporary location of the uploaded file
            if (isset($newFileName)){ //Check if the uploaded file name is anything but NULL
                if (!empty($newFileName)){ //Checks if the uploaded file name contains a value

                    unset($_POST['formMethod']); //Set the formMethod to NULL so it doesn't pass to FileMaker
                    $_POST['printFile'] = $newFileName; //Set the POST printFile equal to the uploaded files name 
                    $_POST['quantity'] = $_POST['newUploadQuantity']; //Set the POST quantity equal to the quantity selected in the form (Needs to be generic to communicate with FileMaker)
                    unset($_POST['newUploadQuantity']); //Set the individual form's quantity to null so it doesn't pass to FileMaker


                    if (move_uploaded_file($newFileTmpName, $pdfDir.$newFileName)){ //Uploads the new file to the PDF Directory and checks that the upload was successful
                        $fmrec = $fm->newAddCommand('Nelson_Plastics_Test', $_POST); //Add a new record to the Nelson_Plastics_Test table and pass the values of POST
                        $fmresult = $fmrec->execute(); //Executes the above line
                        if (FileMaker::isError($fmresult)) { //Checks if FIleMaker returned any errors
                            $fmerror = $fmresult->getMessage().' - '.$fmresult->getCode(); //Sets the fmerror variable equal to a human readable error message
                            echo($fmerror); //Prints the error message to the screen
                        } else { //If the file upload was unsuccessful
                            echo '<p class="successMessage">Your file was uploaded and your order has been placed.</p>';
                        }
                    } else { //If the uploaded files name was empty
                        echo '<p class="errorMessage">There was an error uploading your file. Please try again later.</p>';
                    }

                } else { //If the uploaded files name was null (No file uploaded)
                    echo '<p class="errorMessage">Please Upload a File.</p>';
                }
            }
            break; //End the conditional check
        case 'Replace File': //If formMethod value is equal to Replace File
            unset($_POST['formMethod']); //Set the formMethod to NULL so it doesn't pass to FileMaker
            
            $oldFileInfo = pathinfo($_POST['replacedFile']); //Sets an array with the path details of the file to be DELETED(replaced)
            unset($_POST['replacedFile']); //Sets the POST value replacedFile to null so it doesn't pass to FileMaker
            $newImagePathInfo = pathinfo($_FILES['replacingFile']['name']); //Sets an array with the Path Details of the uploaded file 
            $replacingFileName = $newImagePathInfo['basename']; //Sets a variable with the filename of the new file
            $replacingImageTmp = $_FILES['replacingFile']['tmp_name']; //Sets a variable with the temporary location of the new file
        
            if (isset($replacingFileName)){ //Checks if the name of the new file is anything but NULL
                if(!empty($replacingFileName)){ //Checks if the name of the new file is not empty
                    $_POST['printFile'] = $replacingFileName; //Sets the POST printFile to the new files name
                    $_POST['quantity'] = $_POST['replaceFileQuantity']; //Sets the POST quantity to the quantity selected in the form (Needs to be generic to communicate with FileMaker)
                    unset($_POST['replaceFileSelect']); //Sets the form speciffic files name to NULL so it doesn't pass to FileMaker
                    unset($_POST['replaceFileQuantity']); //Sets the form speciffic quantity to NULL so it doesn't pass to FileMaker
                    
                    if(rename($pdfDir.$oldFileInfo['basename'], $oldDir.time().'_'.$oldFileInfo['basename'])){ //Move the replaced file to the Old directory checks if successful
                        if(move_uploaded_file($replacingImageTmp, $pdf.$replacingFileName)){ //Upload the new file to the PDF directory checks if successful
                            $fmrec = $fm->newAddCommand('Nelson_Plastics_Test', $_POST); //Add a new record to the Nelson_Plastics_Test table and pass the values of POST
                            $fmresult = $fmrec->execute(); //Executes the above line
                            if (FileMaker::isError($fmresult)) { //Checks if FileMaker returned any errors
                                $fmerror = $fmresult->getMessage().' - '.$fmresult->getCode(); //Sets the fmerror equal to a human readable error message
                                echo($fmerror); //Prints the error message to the screen
                            } else { //If the new file upload fails
                                echo '<p class="successMessage">The file was uploaded and replaced.</p>';
                            }
                        } else { //If moving the old file fails
                            echo '<p class="errorMessage">There was an error uploading the new file. Please try again later.</p>';
                        }
                    } else { //If the new file name is empty
                        echo '<p class="errorMessage">There was a problem removing the file. Please try again later.</p>';
                    }
                } else { //If the new file name is NULL (No file uploaded)
                    echo '<p class="errorMessage">Please Upload a File.</p>';
                }
            }
        
            break; //End the conditional check
}
}



?>



<!--<div id="existingFile">-->
<!--    <div class="form" style="width:657px; margin-bottom:21px;">-->
<!--        <form name="existingFile" action="index.php" method="POST">-->
<!--            <input type="hidden" name="formMethod" value="Print Existing" />-->
<!--            <div class="fileSelectContainer">-->
<!--                <label for="fileSelect">Select a File to Print:</label>-->
<!--                <select id="imageSelect" name="printFile" style="width:390px;">-->
<!--                    --><?php
//
//                    foreach($jpgPaths as $image){
//                        $jpgFullName = explode('/', $image);
//                        $jpgName = explode('.', $jpgFullName[1]);
//                        echo '<option value="'.$image.'">'.$jpgName[0].'</option>';
//                    }
//                    ?>
<!--                </select>-->
<!--            </div>-->
<!--            <div class="quantityContainer">-->
<!--                <label for="quantity">Number of Sheets:</label>-->
<!--                <input name="existingFileQuantity" type="text" >-->
<!--                <div style="clear:both;"></div>-->
<!--            </div>-->
<!--            <div class="dueDateContainer">-->
<!--                <label for="dueDate">Due Date:</label>-->
<!--                <input type="text"  name="dueDate" placeholder="mm/dd/yyyy" />-->
<!--            </div>-->
<!--            <div class="checkboxContainer">-->
<!--                <div class="rushContainer">-->
<!--                    <label for="rush">Rush:</label>-->
<!--                    <input type="checkbox" name="rush" value="RUSH" />-->
<!--                </div>-->
<!--                <div class="proofContainer"></div>-->
<!--            </div>-->
<!--            <div class="notesContainer" style="padding-top:40px; padding-bottom:40px;">-->
<!--                <label for="notes">Notes:</label>-->
<!--                <textarea name="notes" style="width:85%;" rows="7"></textarea>-->
<!--            </div>-->
<!--            <div class="submitContainer">-->
<!--                <input type="submit" value="Submit"/>-->
<!--            </div>-->
<!--            <div style="clear:both;"></div>-->
<!--        </form>-->
<!--    </div>-->
<!--    <div style="width:657px;">-->
<!--        <div class="preview">-->
<!--            <div class="previewDisplay">-->
<!--                --><?php
//                if(!isset($_POST['printFile'])){
//                    echo '<img name="imageSwap" src="'.$jpgPaths[0].'" />';
//                } else {
//                    echo '<img name="imageSwap" src="img/'.$_POST['printFile'].'" />';
//                }
//                ?>
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!---->
<!---->
<!--<div id="replaceFile">-->
<!--    <div class="form" style="width:657px; margin-bottom:21px;">-->
<!--        <form name="replaceFile" action="index.php" method="POST" enctype="multipart/form-data">-->
<!--            <input type="hidden" name="formMethod" value="Replace File" />-->
<!--            <div class="fileSelectContainer" style="width:100%; margin-bottom:21px;">-->
<!--                <label style="display:block;" for="fileSelect">Select a File to Replace:</label>-->
<!--                <select name="replacedFile" >-->
<!--                    --><?php
//
//                    foreach($jpgPaths as $image){
//                        $jpgFullName = explode('/', $image);
//                        $jpgName = explode('.', $jpgFullName[1]);
//                        echo '<option value="'.$image.'">'.$jpgName[0].'</option>';
//                    }
//                    ?>
<!--                </select>-->
<!--            </div>-->
<!--            <div style="width:100%; float:left; margin-bottom:21px;">-->
<!--                <label for="replacingFile" style="margin-right:10px;">Select the new file to upload.</label>-->
<!--                <input name="replacingFile" type="file"   />-->
<!--            </div>-->
<!--            <div class="quantityContainer">-->
<!--                <label for="quantity">Number of Sheets:</label>-->
<!--                <input name="replaceFileQuantity" type="text"  />-->
<!--            </div>-->
<!--            <div class="dueDateContainer">-->
<!--                <label for="dueDate">Due Date:</label>-->
<!--                <input type="text"  name="dueDate" placeholder="mm/dd/yyyy"  />-->
<!--            </div>-->
<!--            <div class="checkboxContainer">-->
<!--                <div class="rushContainer">-->
<!--                    <label for="rush">Rush:</label>-->
<!--                    <input type="checkbox" name="rush" value="RUSH" />-->
<!--                </div>-->
<!--                <div class="proofContainer"></div>-->
<!--                <div style="clear:both;"></div>-->
<!--            </div>-->
<!--            <div style="clear:both;"></div>-->
<!--            <div class="notesContainer" style="padding-top:40px; padding-bottom:40px;">-->
<!--                <label for="notes">Notes:</label>-->
<!--                <textarea name="notes" style="width:85%;" rows="7"></textarea>-->
<!--            </div>-->
<!--            <div class="submitContainer">-->
<!--                <input type="submit" value="Submit"  />-->
<!--            </div>-->
<!--            <div style="clear:both;"></div>-->
<!--        </form>-->
<!--    </div>-->
<!--    <div style="width:657px;">-->
<!--        <div class="preview">-->
<!--            <div class="previewDisplay">-->
<!--                --><?php
//                if(!isset($_POST['printFile'])){
//                    echo '<img name="replaceImageSwap" src="'.$jpgPaths[0].'" />';
//                } else {
//                    echo '<img name="replaceImageSwap" src="img/'.$_POST['printFile'].'" />';
//                }
//                ?>
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!---->





<div id="newUpload">
    <div class="form" style="width:657px; margin-bottom:21px;">
        <form name="newUpload" action="index.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="formMethod" value="New Upload" />
            <div class="fileSelectContainer">
                <label for="fileSelect" style="display:block; margin-bottom:21px;">Select a File to Print:</label>
                <input name="newFile" type="file" />
                <div style="clear:both;"></div>
            </div>
            <div class="quantityContainer">
                <label for="quantity">Number of Sheets:</label>
                <input name="newUploadQuantity" type="text">
            </div>
            <div class="dueDateContainer">
                <label for="dueDate">Due Date:</label>
                <input type="text" id="datepicker" name="dueDate" placeholder="mm/dd/yyyy"  />
            </div>
            <div class="checkboxContainer">
                <div class="rushContainer">
                    <label for="rush">Rush:</label>
                    <input type="checkbox" name="rush" value="RUSH" />
                </div>
<!--                <div class="proofContainer">-->
<!--                    <label for="proof">Proof Needed:</label>-->
<!--                    <input type="checkbox" name="proof" value="PROOF" />-->
<!--                </div>-->
<!--                <div style="clear:both;"></div>-->
<!--            </div>-->
            <div class="notesContainer" style="padding-top:40px; padding-bottom:40px;">
                <label for="userNotes">Notes:</label>
                <textarea name="userNotes" style="width:85%;" rows="7"></textarea>
            </div>
            <div class="submitContainer">
                <input type="submit" value="Submit" />
            </div>
            <div style="clear:both;"></div>
        </form>
    </div>
</div>






















<!--<div style="width:875px; margin:auto; padding:20px;">-->
<!--    <div style="width:100%; margin-bottom:20px;">-->
<!--        <label for="formMethod">What would you like to do?</label>-->
<!--        <select name="formMethod" id="formSelect">-->
<!--            <option value="newUpload">Upload a New File</option>-->
<!--            <option value="printExisting">Print an Existing File</option>-->
<!--            <option value="replaceFile">Replace a File</option>-->
<!--        </select>-->
<!--    </div>-->
<!---->
<!--    <div id="existingFile" style="width:875px;">-->
<!--        <div style="width:875px;">-->
<!--            <div style="width:425px; margin-right:25px; float:left;">-->
<!--                <form name="existingFile" action="index.php" method="POST">-->
<!--                    <input type="hidden" name="formMethod" value="Print Existing" />-->
<!--                    <select id="imageSelect" name="printFile">-->
<!--                        --><?php
//
//                            foreach($jpgPaths as $image){
//                                $jpgFullName = explode('/', $image);
//                                $jpgName = explode('.', $jpgFullName[1]);
//                                echo '<option value="'.$image.'">'.$jpgName[0].'</option>';
//                            }
//                        ?>
<!--                    </select>-->
<!--                    <label for="existingFileQuantity">How many would you like to print?</label>-->
<!--                    <select name="existingFileQuantity">-->
<!--                        <option value="500">500</option>-->
<!--                        <option value="1000">1000</option>-->
<!--                        <option value="2000">2000</option>-->
<!--                        <option value="3000">3000</option>-->
<!--                        <option value="4000">4000</option>-->
<!--                    </select>-->
<!---->
<!--                    <input type="submit" />-->
<!--                </form>-->
<!--            </div>-->
<!---->
<!--            <div style="width:425px; float:left;">-->
<!--                --><?php //
//                    if(!isset($_POST['printFile'])){
//                        echo '<img name="imageSwap" src="'.$jpgPaths[0].'" />';
//                    } else {
//                        echo '<img name="imageSwap" src="'.$_POST['printFile'];
//                    }
//                ?>
<!--            </div>-->
<!--            <div style="clear:both;"></div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div id="newUpload">-->
<!--        <form name="newUpload" action="index.php" method="POST" enctype="multipart/form-data">-->
<!--            <input type="hidden" name="formMethod" value="New Upload" />-->
<!--            <label for="newFile">Select the file to print</label>-->
<!--            <input name="newFile" type="file" />-->
<!---->
<!--            <label for="newUploadQuantity">How many would you like to print?</label>-->
<!--            <select name="newUploadQuantity">-->
<!--                <option value="500">500</option>-->
<!--                <option value="1000">1000</option>-->
<!--                <option value="2000">2000</option>-->
<!--                <option value="3000">3000</option>-->
<!--                <option value="4000">4000</option>-->
<!--            </select>-->
<!---->
<!--            <input type="submit" />-->
<!--        </form>-->
<!--    </div>-->
<!---->
<!--    <div id="replaceFile">-->
<!--        <div style="width:875px;">-->
<!--            <div style="width:425px; margin-right:25px; float:left;">-->
<!--                <form name="replaceFile" action="index.php" method="POST" enctype="multipart/form-data">-->
<!--                    <input type="hidden" name="formMethod" value="Replace File" />-->
<!--                    <label for="replacedFile">Select the File to DELETE.</label>-->
<!--                    <select name="replacedFile" id="replaceFileSelect">-->
<!--                        --><?php
//
//foreach($jpgPaths as $image){
//    $jpgFullName = explode('/', $image);
//    $jpgName = explode('.', $jpgFullName[1]);
//    echo '<option value="'.$image.'">'.$jpgName[0].'</option>';
//}
//                        ?>
<!--                    </select><br /><br />-->
<!--                    <label for="replacingFile">Select the new file to upload and print</label>-->
<!--                    <input name="replacingFile" type="file" /><br /><br />-->
<!--                    <label for="replaceFileQuantity">How many would you like to print?</label>-->
<!--                    <select name="replaceFileQuantity">-->
<!--                        <option value="500">500</option>-->
<!--                        <option value="1000">1000</option>-->
<!--                        <option value="2000">2000</option>-->
<!--                        <option value="3000">3000</option>-->
<!--                        <option value="4000">4000</option>-->
<!--                    </select><br /><br />-->
<!---->
<!--                    <input type="submit" />-->
<!--                </form>-->
<!--            </div>-->
<!---->
<!--            <div style="width:425px; float:left;">-->
<!--                --><?php //
//                    if(!isset($_POST['printFile'])){
//                        echo '<img name="replaceImageSwap" src="'.$jpgPaths[0].'" />';
//                    } else {
//                        echo '<img name="replaceImageSwap" src="'.$_POST['printFile'];
//                    }
//                ?>
<!--            </div>-->
<!--            <div style="clear:both;"></div>-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!--</div>-->