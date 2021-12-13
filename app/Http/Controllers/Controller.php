<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /** 
     * photo update system
     */
           
     public function fileUpload($request, $path, string $data = NULL)
     {
         
        if($request-> hasFile('photo')){
            $file = $request-> file('photo');
            $unique_name = md5(time().rand()).'.'. $file-> getClientOriginalExtension();
            $file-> move(public_path($path), $unique_name);
            if(file_exists($path . $data) && $data != NULL){
             unlink($path.$data);

            }
            
          }else{
       
            $unique_name = $data;
          }
          return $unique_name;
       
     }

     /**
      * Make slug
      */


      public function slugMake($title)
      {
        $lowerdata = strtolower($title);
        return str_replace(' ', '-', $lowerdata);
      }

      // Array to JSON Convert

      public function jsonEnc(Array $arr)
      {
        return json_encode($arr);
      }


      //  JSON to array Convert

      public function jsondecode(String $str, $type = false)
      {
        return json_decode($str, $type);
      }

}
