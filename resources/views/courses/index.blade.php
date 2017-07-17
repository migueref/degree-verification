@extends('layouts.app')
@section('content')
<div class="container">
  @foreach($courses as $course)
    <div class="jumbotron col-md-4">
      <span>Nombre del curso:</span>
      <p>{{$course->name}}</p>
      <span>Clave del curso:</span>
      <p>{{$course->shortname}}</p>

    </div>
  @endforeach
  <div class="col-xs-12">
      {{ $courses->links() }}
    </div>
</div>
@endsection
