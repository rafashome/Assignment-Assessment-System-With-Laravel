<?php

namespace App\Http\Controllers;
use App\Teacher;
use App\Student;
use App\Course;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }



    public function AdminLogin(Request $request)
    {

        $email = $request->email;
        $password = $request->password;

        $result = DB::table('admins')

        ->where('email',$email)
        ->where('password',md5($password))
        -> first();


        if($result){
            Session::put('admin_name', $result->name);
            Session::put('admin_id', $result->id);
            return view('admin.dashboard');
        }else{
            Session::put('msg','Email or Password Invalid');
            return Redirect::to('/admin_home') ;
        }




        
    }

    public function addteacher()
    {
        return view('admin.add-teacher');
    }

        public function addstudent()
    {
        return view('admin.add-student');
    }


  public function teacherlist()
  {
    $teachers = DB::table('teachers')->get();
    return view('admin.teacherslist',compact('teachers'));
}


    public function teacher_view($teacher_id)
    {
      $teachers = DB::table('teachers')->select('*')->where('id',$teacher_id)->first();
      return view('admin.teachersview',compact('teachers'));
  }


public function teacher_delete($teacher_id){
    DB::table('teachers')->where('id',$teacher_id)->delete();

    return Redirect::to('/teacherlist');
}


  public function studentlist()
  {
    $students = DB::table('students')->get();
    return view('admin.studentslist',compact('students'));
}

    public function student_view($student_id)
    {
      $students = DB::table('students')->select('*')->where('id',$student_id)->first();
      return view('admin.studentsview',compact('students'));
  }

public function student_delete($student_id){
    DB::table('students')->where('id',$student_id)->delete();

    return Redirect::to('/studentlist');
}


    public function addcourse()
    {
        return view('admin.add-course');
    }


  public function courselist()
  {
    $courses = DB::table('courses')->get();
    return view('admin.courselist',compact('courses'));
}


  
  public function course_delete($course_id){
    DB::table('courses')->where('id',$course_id)->delete();

    return Redirect::to('/courselist');
}





public function store(Request $request)
{
    $this->validate($request,[ 
        'fullname' => 'required',
        'email' => 'required',
        'gender' => 'required',
        'phone_number' => 'required',
        'address' => 'required',
        'image' => 'image|mimes:jpeg,png,pdf,jpg,gif,svg|max:5000',
        'password' => 'required',
    ]);

    $teachers = new Teacher;

    $teachers->fullname = $request->fullname;
    $teachers->email = $request->email;
    $teachers->gender = $request->gender;
    $teachers->phone_number = $request->phone_number;
    $teachers->address = $request->address; 
    $teachers->image = $request->file('image'); 
    $teachers->password = md5($request->password) ;

    if($request->hasFile('image')){
        $teachers->image = $request->image->store('public/images');
    }

    $teachers->save();
    return redirect('/add-teacher')->with('response', 'Add Successfully');
}




   public function register(Request $request)
   {

       $students = new Student;

       $students->fullname = $request->input('fullname');
       $students->email = $request->input('email');
       $students->gender = $request->input('gender');
       $students->institution = $request->input('institution');
       $students->phone_number = $request->input('phone_number');
       $students->address = $request->input('address');
       $students->image = $request->input('image'); 
       $students->password = md5($request->input('password'));
      
      if($request->hasFile('image')){
        $students->image = $request->image->store('public/image');
    }
       $students->save();
       return redirect('/add-student')->with('response', 'Register Successfully');
   }



   public function insertcourse(Request $request)
   {

       $courses = new Course;

       $courses->course_name = $request->input('course_name');
       $courses->course_code = $request->input('course_code');
       $courses->department = $request->input('department');

       $courses->save();
       return redirect('/add-course')->with('response', 'Course Saved Successfully');
   }













public function logout(){
    Session::put('admin_name','' );
    Session::put('admin_id', '');
    Session::put('log','You Are Successfully Logout');
    return Redirect::to('/admin_home');
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
       $teacher = Teacher::find($id);
       return view('admin.updateprofile',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {    
       $teacher = Teacher::findOrFail($id);
     $teacher->fullname = $request->fullname;
    $teacher->email = $request->email;
    $teacher->phone_number = $request->phone_number;
    $teacher->address = $request->address; 

    $teacher->save();
return Redirect::to('/teacherlist');
      
        
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
