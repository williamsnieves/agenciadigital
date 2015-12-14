@extends('layouts.admin.plane')
@section('titlesection')
    Portafolios
            @if(isset($category))
              <small>Actualizar portafolios</small>
            @else
              <small>Crear portafolios</small>
            @endif
@stop

@section('breadcrumb')
    <li><a href="{{ URL::to('/') }}/admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ URL::to('/') }}/admin/categories">portafolios</a></li>
    <li class="active">Crear portafolios</li>
@stop
@section('content')

<div class="row">
            <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Formulario para crear portafolios</h3>
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
      @if(isset($portfolios))
        {!! Form::model($portfolios, ['route' => ['admin.portfolios.update', $portfolios->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}                 
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('inputLink', 'Link externo:') !!}
                {!! Form::text('external_link', null, ["class" => "form-control", 'placeholder'=>'Ingresa el link', "id" => "inputLink"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputFace', 'url de proyecto facebook:') !!}
                {!! Form::text('url_facebook', null, ["class" => "form-control", 'placeholder'=>'Ingresa url de facebook', "id" => "inputFace"]) !!}
              </div>  
              <div class="form-group">
                {!! Form::label('inputTwit', 'url de proyecto twitter:') !!}
                {!! Form::text('url_twitter', null, ["class" => "form-control", 'placeholder'=>'Ingresa url de twitter', "id" => "inputTwit"]) !!}
              </div>  
              <div class="form-group">
                {!! Form::label('inputInsta', 'url de proyecto instagram:') !!}
                {!! Form::text('url_instagram', null, ["class" => "form-control", 'placeholder'=>'Ingresa url de instagram', "id" => "inputInsta"]) !!}
              </div>  
              <div class="form-group">
                {!! Form::label('inputLinked', 'url de proyecto linkedin:') !!}
                {!! Form::text('url_linkedin', null, ["class" => "form-control", 'placeholder'=>'Ingresa url de linkedin', "id" => "inputLinked"]) !!}
              </div>  
              <div class="form-group">
                {!! Form::label('inputCat', 'Categorías:') !!}
                {!! Form::select('categories', array('default' => 'Selecciona') + $categories, $portfolios->categories_id , ['class' => 'form-control', 'placeholder'=>'Ingresa descripción del page'  ]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputThumb', 'Cargar thumbnail:') !!}
                {!! Form::file('url_thumb', null, ["class" => "form-control", "id" => "inputThumb"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputBig', 'Cargar imagen principal:') !!}
                {!! Form::file('url_main_image', null, ["class" => "form-control", "id" => "inputBig"]) !!}
              </div>             
            </div>
            <div class="box-footer">
              {!! Form::submit('Actualizar', ["class" => "btn btn-primary"]) !!}            
            </div>
        {!! Form::close() !!}
      @else  
        {!! Form::open(['route' => 'admin.portfolios.store', 'enctype' => 'multipart/form-data']) !!}
            <div class="box-body">
              <div class="form-group">
                {!! Form::label('inputLink', 'Link externo:') !!}
                {!! Form::text('external_link', null, ["class" => "form-control", 'placeholder'=>'Ingresa el link', "id" => "inputLink"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputFace', 'url de proyecto facebook:') !!}
                {!! Form::text('url_facebook', null, ["class" => "form-control", 'placeholder'=>'Ingresa url de facebook', "id" => "inputFace"]) !!}
              </div>  
              <div class="form-group">
                {!! Form::label('inputTwit', 'url de proyecto twitter:') !!}
                {!! Form::text('url_twitter', null, ["class" => "form-control", 'placeholder'=>'Ingresa url de twitter', "id" => "inputTwit"]) !!}
              </div>  
              <div class="form-group">
                {!! Form::label('inputInsta', 'url de proyecto instagram:') !!}
                {!! Form::text('url_instagram', null, ["class" => "form-control", 'placeholder'=>'Ingresa url de instagram', "id" => "inputInsta"]) !!}
              </div>  
              <div class="form-group">
                {!! Form::label('inputLinked', 'url de proyecto linkedin:') !!}
                {!! Form::text('url_linkedin', null, ["class" => "form-control", 'placeholder'=>'Ingresa url de linkedin', "id" => "inputLinked"]) !!}
              </div>  
              <div class="form-group">
                {!! Form::label('inputCat', 'Categorías:') !!}
                {!! Form::select('categories', array('default' => 'Selecciona') + $categories, null , ['class' => 'form-control', 'placeholder'=>'Ingresa descripción del page'  ]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputThumb', 'Cargar thumbnail:') !!}
                {!! Form::file('url_thumb', null, ["class" => "form-control", "id" => "inputThumb"]) !!}
              </div>
              <div class="form-group">
                {!! Form::label('inputBig', 'Cargar imagen principal:') !!}
                {!! Form::file('url_main_image', null, ["class" => "form-control", "id" => "inputBig"]) !!}
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