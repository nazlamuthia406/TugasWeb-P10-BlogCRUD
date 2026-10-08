@extends('layouts.app')
@section('content')
<h3>Buat Post</h3>
<form action="{{ route('posts.store') }}" method="POST">
@csrf
<input type="text" name="title" value="{{ old('title') }}" class="form-control mb-2" placeholder="Judul">
<textarea name="content" class="form-control mb-2" rows="5" placeholder="Konten">{{ old('content') }}</textarea>
<button class="btn btn-success">Simpan</button>
<a href="{{ route('posts.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection