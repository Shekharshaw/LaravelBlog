<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
//use Cviebrock\EloquentSluggable\Services\SlugServices;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('blog.index')
        ->with('posts',Post::orderBy('updated_at','DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'=>'required',
            'descreption'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg|max:5048'
        ]);


        $newImageName = uniqid() . '_' . $request->title . '.' . 
        $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

       // $slug = SlugServices::createSlug(Post::class, 'slug',$request->title);
       //

            Post::create([
                'title'=>$request->input('title'),
                'descreption'=>$request->input('descreption'),
                'image_path'=>$newImageName,
                'user_id' => auth()->user()->id
            ]);
                return redirect('/blog')->with ('message','Your post has been added !');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //$data= Post::find($id);
        return view('blog.show')
        ->with('post',Post::where('id',$id)->first());
       // return view('show',['post'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('blog.edit')
        ->with('post',Post::where('id',$id)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'descreption'=>'required'
        ]);

        Post::where('id', $id)
        ->update([
            'title'=>$request->input('title'),
            'descreption'=>$request->input('descreption'),
            'user_id' => auth()->user()->id
        ]);
        return redirect('/blog')->with ('message','Your post has been Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('id', $id);
        $post->delete();

        return redirect('/blog')->with ('message','Your post has been deleted !');
    }
}
