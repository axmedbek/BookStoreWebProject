<?php

namespace App\Http\Controllers\Admin;

use App\Publisher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class PublisherController extends Controller
{
    public function index()
    {
        $publishers = Publisher::all();
        return view('admin.pages.publishers.publishers', compact('publishers'));
    }

    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [

        ]);
        if ($validator->fails()) {

        } else {
            if ($request->get('id') == 0) {
                $publisherObj = new Publisher();
            } else {
                $publisherObj = Publisher::find($request->get('id'));
            }

            $publisherObj->name = $request->get('name');

            if ($request->hasFile('publisher_img')) {
                $publisher_img = $request->file('publisher_img');
                $publisherImgDestination = public_path() . '/images/front/images/publisher_images/';
                $publisherImgUrl = time() . strtolower($request->get('name')) . $publisher_img->getClientOriginalName();
                $publisherImage = Image::make($publisher_img);
                $publisherImage->save($publisherImgDestination . $publisherImgUrl);
                $publisherObj->publisher_img = $publisherImgUrl;
            }

            $publisherObj->save();

            return response()->json(['status' => 'ok' , 'data' => $publisherObj->toArray()]);
        }
    }
}
