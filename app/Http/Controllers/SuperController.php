<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\EtriciaDirectory;
use App\powerpackPackage;
use App\PowerpackControlls;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\LiveMonitering;

class SuperController extends Controller
{
    //
    public function index(){
        return view('admin.admin_dashboard');
    }

    public function StoreEtricia(Request $request)
    {
        $this->validate($request,[
            'packagecode'=> 'required',
            'capacity'=> 'required',
            'production_date'=> 'required ','unique:packagecode',
            'production_cost'=> 'required'
        ]);

        $new_etricia = new EtriciaDirectory;
        $package = new powerpackPackage;
        $control = new PowerpackControlls;
        $moniter = new LiveMonitering;

        $code = $this->etricia_package_code(8);

        $new_etricia->packagecode = $code;
        $new_etricia->serial_no = $request->input('serial_no');
        $new_etricia->capacity = $request->input('capacity');
        $new_etricia->cell_number = $request->input('cell_no');
        $new_etricia->description = $request->input('description');
        $new_etricia->production_cost = $request->input('production_cost');
        $new_etricia->selling_price = $request->input('selling_price');
        $new_etricia->production_date = $request->input('production_date');

        $new_etricia->save();

        $package->packagecode = $code;
        $package->save();

        $control->packagecode = $code;
        $control->save();

        $moniter->packagecode = $code;
        $moniter->save();



        return redirect("/super_etricia");


    }

    public function EtriciaRetrieve()
    {
        $EtriciaProduct = \DB::table('etricia_directories')->get();
     
       // return redirect("/super_etricia",['EtriciaProduct'=>$EtriciaProduct]);
           return view('admin.products.etricia.index',compact('EtriciaProduct'));
      
    }

    public function navigate_create_etricia()
    {
          return view('admin.products.etricia.create');
    }


public function etricia_package_code($size)
{
   
    $alpha_key ='ETRC-';
    $keys = range('0', '9');

    for ($i = 0; $i < 4; $i++)
    {
      $alpha_key .= $keys[array_rand($keys)];

    }
    $length = $size - 2;

    $key = '';
    $keys = range(0, 9);

    for ($i = 0; $i < $length; $i++) {
      $key .= $keys[array_rand($keys)];
    }

    return $alpha_key . $key;
        return $test;
}



}
