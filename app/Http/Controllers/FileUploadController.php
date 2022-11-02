<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function showUploadForm()
    {
        return view('upload');
    }
    public function storeUploads(Request $request)
{

$resizedImage = cloudinary()->upload($request->file('image')->getRealPath(), [
            'folder' => 'webp file',
            'transformation' => [
                       'crop' => 'limit',

             ]
])->getSecurePath();

return $resizedImage;



}

}