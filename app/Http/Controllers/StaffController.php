<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\User;
use App\Models\Entry;
use Illuminate\Support\Facades\Hash;


class staffController extends Controller
{
    Public function staffDashboard(){
        $id = Auth::user()->id;
        $staffData = User::find($id);
        $entryData = Entry::where('staff_email', $staffData->email)->get();
    
        return view('staff.index', compact('entryData'));
    }

    public function staffLogin(){
        return view('login');
    }

    public function staffLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/staff/login');
    }

    Public function staffProfile(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
         
        return view('staff.staff_profile_view', compact('profileData'));
    }

    public function staffProfileStore(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/staff_images'), $filename);
            $data['photo']= $filename;
        }

        $data->save();

        $notification = array(
            'message'=> 'staff Profile Updated Successfully',
            'alert-type'=> 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function staffPassword(){
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view("staff.staff_password", compact('profileData'));
    }

    public function staffChangePass(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|confirmed',
        ]);

        if(!Hash::check($request->currentPassword, $data->password)){
            $notification = array(
                'message' => 'current password does not match',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }

        $data->update([
            'password' => Hash::make($request->newPassword)
        ]);
            $notification = array(
                'message' => 'Password changed successfully',
                'alert-type' => 'success'
            );
            return back()->with($notification);
    }
}
