<?php

namespace App\Http\Controllers\trischel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Category; 
use App\Models\post; 
use Image;
use Carbon\Carbon;

class blogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Category = Category::all();
        return response()->json($Category);
    }



    public function postindex()
    {
        // $post = post::all();
        // return response()->json($post);

        $post=DB::table('posts')
        ->join('categories','posts.category','categories.id') 
        ->select('categories.category_name','posts.*')
        ->orderBy('posts.date','DESC')->get();
    
        return response()->json($post);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            
            'name'=>'required|max:50', 
        ]);
 

            $category = new Category;

            $category->category_name = $request->name;
           

            $category ->save();

    
    }



    
    public function postStore(Request $request)
    {
        $validateData = $request->validate([
            
            'title'=>'required|max:50',
            'cat'=>'required',
            'Content'=>'required',
            'photo'=>'required',
            'short_description'=>'required|max:200',

             
        ]);

        
            $position = strpos($request->photo,';');
            $sub = substr($request->photo, 0 , $position );
            $ext = explode('/',$sub)[1];

            $name=time().".".$ext;
            $img= Image::make($request->photo)->resize(1000,1000);
            $upload_path='vbackend/app-assets/images/blog/';
            $image_url=$upload_path.$name;

            $img->save($image_url); 


            $post = new post;


            $dt = Carbon::now();
            

            
            $post->title = $request->title;
            $post->content = $request->Content; 
            $post->date =  $dt->toDateString(); 
            $post->post_by = "Admin";
            $post->category = $request->cat;
            $post->short_description = $request->short_description;
            
            $post->photo =  $image_url;  
            $post ->save();

    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category =DB::table('categories')->where('id',$id)->first();
        return response()->json($category);
    }

    public function postShow($id)
    {
        $posts =DB::table('posts')->where('id',$id)->first();
        return response()->json($posts);
    }

    public function postSelect($id)
    {

        $posts =DB::table('posts')->where('id',$id)->first();
        return response()->json($posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            $data['category_name'] = $request->category_name;  
            $user=DB::table('categories')->where('id',$id)->update($data);
            
    }


    public function updatePost(Request $request, $id)
    {
        
            $data=array();
            $data['title'] = $request->title;  
            $data['content'] = $request->content;  
            $data['category'] = $request->category; 
            $data['short_description'] = $request->short_description; 
             
         
    
    
            $image =  $request->newphoto; 
    
    
            if($image){
                $position = strpos($image,';');
                $sub = substr($image, 0 , $position );
                $ext = explode('/',$sub)[1];
    
                $name=time().".".$ext;
                $img = Image::make($image)->resize(1000,1000);
                $upload_path='vbackend/app-assets/images/blog/';
                $image_url=$upload_path.$name;
    
                $success=$img->save($image_url);
    
                if($success){
                $data['photo'] =  $image_url;
                $img=DB::table('posts')->where('id',$id)->first();
                $image_path=$img->photo;
                
                $posts =DB::table('posts')->where('id',$id)->first();
                $ckphoto = $posts->photo;
                if($ckphoto){
                $done =unlink($image_path);
                }

                $posts=DB::table('posts')->where('id',$id)->update($data);
                }            }
                else{
                $oldphoto=$request->photo;
                $data['photo']=$oldphoto;
                $posts=DB::table('posts')->where('id',$id)->update($data);
    
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
        // $user =DB::table('categories')->where('id',$id)->first();
       
         DB::table('categories')->where('id',$id)->delete();
        
   
    }


    public function postDelete($id)
    {
        // $user =DB::table('categories')->where('id',$id)->first();
       
         DB::table('posts')->where('id',$id)->delete();
        
   
    }



    public function recentpost(){
        $post=DB::table('posts')
        ->join('categories','posts.category','categories.id') 
        ->select('categories.category_name','posts.*')
        ->orderBy('posts.date','DESC')->limit(3)->get();
    
        return response()->json($post);

    }
}
