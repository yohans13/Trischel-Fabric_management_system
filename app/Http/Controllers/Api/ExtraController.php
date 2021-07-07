<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use App\Models\Extra;
use Image;

class ExtraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vat = DB::table('extras')->first();
        return response()->json($vat);
    }

 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            
            'logo'=>'required',
            'email'=>'required|unique:extra|max:255',
            'phone'=>'required',
            'address'=>'required',

             
        ]);

        if($request->favicon){

            $position1 = strpos($request->favicon,';');
            $sub1 = substr($request->favicon, 0 , $position1 );
            $ext1 = explode('/',$sub1)[1];

            $name1=time().".".$ext1;
            $img1= Image::make($request->favicon)->resize(240,280);
            $upload_path1='backend/extra/favicon';
            $image_url1=$upload_path1.$name1;

            $img1->save($image_url1);



            $position = strpos($request->logo,';');
            $sub = substr($request->logo, 0 , $position );
            $ext = explode('/',$sub)[1];

            $name=time().".".$ext;
            $img= Image::make($request->logo)->resize(240,280);
            $upload_path='backend/extra/logo';
            $image_url=$upload_path.$name;

            $img->save($image_url);

      


            $extra = new Extra;

            $extra->vat = $request->vat;
            $extra->logo =  $image_url;
            $extra->favicon =$image_url1;
            $extra->phone = $request->phone;
            $extra->email = $request->email;
            $extra->address = $request->address;

            $extra ->save();

        }else{

            $position = strpos($request->logo,';');
            $sub = substr($request->logo, 0 , $position );
            $ext = explode('/',$sub)[1];

            $name=time().".".$ext;
            $img= Image::make($request->logo)->resize(240,280);
            $upload_path='backend/extra/logo';
            $image_url=$upload_path.$name;

            $img->save($image_url);


            $extra = new Extra;

            $extra->vat = $request->vat;
            $extra->logo =  $image_url;
            $extra->phone = $request->phone;
            $extra->email = $request->email;
            $extra->address = $request->address;
           

            $extra ->save();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $extra =DB::table('extras')->where('id',$id)->first();
        return response()->json($extra);
    }

 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=array();
        $data['vat'] = $request->vat;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        $image =  $request->newlogo;
        $image2 =  $request->newfavicon;


        if($image){
            $position = strpos($image,';');
            $sub = substr($image, 0 , $position );
            $ext = explode('/',$sub)[1];

            $name=time().".".$ext;
            $img = Image::make($image)->resize(240,280);
            $upload_path='backend/extra/logo';
            $image_url=$upload_path.$name;

            $success=$img->save($image_url);

            if($success){
            $data['photo'] =  $image_url;
            $img=DB::table('extras')->where('id',$id)->first();
            $image_path=$img->photo;
            
            $employee =DB::table('extras')->where('id',$id)->first();
            $ckphoto = $employee->photo;
            if($ckphoto){
            $done =unlink($image_path);
            }


            $user=DB::table('extras')->where('id',$id)->update($data);
            }
        }else{
            $oldphoto=$request->photo;
            $data['photo']=$oldphoto;
            $user=DB::table('extras')->where('id',$id)->update($data);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $extra =DB::table('extras')->where('id',$id)->first();
        $favicon = $extra->favicon; 
        if($favicon){
             unlink($favicon);
             unlink($extra->logo);
             DB::table('extras')->where('id',$id)->delete();
        }else
        {
         unlink($extra->logo);
         DB::table('extras')->where('id',$id)->delete();
 
        }
    }
}
