@extends('layouts.app')
@section('content')
<h3>Edit Post</h3>
<form action="{{ route('posts.update',$post) }}" method="POST">
@csrf @method('PUT')
<input type="text" name="title" value="{{ old('title',$post->title) }}" class="form-control mb-2">
<textarea name="content" class="form-control mb-2" rows="5">{{ old('content',$post->content) }}</textarea>
<button class="btn btn-success">Update</button>
<a href="{{ route('posts.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection