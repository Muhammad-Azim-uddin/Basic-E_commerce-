<?php

use Illuminate\Support\Facades\Auth;


// if (!function_exists('getProfileImage')) {
//     function getProfileImage() {
//         // if (Auth::user()->profile_image) {
//         //     return asset('storage/profile_images/' . Auth::user()->profile_image);
//         // } else {
//         //     return "https://api.dicebear.com/9.x/initials/svg?seed=" . Auth::user()->name;
//         // }           
        
//         $user = Auth::user();
//     // if ($user && $user->profile_image && Storage::exists('public/profile_images/' . $user->profile_image)) {
//     //     return asset('storage/profile_images/' . $user->profile_image);
//     // } 
//     if(Auth::user()->profile_image){
//         return asset('storage/profile_images/' . $user->profile_image);
//     }else {
//         return "https://api.dicebear.com/9.x/initials/svg?seed=" . Auth::user()->name;
//     }
//     }
// }



if (!function_exists('getProfileImage')) {
    function getProfileImage() {
        $user = Auth::user();

        if ($user && $user->profile_image) {
            return asset('storage/profile_images/' . $user->profile_image);
        } elseif ($user) {
            return "https://api.dicebear.com/9.x/initials/svg?seed=" . urlencode($user->name);
        } else {
            return "https://api.dicebear.com/9.x/initials/svg?seed=Guest";
        }
    }
}







if(!function_exists('general_status')){
    function general_status($status){
        if($status == 1){
            return '<span class="badge bg-success">Active</span>';
    }else{
            return '<span class="badge bg-danger">Inactive</span>';
        }
    }
}


?>
