@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15 ">
        <h1 class="text-6xl">
            Update Post 
        </h1>
    </div>
</div>
    @if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-4/5 mb-4 text-grey-50 bg-red-700 rounded-2x py-4">
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>
        
    @endif
<div class="w-4/5 m-auto pt-20"> 
    <form action="/blog/{{$post->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{$post->title}}" class="bg-transparent block boder-b-2 w-full h-20 text-6xl outline-none"><br>
        <textarea name="descreption" placeholder="Description..." 
        class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none">
        {{$post->title}}</textarea><br>
      
        <button type="submit" class="uppercase bg-blue-500 bg-transparent text-grey-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
            Submit Post
        </button>
    </form>
</div>

@endsection