@extends('index')

@section('unit')
  <li class="active">
    <a href="/data"><i class="fa fa-cube"></i> <span>Unit</span></a>
  </li>
@endsection

@section('title')
   Edit Unit
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Unit</li>
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
            <form method="post" action="/update/{{ $data->id }}" class="" enctype="multipart/form-data">
            @csrf
            <div class="form-group row ">
                <label for="" class="col-md-3 col-md-offset-1 control-label">Nama Unit</label>
                <div class="col-md-5">
                    <input type="text" name="nama_unit" class="form-control" id="nama_unit" value="{{ $data->nama_unit }}" required autofocus>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
            <div class="form-group row ">
                <label for="" class="col-md-3 col-md-offset-1 control-label">Lantai</label>
                <div class="col-md-5">
                    <input type="number" name="lantai" class="form-control" id="lantai" value="{{ $data->lantai }}" required autofocus>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
            <div class="form-group row ">
                <label for="" class="col-md-3 col-md-offset-1 control-label">Area</label>
                <div class="col-md-5">
                    <input type="text" name="area" class="form-control" id="area" value="{{ $data->area }}" required autofocus>
                    <span class="help-block with-errors"></span>
                </div>
            </div>
        </div>
            <div class="modal-footer">        
                <div class="btn-group">
                  <a href="/data" class="btn btn-sm btn-flat btn-danger">
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