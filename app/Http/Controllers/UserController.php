<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $resource = "Users";
        $pageTitle = "View All Users";
        $users = User::all();
        return view('admin.users.index',compact('users','pageTitle','resource'));
    }

    public function create(){
        $pageTitle = "Create User";
        return view('admin.users.create',compact('pageTitle'));
    }
    public function edit($uniqueid){        
        $user = User::where('uniqueid',$uniqueid)->first();
        $pageTitle = "Editing User : ".$user->name;
        if($user){
            return view('admin.users.edit',compact('user','pageTitle'));
        }
        else{
            return redirect()->route('admin.users.all')->with(['message'=>'User Not Found','alert-type'=>'error']);
        }
    }
    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return back()->with(['message'=>'User Deleted Successfully','alert-type'=>'success']);
    }

    public function store(StoreUserRequest $request){
        if($request->validated()){
            $data = $request->validated();
            $data['uniqueid'] = str()->random('7');            
            $data['password'] = Hash::make($data['password']);
            $created = User::create($data);

            if($created){
                return redirect()->route('admin.users.all')->with(['message'=>'User Created Successfully','alert-type'=>'success']);
            }
            else{
                return back()->with(['message'=>'An Error Occured','alert-type'=>'error']);
            }
        }        
    }

    public function update(UpdateUserRequest $request,$id){
        $user = User::findOrFail($id);

        if($request->validated()){
            $data = $request->validated();

            if(isset($data['password']))  {
                $data['password'] = Hash::make($data['password']);
            }     
             
            $updated = $user->update($data);

            if($updated){
                return redirect()->route('admin.users.all')->with(['message'=>'User Updated Successfully','alert-type'=>'success']);
            }
            else{
                return back()->with(['message'=>'An Error Occured','alert-type'=>'error']);
            }
        }        
    }
}
