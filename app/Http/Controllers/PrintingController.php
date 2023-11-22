<?php

namespace App\Http\Controllers;

use App\Models\Printing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PrintingController extends Controller
{
    //
    public function printing()
    {
        // code...
        return view('pages/printingsingle');
    }

    public function UploadPrinting()
    {
        return view('pages.uploadprinting');
    }

    public function UploadImgPrinting(Request $request)
    {
        //        $request->validate([
        //            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        //        ]);
        $image = $request->file('image');
        if (! empty($image)) {
            $test = base64_encode(file_get_contents($image));
            $ext = $image->getClientOriginalExtension();

            return view('pages.printingsingle', compact('test', 'ext'));
        }

        return view('pages.printingsingle');
    }

    public function StorePrinting(Request $request)
    {
        //        $request->validate([
        //            'frame_id' => 'required',
        ////            'user_id' => 'required',
        //            'mount_board' => '',
        //            'mount_color' => '',
        //            'glass' => '',
        //            'image' => '',
        //            'width' => '',
        //            'height' => '',
        //            'printing_id' => '',
        //            'price' => '',
        //            'scale' => '',
        //            'product_id' => ''
        //        ]);

        $frame = $request->frame;
        $image = $request->image;  // your base64 encoded
        $test = $image;
        $ext = $request->ext;
        $print_id = $request->print_id ?? null;
        $img_url = '';
        if ($frame == 0) {
            $edit_data = [
                'width' => $request->width,
                'height' => $request->height,
                'vahed' => $request->vahed ?? 'cm',
            ];

            return view('pages.framingsingle', compact('test', 'ext', 'print_id', 'edit_data'));
        }

        if (! empty($image)) {
            $image = str_replace('data:image/'.$ext.';base64,', '', $image);
            $image = str_replace(' ', '+', $image);
            $imageName = hexdec(uniqid()).'.'.$ext;
            File::put(public_path('images-upload').'/'.$imageName, base64_decode($image));
            $img_url = 'images-upload/'.$imageName;
        }

        Printing::insert([
            'price' => $request->price,
            'paper' => $request->paper,
            'width' => $request->width,
            'frame' => $request->frame,
            'height' => $request->height,
            'image' => $img_url,
        ]);

        return redirect()->route('addtocart');
    }

    public function PrintingList()
    {
        $printing_list = Printing::latest()->get();

        return view('admin.printinglist', compact('printing_list'));
    }

    public function DeletePrinting($id)
    {
        Printing::findorFail($id)->delete();

        return redirect()->route('allprinting')->with('message', 'Printing Item Deleted  Successfully!');
    }
}
