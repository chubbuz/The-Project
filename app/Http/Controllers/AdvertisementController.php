<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advertisement;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $adv = Advertisement::all();
        return view('admin.advertisement')->with('advs',$adv);
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

    public function store(Request $request)
    {
      $this->validate($request,['link'=>'required',
                'adv_image'=>'image|nullable|max:2048','position'=> 'required' 
      ]);

            //Get filename with extension
      $filenameWithExt = $request->file('adv_image')->getClientOriginalName();
      //get just filename
      $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
      //get just Ext
      $extension = $request->file('adv_image')->getClientOriginalExtension();
      //filename to store
      $fileNameToStore = $filename.'_'.time().'.'.$extension;
      //upload Image
      $path = $request->file('adv_image')->storeAs('public/adv_images',$fileNameToStore);


      $adv = new Advertisement;
      $adv->link=$request->input('link');
      $adv->image=$fileNameToStore;
      $adv->location_id=$request->position;
      $adv->save();

      return redirect('/admin-adv')->with('success','advertisement has been uploaded');

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
        //
    }
}
