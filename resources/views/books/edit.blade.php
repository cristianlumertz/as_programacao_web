@extends('layouts.base')

@section('content')


<form class="max-w-sm mx-auto" action="{{ url('books/'.$book->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-5">
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
        <input type="text" name="title" id="title" value="{{ $book->title}}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>
    <div class="mb-5">
        <label for="author" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type</label>
        <input type="text" name="author" id="author" value="{{ $book->author}}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>
    <div class="mb-5">
        <label for="release" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Power</label>
        <input type="text" name="release" id="release" value="{{ $book->release}}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>
    <div class="mb-5">
        <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Power</label>
        <input type="text" name="gender" id="gender" value="{{ $book->gender}}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>
    <div class="mb-5">
        <img src="{{asset($book->image)}}" alt="">
        <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
        <input type="file" name="image" id="image"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"type="submit">Update Pokemon</button>
</form>
@endsection