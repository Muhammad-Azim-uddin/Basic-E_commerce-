<?php

// function getProfileImage(){
//     return "https://api.dicebear.com/9.x/initials/svg?seed=".auth()->user()->name;
// }


if (!function_exists('getProfileImage')) {
    function getProfileImage() {
        // return "https://api.dicebear.com/9.x/initials/svg?seed=" . auth()->user()->name ;
        if (auth()->user()->profile_image) {
            return asset('storage/' . auth()->user()->profile_image);
        } else {
            return "https://api.dicebear.com/9.x/initials/svg?seed=" . auth()->user()->name;
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
