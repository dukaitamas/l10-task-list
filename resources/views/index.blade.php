@extends('layouts.app')

@section('title', 'The List of tasks')

@section('content')
<!-- @isset($name)
<div>The name is: {{ $name }}</div>
@endisset -->

<!-- //<div> -->
    <!-- @if(count($tasks) ) -->
    <!-- @foreach($tasks as $task) -->
    <!-- <div>There are tasks!</div> -->
    <!-- <div> {{ $task->title }}</div>
    @endforeach
    @else
    <div>There are no tasks!</div> -->
    <!-- @endif -->
<!-- </div> -->
 @forelse($tasks as $task)
    <div>
         <a href="{{ route('tasks.show',['task'=> $task->id]) }}">{{ $task->title }}</a>
         {{-- 'id'=> changed to task --}}
        </div>
    @empty
    <div>
        There are no tasks!
    </div>
    @endforelse
<!-- //same result as the previous one with if else -->
@if ($tasks->count())
        <nav>{{ $tasks->links() }}</nav>

@endif

@endsection

