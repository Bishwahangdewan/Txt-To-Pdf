<?php

    //check if the form is being submitted
    if(isset($_POST['pdf'])){
        $file =$_FILES['fileUpload'];

        //check whether the file is being uploaded or not
        if($file['name'] ==""){
            header("Location:index.php");
        }else{

            //get file data
            $filename = $file['name'];
            $fileerror = $file['error'];
            $filesize = $file['size'];
            $filetemp = $file['tmp_name'];

            //upload the file
            $fileext = explode('.',$filename);
            $actualext = strtolower(end($fileext));
            echo $actualext;

            //allow only certain files to upload
            $allowed = array('txt','doc');

            //check if the extension is valid
            if(in_array($actualext,$allowed)){

                //check if there was an error uploading the file
                if($fileerror === 0){

                    //check if the file size in within 10mb
                    if($filesize < 1000000){

                        $fileNameNew = uniqid('',true).".".$actualext;
                       
                        //set the file destination
                        $filedestination = 'uploads/'.$fileNameNew;

                        //move to file destination
                        move_uploaded_file($filetemp,$filedestination);
                        
                        header("Location:read.php?file=".$fileNameNew);

                    }else{
                        echo "The file is too big";
                    }

                }else{
                    echo "There was an error uploading this file";
                }

            }else{
                echo "You cannot upload these types of file";
            }
        }
    }




    