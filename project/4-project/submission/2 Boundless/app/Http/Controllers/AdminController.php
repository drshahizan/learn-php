<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Festival;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.admin');
    }

    public function showUsers() {
        $users = User::all();
        return view('admin.users', ['users' => $users]);
    } 

    public function indexFestival()
    {
        $festivals = Festival::all();
        return view('admin.festivals', compact('festivals'));
    }

    public function addFestival(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'category' => 'required|in:malay,chinese,indian',
            'image' => 'required|image',
        ]);

        $festival = new Festival;

        $festival->title = $request->title;
        $festival->category = $request->category;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('public/festivals', $filename);
            $festival->image = $filename;
        }

        $festival->save();

        return redirect()->route('admin.festivals')->with('success', 'Festival added successfully');
    }

    public function deleteFestival(Festival $festival)
    {
        $festival->delete();

        Storage::delete('public/festivals/' . $festival->image);

        return back()->with('success', 'Festival deleted successfully.');
    }

    public function cultureList()
    {
        $data['culture'] = DB::table('culture')->get();

        return view('admin.culture.culture', compact('data'));
    }

    public function cultureListSubmit(Request $request)
    {
        $data2 = [
            'title' => $request->title,
            'description' => $request->desc
        ];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('public/cultures', $filename);
            $imageArray = ['image' => $filename];
        }

        DB::table('culture')->insert(array_merge(
            $data2,
            $imageArray ?? []
        ));

        return redirect()->route('admin.culture');

    }

    public function cultureListDelete(Request $request)
    {

        DB::table('culture')->where('id', $request->id)->delete();

        return true;

    }
}
