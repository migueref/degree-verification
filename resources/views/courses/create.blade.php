@extends('layouts.app')
@section('content')
<div class="container">
  <div class="col-md-3">

  </div>
  <div class="col-md-6">
    <div class="jumbotron">
      <p>Registro de curso</p>
      {!!Form::open(['url' => '/courses', 'method' => 'POST', 'class'=>'form-horizontal']) !!}
        <div class="form-group">
            <label for="folio">Nombre del curso:</label>
            {{ Form::text('name','',['class' => 'form-control', 'placeholder'=>'Nombre del curso'])}}
        </div>
        <div class="form-group">
            <label for="folio">Clave del curso:</label>
            {{ Form::text('shortname','',['class' => 'form-control', 'placeholder'=>'Clave del curso'])}}
        </div>

        <div class="form-group">
          <div class="col-md-10 col-md-offset-2 text-right">
            <button type="submit" class="btn btn-primary">Guardar Registro</button>
          </div>
        </div>
      {!! Form::close() !!}

    </div>
  </div>
  <div class="col-md-3">

  </div>
</div>
@endsection
