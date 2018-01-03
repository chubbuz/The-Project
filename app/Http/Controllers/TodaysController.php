<?php

namespace App\Http\Controllers;
use App\Todays;
use Illuminate\Http\Request;

class TodaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $newsId= $request->newsId;
        
        if($request->visible==1){
            $todays=new Todays;
            $todays->news_id=$newsId;
            $todays->save();
            return redirect('/admin-all')->with('success','it has been public');
        }else{
             $todays=Todays::where('news_id',$newsId)->first();
             $this->destroy($todays->id);
             return redirect('/admin-all')->with('error','news removed from public');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         echo "id to delete".$id;
         $today=Todays::find($id);
         echo $today;
          $today->delete();         // return redirect('/admin-all')->with('error','news hidden from public');
    }
}
