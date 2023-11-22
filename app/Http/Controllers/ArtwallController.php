<?php

namespace App\Http\Controllers;

use App\Models\Artwall;
use Illuminate\Http\Request;

class ArtwallController extends Controller
{
    public function Index()
    {
        $exhibitions = Artwall::latest()->get();

        return view('admin.activities.listexhibition', compact('exhibitions'));
    }

    public function AddExhibition()
    {
        return view('admin.activities.addexhibition');
    }

    public function StoreExhibition(Request $request)
    {
        $request->validate([
            //            'exhibition_name' => '',
            //            'artist' => '',
            //            'title' => '',
            //            'exhibition_short_des' => '',
            //            'exhibition_long_des' => '',
            //            'upcoming_title' => '',
            //            'date' => '',
            //            'slug' =>'',
            'image_exhibition' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $img = $request->file('image_exhibition');
        $image_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
        $request->image_exhibition->move(public_path('images-activities'), $image_name);
        $image_url = 'images-activities/'.$image_name;

        $image_artist = $request->file('image_artist');
        $img_name = hexdec(uniqid()).'.'.$image_artist->getClientOriginalExtension();
        $request->image_artist->move(public_path('images-activities'), $img_name);
        $img_url = 'images-activities/'.$img_name;

        Artwall::insert([
            'exhibition_name' => $request->exhibition_name,
            'image_artist' => $img_url,
            'artist' => $request->artist,
            'title' => $request->title,
            'exhibition_short_des' => $request->exhibition_short_des,
            'exhibition_long_des' => $request->exhibition_long_des,
            'upcoming_title' => $request->upcoming_title,
            'date' => $request->date,
            'image_exhibition' => $image_url,
            'slug' => strtolower(str_replace('', '-', $request->exhibition_name)),

        ]);

        return redirect()->route('all-exhibition')->with('message', 'Product Added  Successfully!');
    }

    public function EditExhibitionImg($id)
    {
        $exhibition_info = Artwall::findorFail($id);

        return view('admin.activities.editexhibitionimg', compact('exhibition_info'));
    }

    public function UpdateExhibitionImg(Request $request)
    {
        $request->validate([
            'image_exhibition' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        $id = $request->id;
        $img = $request->file('image_exhibition');
        $image_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
        $request->image_exhibition->move(public_path('images-activities'), $image_name);
        $image_url = 'images-activities/'.$image_name;

        Artwall::findorFail($id)->update([
            'image_exhibition' => $image_url,
        ]);

        return redirect()->route('all-exhibition')->with('message', 'Exhibition Image Updated Successfully!');
    }

    public function EditExhibition($id)
    {
        $exhibition_info = Artwall::findorFail($id);

        return view('admin.activities.editexhibition', compact('exhibition_info'));
    }

    public function UpdateExhibition(Request $request)
    {
        $exhibition_info = $request->id;

        Artwall::findorFail($exhibition_info)->update([
            'exhibition_name' => $request->exhibition_name,
            'artist' => $request->artist,
            'title' => $request->title,
            'exhibition_short_des' => $request->exhibition_short_des,
            'exhibition_long_des' => $request->exhibition_long_des,
            'upcoming_title' => $request->upcoming_title,
            'date' => $request->date,
        ]);

        return redirect()->route('all-exhibition')->with('message', 'Exhibition Information Updated Successfully!');
    }

    public function DeleteExhibition($id)
    {
        Artwall::findorFail($id)->delete();

        return redirect()->route('all-exhibition')->with('message', 'Exhibition Deleted  Successfully!');
    }
}
