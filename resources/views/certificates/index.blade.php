@extends('layouts.app')
@section('content')
<div class="container">
  <div class="col-md-3">

  </div>
  <div class="col-md-6">
    @if($certificado)
      <div class="jumbotron">
        <h2>Certificado {{$certificado->folio}}</h2>

        <span>Nombre(s):</span><p>{{$certificado->firstname}}</p>
        <span>Apellido(s):</span><p>{{$certificado->firstname}}</p>
        <span>Curso:</span><p>{{$certificado->course->name}}</p>
        <span>Fecha de emisión:</span><p>{{$certificado->date_of_issue}}</p>
        <a class="btn btn-primary" href="{{ url('/certificates') }}"> Regresar </a>
      </div>
    @else
      <div class="jumbotron">
        <p>Por favor escribe tu número de folio del certificado.</p>
        {!!Form::open(['url' => '/certificates', 'method' => 'GET', 'class'=>'form-horizontal']) !!}
          <div class="form-group">
              <label for="folio">Folio del certificado:</label>
              {{ Form::text('folio','',['class' => 'form-control', 'placeholder'=>'Folio'])}}
          </div>
          <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
              <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
          </div>
        {!! Form::close() !!}

      </div>
    @endif
  </div>
  <div class="col-md-3">

  </div>
</div>
@endsection
