<?php

namespace App\Admin\Controllers;

use App\PowerpackParameters;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use App\User;
use Auth;
use App\powerpackPackage;

use App\PowerpackControlls;
use Illuminate\Http\Request;



class etriciaParamController extends Controller
{
    /**
     * Title for current resource.
     *
     * @var string
     */
  
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
   public function index(Content $content)
    {
                   
          return $content ->header('Etricia Parameters') ->body( view('admin.admin.charts'));
         
    
    }

     public function DrawCharts()
    {
        
        
     $result =  \DB::table('powerpack_parameters')->get();           
        return json_encode($result);
        
    }


}
