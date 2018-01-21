<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CreateVideoRequest;
use Request;
use App\Video;
use Auth;
use Session;


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
        $categories = Category::pluck('name','id');
        return view('videos.create')->with('categories',$categories);

    }

    public function store(CreateVideoRequest $request){

        $video = new Video($request->all());
        Auth::user()->videos()->save($video);
        $categoryIds = $request->input('CategoryList');
        $video->categories()->attach($categoryIds);
        Session::flash('video_created','Videos was uploaded ');
        return redirect('videos');
    }

    public function edit($id){
        $categories = Category::pluck('name','id');
        $video = Video::findOrFail($id);
        return view('videos.edit',compact('video','categories'));

    }

    public function update($id,CreateVideoRequest $request){

        $video = Video::findOrFail($id);
        $video->update($request->all());
        $video->categories()->sync($request->input('CategoryList'));
        return redirect('videos');

    }

}
