<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Helper\Helper;
use DB;
class ApiController extends Controller
{

    //
    public static function selectData($table){
        
        $result=DB::table($table)->get();
        return $result;
      
    }

    public static function dataById($id,$table){
        
        $result=DB::table($table)->where('stock_id', $id)->first();
        return $result;
        if(count($result)>0){
            return Helper::returnResponse(true, "Data Found", $result);
        }
        else{
            return Helper::returnResponse(false, "No Data Found");
        }
      
    }



    public function selectQuery(){
        $table=$_POST['table'];
        $result=DB::table($table)->get();
        
        if(count($result)>0){
            return Helper::returnResponse(true, "Data Found", $result);
        }
        else{
            return Helper::returnResponse(false, "No Data Found");
        }
      
    }



    public function insertQuery(){
        $table=$_POST['table'];
        $index=$_POST['index'];
        $data=json_decode($_POST['data'],true);
        if($table=='users'){
            $data['password']=Hash::make($data['password']);
        }
        try {
            $data=Helper::checkPhoto($_FILES,$data,$table);
            if(isset($data[$index])&&$data[$index]!=0){
                unset($data['password']);
                $result=DB::table($table)->where($index, $data[$index])->update($data);
            }else{
                $result=DB::table($table)->insert($data);
            }

            if($result){
                return Helper::returnResponse(true,"Success");
                
            }else{
                return Helper::returnResponse(false,"Failed");
            }
        } catch (\Exception $th) {
            return Helper::returnResponse(false,$th->getMessage());
        }

    }

    public function updateQuery(){
        $table=$_POST['table'];
        $data=json_decode($_POST['data'],true);
        $id=$_POST['id'];
        $index=$_POST['index'];

       try {
        $result=DB::table($table)->where($index, $id)->update($data);
        if($result){
            return Helper::returnResponse(true,"Data Updated",$result);
            
        }else{
            return Helper::returnResponse(false,"Data not Updated");
        }
    } catch (\Exception $th) {
        return Helper::returnResponse(false,$th->getMessage());
    }
    }

    public function deleteQuery(){
        $table=$_POST['table'];
        $id=$_POST['id'];
        $index=$_POST['index'];

       try {
        $result=DB::table($table)->where($index, $id)->delete();
        if($result){
            return Helper::returnResponse(true,"Data Deleted",$result);
            
        }else{
            return Helper::returnResponse(false,"Data not Deleted");
        }
    } catch (\Exception $th) {
        return Helper::returnResponse(false,$th->getMessage());
    }
}


public function login(){
    $data=isset($_POST['web'])?$_POST['data']:json_decode($_POST['data'],true);

    try {
        $result=DB::table('users')->select('*')->where('username', $data['username'])->get();
        if(count($result)>0){
        $result=json_decode($result, true)[0];
        if (Hash::check($data['password'], $result['password'])) {
            $created_at = $_SERVER['REQUEST_TIME'];
            $token=Helper::generatSecret($result['username'].$data['password'].$created_at);

            $apisession=array();
            $apisession['user_id']=$result['user_id'];
            $apisession['token']=$token;

            $res=DB::table('apisessions')->insert($apisession);
            if($res){
                $result['token']=$token;
                session(['user' => $result]);
                return Helper::returnResponse(true,"Logged In",session('user'));
            }else{

                return Helper::returnResponse(false,"something wrong happen");
            }


    }else{
        return Helper::returnResponse(false,"Wrong Password");
    }
    }
    else{
        return Helper::returnResponse(false,"Username doesn't Exists");
    }
    } catch (\Exception $th) {
        return Helper::returnResponse(false,$th->getMessage());
    }



   
}
}