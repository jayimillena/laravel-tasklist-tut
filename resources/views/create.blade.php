@extends('layouts.app')

@section('title', 'Add Task')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0, 8rem;
        }
    </style>
@endsection

@section('content')
    <form method="POST" action="{{ route('task.store') }}">
    @csrf
        <div>
            <label for="title">
                Title
            </label>
            @if (session()->has('success'))
                <div>{{ sesssion('success') }}</div>
            @endif
            <input type="text" name="title" id="title">
            @error('title')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="description">
                Description
            </label>
            <textarea name="description" id="description" rows="5"></textarea>
            @error('description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="long_description">
                Long Description
            </label>
            <textarea name="long_description" id="long_description" rows="5"></textarea>
            @error('long_description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <input type="submit" value="Add Task">
        </div>
    </form>
@endsection
