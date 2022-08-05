@extends('index')

@section('tenant')
  <li class="active">
    <a href="/datatenant"><i class="fa fa-id-card"></i> <span>Tenant</span></a>
  </li>
@endsection

@section('title')
    Daftar Data tenant
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Data tenant</li>
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
                           <th scope="col">Company</th>
                           <th scope="col">Email</th>
                           <th scope="col">Phone</th>
                           <th scope="col">Address</th>
                           <th scope="col">Aksi</th>

                       </thead>
                       <tbody>
                        <?php $i = 1; ?>
                        @foreach ($data as $row)
                        <tr>
                            <th scope="row">{{ $i; }}</th>
                            <td>{{ $row->company }}</td>
                            <td >{{ $row->email}}</td>
                            <td >{{ $row->phone}}</td>
                            <td >{{ $row->address}}</td>
                            <td>
                              <div class="btn-group">
                                  <a href="/tampildatatenant/{{ $row->id }}" class="btn btn-info">
                                      <i class="fa-solid fa-pen-to-square"></i><span>Edit</span>
                                  </a>
                                  <a href="#" class="btn btn-danger deletetenant" data-id="{{ $row->id }}" data-company="{{ $row->company }}">
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
                          <h4 class="modal-title text-center text-dark barang">Tambah data tenant</h4>
                        </div>
                        <form method="post" action="tambahdatatenant" class="" enctype="multipart/form-data">
                          @csrf
                              <div class="form-group row">
                                <label for="" class="col-md-3 col-md-offset-1 control-label">Company</label>
                                <div class="col-md-7">
                                    <input type="text" name="company" class="form-control" id="company" required >
                                    <span class="help-block with-errors"></span>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-md-3 col-md-offset-1 control-label">Email</label>
                                <div class="col-md-7">
                                    <input type="text" name="email" class="form-control" id="email" required >
                                    <span class="help-block with-errors"></span>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-md-3 col-md-offset-1 control-label">Phone</label>
                                <div class="col-md-7">
                                    <input type="text" name="phone" class="form-control" id="phone" required >
                                    <span class="help-block with-errors"></span>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="" class="col-md-3 col-md-offset-1 control-label">Address</label>
                                <div class="col-md-7">
                                    <input type="text" name="address" class="form-control" id="address" required >
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