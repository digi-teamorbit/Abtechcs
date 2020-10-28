<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inquiry;
use App\quotation;
use App\schedule;
use App\newsletter;
use App\post;
use App\banner;
use App\imagetable;
use DB;
use Mail;use View;
use Session;
use App\Http\Helpers\UserSystemInfoHelper;
use App\Http\Traits\HelperTrait;
use Auth;
use App\Profile;


class HomeController extends Controller
{   
    use HelperTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     // use Helper;
     
    public function __construct()
    {
        //$this->middleware('auth');

        $logo = imagetable::
                     select('img_path')
                     ->where('table_name','=','logo')
                     ->first();

        $logo2 = imagetable::
                     select('img_path')
                     ->where('table_name','=','logo2')
                     ->first();
             
        $favicon = imagetable::
                     select('img_path')
                     ->where('table_name','=','favicon')
                     ->first(); 
        
        View()->share('logo',$logo);
        View()->share('logo2',$logo2);
        View()->share('favicon',$favicon);

    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $banner = DB::table('banners')->where('id',1)->first();   
        
        $cms_home1 = DB::table('pages')->where('id', 3)->first();
        $cms_home2 = DB::table('pages')->where('id', 4)->first();
        $cms_home3 = DB::table('pages')->where('id', 5)->first();
        $cms_home4 = DB::table('pages')->where('id', 6)->first();
        $cms_home5 = DB::table('pages')->where('id', 7)->first();
        $cms_home6 = DB::table('pages')->where('id', 8)->first();
        $cms_home7 = DB::table('pages')->where('id', 9)->first();
        $cms_home8 = DB::table('pages')->where('id', 10)->first();
        $cms_home9 = DB::table('pages')->where('id', 11)->first();
        $cms_home10 = DB::table('pages')->where('id', 12)->first();
        $cms_home11 = DB::table('pages')->where('id', 13)->first();
        $cms_home12 = DB::table('pages')->where('id', 14)->first();
        $cms_home13 = DB::table('pages')->where('id', 15)->first();
        $cms_home14 = DB::table('pages')->where('id', 25)->first();
        $cms_home15 = DB::table('pages')->where('id', 26)->first();

        $testimonials = DB::table('testimonials')->get();
        $services = DB::table('services')->get();

        // $products = DB::table('products')->get()->take(10);

        return view('welcome', compact('banner', 'cms_home1', 'cms_home2', 'cms_home3', 'cms_home4', 'cms_home5', 'cms_home6', 'cms_home7', 'cms_home8', 'cms_home9', 'cms_home10', 'cms_home11', 'cms_home12', 'cms_home13', 'cms_home14', 'cms_home15', 'testimonials', 'services'));
    }

    public function about()
    { 
        $banner = DB::table('inner_banners')->where('id',1)->first(); 

        $cms_about1 = DB::table('pages')->where('id', 16)->first();
        $cms_about2 = DB::table('pages')->where('id', 17)->first();

        return view('about', compact('banner', 'cms_about1', 'cms_about2'));
    }

    public function contact()
    { 
        $banner = DB::table('inner_banners')->where('id',4)->first(); 

         $cms_contact1 = DB::table('pages')->where('id', 20)->first();
         $cms_contact2 = DB::table('pages')->where('id', 21)->first();
         $cms_contact3 = DB::table('pages')->where('id', 22)->first();
         $cms_contact4 = DB::table('pages')->where('id', 23)->first();
         $cms_contact5 = DB::table('pages')->where('id', 24)->first();

        return view('contact', compact('banner', 'cms_contact1', 'cms_contact2', 'cms_contact3', 'cms_contact4', 'cms_contact5'));
    }

    public function gallery()
    { 
        $banner = DB::table('inner_banners')->where('id',3)->first(); 

        $cms_gallery = DB::table('pages')->where('id', 19)->first();
        $images = DB::table('galleries')->paginate(20);

        return view('gallery', compact('banner', 'cms_gallery', 'images'));
    }

    public function services()
    { 
        $banner = DB::table('inner_banners')->where('id',2)->first(); 

        $cms_services1 = DB::table('pages')->where('id', 18)->first();
        $services = DB::table('services')->get();

        return view('services', compact('banner', 'cms_services1', 'services'));
    }

    public function quoteSubmit(Request $request)
    {
         $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
            
        ]);
        $quotation = new quotation;
        $quotation->name = $request->name;
        $quotation->email = $request->email;
        $quotation->subject = $request->subject;
        $quotation->message = $request->message;
        $quotation->save();
            
        Session::flash('message', 'Thank you for requesting. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return back();
    }
    

    public function contactUsSubmit(Request $request)
    {
         $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required'
            
        ]);
        $inquiry = new inquiry;
        $inquiry->inquiries_fname = $request->name;
        // $inquiry->inquiries_lname = $request->lname;
        $inquiry->inquiries_email = $request->email;
       // $inquiry->inquiries_phone = $request->phone;
        $inquiry->extra_content = $request->comment;
        $inquiry->save();
            
        Session::flash('message', 'Thank you for contacting us. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return back();
    }

    public function newsletterSubmit(Request $request)
    {
        $is_email = newsletter::where('newsletter_email',$request->email)->count();
        
        if($is_email == 0) {
            
        $inquiry = new newsletter;
        //$inquiry->newsletter_name = $request->name;
        $inquiry->newsletter_email = $request->email;
        //$inquiry->newsletter_message = $request->comment;
        $inquiry->save();
        Session::flash('message', 'Thank you for contacting us. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect('/');
        
        } else {
            Session::flash('flash_message', 'email already exists'); 
            Session::flash('alert-class', 'alert-success'); 
            return redirect('/');
        }
        
    }
   
}
