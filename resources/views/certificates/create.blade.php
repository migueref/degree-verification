@extends('layouts.app')
@section('content')
<div class="container">
  <div class="col-md-3">

  </div>
  <div class="col-md-6">
    <div class="jumbotron">
      <p>Registro de certificado</p>
      {!!Form::open(['url' => '/certificates', 'method' => 'POST', 'class'=>'form-horizontal']) !!}
        <div class="form-group">
            <label for="folio">Folio del certificado:</label>
            {{ Form::text('folio','',['class' => 'form-control', 'placeholder'=>'Folio'])}}
        </div>
        <div class="form-group">
            <label for="folio">Nombre(s):</label>
            {{ Form::text('firstname','',['class' => 'form-control', 'placeholder'=>'Escribe nombre'])}}
        </div>
        <div class="form-group">
            <label for="folio">Apellido(s):</label>
            {{ Form::text('lastname','',['class' => 'form-control', 'placeholder'=>'Escribe apellido'])}}
        </div>
        <div class="form-group">
            <label for="folio">Fecha de expedición:</label>
            {{ Form::date('date_of_issue','',['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            <label for="folio">Fecha de expedición:</label>
            {{ Form::select('course_id',$courses,['class' => 'form-control'])}}
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
