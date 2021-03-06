@extends('layouts.app')

@section('title', 'Create the post')

@section('content')

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div>
        <input type="text" name="title" value="{{ old('title') }}">
    </div>
    @error('title')
        <div>{{ $message }}</div>
    @enderror
    <div>
        <textarea name="content">{{ old('content') }}</textarea>
    </div>
    @error('content')
    <div>{{ $message }}</div>
@enderror
    
        @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <input type="submit" name="Create" >
    </div>
</form>