<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard()
    {
        return view('Backend.dashboard');
    }

    public function profile()
    {
        // return view('Backend.profile');
        $user = Auth::user();
        return view('Backend.profile', compact('user'));
    }

    // public function editProfile(){
    //     return view('Backend.editProfile');
    // }

    public function updateProfile(Request $request){
        {
            $user = Auth::user();
        
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email,' . $user->id,
                'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
        
            $data = [
                'name' => $request->name,
                'email' => $request->email,
            ];
        

            if ($request->hasFile('profile_image')) {
                // Delete old image if exists
                if ($user->profile_image && Storage::exists('public/profile_images/' . $user->profile_image)) {
                    Storage::delete('public/profile_images/' . $user->profile_image);
                }
                
                $request->profile_image->storeAs('public/profile_images', 'hello.jpg' , 'public');
                $file = $request->file('profile_image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('public/profile_images', $filename);
            
                $data['profile_image'] = $filename;
            }
  
            $user->update($data);
             return redirect()->back()->with('success', 'Profile updated successfully!');
        } 
    }
}
