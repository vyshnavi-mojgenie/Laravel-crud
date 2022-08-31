<?php

namespace App\Http\Controllers;
//  use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Carbon\Carbon;

class FrontEndController extends Controller
{
    public function homePage(){
        $users = User::active()->latest()->paginate(6);
        return view('welcome',compact('users'));

        // $users =User::all(); //select * from users
        // $user = User::find(10);  //select * from users where user_id = 10
        // $users = User::where('user_id','=',10)->first();
        // $users = User::active()->latest()->paginate(5);
        // Log::info('query executed');
        // session()->put('user_name','vyshnavi');
        // session()->put('user_id',45);
        // session()->flash('date',date('d-M-Y'));
        
        //return view('welcome');
    }
    public function about(){
       
        return view('about');

    }
    public function contact(){
        return view('contact');

    }
    public function create(){
        // return session ()->get('user_name');
        return view('users.create');
    }
    public function save(){
     
        // return "form submitted";

        $name = request('name');
       
        $email = request('email');
      
        
        $phone  = request('phone');
        
        $dob = Carbon::parse(request('dob'));
        // dd($dob);

        $status = request('status') === "1" ? true : false;
        // dd($status);

        User::create([
                'name'=>$name,
                'email'=>$email,
                'phone'=>$phone,
                'dob'=> trim($dob),
                'status'=>$status
            ]);
            session()->forget('user_name');
                
            return redirect()-> route('login')->with('message','User Created Successfully!!!!');
            
            return "1 row inserted";
    }
        
    
    public function edit($userId){
        
         $user=User::find(decrypt($userId));
        //  $user->dob = date('Y-m-d',strtotime($user->DOB));
         $test = 'Hi';
         return view('users.edit',compact('user','test'));

        // return ($user->user_id == 15);
        // return "user got it";
        //  return decrypt($userId);
        // $user = User::where('user_id',$userId)->first();
    }

    public function update($userId){
        
        $user=User::find($userId);
        // dd($user);
        // $dob =User::find($userId);
       
        $user -> update([
           
                                                                                    
                'name'=> request('name'),
                'email'=>request('email'),
                'phone'=>request('phone'),
                'dob' =>request('dob'),
                // B'=> Carbon::parse(request('DOB')),
               
                'status'=>request('status'),
            ]);
            return redirect()-> route('welcome')->with('message',' Updated Successfully!!!!');
        // return request()->except('_token');

}

    public function delete($userId){
        $user = User::find(decrypt($userId));
        $user->delete();
        return redirect()-> route('welcome')->with('message',' Deleted!!!!');

    }

    public function view($userId){
       $user=User::find(decrypt($userId));
        return view('users.view',compact('user'));
    }

}





// MVC=> MODEL ->Database Operation

// VIEW ->HTML page,What is user see

// // CONTROLLER ->Used for Controlling,Manipulation 

