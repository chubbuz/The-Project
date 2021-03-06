<?php

namespace App\Http\Controllers;
use App\News;
use App\Todays;
use App\Category;

//use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id=auth()->user()->id;
        $news=News::where('author_id',$user_id)->orderBy('created_at','desc')->get(); 
       
        return view('admin.index')->with('news',$news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats= Category::all();
        return view('admin.create')->with('cats',$cats);
    }

    public function showAll()
    {

        $news=News::orderBy('created_at','desc')->paginate(5);
         $todays=Todays::select('news_id')->get();
        return view('admin.allCollection')->with('news',$news)->with('todays',$todays);
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['title'=>'required','body'=>'required',
                'news_image'=>'image|nullable|max:2048','category'=>'required'
            ]);
        //handle File Upload
        if($request->hasFile('news_image')){
            //Get filename with extension
            $filenameWithExt = $request->file('news_image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just Ext
            $extension = $request->file('news_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload Image
            $path = $request->file('news_image')->storeAs('public/news_images',$fileNameToStore);
        }
        else {
            $fileNameToStore = 'noimage.jpg';
        }



        //write data from form to database
        $news=new News;
        $news->title=$request->input('title');
        $news->description=$request->input('body');
        $news->author_id=auth()->user()->id;
        $news->category_id=$request->input('category');
        $news->image=$fileNameToStore;
        $news->save();
        return redirect('/admin')->with('success','your article has been uploaded');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $news=News::find($id);
        return view('admin.show')->with('news',$news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news=News::find($id);
        $currCat=$news->category->id;
        $cats= Category::all();

        if(auth()->user()->id!= $news->author_id){
           return redirect('/home')->with('error','Unauthorized Page');
        }
        return view('admin.edit')->with('news',$news)->with('cats',$cats)->with('currCat',$currCat);
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
       $this->validate($request,['title'=>'required','body'=>'required',
                'news_image'=>'image|nullable|max:2048'
            ]);
        //handle File Upload
        if($request->hasFile('news_image')){
            //Get filename with extension
            $filenameWithExt = $request->file('news_image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just Ext
            $extension = $request->file('news_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload Image
            $path = $request->file('news_image')->storeAs('public/news_images',$fileNameToStore);
        }


        $news=News::find($id);
        $news->title=$request->input('title');
        $news->description=$request->input('body');
        $news->author_id=auth()->user()->id;
        $news->category_id=$request->input('category');
        if($request->hasFile('news_image')){
            $news->image=$fileNameToStore;
        }
        $news->save();
        return redirect('/admin')->with('success','your article has been edited');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $post=News::find($id);
        if(auth()->user()->id != $post->author_id){
            return redirect('/home')->with('error','Unauthorized Page');
        }
        if($post->cover_image!='noimage.jpg'){
            Storage::delete('public/news_images/'.$post->image);
        }
        $post->delete();
        return redirect('/admin')->with('success','News deleted Successfully');
    }
}
