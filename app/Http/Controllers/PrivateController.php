<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UsersAdmin;
use Illuminate\Support\Facades\Hash;
// added to crypt the name and password in cookies
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Auth;
use DB;

class PrivateController extends Controller
{
    public function register(Request $request)
    {

        $user = new User();
        $user->name = "Admin";
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->save();


        return dd($request->all());
    }

    public function login(Request $request)
    {

        $credentials = $request->validate([
            // NOTE : changed the login method to name and pass
            // 'email' => ['required', 'email'],
            'name' => ['required'],
            'password' => ['required'],
        ]);

        // Check if the 'remember' checkbox is selected
        $remember = $request->has('remember');

        // TESTING INPUTS AFTER SUBMIT
        // echo "<pre>";
        // print_r($request->all());
        // die;

        // if user exist in the database and credentials are correct
        // (optional remember me token if chekcbox is checked)
        if (Auth::attempt($credentials, $remember)) {
            // regenerate the session ID for the authenticated user
            $request->session()->regenerate();
            // Retrieve the authenticated user's info
            $authenticatedUser = Auth::user();
            // If user is admin redirect to dashboard  
            if ($authenticatedUser->is_admin == 1) {
                return redirect("/dashboard");
            }
            // If user not admin dump the data (later redirect to logged in home)  
            else {
                return dd($request->all());
            }
            // if email or password are invalid, return to the login page with the proper error message
        } else {

            // Invalid login credentials
            return redirect()->back()->withErrors([
                'login' => 'Invalid email or password.',
            ])->withInput();
        }
    }


    public function dashboard()
    {

        $media_cneter = DB::table('media_center')->get();
        return view("private.dashboard", ["media_cneter" => $media_cneter]);
    }

    public function addNewsPage()
    {
        return view("private.add-news");
    }


    public function addMediaCenter(Request $request)
    {

        $image = $request->image;

        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('assets/MediaCenter', $image_name);

        DB::table('media_center')->insert(
            array(
                'title' => $request->title,
                'description' => $request->description,
                'url' => $request->url,
                'image' => $image_name,
            )
        );

        return back()->with("message", "success");
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }


    public function editMediaCenter(Request $request, $id)
    {



        if ($request->filled('title')) {

            DB::table('media_center')
                ->where('id', $id)
                ->update([
                    'title' => $request->title,
                ]);
        }

        if ($request->filled('description')) {

            DB::table('media_center')
                ->where('id', $id)
                ->update([
                    'description' => $request->description,
                ]);
        }



        if ($request->filled('url')) {

            DB::table('media_center')
                ->where('id', $id)
                ->update([
                    'url' => $request->url,
                ]);
        }

        if ($request->hasFile('image')) {
            // if($request->hasFile('avatar')){
            $file = $request->image;
            $filename = time() . '.' . $file->getClientOriginalExtension();;
            $request->image->move('assets/MediaCenter', $filename);
            DB::table('media_center')
                ->where('id', $id)
                ->update([
                    'image' => $filename,
                ]);
        }

        if ($request->filled('created_at')) {

            DB::table('media_center')
                ->where('id', $id)
                ->update([
                    'created_at' => $request->created_at,
                ]);
        }
        DB::table('media_center')
            ->where('id', $id)
            ->update([
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

        return redirect()->back()->with('message', "تم تعديل الخبر بنجاح");
    }

    public function usersPage()
    {

        $users = DB::table('users')->get();
        $users_admin = DB::table('users_admin')->get();

        return view("private.users", ["users" => $users, "users_admin" => $users_admin]);
    }

    public function adduserPage()
    {

        $users = DB::table('users_admin')->get();

        return view("private.add-user", ["users" => $users]);
    }

    public function addUser(Request $request)
    {

        $request->validate([
            'name' => 'required|unique:users_admin',
            'password' => 'required|min:6',
        ]);

        // Save the username and password to the users_admin table
        $registeredUser = new UsersAdmin();
        $registeredUser->name = $request->input('name');
        $registeredUser->password = Hash::make($request->input('password'));
        $registeredUser->save();

        // Flash success message
        session()->flash('success', 'Registration successful!');

        // Redirect the user to the login page after success registeration
        return redirect("/add-user  ");
    }


    public function booksPage()
    {

        $books = DB::table('books')->get();

        return view("private.books", ["books" => $books]);
    }

    public function addbooksPage()
    {

        $books = DB::table('books')->get();

        return view("private.addbooks", ["books" => $books]);
    }

    public function addBooks(Request $request)
    {

        $image = $request->image;

        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('assets/Books', $image_name);

        DB::table('books')->insert(
            array(
                'title' => $request->title,
                'price' => $request->price,
                'url' => $request->url,
                'image' => $image_name,
            )
        );



        return back()->with("secess", "Success");
    }

    public function editBooksPage($id)
    {
        $books = DB::table('books')->where('id', $id)->get();

        return view("private.edit-books", ["books" => $books]);
    }

    public function editBooks(Request $request, $id)
    {

        if ($request->filled('title')) {

            DB::table('books')
                ->where('id', $id)
                ->update([
                    'title' => $request->title,
                ]);
        }
        if ($request->filled('price')) {

            DB::table('books')
                ->where('id', $id)
                ->update([
                    'price' => $request->price,
                ]);
        }
        if ($request->filled('url')) {

            DB::table('books')
                ->where('id', $id)
                ->update([
                    'url' => $request->url,
                ]);
        }
        if ($request->hasFile('image')) {
            // if($request->hasFile('avatar')){
            $file = $request->image;
            $filename = time() . '.' . $file->getClientOriginalExtension();;
            $request->image->move('assets/Books', $filename);
            DB::table('books')
                ->where('id', $id)
                ->update([
                    'image' => $filename,
                ]);
        }
        return redirect()->back()->with('message', "تم تعديل الكتاب بنجاح");
    }


    public function supportPage()
    {

        $inquiry = DB::table('inquiry')->orderBy('created_at', 'DESC')->paginate(15);

        return view("private.support-page", ["inquiry" => $inquiry]);
    }

    public function editMenuPage()
    {

        $menu = DB::table('content')->where("key", "menu")->orderBy('created_at', 'DESC')->paginate(15);

        return view("private.edit-menu", ["menu" => $menu]);
    }
    public function addMenuPage()
    {

        $inquiry = DB::table('inquiry')->orderBy('created_at', 'DESC')->paginate(15);

        return view("private.add-menu", ["inquiry" => $inquiry]);
    }



    public function addMenu(Request $request)
    {
        DB::table('content')->insert(
            array(
                'key' => "menu",
                'title' => $request->title,
                'slug' => $request->url,
            )
        );

        return redirect()->back()->with('message', "تمت الإضافة بنجاح");
    }

    public function editMenuByIDPage($id)
    {
        $menu = DB::table('content')->where('id', $id)->get();


        return view("private.edit-menuID", ["menu" => $menu]);
    }
}
