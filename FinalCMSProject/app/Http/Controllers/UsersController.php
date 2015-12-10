<?php namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller {

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $users  = User::latest()->get();
        return view('users.index', compact('users'));
    }


    public function create(){
        $roles = Role::lists('name','id');
        return view('users.create', compact('roles'));
    }

    public function  show($id)
    {

        $user = User::findOrFail($id);
        return view('users.show')->with('user', $user);
    }

    public function store(UserRequest $request){

        If($request->password === $request->confirm_password){
            $user = User::create( $request->all());
            $user->roles()->attach($request->input('role_list'));
            $user->save();
            flash()->success('Your user has been created.');
            return redirect('users')->with('flash_message');
        }
        else{
            flash()->error('Problem in creating new user.');
            return redirect('users')->with('flash_message');
        }

    }

    public function edit($id){

        $user = User::findOrFail($id);
        $roles = Role::lists('name','id');
        //$page = Page::lists('title','id');
        //$all_pages = Article::lists('all_pages');
        return view('users.edit', compact('user','roles'));
    }

    public function update(UserRequest $request, $id){

        If($request->password === $request->confirm_password){
            $user = User::findOrFail($id);
            $user->update($request->all());
            $user->roles()->sync($request->input('role_list'));
            flash()->success('Your user has been updated.');
            return redirect('users')->with('flash_message');
        }
        else{
            flash()->error('Problem in updating the user.');
            return redirect('users')->with('flash_message');
        }

    }

    public function destroy($id){
        $user = User::findOrFail($id);
        if($user == null){
            return ('Record Not Found');
        }
        $user->delete();
        flash()->success('Your user has been deleted successfully.');
        return redirect('users')->with('flash_message');
    }

}
