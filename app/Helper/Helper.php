<?php
namespace App\Helper;

class Helper
{
    public static $folder="hasseb/";
    public static function returnResponse($status, $message, $data = null)
    {
        $response = array();
        $response['status'] = $status;
        $response['message'] = $message;
        $response['data'] = $data;
       return  response()->json($response);

    }


    public static function checkPhoto($FILES,$data,$table){
        if (isset($FILES['files']['name'])&&(count($FILES['files']['name'])>0)) {
            $data['photo'] = Helper::upload_multi($FILES,$table);
      } else {
          unset($data['photo']);
      }
      return $data;
    }

    public static function upload_multi($photos,$foldername){
        $uploadsDirectory = ($_SERVER['DOCUMENT_ROOT'].'\\assets\\uploads\\'.$foldername.'\\');
        if (!file_exists($uploadsDirectory)) {
            mkdir($uploadsDirectory, 0777, true);
        }
        
        // print_r($photos);
        // die();
$countfiles = count($photos['files']['name']);
$files_arr = array();

for($index = 0;$index < $countfiles;$index++){

   if(isset($photos['files']['name'][$index]) && $photos['files']['name'][$index] != ''){
      // File name
      $filename = $photos['files']['name'][$index];

      // Get extension
      $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

      // Valid image extension
      $valid_ext = array("png","jpeg","jpg");

      // Check extension
      if(in_array($ext, $valid_ext)){

        $now = time();
        while (file_exists($uploadFilename = $uploadsDirectory. $foldername .'-'. $now . '-' . $_FILES['files']['name'][$index])) {
            $now++;
        }

        // now let's move the file to its final location and allocate the new filename to it
        move_uploaded_file($_FILES['files']['tmp_name'][$index], $uploadFilename) or die('Error uploading file');
         // File path
         $path_parts = explode('\\', $uploadFilename);
         $uploadFilename = $path_parts[count($path_parts) - 1];
         array_push($files_arr,$uploadFilename);

      }
   }
}

return implode ("||", $files_arr);
    }

    public static function upload_photo($photo,$folder)
    {

      
        $uploadsDirectory = ($_SERVER['DOCUMENT_ROOT'].'\\assets\\uploads\\'.$folder.'\\');
        if (!file_exists($uploadsDirectory)) {
            mkdir($uploadsDirectory, 0777, true);
        }
        

        $errors = array(
            1 => 'php.ini max file size exceeded',
            2 => 'html form max file size exceeded',
            3 => 'file upload was only partial',
            4 => 'no file was attached'
        );

        ($_FILES['photo']['error'] == 0)
            or die($errors[$_FILES['photo']['error']]);

        @is_uploaded_file($_FILES['photo']['tmp_name'])
            or die('Not an HTTP upload');

        @getimagesize($_FILES['photo']['tmp_name'])
            or die('Only image uploads are allowed');

        $now = time();
        while (file_exists($uploadFilename = $uploadsDirectory. $folder .'-'. $now . '-' . $_FILES['photo']['name'])) {
            $now++;
        }

        // now let's move the file to its final location and allocate the new filename to it
        move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFilename) or die('Error uploading file');

        $path_parts = explode('\\', $uploadFilename);
        $uploadFilename = $path_parts[count($path_parts) - 1];
        return $uploadFilename;
    }

    public static function generatSecret($token){

        $totalLength = 64;
        $stringLength = $totalLength - strlen($token);
        
        $randomString = "";
        /* Without vowels */
        $string = "BCDFGHJKLMNPQRSTVWXYZbcdfghjklmnpqrstvwxyz]*&^%@#(-;[)0123456789";
        for ($i = 0; $i < $stringLength; $i++){
    
            $randomString .= $string[rand(0, $stringLength - 1)];
        }
    
        $accessToken = md5($token.$randomString);
        return $accessToken;
        }  
}