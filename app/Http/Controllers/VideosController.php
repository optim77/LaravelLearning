<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVideoRequest;
use Request;
use App\Video;
use Auth;

class VideosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['only' => $this->create()]);
    }

    public function index(){

        $videos = Video::latest()->get();
        return view('videos.index')->with('videos',$videos);

    }

    public function show($id){
        $video = Video::findOrFail($id);
        return view('videos.show')->with('video',$video);
    }


    public function create(){

        return view('videos.create');

    }

    public function store(CreateVideoRequest $request){

        $video = new Video($request->all());
        Auth::user()->videos()->save($video);
        return redirect('videos');
    }

    public function edit($id){

        $video = Video::findOrFail($id);
        return view('videos.edit')->with('video',$video);

    }

    public function update($id,CreateVideoRequest $request){

        $video = Video::findOrFail($id);
        $video->update($request->all());
        return redirect('videos');

    }

}
