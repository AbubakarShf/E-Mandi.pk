<?php
namespace App\Helper;

class Helper
{
    public static function returnResponse($status, $message, $data = null)
    {
        $response = array();
        $response['status'] = $status;
        $response['message'] = $message;
        $response['data'] = $data;
       return  response()->json($response);

    }


    public static function checkPhoto($FILES,$data,$table){
        if (isset($FILES['photo']) && $FILES['photo']['size'] > 0) {
            $data['photo'] = Helper::upload_photo($data,$table);
      } else {
          unset($data['photo']);
      }
      return $data;
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