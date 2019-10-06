<?php

namespace App\Http\Controllers;

use App\Management\PhotoManagementInterface;
use Illuminate\Http\Request;
use App\Http\Requests\ImagesRequest;
use Illuminate\Support\Str;

class PhotoController extends Controller
{
    public function getForm()
    {
        return view('photo');
    }

    public function postForm(ImagesRequest $request, PhotoManagementInterface $photoManagement)
	{
        if($photoManagement->save($request->file('image'))) {
            return view('photo_ok');
        }
        return redirect('photo')
            ->with('error','Désolé mais votre image ne peut pas être envoyée !');

    }

}
