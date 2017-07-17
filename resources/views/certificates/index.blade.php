@extends('layouts.app')
@section('content')
<div class="container">
  <div class="col-md-3">

  </div>
  <div class="col-md-6">
    <div class="jumbotron">
        <p>Por favor escribe tu número de folio del certificado.</p>
      {!!Form::open(['url' => '/certificates', 'method' => 'GET', 'class'=>'form-horizontal']) !!}
        <div class="form-group">
            <label for="folio">Folio del certificado:</label>
            {{ Form::text('folio','',['class' => 'form-control', 'placeholder'=>'Folio'])}}
        </div>
        <div class="form-group">
        <div class="col-md-10 col-md-offset-2">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
      {!! Form::close() !!}

    </div>

  </div>
  <div class="col-md-3">

  </div>
</div>
@endsection
