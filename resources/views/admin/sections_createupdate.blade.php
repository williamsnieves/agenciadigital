@extends('layouts.admin.plane')
@section('titlesection')
    Categoría de Productos
            @if(isset($category))
              <small>Actualizar secciones</small>
            @else
              <small>Crear secciones</small>
            @endif
@stop

@section('breadcrumb')
    <li><a href="{{ URL::to('/') }}/admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('/') }}/admin/sections">seccion</a></li>
    <li class="active">Crear Sección</li>
@stop
@section('content')

<div class="row">
            <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Formulario para crear secciones</h3>
      </div><!-- /.box-header -->
        @if($errors->has())
            <div class='alert alert-danger'>
                @foreach ($errors->all('<p>:message</p>') as $message)
                    {!! $message !!}
                @endforeach
            </div>
        @endif

        @if (Session::has('customexception'))            
            <div class='alert alert-danger'>
                {{ Session::get('customexception') }}
            </div>
        @endif
 
        @if (Session::has('message'))            
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4>  <i class="icon fa fa-check"></i> {{ Session::get('message') }}</h4>              
            </div>
        @endif
      <!-- form start -->
      @if(isset($section))
        {!! Form::model($section, ['route' => ['admin.sections.update', $section->id], 'method' => 'patch']) !!}                 
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('inputName', 'Nombre de la seccion:') !!}
                {!! Form::text('name', null, ["class" => "form-control", 'placeholder'=>'Ingresa nombre de la seccion', "id" => "inputName"]) !!}
              </div>             
            </div>
            <div class="box-footer">
              {!! Form::submit('Actualizar', ["class" => "btn btn-primary"]) !!}            
            </div>
        {!! Form::close() !!}
      @else  
        {!! Form::open(['route' => 'admin.sections.store']) !!}
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('inputName', 'Nombre de la seccion:') !!}
                {!! Form::text('name', null, ["class" => "form-control", 'placeholder'=>'Ingresa nombre de la seccion', "id" => "inputName"]) !!}
              </div>     
            </div>
            <div class="box-footer">
              {!! Form::submit('Guardar', ["class" => "btn btn-primary"]) !!}            
            </div>
        {!! Form::close() !!}
      @endif
    </div><!-- /.box -->
  </div><!--/.col (left) -->
</div>   <!-- /.row -->

@stop


@section('footerscript')
    <script>
    var protocol,host, base_url;

      protocol = window.location.protocol;
      host = window.location.host;

      base_url = host;
      function formatState (state) {       
        if (!state.id) { return state.text; }
        var url = protocol+"//"+base_url+"/filemanager/userfiles/categorias/"+state.text;       
        var $state = $(
          '<span><img width="50" height="50" src="'+url+'" />' + state.text + '</span>'
        );
        
        return $state;
      };
      $(".select2thumbs").select2({
        templateResult: formatState
      });
    </script>
@stop