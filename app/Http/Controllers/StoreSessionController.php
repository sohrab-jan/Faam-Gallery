<?php

namespace App\Http\Controllers;

use App\Models\FrameAssets;
use App\Models\Framing;
use App\Models\Printing;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\File;

class StoreSessionController extends Controller
{
    public function store_from_printing(): View
    {
        $printing_Session = request()->session()->get('printing_cart', []);
        $id = request()->session_item_id;
        if (empty($id)) {
            $id = uniqid('printing_item_id_');
        }

        $printing_Session[$id] = [
            'session_item_id' => $id,
            'price' => request()->price,
            'paper' => request()->paper,
            'width' => request()->width,
            'height' => request()->height,
            'scale' => request()->scale,
            'image' => request()->image,
            'ext' => request()->ext,
        ];

        request()->session()->put('printing_cart', $printing_Session);
        if (request()->frame == '1') {
            $edit_data = [
                'width' => request()->width,
                'height' => request()->height,
                'vahed' => request()->scale ?? 'cm',
            ];
            $test = request()->image;
            $ext = request()->ext;
            $print_id = $id;

            return view('pages.framingsingle', compact('edit_data', 'print_id', 'test', 'ext'));
        }

        return view('store.mycard');
    }

    public function store_from_framing(): View
    {
        $framing_Session = request()->session()->get('framing_cart', []);
        $id = request()->session_item_id;
        if (empty($id)) {
            $id = uniqid('framing_item_');
        }

        $f_asset = FrameAssets::findOrFail(request()->frame_id);

        $framing_Session[$id] = [
            'session_item_id' => $id,
            'frame_name' => $f_asset->name,
            'frame_id' => request()->frame_id,
            'mount_board' => request()->mount_board,
            'mount_color' => request()->mount_color,
            'glass' => request()->glass,
            'width' => request()->width,
            'height' => request()->height,
            'scale' => request()->scale,
            'fake_image' => request()->fake_image,
            'image' => request()->image,
            'print_id' => request()->print_id,
            'ext' => request()->ext,
        ];

        request()->session()->put('framing_cart', $framing_Session);

        return view('store.mycard');
    }

    // @param $id  var Description
    public function dublicate_store_item($id): View
    {
        //if id starts with framing_item_   then it is a framing framing_item_
        if (strpos($id, 'framing_item_') !== false) {
            $framing_Session = request()->session()->get('framing_cart', []);
            $temp = $framing_Session[$id];
            $newid = uniqid('framing_item_');
            $temp['session_item_id'] = $newid;

            $framing_Session[$newid] = $temp;

            request()->session()->put('framing_cart', $framing_Session);
        }
        //if id starts with printing_item_id_   then it is a printing printing_item_id_
        elseif (strpos($id, 'printing_item_id_') !== false) {
            $printing_Session = request()->session()->get('printing_cart', []);

            $temp = $printing_Session[$id];
            $newid = uniqid('printing_item_id_');
            $temp['session_item_id'] = $newid;

            $printing_Session[$newid] = $temp;

            request()->session()->put('printing_cart', $printing_Session);
        }

        return view('store.mycard');
    }

    // @param $id frame id from session
    public function delete_store_item($id): View
    {
        if (strpos($id, 'framing_item_') !== false) {
            $framing_Session = request()->session()->get('framing_cart', []);
            unset($framing_Session[$id]);
            request()->session()->put('framing_cart', $framing_Session);
        } elseif (strpos($id, 'printing_item_id_') !== false) {
            $product_Session = request()->session()->get('printing_cart', []);
            unset($product_Session[$id]);
            request()->session()->put('printing_cart', $product_Session);
        }

        return view('store.mycard');
    }

    public function edit_store_item($id): View
    {

        $framing_Session = request()->session()->get('framing_cart', []);
        $edit_data = $framing_Session[$id];

        $session_item_id = $id;

        return view('pages.framingsingle', compact('edit_data', 'session_item_id'));
    }

    public function store_session_data()
    {
        $framing_Session = request()->session()->get('framing_cart', []);
        $printing_Session = request()->session()->get('printing_cart', []);
        $imglist = [];
        $idlist = [];
        foreach ($printing_Session as $item) {
            if (! empty($item['image'])) {
                $image = $item['image'];
                $ext = $item['ext'];
                $image = str_replace('data:image/'.$ext.';base64,', '', $image);
                $image = str_replace(' ', '+', $image);
                $imageName = hexdec(uniqid()).'.'.$ext;
                File::put(public_path('images-upload').'/'.$imageName, base64_decode($image));
                $img_url = 'images-upload/'.$imageName;
                $imglist[$item['session_item_id']] = $img_url;
            }

            //insert and get id
            $pid = Printing::insertGetId([
                'price' => $item['price'] ?? null,
                'paper' => $item['paper'],
                'image' => $img_url,
                'user_id' => $item['user_id'] ?? null,
                'width' => $item['width'],
                'height' => $item['height'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            $idlist[$item['session_item_id']] = $pid;

            unset($printing_Session[$item['session_item_id']]);
        }

        foreach ($framing_Session as $item) {
            $img_url = '';
            if (! empty($imglist[$item['print_id']])) {
                $img_url = $imglist[$item['print_id']];
            } elseif (! empty($item['image'])) {
                $image = $item['image'];
                $ext = $item['ext'];
                $image = str_replace('data:image/'.$ext.';base64,', '', $image);
                $image = str_replace(' ', '+', $image);
                $imageName = hexdec(uniqid()).'.'.$ext;
                File::put(public_path('images-upload').'/'.$imageName, base64_decode($image));
                $img_url = 'images-upload/'.$imageName;
            }

            Framing::insert([
                'frame_id' => $item['frame_id'],
                'user_id' => $item['user_id'] ?? null,
                'mount_board' => (int) $item['mount_board'],
                'mount_color' => $item['mount_color'],
                'price' => $item['price'] ?? null,
                'glass' => (int) $item['glass'],
                'width' => $item['width'],
                'height' => $item['height'],
                'printing_id' => $idlist[$item['print_id']] ?? $item['print_id'] ?? null,
                'scale' => $item['scale'],
                'product_id' => $item['product_id'] ?? null,
                'image' => $img_url,
            ]);
            //remove session
            unset($framing_Session[$item['session_item_id']]);
        }

        request()->session()->put('framing_cart', $framing_Session);
        request()->session()->put('printing_cart', $printing_Session);
        $printing_Session = request()->session()->get('printing_cart', []);

        return redirect()->route('home');
    }
}
