@extends('backend.layout_backend')
@section('title', 'Videos - Crear')
@section('content')
    <div class="card">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Empezamos</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('videos.store') }}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" class="form-control" name="nombre"  placeholder="Nombre">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Descripcion</label>
                  <textarea type="text" class="form-control" name="descripcion" placeholder="Descripcion" ></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">URL</label>
                    <textarea type="text" class="form-control" name="url" placeholder="URL" ></textarea>
                  </div>
                

                <div class="form-group">
                    <label for="exampleInputPassword1">Curso</label>
                    <select class="form-control" name="curso" >
                        @foreach ($cursos as $curso)
                        <option value="{{$curso->id}}">{{$curso->nombre}}</option>
                        @endforeach
                        
                    </select>
                </div>

                
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
    </div>
@endsection