@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
    <div class="col-md-8 col-md-offset-2">

        <form role="form" method="" action="{{ url('/actualizar') }}">
        {{ csrf_field() }}
        @foreach($pagina as $pagina) 
        <div class="col-md-12"><h2>Inicio</h2></div>
        <label for="name" class="col-md-4 control-label">Titulo</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="titulo1" value="{{ $pagina->titulo1}}" required autofocus>
                            </div>        
        <label for="name" class="col-md-4 control-label">Contenido</label>

                            <div class="col-md-6">
                                <textarea id="name"  class="form-control" name="content1"  required >{{$pagina->content1}}</textarea>
                                </div>      

          <div class="col-md-12"><h2>Descripción</h2></div>
        <label for="name" class="col-md-4 control-label">Titulo</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="titulo2" value="{{ $pagina->titulo2 }}" required autofocus>
                            </div>        
        <label for="name" class="col-md-4 control-label">Contenido</label>

                            <div class="col-md-6">
                                <textarea id="name"  class="form-control" name="content2"  required >{{$pagina->content2}}</textarea>
                                </div>     
                                <div class="col-md-12"><h2>Contactos</h2></div>
        <label for="name" class="col-md-4 control-label">Titulo</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="titulo3" value="{{ $pagina->titulo3 }}" required autofocus>
                            </div>        
        <label for="name" class="col-md-4 control-label">Contenido</label>

                            <div class="col-md-6">
                                <textarea id="name"  class="form-control" name="content3"  required >{{$pagina->content3}}</textarea>
                                </div> 


                                @endforeach
                               
 <div class="form-group">
                            <div class="col-md-8 col-md-offset-4"> <br>
                                <button type="submit" class="btn btn-primary">
                                    actualizar
                                </button>
        </form>

    </div>
    </div>
 </div>   

@endsection
