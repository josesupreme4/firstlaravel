@extends('layout.base')
@section('title','Pagina Web Dinamica')

@foreach($pagina as $pagina) 
@section('titulo1')
{{$pagina->titulo1}}
@stop
@section('titulo2')
{{$pagina->titulo2}}
@stop
@section('titulo3')
{{$pagina->titulo3}}
@stop
@section('content1')
{{$pagina->content1}}
@stop
@section('content2')
{{$pagina->content2}}
@stop
@section('content3')
{{$pagina->content3}}
@stop
@endforeach