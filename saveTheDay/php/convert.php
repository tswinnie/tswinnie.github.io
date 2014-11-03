<?php
    class JDHConversion{
        public $_image = NULL;
        public $_output = NULL;
        public $_prefix = 'IMG';
        private $_width = NULL;
        private $_height = NULL;
        private $_tmp = NULL;
        
        public static function factory($image, $output){
            return new JDHConversion($image, $output);
        }
        
        public function __construct($image, $output){
            if(file_exists($image)){
                $this->_image = $image;
                $this->_output = $output;
                echo 'Construct Image: '.$this->_image.'<br />'.'Construct Output: '.$this->_output.'<br /><br />';
            } else{
                throw new Exception('File not found. Aborting.');
            }
        }
        
        public function tempfile(){
            // copy original file and assign temporary name
            $this->_tmp = $this->_prefix.rand();
            $this->_tmp = 'tmp/'.$this->_tmp.'.pdf';
            copy($this->_image, $this->_tmp);
        }
        
        /*public function output(){
            // rename working temporary file to output filename
            rename($this->_tmp = $this->_output);
        }*/
        
        public function execute($command){
            // remove newlines and convert single quotes to double to prevent errors
            $command = str_replace(array("\n", "'"), array('', '"'), $command);
            $command = escapeshellcmd($command);
            // execute convert program
            exec($command);
        }
        
        public function convert(){
            $this->tempfile();
            /*$this->execute("convert -density 72 $this->_tmp $this->_output");*/
            
            $im = new Imagick();
            $im->setResolution(72,72);
            $im->readimage($this->_tmp.'[0]'); 
            $im->setImageBackgroundColor('white');

            $im = $im ->flattenImages();

            $im->setImageFormat('jpeg');    
            $im->writeImage('img/'.$this->_output); 
            $im->clear(); 
            $im->destroy();
            
            unlink($this->_tmp);
            
            echo '<p class="successMessage">'.$this->_image.' successfully uploaded!</p>';
        }
    }
?>

<?php

    /*foreach($pdfs as $pdf){
        $pdfInfo = pathinfo($pdf);
        try{
            $conversion = Conversion::factory($pdfInfo['basename'], $pdfInfo['filename'].'.jpg');
        } catch(Exception $e){
            echo $e->getMessage();
            die;
        }
    
        $conversion->convert();
    }*/

?>