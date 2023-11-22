<?php

namespace App\Http\Controllers;

use App\Models\FrameAssets;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class FrameAssetsController extends Controller
{
    //
    public function Index(): View
    {
        $frame_assets = FrameAssets::latest()->get();

        return view('admin.frame_assets.list', compact('frame_assets'));
    }

    public function getList(): JsonResponse
    {
        $frame_assets = FrameAssets::latest()->get();

        return response()->json([
            'message' => 'success',
            'assets' => $frame_assets,
        ]);
    }
}
