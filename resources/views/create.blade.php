@extends('layouts.app')

@section('title','Add Task')

@section('styles')
<style>
.error-message{
    color:red;
    font-size: 0.8rem;
}

</style>

@endsection

@section('content')
{{-- {{ $errors }} --}}
{{-- // a {{$errors}} a http://127.0.0.1:8000/tasks/create oldalon ezt írja ki:
{"title":["The title field is required."],"description":["The description field is required."],"long_description":["The long description field is required."]} --}}
    <form method="POST" action="{{route('tasks.store')}}">
        @csrf

        {{-- //csrf token to protect from csrf attacks --}}
        {{-- always include this to any form by default exceptions can be made in middleware csfr --}}
        <div>
            <label for="title">Title</label>
            <input text="text" name="title" id="title">
            @error ('title')
                <p class="error-message">  {{ $message }} </p>
            @enderror
            {{-- The title field is required. -errormessage in the http://127.0.0.1:8000/tasks/create page under the label --}}
        </div>

        <div>
            <label for="description"> Description </label>
            <textarea name="description" id="description" rows="5"></textarea>
            @error('description')
            <p class="error-message">  {{ $message }} </p>
        @enderror
        </div>

        <div>
            <label for="long_description">Long Description </label>
            <textarea name="long_description" id="long_description" rows="10"></textarea>
            @error('long_description')
            <p class="error-message">  {{ $message }} </p>
        @enderror
        </div>

        <div>
            <button type="submit">Add task </button>
        </div>


    </form>

@endsection

