<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Entry;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use Intervention\Image\Image;
// use Intervention\Image\ImageManager;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick;
use Illuminate\Support\Facades\Storage;
 
class EntryController extends Controller
{
    public function allEntriesView()
{
    // Get all entries ordered by the latest
    $allentryData = Entry::latest()->get();

    $allentryDataUser = $allentryData->pluck('username')->unique();

    $entryUserData = $allentryData->groupBy('username');

    return view('admin.backend.all_entries', compact('allentryDataUser', 'entryUserData'));
}

public function entryStatus(Request $request)
{
    $statuses = $request->input('status');
    $reasons = $request->input('reason');

    foreach ($statuses as $entryId => $status) {
        $entry = Entry::find($entryId);
        if ($entry) {
            $entry->status = $status;
            $entry->reason = $reasons[$entryId] ?? null;
            $entry->save();
        }
    }

    return redirect()->back()->with('success', 'Entries updated successfully!');
}

   
    public function addEntryView(){
        $id = Auth::user()->id;
        $staff = User::find($id);
        $staffmail = $staff->email;
        $staffUsername = $staff->username;
        return view('staff.backend.entry.add_entry', compact('staffUsername', 'staffmail'));
    }

    public function addNewEntry(Request $request){
        Entry::insert([
            'link' => $request->url,
            'username' => $request->username,
            'staff_email' => $request->staff_mail,
            'email' => $request->mail,
        ]);

        $notification = array(
            'message'=> 'Entry successfully added',
            'alert-type'=> 'success'
        );
        return redirect()->route('staff.dashboard')->with($notification);
    }

    public function editEntryView($id){
        $entry = Entry::find($id);
        return view("staff.backend.entry.edit_entry", compact('entry'));
    }

    public function UpdateEntry(Request $request){
        $entry_id = $request->id;
    
            Entry::find($entry_id)->update([
              'link' => $request->url,
              'email' => $request->email,
            ]);
    
            $notification = array(
                'message'=> 'Entry updated successfully',
                'alert-type'=> 'success'
            );
            return redirect()->route('staff.dashboard')->with($notification);
        }
    

    public function DeleteEntry($id){
        $ent_id = Entry::find($id);
        Entry::find($id)->delete();

        $notification = array(
            'message'=> 'Entry deleted successfully',
            'alert-type'=> 'success'
        );
        return redirect()->back()->with($notification);
    }


    // SUB CATEGORIES
  
    public function DeleteAll(){
        Entry::truncate();

        $notification = array(
            'message' => 'All entries deleted successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.dashboard')->with($notification);
    }
}
