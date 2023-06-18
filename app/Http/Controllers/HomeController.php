<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\FormSubmission;

class HomeController extends Controller
{
    public function apropos()
    {
        return view('apropos', ['metaend_date'=>'apropos']);
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        return view('home',compact('user'));
    }
public function user_edit()
{
    $user = Auth::user();

    return view('dashboard.user.profile', compact('user'));
}

     public  function showCalendar(Request $request){
            $user = Auth::user();

        if($request->ajax()){
        $data =FormSubmission::all();
        $events = array() ;
        $event = array() ;
        foreach($data as $d){
        $event['id']=$d->id ;
        $event['note']=$d->note ;

    $event['title']=$d->name ;
    $event['start']=$d->start_date ; 
     $event['end']=$d->end_date ;
    $event['className'] = $d->color . ' ' . $request->input('colorChosen');
    array_push($events, $event);
   
   } ;
  return response()->json($events); 
        }
    
        
        return view('hel', compact('user')) ;
    }
    public function user_update(Request $request, $id)
    {
        $user = $this->getUserById($id);

        if ($user->id != Auth::user()->id) {
            abort(404);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'phone_number' => 'nullable|string|max:20',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cover_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');


        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('storage/images/'), $imageName);
            $user->image = $imageName;
        }

        if ($request->hasFile('cover_pic')) {
            $cover_picName = time().'.'.$request->cover_pic->getClientOriginalExtension();
            $request->cover_pic->move(public_path('storage/cover_pics/'), $cover_picName);
            $user->cover_pic = $cover_picName;
        }

        $user->save();

        return redirect()->route('home', $id)->with('success','Admin information updated successfully.');
    }

    private function getUserById($id)
    {
        return User::findOrFail($id);
    }
   
    //delete user 
     public function user_delete($id)
{
    $user = $this->getUserById($id);

    if ($user->id != Auth::user()->id) {
        abort(404);
    }

    $user->delete();

    return redirect()->route('home')->with('success', 'Profile deleted successfully.');
}
}
