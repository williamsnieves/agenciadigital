@extends('layouts.admin.plane')

@section('titlesection')
    Dashboard
            <small>Control panel</small>
@stop

@section('breadcrumb')
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
@stop
@section('content')

<div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{$pages}}</h3>
          <p>Paginas</p>
        </div>
        <div class="icon">
          <i class="ion ion-ios-photos-outline"></i>
        </div>
        <a href="{{ URL::to('/') }}/admin/pages" class="small-box-footer">Mas info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{$users}}</h3>
          <p>Usuarios</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="{{ URL::to('/') }}/admin/users" class="small-box-footer">Mas info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>{{$nodes}}</h3>
          <p>Nodos</p>
        </div>
        <div class="icon">
          <i class="ion ion-ios-keypad"></i>
        </div>
        <a href="{{ URL::to('/') }}/admin/nodes" class="small-box-footer">Mas info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{$images}}</h3>
          <p>Imagenes</p>
        </div>
        <div class="icon">
          <i class="ion ion-image"></i>
        </div>
        <a href="{{ URL::to('/') }}/admin/images" class="small-box-footer">Mas info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{$categories}}</h3>
          <p>Categorias</p>
        </div>
        <div class="icon">
          <i class="ion ion-network"></i>
        </div>
        <a href="{{ URL::to('/') }}/admin/categories" class="small-box-footer">Mas info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>{{$galleries}}</h3>
          <p>Galerias</p>
        </div>
        <div class="icon">
          <i class="ion ion-images"></i>
        </div>
        <a href="{{ URL::to('/') }}/admin/galleries" class="small-box-footer">Mas info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
</div><!-- /.row -->

@stop