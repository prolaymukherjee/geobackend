<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use Illuminate\Support\Facades\Validator;
use DB;
use Alert;
use Auth;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regionData = Region::all();
        return view('region.index',compact('regionData'));
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
        $validator = Validator::make($request->all(),[
                    'region_name' => 'required',
               ]);
        if($validator->fails())
        {
            $plainErrorText = "";
            $errorMessage = json_decode($validator->messages(), True);
            foreach ($errorMessage as $value) { 
                $plainErrorText .= $value[0].". ";
            }
           Alert::error('error','please check the validation');
           return  redirect()->back();
        }

        $input['region_name'] = $request->region_name;
        $input['region_id'] = "R-".mt_rand(100,999);
        $input['createdby'] = Auth::User()->id;
        try{
            $bug=0;
            $insert= Region::create($input);
           }catch(\Exception $e){
            $bug=$e->getMessage();
        }
        
        if($bug===0){
             Alert::success('success','Region Successfully Added.');
            return redirect()->back();
        }else{
             Alert::error('error','Something Went Wrong.');
            return redirect()->back();
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
        $data = Region::findOrFail($id);

        $input['region_name'] = $request->region_name;

        try{
         $bug=0;
         $data->update($input);
         }catch(\Exception $e){
           $bug=$e->getMessage();
        }
        if($bug===0){
             Alert::success('success','User Successfully Updated.');
            return redirect()->back();
        }else{
             Alert::error('error','Something went wrong.');
            return redirect()->back();
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
        //
    }
}
