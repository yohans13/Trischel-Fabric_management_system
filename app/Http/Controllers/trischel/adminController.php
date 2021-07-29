<?php

namespace App\Http\Controllers\trischel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\department;
use Image;
use Illuminate\Support\Facades\Hash;


class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uType="admin";

        // $user = User::where('uType', $uType)->get();
        // return response()->json($user);

        

        $user=DB::table('users')
        ->join('departments','users.department','departments.id')
        ->where('users.uType',$uType)
        ->select('departments.dname','users.*')
        ->orderBy('users.joining_date','DESC')->get();
    
        return response()->json($user);

    }

    public function getDepartment(){
        $department = department::all();
        return response()->json($department);
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
            
            'first_name'=>'required|max:25',
            'last_name'=>'required|max:25',
            'epf'=>'required|unique:users',
            'nic'=>'required|unique:users',
            'email'=>'required|unique:users',
            'phone_number'=>'required',
            'password'=>'required',
            'department'=>'required',
            'city'=>'required',
            'address'=>'required',
            'photo'=>'required',


             
        ]);

        
            $position = strpos($request->photo,';');
            $sub = substr($request->photo, 0 , $position );
            $ext = explode('/',$sub)[1];

            $name=time().".".$ext;
            $img= Image::make($request->photo)->resize(240,280);
            $upload_path='vbackend/app-assets/images/portrait/small/';
            $image_url=$upload_path.$name;

            $img->save($image_url);

            $uType="Admin";
            $is_active=true;
            $fullname=$request->first_name.' '.$request->last_name;


            $user = new User;

            $user->name = $fullname;
            $user->email = $request->email;
            $user->epf = $request->epf;
            $user->nic = $request->nic;
            $user->is_active = $is_active; 
            $user->phone = $request->phone_number;
            $user->address = $request->address;
            $user->city = $request->city;
            $user->department = $request->department; 
            $user->photo =  $image_url;
            $user->joining_date = date('d/m/y');
            $user->uType = $uType;
            $user->password = Hash::make($request->password);

            $user ->save();

    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users =DB::table('users')->where('id',$id)->first();
        return response()->json($users);
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
        $uType="Admin";
        $is_active=true;

        $password=$request->password;

        if($password){
            
            $data=array();
            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['epf'] = $request->epf;
            $data['nic'] = $request->nic;
            $data['is_active'] = $is_active;
            $data['phone'] = $request->phone;
            $data['address'] = $request->address;
            $data['city'] = $request->city;
            $data['department'] = $request->department;
            $data['uType'] = $uType;  
            $data['password'] = Hash::make($request->password);

        }else
        {

            $data=array();
            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['epf'] = $request->epf;
            $data['nic'] = $request->nic;
            $data['is_active'] = $is_active;
            $data['phone'] = $request->phone;
            $data['address'] = $request->address;
            $data['city'] = $request->city;
            $data['department'] = $request->department;
            $data['uType'] = $uType;  


        }


        $image =  $request->newphoto; 


        if($image){
            $position = strpos($image,';');
            $sub = substr($image, 0 , $position );
            $ext = explode('/',$sub)[1];

            $name=time().".".$ext;
            $img = Image::make($image)->resize(240,280);
            $upload_path='vbackend/app-assets/images/portrait/small/';
            $image_url=$upload_path.$name;

            $success=$img->save($image_url);

            if($success){
            $data['photo'] =  $image_url;
            $img=DB::table('users')->where('id',$id)->first();
            $image_path=$img->photo;
            
            $users =DB::table('users')->where('id',$id)->first();
            $ckphoto = $users->photo;
            if($ckphoto){
            $done =unlink($image_path);
            }


            $user=DB::table('users')->where('id',$id)->update($data);
            }
        }else{
            $oldphoto=$request->photo;
            $data['photo']=$oldphoto;
            $user=DB::table('users')->where('id',$id)->update($data);

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
        $user =DB::table('users')->where('id',$id)->first();
        $photo = $user->photo;
        
             unlink($photo);
             DB::table('users')->where('id',$id)->delete();
        
    }
}
