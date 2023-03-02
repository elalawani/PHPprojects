@extends('layouts.app')

@section('content')
    <div class=" container m-auto text-center pt-15 pb-5">
        <h1 class="text-6xl font-bold "> Edit your Post </h1>
    </div>

    <div class=" container m-auto pt-15 pb-5">
        <form
            action="/blog/{{$post->slug}}"
            method="POST"
            enctype="multipart/form-data"
        >
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <input
                type="text"
                name="title"
                value="{{$post->title}}"
                class="w-full h-20 text-6xl rounded-lg shadow-lg border-b p-15 mb-5"
            >
            <textarea
                name="description"
                class="w-full h-60 text-l rounded-lg shadow-lg border-b p-15 mb-5"
            >
                {{$post->description}}
            </textarea>
            <div class="py-15 ">
                <lable
                    class="bg-gray-200 hover:bg-gray-700 text-gray-700 hover:text-gray-200 transition duration-300
                    cursor-pointer p-5 rounded-lg font-bold uppercase
                    ">
                    <span>Select file</span>
                    <input type="file" name="image" class="cursor-pointer">
                </lable>
            </div>

            <button
                type="submit"
                class="bg-green-700 hover:bg-green-200
                       text-gray-200 hover:text-gray-700
                       transition duration-300
                       cursor-pointer p-5 rounded-lg font-bold uppercase
                       "
            >publish your post</button>

        </form>
    </div>
@endsection
