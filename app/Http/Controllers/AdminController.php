<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Course;
use App\Message;
use App\Service;
use App\Invoice;
use App\Setting;
use App\User;
use App\Requirement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

//    private $invalid_email;

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);

        return view('home', compact('permission', 'new_services', 'website_data'));
    }

    public function new_course(){
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);
        
        return view('admin.new_course', compact('permission', 'new_services', 'website_data'));
    }

    public function store_course(Request $request){
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);

        $course = new Course();
        $course->name = $request->name;
        $course->instructor = $request->instructor;
        $course->total_hours = $request->total_hours;
        $course->introduction = $request->introduction;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/courses', $filename);
            $course->image = $filename;
        }
        else{
            return $request;
            $course->image = '';
        }

        if($request->hasFile('video')){
            $file = $request->file('video');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('videos/courses', $filename);
            $course->video = $filename;
        }
        else{
            return $request;
            $course->video = '';
        }

        $course->course_link = $request->course_link;
        $course->price = $request->price;
        $course->save();

        return redirect('admin/admin_courses')->with('permission', $permission)->with('new_services', $new_services)->with('alert','تمت إضافة الكورس بنجاح')->with('website_data', $website_data);
    }

    public function edit_course($id){
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);
        $course = Course::find($id);
        // return $course;

        return view('admin.edit_course', compact('course', 'permission', 'new_services', 'website_data'));
    }

    public function update_course(Request $request, $id){

        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);

        $course = Course::find($id);

        if($request->name != null)
            $course->name = $request->name;

        if($request->instructor != null)
            $course->instructor = $request->instructor;

        if($request->total_hours != null)    
            $course->total_hours = $request->total_hours;

        if($request->introduction != null)
            $course->introduction = $request->introduction;
            
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/courses', $filename);
            $course->image = $filename;
        }

        if($request->hasFile('video')){
            $file = $request->file('video');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('videos/courses', $filename);
            $course->video = $filename;
        }
            
        if($request->course_link != null)
            $course->course_link = $request->course_link;
            
        if($request->price != null)
            $course->price = $request->price;

        $course->save();

        return redirect('/admin/admin_courses')->with('permission', $permission)->with('new_services', $new_services)->with('alert','تم تحديث بيانات الكورس بنجاح')->with('website_data', $website_data);
    }

    public function admin_courses(){
        $website_data = Setting::find(1);
        $courses = Course::orderBy('id', 'desc')->paginate(5);
        $html_content = [];
        foreach($courses as $course)
        array_push($html_content, $course->introduction);
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();

        return view('admin.admin_courses', compact('courses', 'permission', 'new_services', 'html_content', 'website_data'));
    }

    public function course_soft_delete($id){
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);
        
        $course = Course::find($id);
        $course->deleted_at = $course->updated_at;
        $course->save();

        return redirect()->back()->with('permission', $permission)->with('new_services', $new_services)->with('alert','تمت حذف الكورس بنجاح')->with('website_data', $website_data);
    }

    public function course_restore($id){
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);

        $course = Course::find($id);
        $course->deleted_at = null;
        $course->save();
        return redirect()->back()->with('permission', $permission)->with('new_services', $new_services)->with('alert','تم إسترجاع الكورس بنجاح')->with('website_data', $website_data);
    }

    public function new_admin(){
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);
        
        return view('admin.create', compact('permission', 'new_services', 'website_data'));
    }

    public function store_admin(Request $request){
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);
        
        $this->validate($request,[
            'name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
        $admin = Admin::create(['name' => $request['name'], 'email' => $request['email'], 'password' => Hash::make($request['password']),]);
        return redirect('admin/admins')->with('permission', $permission)->with('new_services', $new_services)->with('alert','تم إنشاء حساب الآدمن بنجاح')->with('website_data', $website_data);
    }

    public function edit_admin($id){
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);
        
        $admin = Admin::find($id);
        return view('admin.edit', compact('admin', 'permission', 'new_services', 'website_data'));
    }

    public function update_admin(Request $request, $id){
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);

        $this->validate($request, [
            'name' => 'string|max:50',
            'email' => 'string|email|max:100',
            'password' => 'string|min:6|confirmed'
        ]);

        $admin = Admin::find($id);

        if($request->name != null)
            $admin->name = $request->name;

        if($request->email != null)
            $admin->email = $request->email;

        if($request->password != null)
            $admin->password = bcrypt($request->password);

        $admin->save();

        return redirect('/admin/admins')->with('permission', $permission)->with('new_services', $new_services)->with('alert','تم تحديث بيانات الآدمن بنجاح')->with('website_data', $website_data);
    }

    public function admins(){
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);

        $admins = Admin::orderBy('id', 'desc')->paginate(7);
        return view('admin.index', compact('admins', 'permission', 'new_services', 'website_data'));
    }

    public function soft_delete($id){
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);
        
        $admin = Admin::find($id);
        $admin->deleted_at = $admin->updated_at;
        $admin->save();

        return redirect()->back()->with('permission', $permission)->with('new_services', $new_services)->with('website_data', $website_data);
    }

    public function restore($id){
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);

        $admin = Admin::find($id);
        // $admin->restore();
        $admin->deleted_at = null;
        $admin->save();
        return redirect()->back()->with('permission', $permission)->with('new_services', $new_services)->with('website_data', $website_data);
    }

    public function profile(){
        $admin = Auth::guard('admin')->user();
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);

        return view('admin.profile', compact('admin', 'permission', 'new_services', 'website_data'));
    }

    public function update_profile(Request $request){
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);

        // $this->validate($request, [
        //     'name' => 'string|max:50',
        //     'email' => 'string|email|max:100',
        //     'password' => 'string|min:6|confirmed'
        // ]);

        $admin = Auth::guard('admin')->user();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        $admin->save();

        return redirect()->back()->with('permission', $permission)->with('new_services', $new_services)->with('alert','تم تحديث بياناتك بنجاح')->with('website_data', $website_data);

    }
    
    public function user_service_requests(){
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);
        
        $services = Service::orderBy('id', 'desc')->where('active_status', 'active')->paginate(5);
        
        return view('admin.user_service_requests', compact('permission', 'services', 'new_services', 'website_data'));
    }
    
    public function delete_service($id){
        $service = Service::find($id);
        $service->active_status = 'inactive';
        $service->save();
        return redirect()->back()->with('alert', 'تم حذف الخدمة بنجاح');
    }
    
    public function one_request($id){
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);
        
        $service = Service::find($id);
        $service->read_status = 'read';
        $service->save();
        
        return view('admin.one_request', compact('permission', 'new_services', 'service', 'website_data'));
    }
    
    public function approve_request($id){
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);
        
        $service = Service::find($id);
        $service->status = 'approved';
        $service->reject_message = 'none';
        $service->save();
        
        return redirect('/admin/user_service_requests')->with('permission', $permission)->with('new_services', $new_services)->with('alert', 'تم قبول الطلب بنجاح')->with('website_data', $website_data);
    }
    
    public function reject_request($id){
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);
        
        $service = Service::find($id);
        
        return view('admin.rejection_message', compact('permission', 'new_services', 'service', 'website_data'));
    }
    
    public function reject_message(Request $request, $id){
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);
        
        $service = Service::find($id);
        $service->reject_message = $request->reject_message;
        $service->status = 'rejected';
        $service->save();
        
        return redirect('/admin/user_service_requests')->with('permission', $permission)->with('new_services', $new_services)->with('alert', 'تم ارسال الرسالة')->with('website_data', $website_data);
    }
    
    public function courses_invoices(){
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);
        
        $invoices = Invoice::orderBy('id', 'desc')->where('active_status', 'active')->paginate(5);
        $invoice_data = [];
        foreach($invoices as $invoice){
            $user = User::find($invoice->user_id)->name;
            $course = Course::find($invoice->course_id)->name;
            array_push($invoice_data, $user, $course);
        }
        return view('admin.courses_invoices', compact('permission', 'new_services', 'invoices', 'invoice_data', 'website_data'));
    }
    
    public function delete_invoice($id){
        $invoice = Invoice::find($id);
        $invoice->active_status = 'inactive';
        $invoice->save();
        return redirect()->back()->with('alert', 'تم حذف الفاتورة بنجاح');
    }
    
    public function edit_invoice($id){
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);
        
        $invoice = Invoice::find($id);
        
        return view('admin.edit_invoice', compact('permission', 'new_services', 'website_data','invoice'));
    }
    
    public function update_invoice(Request $request, $id){
        $invoice = Invoice::find($id);
        // return $invoice;
        
        if($request->hasFile('subscription_invoice')){
            $file = $request->file('subscription_invoice');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/invoices', $filename);
            $invoice->subscription_invoice = $filename;
        }
        $invoice->save();
        
        return redirect('/admin/courses_invoices')->with('alert', 'تم تعديل الفاتورة بنجاح');
    }
    
    public function vew_one_invoice($id){
        $website_data = Setting::find(1);
        
        $invoice = Invoice::find($id);
        $user_id = $invoice->user_id;
        $course_id = $invoice->course_id;
        $user = User::find($user_id)->name;
        $course = Course::find($course_id)->name;
        $invoice_data = [$user, $course];
        return redirect()->back()->with('invoice', $invoice)->with('user', $user)->with('course', $course)->with('invoice_data', $invoice_data)->with('website_data', $website_data);
        
    }
    
    // public function unsubscribe($id){
    //     $invoice = Invoice::find($id);
    //     $invoice->status = 'unsubscribed';
    //     $invoice->save();
    //     $course = Course::find($invoice->course_id);
    //     $user = User::find($invoice->user_id);
    //     $subscribed_courses = $user->subscribed_courses;
    //     ltrim($subscribed_courses,$course->id);
    //     $user->subscribed_courses = $subscribed_courses;
    //     $user->save();
    //     return redirect()->back()->with('alert', 'تم إلغاء الإشتراك');
    // }
    
    public function website_data(){
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);
        
        return view('admin.website_data', compact('permission', 'new_services', 'website_data'));
    }
    
    public function update_website_data(Request $request){
        $website_data = Setting::find(1);
        $website_data->name = $request->name;
        $website_data->email = $request->email;
        $website_data->phone = $request->phone;
        $website_data->address = $request->address;
        $website_data->description = $request->description;
        $website_data->about_text = $request->about_text;
        $website_data->keywords = $request->keywords;
        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/logos', $filename);
            $website_data->logo = $filename;
        }
        else{
            return $request;
            $website_data->logo = '';
        }
        $website_data->twitter_link = $request->twitter_link;
        $website_data->facebook_link = $request->facebook_link;
        $website_data->website_video_link = $request->website_video_link;
        $website_data->linkedin_link = $request->linkedin_link;
        $website_data->save();
        
        return redirect()->back()->with('alert', 'تم تحديث بيانات الموقع بنجاح')->with('website_data', $website_data);
    }
    
    public function users(){
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);
        $users = User::orderBy('id', 'desc')->paginate(7);
        
        return view('admin.users', compact('permission', 'new_services', 'website_data', 'users'));
    }
    
    public function request_service_requirements(){
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);
        $service_requirements = Requirement::find(1);
        
        return view('admin.request_service_requirements', compact('permission', 'new_services', 'website_data', 'service_requirements'));
    }
    
    public function submit_request_service_requirements(Request $request){
        $permission = Auth::guard('admin')->user();
        $new_services = Service::where('read_status', 'unread')->get();
        $website_data = Setting::find(1);
        
        $service_requirements = Requirement::find(1);
        $service_requirements->bank_name = $request->bank_name;
        $service_requirements->customer_name = $request->customer_name;
        $service_requirements->bank_account = $request->bank_account;
        $service_requirements->price = $request->price;
        $service_requirements->save();
        
        return redirect()->back()->with('permission', $permission)->with('new_services', $new_services)->with('alert', 'تم تعديل بيانات السداد')->with('website_data', $website_data)->with('service_requirements', $service_requirements);
    }
    
    public function reset_service_requirements(){
        $service_requirements = Requirement::find(1);
        $service_requirements->bank_name = 'غير محدد';
        $service_requirements->customer_name = 'غير محدد';
        $service_requirements->bank_account = 'غير محدد';
        $service_requirements->price = 0;
        $service_requirements->save();
        return redirect()->back()->with('alert', 'تم حذف بيانات الحساب');
    }
}