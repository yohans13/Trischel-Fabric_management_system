<?php

namespace App\Http\Controllers\trischel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Sustainability;
use Image;
use Illuminate\Support\Facades\Hash;

class sustainController extends Controller
{
   

 
 
    public function engStore(Request $request)
    {
        $validateData = $request->validate([
             
                      'year'=>'required',
                      'jan'=>'max:10',
                      'feb'=>'max:10',
                      'mar'=>'max:10',
                      'aprl'=>'max:10',
                      'may'=>'max:10',
                      'june'=>'max:10',
                      'july'=>'max:10',
                      'aug'=>'max:10',
                      'sep'=>'max:10',
                      'oct'=>'max:10',
                      'nov'=>'max:10',
                      'dec'=>'max:10', 
                      'mainName'=>'required',
                      'subName'=>'required', 
        ]);

        
        $sus = new Sustainability;

        $sus->mainName =$request->mainName;
        $sus->subName = $request->subName;
        $sus->year = $request->year;
        $sus->jan = $request->jan;
        $sus->feb = $request->feb; 
        $sus->mar = $request->mar;
        $sus->aprl = $request->aprl;
        $sus->may = $request->may;
        $sus->june = $request->june;  
        $sus->july = $request->july;  
        $sus->aug = $request->aug;  
        $sus->sep = $request->sep;  
        $sus->oct = $request->oct;  
        $sus->nov = $request->nov;  
        $sus->dec = $request->dec;    

        $sus ->save();
 
    }
 


    public function energySelect($id)
    {
        $energy =DB::table('sustainabilities')->where('id',$id)->first();
        return response()->json($energy);
    }
 


    public function getyears(){
        $sus = DB::table('sustainabilities')->select('year')->where('mainName','ENERGY SOURCES')->groupBy('year')->orderBy('year','DESC')->get();
        return response()->json($sus);
    }



    public function getenSus(){

        $energy=DB::table('sustainabilities')
        ->where('mainName','ENERGY SOURCES')->where('year','2021')->get();
        return response()->json($energy);
    }




    public function updateYear($year){

        $energy=DB::table('sustainabilities')
        ->where('mainName','ENERGY SOURCES')->where('year',$year)->get();
        return response()->json($energy);
    }

 
 
    public function updateEnergy(Request $request, $id)
    { 
        $data=array();  

        $data['mainName'] =$request->mainName;
        $data['subName'] = $request->subName;
        $data['year'] = $request->year;
        $data['jan'] = $request->jan;
        $data['feb'] = $request->feb; 
        $data['mar'] = $request->mar;
        $data['aprl'] = $request->aprl;
        $data['may'] = $request->may;
        $data['june'] = $request->june;  
        $data['july'] = $request->july;  
        $data['aug'] = $request->aug;  
        $data['sep'] = $request->sep;  
        $data['oct'] = $request->oct;  
        $data['nov'] = $request->nov;  
        $data['dec'] = $request->dec; 

      
        $energy=DB::table('sustainabilities')->where('id',$id)->update($data); 
        
    }

    public function EnergyDelete($id)
    {
        DB::table('sustainabilities')->where('id',$id)->delete();
        
    }




    public function YearDelete($year)
    {
        DB::table('sustainabilities')->where('year',$year)->delete();
        
    }
}
