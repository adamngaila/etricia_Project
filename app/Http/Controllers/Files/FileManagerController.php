<?php

namespace App\Http\Controllers\Files;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;
class FileManagerController extends Controller
{
    public function Download_App(){
        $file = public_path()."/Android/app-release.apk";
        $headers = array(
            'Content-Type: application/vnd.android.package-archive',
           
        );
        return Response::download($file,"EtriciApp.apk",$headers);
    }
}
