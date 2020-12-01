<?php

namespace App\Http\Controllers;

use Flash;
use App\Models\Roll;
use App\Models\Admission;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    //student login page redirect
    public function studentLogin(Request $request)
    {
        return view('students.login');
    }
    //student login process
    public function LoginStudent(Request $request)
    {
        if ($request->isMethod('post')) {

            $student = $request->all();
            $studentCount = Roll::where(['username' => $student['username'], 'password' => $student['password']])->count();

            if ($studentCount > 0) {
                Session::put('studentSession', $student['username']);

                Flash::success('Welcome ' . $student['username']);

                return redirect('/account');
            } else {
                Flash::success('Your Username and password doesn\'t match ');
                return redirect('/student');
            }
        }
    }

    //student home page
    public function account()
    {
        if (Session::has('studentSession')) {
            $student = Admission::all();
        } else {
            return redirect('/student')->with('error', 'Please login to access');
        }
        return view('students.account', compact('student'));
    }

    //student logout
    public function studentLogout()
    {
        Auth::logout();
        session()->flash( 'message', 'You Have Been logout' );
        return redirect()->route( 'student' );
    }

    //student Bio Data
    public function studentBioData(Request $request)
    {

        $students = Roll::join('admissions', 'admissions.id', '=', 'rolls.student_id')
            ->where(['username' => Session::get('studentSession')])->first();
        return view('students.profile.profile', compact('students'));

    }

    //verify  password
    public function verifyPassword(Request $request)
    {
        $students = $request->all();
        $validStudent = Roll::where(['username' => Session::get('studentSession'), 'password' => $students['oldpassword']])->count();

        if ($validStudent == 1) {
            // Flash::success(' Old Password is correct ');
        } else {
            //Flash::error(' Old Password is not correct ');

        }

        return redirect()->back();

        // return view('students.profile.profile');

    }

    //change password
    public function changePassword(Request $request)
    {
        $student = $request->all();
        $students = Admission::where('email', $student['email'])->first();
        $studentCount = Roll::where(['username' => Session::get('studentSession'), 'password' => $student['oldpassword']])->count();

        if ($studentCount == 1) {
            $new_password = $student['password'];
            Roll::where('username', Session::get('studentSession'))->update(['password' => $new_password]);

            Flash::success(' You have Succesfully change your password!');
            return redirect()->back();

        } else {
            Flash::error(' Password Failed to update');
            return redirect()->back();
        }
    }

    //get forgot password

    public function getForgotPassword()
    {
        return view('students.forgot_password');
    }

    //forgot password
    public function ForgotPassword(Request $request)
    {
        $data = $request->all();

        $studentCount = Admission::where('email', $data['email'])->count();



        if ($studentCount == 0) {
            //if the email not valid
            Flash::error(' we can\'t find student with the email address');
            return redirect()->back();
        }

        //we will get the the student
       $st =  Session::put('studentSession');


        $students = Admission::where('email', $data['email'])->first();



        $new_password = Str::random(12);

        Roll::where('student_id', $students['id'])->update(['password' => $new_password]);

        $email = $data['email'];
        $student_name = $students->first_name;
        $message = [
            'email' => $email,
            'first_name' => $student_name,
            'password' => $new_password,
        ];

         Mail::send('emails.forgot_password',$message,function($message) use ($email){
             $message->to($email)->subject('Reset Password - Student Management System');

         });

        Flash::success('We Have email your password reset link to' . $data['email']);
        return redirect()->route('student');

    }

    //student Choose Course
    public function studentChooseCourse(Request $request)
    {
        return view('students.lectures.ChooseCourse');

    }

    //student calender
    public function studentLectureCalender(Request $request)
    {
        return view('students.lectures.calender');

    }

    //student activity
    public function studentLectureActivities(Request $request)
    {
        return view('students.lectures.activity');

    }

    //student Result
    public function studentExamMarks(Request $request)
    {
        return view('students.lectures.result');

    }

    //student time Schedule
    public function studentTimeSchedule(Request $request)
    {
        return view('students.time.time');

    }



    //muliple language

    public function languages($locale){
         session()->put('locale',$locale);
         return redirect()->back();


    }

}
