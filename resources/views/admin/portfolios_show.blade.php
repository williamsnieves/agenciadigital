@extends('layouts.admin.plane')
@section('titlesection')
    Categoría de productos
            <small>Mostrar elementos del portafolios</small>
@stop

@section('breadcrumb')
    <li><a href="{{ URL::to('/') }}/admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">Ver portafolios</li>
@stop
@section('content')
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
<a href="{{ URL::to('/') }}/admin/portfolios/create" class="btn btn-primary" style="margin-bottom:1em;">
  Agregar elementos al portafolios
</a>
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Portafolios</h3>
        <div class="box-tools">
          <div class="input-group">
            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
            <div class="input-group-btn">
              <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
        
      </div><!-- /.box-header -->

      <div class="box-body table-responsive no-padding">
        @if(!$portfolios->isEmpty())
        <table class="table table-hover">
          <tr>
            <th>ID</th>
            <th>Url thumbnail</th>
            <th>Url imagen principal</th>
            <th>Link externo</th>
            <th>Url facebook</th>
            <th>Url twitter</th>
            <th>Url linkedin</th>
            <th>Url instagram</th>          
            <th>Fecha de Creación</th>     
            <th>Editar</th>
            <th>Eliminar</th>            
          </tr>
          @foreach ($portfolios as $portfolio)
          <tr>
            <td>{{$portfolio->id}}</td>
            <td>{{$portfolio->url_thumb}}</td> 
            <td>{{$portfolio->url_main_image}}</td> 
            <td>{{$portfolio->external_link}}</td>
            <td>{{$portfolio->url_facebook}}</td>
            <td>{{$portfolio->url_twitter}}</td>
            <td>{{$portfolio->url_linkedin}}</td>
            <td>{{$portfolio->url_instagram}}</td> 
            <td>{{date('F d, Y', strtotime($portfolio->created_at))}}</td>           
            <td>
              <a href="{{ URL::to('/') }}/admin/portfolios/{{$portfolio->id}}/edit" class="btn btn-default">
                  <i class="fa fa-edit"></i>
              </a>
            </td>
            <td>
             {!! Form::open(array('route' => array('admin.portfolios.destroy', $portfolio->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()')) !!}                
                <button type="submit" class="btn btn-default">
                  <i class="fa fa-remove"></i>
                </button>
            {!! Form::close() !!}
              
            </td>           
          </tr>
          @endforeach       
        </table>
        <?php echo $portfolios->render(); ?>
        @endif
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div>
<script>

  function ConfirmDelete()
  {
  var x = confirm("Seguro que quieres eliminar?");
  if (x)
    return true;
  else
    return false;
  }

</script>
@stop