<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\EtriciaDirectory;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

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

        $new_etricia->packagecode = $request->input('packagecode');
        $new_etricia->serial_no = $request->input('serial_no');
        $new_etricia->capacity = $request->input('capacity');
        $new_etricia->cell_number = $request->input('cell_no');
        $new_etricia->description = $request->input('description');
        $new_etricia->production_cost = $request->input('production_cost');
        $new_etricia->selling_price = $request->input('selling_price');
        $new_etricia->production_date = $request->input('production_date');

        $new_etricia->save();

        return redirect("/super_etricia");


    }

    public function EtriciaRetrieve()
    {
        $EtriciaProduct = \DB::table('etricia_directories')->get();
     
        return redirect("/super_etricia",['EtriciaProduct'=>$EtriciaProduct]);
      
    }


}