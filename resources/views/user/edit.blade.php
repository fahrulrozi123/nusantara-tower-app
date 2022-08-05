@extends('index')

@section('dtuser')
  <li class="active">
    <a href="/datauser"><i class="fa fa-cubes"></i> <span>Data user</span></a>
  </li>
@endsection

@section('title')
    Daftar Data User
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Data User</li>
@endsection

@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <div class="btn-group">
              <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                
            </div>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            <form method="post" action="/updateuser/{{ $data->id }}" class="" enctype="multipart/form-data">
            @csrf
            <div class="form-group row ">
                <label for="" class="col-md-3 col-md-offset-1 control-label">Nama Lengkap</label>
                <div class="col-md-5">
                    <input type="text" name="name" class="form-control" id="name" value="{{ $data->name }}" required autofocus>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
            <div class="form-group row ">
                <label for="" class="col-md-3 col-md-offset-1 control-label">Email</label>
                <div class="col-md-5">
                    <input type="text" name="email" class="form-control" id="email" value="{{ $data->email }}" required autofocus>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
            <div class="form-group row ">
                <label for="" class="col-md-3 col-md-offset-1 control-label">Foto</label>
                <div class="col-md-5">
                    <input type="file" name="Foto" class="form-control" id="Foto" value="{{ $data->Foto }}" required autofocus>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
        </div>
            <div class="modal-footer">        
                <div class="btn-group">
                  <a href="/datauser" class="btn btn-sm btn-flat btn-danger">
                    <i class="fa-solid fa-rotate-left"></i>Cancel
                  </a>
                    <button type="submit" class="btn btn-sm btn-flat btn-info edit">
                      <i class="fa-solid fa-pen-to-square"></i>Edit
                    </button>
                </div>
            </div>               
          </form>
        </div>
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  

@endsection