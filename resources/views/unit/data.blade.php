@extends('index')

@section('unit')
  <li class="active">
    <a href="/data"><i class="fa fa-cubes"></i> <span>unit</span></a>
  </li>
@endsection

@section('title')
    Daftar unit 
@endsection

@section('breadcrumb')
    @parent
    <li class="active">unit</li>
@endsection

@section('content')

  <section class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <div class="btn-group">
                <button data-toggle="modal" data-target="#tambah" class="btn btn-success xs btn-flat"><i class="fa fa-plus-circle"></i>Tambah</button> 
              </div>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
              <div class="box-body table-responsive">
                   <table class="table table-stiped table-bordered">
                       <thead>
                           <th widht="5%" scope="col">No</th>
                           <th scope="col">Nama unit</th>
                           <th scope="col">Lantai</th>
                           <th scope="col">Area</th>
                           <th scope="col">Aksi</th>

                       </thead>
                       <tbody>
                        <?php $i = 1; ?>
                        @foreach ($data as $row)
                        <tr>
                            <th scope="row">{{ $i; }}</th>
                            <td>{{ $row->nama_unit }}</td>
                            <td >{{ $row->lantai}}</td>
                            <td>{{ $row->area }}</td>
                            <td>
                              <div class="btn-group">
                                  <a href="/tampildata/{{ $row->id }}" class="btn btn-info">
                                      <i class="fa-solid fa-pen-to-square"></i><span>Edit</span>
                                  </a>
                                  <a href="#" class="btn btn-danger deleteunit" data-id="{{ $row->id }}" data-nama_unit="{{ $row->nama_unit }}">
                                      <i class="fa-solid fa-trash-can"></i><span>Hapus</span>
                                  </a>
                              </div>
                            </td>
                        </tr>   
                        <?php $i++;?>        
                        @endforeach                      
                       </tbody>
                   </table>
                   {{-- tambah --}}
                   <div id="tambah" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title text-center text-dark barang">Tambah data unit</h4>
                        </div>
                        <form method="post" action="tambahdata" class="" enctype="multipart/form-data">
                          @csrf
                              <div class="form-group row">
                                <label for="" class="col-md-3 col-md-offset-1 control-label">Unit</label>
                                <div class="col-md-7">
                                    <input type="text" name="nama_unit" class="form-control" id="nama_unit" required autofocus>
                                    <span class="help-block with-errors"></span>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-md-3 col-md-offset-1 control-label">Lantai</label>
                                <div class="col-md-7">
                                    <input type="number" name="lantai" class="form-control" id="lantai" required >
                                    <span class="help-block with-errors"></span>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-md-3 col-md-offset-1 control-label">Area</label>
                                <div class="col-md-7">
                                    <input type="text" name="area" class="form-control" id="area" required >
                                    <span class="help-block with-errors"></span>
                                </div>
                              </div>

                              <div class="modal-footer">
                                <div class="btn-group">
                                  <button type="reset" class="btn btn-sm btn-flat btn-danger">
                                    <i class="fa-solid fa-circle-xmark"></i>Reset
                                  </button>
                                  <button type="submit" class="btn btn-sm btn-flat btn-success tambah">
                                    <i class="fa fa-plus-circle"></i>Tambah
                                  </button>
                              </div>
                              </div>
                            </div>
                        </form>
                      </div>
                    </div>
                </div>
                
               </div>
               <!-- /.box-footer -->
             </div>
            </div>

        </div>
        <!-- /.col -->
      </div>
    </section>
  @push('page')
  <script>
    let table;

    $(function() {
        table = $('.table').dataTable({
            processing: true,
            autoWidth: false,
        });

    });
  </script>
  @endpush 
  @endsection