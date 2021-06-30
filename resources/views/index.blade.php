@extends('layouts.app')

@section('content')
<div class="background-image grid grig-cols-1 m-auto">
    <div class="flex text-grey-100 pt-10">
        <div class="m-auto pt-4 pdpb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                Do you wan to become a developer
            </h1>
            <a href="/blog" class="text-center bg-grey-50 text-grey-700 py-2 px-4 font-bold text-xl uppercase">
                Read More
            </a>
        </div>
    </div>
</div>
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-grey-200">
    <div>
        <img src="https://cdn.pixabay.com/photo/2014/05/02/21/47/laptop-336369_960_720.jpg" width="400" alt="">
    </div>
    <div class="m-auto sm:m-auto text-left w--4/5 block">
        <h2 class="text-3xl font-extrabold text-grey-600">
            Struggling to be a better Web developer?
        </h2>
        <p class="py-8 text-grey-500 text-s">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio, soluta vitae ex id
        </p>
        <p class="font-extrabold text-grey-600 text-s pb-9">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id dolores dolore odio deserunt velit. Cumque
            minima reiciendis aliquid sed id sit nam doloribus et! In veritatis fugit voluptatem omnis aut.
        </p>
        <a href="/blog" class="uppercase bg-blue-500 text-grey-100 text-s font-extrabold py-3 px-8 
           rounded-3xl">Find out More</a>
    </div>
</div>
<div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl pb-5 text-l">
        I am an expert in..
    </h2>
    <span class="font-extrabold block text-4xl py-1">
        Ux design
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Project Management
    </span>
    <span class="font-extrabold block text-4xl py-1">
        digital Strtategy
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Backend Development
    </span>
</div>
<div class="text-center py-15">
    <span class="uppercase text-s text-grey-400">
        Blog
    </span>
    <h2 class="text-4xl font-bold py-10">
        Recent Post
    </h2>
    <p class="m-auto w-4/5 text-gray-500">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero nulla autem quia necessitatibus, rem magnam
        dolorum inventore aperiam accusamus dicta similique soluta iste vero aliquid dignissimos odio nam iusto totam!
    </p>
</div>

<div class="sm:grid grid-cols-2 w-500 m-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-xs">
                PHP
            </span>
            <h3 class="text-xl font-bold py-10">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, perspiciatis neque. Quidem soluta
                possimus, cum cumque ipsam laborum nisi minima, alias quibusdam deleniti repellat veritatis asperiores
                pariatur maxime fugit laudantium.
            </h3>
            <a href=""
                class="uppercase bg-transparent border-2 border-grey-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">Find
                out More</a>

        </div>
    </div>
    <div>
        <img src="https://cdn.pixabay.com/photo/2014/05/02/21/47/laptop-336369_960_720.jpg" width="700" alt="">
    </div>
</div>
@endsection