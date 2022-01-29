<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use DB;
use Alert;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $userData = User::all(); 
       return view("user.index",compact('userData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("user.add-edit");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
                    'name' => 'required',
                    'email' => 'email|required|unique:users',
                    'designation' => 'required',
                    'phone_no' => 'required',
                    'password' => 'required',
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
        $input['email'] = $request->email;
        $input['phone_number'] = $request->phone_no;
        $input['username'] = $request->username;
        $input['nid'] = $request->nid;
        $input['name'] = $request->name;
        $input['password'] = bcrypt($request->password);
        $random_value = mt_rand(100000,999999);
        $input['user_id'] = "GEO-".$random_value;
        $input['designation'] = $request->designation;
        $input['createdby'] = Auth::User()->id;
        if( $input['designation'] == "RSM"){
            $rsm['user_id'] = $input['user_id'];
            $rsm['user_name'] = $input['username'];
            $rsm['full_name'] = $input['name'];
            $rsm['phone_no'] =  $input['phone_number'];
            $rsm['createdby'] = Auth::User()->id;
            $rsm_result = DB::table('tbl_rsm')->insert($rsm);
        }else if( $input['designation'] == "ASM"){
            $asm['user_id'] = $input['user_id'];
            $asm['user_name'] = $input['username'];
            $asm['full_name'] = $input['name'];
            $asm['phone_no'] =  $input['phone_number'];
            $asm['createdby'] = Auth::User()->id;
            $asm_result = DB::table('tbl_asm')->insert($asm);
        }else if( $input['designation'] == "TSE"){
            $tse['user_id'] = $input['user_id'];
            $tse['user_name'] = $input['username'];
            $tse['full_name'] = $input['name'];
            $tse['phone_no'] =  $input['phone_number'];
            $tse['createdby'] = Auth::User()->id;
            $tse_result = DB::table('tbl_tse')->insert($tse);
        }else if( $input['designation'] == "ADMIN"){
            $input['level'] = "1";
            $admin_result = TRUE;
        }

        if($rsm_result || $asm_result || $tse_result || $admin_result){
             try{
                $bug=0;
                $insert= User::create($input);
              }catch(\Exception $e){
                    $bug=$e->getMessage();
            }
        }
        if($bug===0){
             Alert::success('success','User Successfully Added.');
            return redirect()->back();
        }else{
             Alert::error('error','User Successfully Added.');
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

        $data = User::findOrFail($id);

        $input['username'] = $request->username;
        $input['name'] = $request->name;
        $input['phone_number'] = $request->phone_no;
        $input['nid'] = $request->nid;

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
