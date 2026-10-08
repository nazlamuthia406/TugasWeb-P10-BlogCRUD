@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between mb-3"><h3>Daftar Post</h3><a href="{{ route('posts.create') }}" class="btn btn-primary">+ Buat Post</a></div>
@foreach($posts as $post)
<x-card>
<h5>{{ $post->title }}</h5>
<p>{{ Str::limit($post->content, 100) }}</p>
<a href="{{ route('posts.show',$post) }}" class="btn btn-sm btn-info">Lihat</a>
<a href="{{ route('posts.edit',$post) }}" class="btn btn-sm btn-warning">Edit</a>
<form action="{{ route('posts.destroy',$post) }}" method="POST" class="d-inline">
@csrf @method('DELETE')
<button class="btn btn-sm btn-danger" onclick="return confirm('hapus?')">Hapus</button>
</form>
</x-card>
@endforeach
{{ $posts->links() }}
@endsection