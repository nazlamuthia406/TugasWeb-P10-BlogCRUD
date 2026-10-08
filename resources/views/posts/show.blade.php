@extends('layouts.app')
@section('content')
<x-card>
<h3>{{ $post->title }}</h3>
<p>{{ $post->content }}</p>
<small>Dibuat: {{ $post->created_at }}</small><br><br>
<a href="{{ route('posts.index') }}" class="btn btn-secondary">Kembali</a>
</x-card>
@endsection