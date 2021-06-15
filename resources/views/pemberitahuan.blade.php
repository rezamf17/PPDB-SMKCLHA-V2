@extends('layouts.app')
@section('title')
Pengumuman
@endsection
@section('content')
@foreach ($pengumuman as $element)
<div class="carrejudul">
	<h3>{{$element->judul}}</h3>
	{!!$element->isi!!}
</div>

@endforeach
@endsection