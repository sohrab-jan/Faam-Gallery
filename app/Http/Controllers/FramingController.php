<?php

namespace App\Http\Controllers;

use App\Models\Framing;
use App\Models\Printing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FramingController extends Controller
{
    public function Framing()
    {
        return view('pages.framing');
    }

    public function PhysicalFraming()
    {
        return view('pages.framingsingle');
    }

    public function Physical()
    {
        return view('pages.wandh');
    }

    public function FramingStore()
    {
        return view('pages.framingsingle');
    }

    public function upload()
    {
        return view('pages.upload');
    }

    //    public function UploadImg(){
    //
    //        return redirect()->route('framingsingle');
    //    }
    public function UploadImgFraming(Request $request)
    {
        //        $request->validate([
        //            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        //        ]);
        $image = $request->file('image');
        if (! empty($image)) {

            $test = base64_encode(file_get_contents($image));
            $ext = $image->getClientOriginalExtension();

            return view('pages.framingsingle', compact('test', 'ext'));

        }

        return view('pages.framingsingle');

    }

    public function StoreFraming(Request $request)
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
        $image = $request->image;  // your base64 encoded
        $ext = $request->ext;
        $img_url = '';
        if (! empty($image)) {
            $image = str_replace('data:image/'.$ext.';base64,', '', $image);
            $image = str_replace(' ', '+', $image);
            $imageName = hexdec(uniqid()).'.'.$ext;
            File::put(public_path('images-upload').'/'.$imageName, base64_decode($image));
            $img_url = 'images-upload/'.$imageName;
        }

        //        $printing_id = Printing::where('id', $printing_id)->value('printing_id');
        //

        Framing::insert([
            'frame_id' => $request->frame_id,
            'user_id' => $request->user_id,
            'mount_board' => (int) $request->mount_board,
            'mount_color' => $request->mount_color,
            'price' => $request->price,
            'glass' => (int) $request->glass,
            'width' => $request->width,
            'height' => $request->height,
            'printing_id' => $request->printing_id,
            'scale' => $request->scale,
            'product_id' => $request->product_id,
            'image' => $img_url,
        ]);

        return redirect()->route('addtocart');
    }

    public function FramigList()
    {
        $framing_list = Framing::latest()->get();

        return view('admin.framinglist', compact('framing_list'));
    }

    public function DeleteFraming($id)
    {
        Framing::findorFail($id)->delete();

        return redirect()->route('framelist')->with('message', 'Framing Item Deleted  Successfully!');
    }

    public function AddToCart()
    {
        //      $allprinting = Printing::latest()->get();
        return view('pages.add-framing-cart');
    }

    public function AddFramingToCart($id)
    {
        //        $framing = $request->id;
        $framing = Framing::findOrFail($id);
        $cart_framing = request()->session()->get('add-framing-cart', []);

        $quantity = request()->get('quantity');
        if (isset($cart_printing[$id])) {
            $quantity += $cart_printing[$id]['quantity'];
        }

        $cart_framing[$id] = [
            'printing_id' => $framing->printing_id,
            'paper' => $framing->paper,
            'frame' => $framing->frame,
            'image' => $framing->image,
            'price' => $framing->price,
            'quantity' => $quantity,
        ];
        request()->session()->put('add-framing-cart', $cart_framing);

        return view('pages.add-framing-cart')->with('success', 'Product add to cart successfully');

    }
}
