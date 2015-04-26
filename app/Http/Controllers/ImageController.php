<?php namespace SE\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use SE\Component;
use SE\Http\Requests;
use SE\Http\Controllers\Controller;

use Illuminate\Http\Request;

use SE\Http\Requests\CreateImagePostRequest;
use SE\Image;
use SE\Post;

class ImageController extends Controller {

	//
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('image.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateImagePostRequest $request)
    {
        // are we downloading an image from another site?
        if($request->has('image_url'))
        {   $fileInfo = pathinfo($request->get('image_url'));

            $imageFile = file_get_contents($request->get('image_url'));
            $fileName = $fileInfo['basename'];
            $disk = Storage::disk('s3')->put($fileName, $imageFile);
        }
        // we are uploading an image
        else
        {
            $imageFile = $request->file('uploaded_image');
          //  dd($imageFile->getFilename());
            $extension = $imageFile->getClientOriginalExtension();
            $fileName = $imageFile->getClientOriginalName();
            $disk =Storage::disk('s3')->put($fileName,  File::get($imageFile));

           // $disk = Storage::disk('s3')->move($imageFile->getFilename(), $fileName);
        }




        if($disk == true){
            $imageInput = $request->only('url','description');
            $imageInput['user_id'] = 1;
            $imageInput['url'] = ''.$fileName;

            $image = Image::create($imageInput);


            $component = new Component();
            $image->components()->save($component);


            $postInput = $request->only('title');
            $postInput['user_id'] = 1;
            $postInput['category_id'] = 1;

            $post = Post::create($postInput);
            $post->components()->save($component);


            return redirect()->route('post',$post->slug)->with('message','Stupidity Detected');
        }
    }
}
