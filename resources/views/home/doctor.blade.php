@extends('layouts.home')
<?php 
    foreach ($medico as $key => $row) {
      $nome = $row->nome;
      $celular = $row->celular;
      $descricao = $row->descricao;
      $nome_foto = $row->nome_foto;
      $nome_foto_criado = $row->nome_foto_criado;
      $rota_foto = $row->rota_foto;
      $nome_especialidade = $row->nome_especialidade;
    }
?>
@section('content')
<div class="container">
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#page-top">
        <h1 class="logo-brand">WEALTH.<span class="logo">LIFE</span></h1>
        </a> </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
          <li class="hidden"> <a href="#page-top"></a> </li>
         <li class=""> <a href="{{route('paginainicial.index')}}#about">APPOINMENT</a> </li>
          <li class=""> <a href="{{route('paginainicial.index')}}#services">FEATURE</a> </li>
          <li class=""> <a href="{{route('paginainicial.index')}}#doctor">DOCTOR</a> </li>
          <li class=""> <a href="{{route('paginainicial.index')}}#contact">CONTACT US</a> </li>
          <li class="page-scroll social"> <a href="#"><i class="fa fa-facebook-square fa-size"> </i></a> <a href="#"><i class="fa  fa-twitter-square fa-size"> </i> </a> <a href="#"><i class="fa fa-google-plus-square fa-size"> </i></a> <a href="#"><i class="fa fa-flickr fa-size"> </i> </a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container --> 
  </nav>
</div>
<!-- intro close -->
<section id="about" class="about-section"><!-- about start -->
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <!-- <h1>Nome do Doutor</h1> -->
        <h1>{{$nome}}</h1>
        <!-- <h1>Especialidade</h1> -->
        <h1>{{$nome_especialidade}}</h1>
        <!-- <p class="lead">Descrição</p>       -->
        <p class="lead">{{$descricao}}</p>      
      </div>
      <div class="col-md-6 doctor-profile"> 
          <div class="bg-profile">
          <img src="{{asset($rota_foto.$nome_foto_criado)}}" width="360"  height="348"  alt=""></div>
      </div>   
    </div>
  </div>
</section>
<!-- about close -->
<!-- service close -->
@endsection
