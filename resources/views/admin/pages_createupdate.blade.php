@extends('layouts.admin.plane')
@section('titlesection')
    Pages
            @if(isset($page))
              <small>Actualizar pages</small>
            @else
              <small>Crear pages</small>
            @endif
@stop

@section('breadcrumb')
    <li><a href="{{ URL::to('/') }}/admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('/') }}/admin/pages">Pages</a></li>
    <li class="active">Crear pages</li>
@stop
@section('content')

<div class="row">
            <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Formulario para crear pages</h3>
      </div><!-- /.box-header -->
        @if($errors->has())
            <div class='alert alert-danger'>
                @foreach ($errors->all('<p>:message</p>') as $message)
                    {!! $message !!}
                @endforeach
            </div>
        @endif
 
        @if (Session::has('message'))            
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4>  <i class="icon fa fa-check"></i> {{ Session::get('message') }}</h4>              
            </div>
        @endif
      <!-- form start -->
      @if(isset($page))
        {!! Form::model($page, ['route' => ['admin.pages.update', $page->id], 'method' => 'patch']) !!}                 
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('inputName', 'Nombre de la página en el admin:') !!}
                {!! Form::text('name', null, ["class" => "form-control", 'placeholder'=>'Ingresa nombre del page', "id" => "inputName"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputTitle', 'Titulo de la página:') !!}
                {!! Form::text('title', null, ["class" => "form-control", 'placeholder'=>'Ingresa título del page', "id" => "inputTitle"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputTitleEnglish', 'Titulo de la página ingles:') !!}
                {!! Form::text('title_en', null, ["class" => "form-control", 'placeholder'=>'Ingresa título del page en ingles', "id" => "inputTitleEnglish"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputSubTitle', 'Subtitulo de la página:') !!}
                {!! Form::text('subtitle', null, ["class" => "form-control", 'placeholder'=>'Ingresa subtitulo del page', "id" => "inputSubTitle"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputSubTitleEnglish', 'Subtitulo de la página en ingles:') !!}
                {!! Form::text('subtitle_en', null, ["class" => "form-control", 'placeholder'=>'Ingresa subtítulo del page', "id" => "inputSubTitleEnglish"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputContent', 'Contenido de la pagina:') !!}
                {!! Form::textarea('content', null, ["class" => "form-control ckeditor", 'placeholder'=>'Ingresa descripción del page', "id" => "inputContent"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputContentEnglish', 'Contenido de la pagina:') !!}
                {!! Form::textarea('content_en', null, ["class" => "form-control ckeditor", 'placeholder'=>'Ingresa descripción del page', "id" => "inputContentEnglish"]) !!}
              </div> 
              <div class="form-group">
                {!! Form::label('inputContent', 'Asociar galeria al contenido de la pagina pagina:') !!}
                {!! Form::select('galleries', array('default' => 'Selecciona') + $galleries, $page->galleries_id , ['class' => 'form-control']) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputContent', 'Asociar sección  al contenido de la pagina:') !!}
                {!! Form::select('sections', array('default' => 'Selecciona') + $sections, null , ['class' => 'form-control', 'placeholder'=>'Ingresa descripción del page'  ]) !!}
              </div>
              
            </div>
            <div class="box-footer">
              {!! Form::submit('Actualizar', ["class" => "btn btn-primary"]) !!}            
            </div>
        {!! Form::close() !!}
      @else  
        {!! Form::open(['route' => 'admin.pages.store']) !!}
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('inputName', 'Nombre de la página en el admin:') !!}
                {!! Form::text('name', null, ["class" => "form-control", 'placeholder'=>'Ingresa nombre del page', "id" => "inputName"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputTitle', 'Titulo de la página:') !!}
                {!! Form::text('title', null, ["class" => "form-control", 'placeholder'=>'Ingresa título del page', "id" => "inputTitle"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputTitleEnglish', 'Titulo de la página ingles:') !!}
                {!! Form::text('title_en', null, ["class" => "form-control", 'placeholder'=>'Ingresa título del page en ingles', "id" => "inputTitleEnglish"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputSubTitle', 'Subtitulo de la página:') !!}
                {!! Form::text('subtitle', null, ["class" => "form-control", 'placeholder'=>'Ingresa subtítulo del page', "id" => "inputSubTitle"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputSubTitleEnglish', 'Subtitulo de la página en ingles:') !!}
                {!! Form::text('subtitle_en', null, ["class" => "form-control", 'placeholder'=>'Ingresa subtítulo del page', "id" => "inputSubTitleEnglish"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputContent', 'Contenido de la pagina:') !!}
                {!! Form::textarea('content', null, ["class" => "form-control ckeditor", 'placeholder'=>'Ingresa descripción del page', "id" => "inputContent"]) !!}
              </div> 

              <div class="form-group">
                {!! Form::label('inputContentEnglish', 'Contenido de la pagina:') !!}
                {!! Form::textarea('content_en', null, ["class" => "form-control ckeditor", 'placeholder'=>'Ingresa descripción del page', "id" => "inputContentEnglish"]) !!}
              </div> 

              <div class="form-group">
                {!! Form::label('inputContent', 'Asociar galeria al contenido de la pagina pagina:') !!}
                {!! Form::select('galleries', array('default' => 'Selecciona') + $galleries, null , ['class' => 'form-control', 'placeholder'=>'Ingresa descripción del page'  ]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputContent', 'Asociar seccion  al contenido de la pagina:') !!}
                {!! Form::select('sections', array('default' => 'Selecciona') + $sections, null , ['class' => 'form-control', 'placeholder'=>'Ingresa descripción del page'  ]) !!}
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