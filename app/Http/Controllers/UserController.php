<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Course;
use App\Invoice;
use App\Setting;
use Redirect;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function submit_request(Request $request){
        $website_data = Setting::find(1);

        $service = new Service();
        $service->text_type = $request->text_type;
        $service->performance_type = $request->performance_type;
        $service->inserted_text = $request->inserted_text;
        $service->producing = $request->producing;
        $service->music_type = $request->music_type;
        $service->user_id = Auth::user()->id;

        if($request->hasFile('invoice_image')){
            $file = $request->file('invoice_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/invoices', $filename);
            $service->invoice_image = $filename;
        }
        else{
            return $request;
            $service->invoice_image = '';
        }
        $service->save();
        if(Auth::user()){
            $rejected_requests = Service::where('status', 'rejected')->where('user_id', Auth::user()->id)->get();
            $approved_requests = Service::where('status', 'approved')->where('user_id', Auth::user()->id)->get();
            return redirect()->back()->with('rejected_requests', $rejected_requests)->with('website_data', $website_data)->with('alert','تم ارسال طلب الخدمة بنجاح ، شكرا لك');
        }
        return redirect()->back()->with('alert','تم ارسال طلب الخدمة بنجاح ، شكرا لك')->with('website_data', $website_data);
    }
    
    public function edit_service($id){
        $website_data = Setting::find(1);
        $edit_service = Service::find($id);
        $rejected_requests = Service::where('status', 'rejected')->where('user_id', Auth::user()->id)->get();
        return view('edit_service', compact('edit_service', 'rejected_requests', 'website_data'));
    }
    
    public function update_service(Request $request, $id){
        $website_data = Setting::find(1);
        $update_service = Service::find($id);

        if($request->text_type != null)
            $update_service->text_type = $request->text_type;
        if($request->performance_type != null)
            $update_service->performance_type = $request->performance_type;
        if($request->inserted_text != null)
            $update_service->inserted_text = $request->inserted_text;
        if($request->producing != null)
            $update_service->producing = $request->producing;
        if($request->music_type != null)
            $update_service->music_type = $request->music_type;
        if($request->hasFile('invoice_image')){
            $file = $request->file('invoice_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/invoices', $filename);
            $update_service->invoice_image = $filename;
        }
        else{
            return $request;
            $service->invoice_image = '';
        }
        $update_service->status = 'unapproved';
        $update_service->read_status = 'unread';
        $update_service->save();
        
        return redirect()->back()->with('alert', 'ستتم مراجعة الطلب مرة أخرى ، شكراً لتعاونكم')->with('website_data', $website_data);
    }
    
    public function subscribe($id){
        $website_data = Setting::find(1);
        $rejected_requests = Service::where('status', 'rejected')->where('user_id', Auth::user()->id)->get();
        return view('subscription_form', compact('id', 'rejected_requests', 'website_data'));
    }
    
    public function submit_subscription(Request $request, $id){
        $website_data = Setting::find(1);
        $course = Course::find($id);
        $user = Auth::user();
        
        $invoice = new Invoice();
        $invoice->user_id = $user->id;
        $invoice->course_id = $course->id;
        if($request->hasFile('subscription_invoice')){
            $file = $request->file('subscription_invoice');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/invoices', $filename);
            $invoice->subscription_invoice = $filename;
        }
        else{
            return $request;
            $invoice->subscription_invoice = '';
        }
        $invoice->save();
        
        $subscribed_courses = $user->subscribed_courses;
        $subscribed_courses = $subscribed_courses.','.$course->id;

        $user->subscribed_courses =  $subscribed_courses;
        $user->save();
        return Redirect::to('/one_course/'. $course->id)->with('alert', 'تم الإشتراك بنجاح يمكنك الآن مشاهدة الكورس كاملاً')->with('website_data', $website_data);
    }
}