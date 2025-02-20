<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Entry;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AdminController extends Controller
{
    Public function AdminDashboard(){
        $userData = User::where('role', 'staff')->latest()->get();
        $totalStaff = User::where('role', 'staff')->count();
        $totalEntries = Entry::count();
        return view('admin.index', compact('userData', 'totalStaff', 'totalEntries' ));
    }


    public function UpdateStaffStatus(Request $request){
        $userId = $request->input('user_id');
        $isChecked = $request->input('is_checked', 0);

        $user = User::find($userId);
        if($user){
            $user->status = $isChecked;
            $user->save();
        }

        return response()->json(['message'=> 'Staff Status Updated Successfully']);
    }

    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return view('/Admin/login');
    }

    public function AdminLogin(){
        return view('login');
    }
    public function AdminProfile(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_profile_view', compact('profileData'));
    }

    public function AdminProfileStore(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['photo']= $filename;
        }

        $data->save();

        $notification = array(
            'message'=> 'Admin Profile Updated Successfully',
            'alert-type'=> 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function AdminPassword(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_password', compact('profileData'));
    }

    public function AdminChangePass(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|confirmed'
        ]);

        if (!Hash::check($request->currentPassword, $data->password)) {
            $notification = array(
                'message'=> 'Current password does not match!',
                'alert-type'=> 'error'
            );
            return back()->with($notification);
        }
        
        $data->update([
            'password' => Hash::make($request->newPassword)
        ]);
        $notification = array(
            'message'=> 'Password changed successfully',
            'alert-type'=> 'success'
        );
        return back()->with($notification);
    
    }

    //staff
    public function BecomestaffView(){
        return view('frontend.staff.become_staff');
    }

    public function  allEntriesView(){
        $entryDatas = Category::latest()->get();
        return view('admin.backend.all_entries', compact('entryDatas'));
    } 

    public function entryStatus(Request $request){
        Entry::insert([
            'status'=> $request->status,
            'Reason'=> $request->reason,
        ]);
        return redirect()->route('all.Entries');
    }  

    public function Registerstaff(Request $request){
        $request->validate([
            'name' =>['required', 'string', 'max:255'],
            'username' =>['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            
        ]);

        User::insert([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' =>  Hash::make($request->password),
            'address' => $request->address,
            'phone' => $request->phone,
            'role' => 'staff',
            'status' => '0',
        ]);

        $notification = array(
            'message' => 'staff registered successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('staff.login')->with($notification);
    }

    public function DeleteAll(){
        Entry::truncate();
        $notification = array(
            'message' => 'Entries Deleted successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.dashboard')->with($notification);

    }

}
