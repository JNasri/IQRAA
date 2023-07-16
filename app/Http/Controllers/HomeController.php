<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Models\User; // Added this line to import the User model for register function
use Illuminate\Support\Facades\Hash; // Added this line for register passowrd hashing
use Illuminate\Support\Facades\Mail;
use App\Mail\Support;

class HomeController extends Controller
{
    public function index()
    {
        $lang = app()->getLocale();

        $media_cneter = DB::table('media_center')->get();
        $media_cneter = DB::table('media_center')->orderBy('created_at', 'DESC')->take(2)->get();
        $books = DB::table('books')->get();
        $features = DB::table('content')->where([['key', 'why_iqraa'], ['lang', $lang]])->get();
        $goals = DB::table('content')->where([['key', 'goals'], ['lang', $lang]])->get();
        $more_books = DB::table('content')->where('key', 'more_books')->get();



        return view('index', [
            "media_cneter" => $media_cneter, 'books' => $books,
            'features' => $features, 'goals' => $goals,
            'more_books' => $more_books, 'lang' => $lang
        ]);
    }

    public function about()
    {
        return view('about-us');
    }

    public function inquiry(Request $request)
    {

        DB::table('inquiry')->insert(
            array(
                'name' => $request->name,
                'email' => $request->email,
                'phoneNo' => $request->phoneNo,
                'inquiry' => $request->inquiry,
            )
        );

        $inquiry =  $request->inquiry;
        $user_email = $request->email;
        $adminEmail = "";
        $subject = "New";

        $data = ['inquiry' => $inquiry, 'user_email' => $user_email];

        // dd($request->all());

        return back()->with("message", "success");
    }

    public function register(Request $request)
    {

        // Validate form data
        $validatedData = $request->validate([
            'name' => 'required|min:5|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'ConfirmPassword' => 'same:password'
        ]);

        // Create a new user with validated attributes
        $user = new User;
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        // insert the record into the database
        $user->save();

        // Flash success message
        session()->flash('success', 'Registration successful! Please login to continue.');

        // Redirect the user to the login page after success registeration
        return redirect("/login");
        // TESTING : dump all fields to the browser
        // return dd($request->all());
    }

    public function mediaCenter()
    {
        $media_cneter = DB::table('media_center')->orderBy('created_at', 'DESC')->get();

        return view("media-center", ["media_cneter" => $media_cneter]);
    }

    public function store()
    {

        $books = DB::table('books')->get();
        $more_books = DB::table('content')->where('key', 'more_books')->get();


        return view("store", [
            'books' => $books,
            'more_books' => $more_books
        ]);
    }

    public function registerPage()
    {

        $lang = app()->getLocale();


        return view("register", ['lang' => $lang]);
    }

    public function loginPage()
    {

        $lang = app()->getLocale();

        return view("private.login", ['lang' => $lang]);
    }
}
