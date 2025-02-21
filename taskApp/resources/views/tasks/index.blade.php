@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-4">
<h1 class="text-2xl font-bold mb-4">All Tasks</h1>
{{-- search and sort form --}}
<https://docs.google.com/document/d/1jZU5dfM3PS6DddQ8ixdQRh9VqiFV7YuBH1jdICPdFww/edit?usp=sharingform action="{{ route('tasks.index') }}" method="GET" class="mb-4">
<input
type="text"
name="search"
value="{{ request('search') }}"
placeholder="Search tasks..."
class="border border-gray-300 px-2 py-1 rounded"
>
<select name="sort" class="border border-gray-300 px-2 py-1 rounded">
<option value="task_name" {{ request('sort') === 'task_name' ? 'selected' : '' }}>
Alphabetical
</option>
<option value="deadline" {{ request('sort') === 'deadline' ? 'selected' : '' }}>
Deadline
</option>
<option value="category" {{ request('sort') === 'category' ? 'selected' : '' }}>
Category
</option>
</select>
<button type="submit" class="bg-black text-white px-4 py-2 ml-2 rounded hover:bg-gray-500">
Search & Sort
</button>
</form>
<ul>
@forelse($tasks as $task)
<li class="mb-2">
{{ $task->task_name }}
<a href="{{ route('tasks.show', $task->id) }}" class="text-blue-600 underline ml-2">
View
</a>
</li>
@empty
<li>No tasks yet.</li>
@endforelse
</ul>
<div class="mt-4">
<a href="{{ route('tasks.create') }}"
class="bg-black text-white px-4 py-2 rounded hover:bg-gray-500">
Create a New Task
</a>
</div>
@endsection
