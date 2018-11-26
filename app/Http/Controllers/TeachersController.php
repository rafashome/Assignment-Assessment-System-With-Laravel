<?php

namespace App\Http\Controllers;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function register(Request $request)
    {

     $teachers = new Teacher;

     $teachers->fullname = $request->input('fullname');
     $teachers->email = $request->input('email');
     $teachers->gender = $request->input('gender');
     $teachers->phone_number = $request->input('phone_number');
     $teachers->address = $request->input('address'); 
       // $image = $request->file('image');
     $teachers->password = md5($request->input('password')) ;

     $teachers->save();
     return redirect('/signup')->with('response', 'Register Successfully');
 }
 
 
 


 
//     public function validation($request){
//      return $this->validate($request, [
//     'fullname' => 'required|min:5|max:50',
//     'email' => 'email',
//     'gender' => 'gender',
//     'phone_number' => 'max:11',
//     'address' => 'required|min:5|max:50',
//     'password' => 'required|confirmed|min:6',
// ]);
//     }




 public function index()
 {
    return view('teachers/index');
}

public function signup()
{
    return view('teachers/registration');
}



public function TeachersPortal(Request $request){
  
   $email = $request->input('email');
   $password = $request->input('password');
   $id = $request->input('id');

   $result = DB::table('teachers')
   ->where(['email'=>$email, 'password'=>md5($password)])
   ->first();

   if(count($result) >0){
    Session::put('teacher_name', $result->fullname);
    Session::put('teacher_id', $result->id);
    return view('teachers.dashboard');
}else{
    Session::put('alert','Email or Password Invalid');
    return Redirect::to('/teacher') ;
}
}

















public function logout(){
    
    Session::put('teacher_id', '');
    Session::put('log','You Are Successfully Logout');
    return Redirect::to('/teacher');
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
    // public function store(Request $request)
    // {
    //     //
    // }

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
