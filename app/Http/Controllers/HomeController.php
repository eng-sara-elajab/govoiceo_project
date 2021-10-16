<?php

namespace App\Http\Controllers;

use App\Course;
use App\Message;
use App\Service;
use App\Invoice;
use App\Setting;
use App\Requirement;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(){
        $courses = Course::all()->sortByDesc('created_at')->take(2);
        $website_data = Setting::find(1);

        if(Auth::user()){
            $rejected_requests = Service::where('status', 'rejected')->where('user_id', Auth::user()->id)->get();
            return view('welcome', compact('courses', 'rejected_requests', 'website_data'));
        }

        return view('welcome', compact('courses', 'website_data'));
    }
    
    public function courses(){
        $courses = Course::orderBy('id', 'desc')->paginate(6);
        $new_courses = Course::all()->sortByDesc('created_at')->take(2);
        $website_data = Setting::find(1);
        
        if(Auth::user()){
            $rejected_requests = Service::where('status', 'rejected')->where('user_id', Auth::user()->id)->get();
            return view('courses', compact('courses', 'new_courses', 'rejected_requests', 'website_data'));
        }

        return view('courses', compact('courses', 'new_courses', 'website_data'));
    }

    public function get_contact(){
        $website_data = Setting::find(1);
        if(Auth::user()){
            $rejected_requests = Service::where('status', 'rejected')->where('user_id', Auth::user()->id)->get();
            return view('contact', compact('rejected_requests', 'website_data'));
        }
        return view('contact', compact('website_data'));
    }

    public function contact(Request $request){
        $website_data = Setting::find(1);
        
        $this->validate($request,[
            'fname' => 'required',
            'lname' => 'required',
            'email' => ['required', 'string', 'email', 'max:255'],
            'title' => 'required',
            'body' => 'required',
        ]);
        $contact = Message::create(['fname' => $request['fname'], 'lname' => $request['lname'], 'email' => $request['email'],
            'title' => $request['title'], 'body' => $request['body']]);
        return redirect()->back()->with('alert','شكرا لتواصلك معنا')->with('website_data', $website_data);
    }

    public function about(){
        $website_data = Setting::find(1);
        if(Auth::user()){
            $rejected_requests = Service::where('status', 'rejected')->where('user_id', Auth::user()->id)->get();
            return view('about', compact('rejected_requests', 'website_data'));
        }
        return view('about', compact('website_data'));
    }

    public function one_course($id){
        $website_data = Setting::find(1);
        $course = Course::find($id);
        $courses = Course::all()->sortByDesc('created_at')->take(2);

        if(Auth::user()){
            $subscribed_courses_instring = Auth::user()->subscribed_courses;
            $subscribed_courses = explode(',', $subscribed_courses_instring);
            $rejected_requests = Service::where('status', 'rejected')->where('user_id', Auth::user()->id)->get();
            return view('one_course', compact('course', 'courses', 'subscribed_courses', 'rejected_requests', 'website_data'));
        }
        
        return view('one_course', compact('course', 'courses', 'website_data'));
    }
    
    public function request_service(){
        $website_data = Setting::find(1);
        $service_requirements = Requirement::find(1);
        if(Auth::user()){
            $rejected_requests = Service::where('status', 'rejected')->where('user_id', Auth::user()->id)->get();
            return view('request_service', compact('rejected_requests','website_data', 'service_requirements'));
        }
        return view('request_service', compact('website_data'));
    }
    
    public function login_first(){
        return redirect('/login')->with('alert', 'عليك تسجيل الدخول أولاً');
    }
}
