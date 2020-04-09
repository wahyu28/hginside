@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pelanggan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Pelanggan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ $message }}
            </div>
        @endif

        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ $message }}
            </div>
        @endif

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
              <a href="{{ route('pelanggan.create') }}" class="btn btn-primary btn-sm">
                  <i class="fas fa-plus"></i> Tambah Pelanggan</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1 ?>
                @forelse ($pelanggan as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->nama}}</td>
                        <td>{{ $data->email }}</td>
                        <td>
                            <a href="{{ route('pelanggan.edit', $data->id) }}" class="btn btn-info btn-sm">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                            <a href="#" data-toggle="modal" onclick="hapusdata({{$data->id}})" class="btn btn-danger btn-sm">
                                <i class="fa fa fa-trash"></i>
                            </a>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Data Kosong</td>
                    </tr>
                @endforelse

                </tbody>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

      </section>
      <!-- /.content -->


      {{-- Modal delete data --}}
      <div class="modal fade" id="modal-delete-data">
        <form action="#" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn" style="color: #ffffff"><i class="nav-icon fas fa-power-off"></i> Logout</button>

        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Keluar</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Anda yakin ingin menghapus data ini ?</p>
            </div>
            <div class="modal-footer justify-content-end">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tidak, Batal</button>
              <button type="submit" class="btn btn-danger">Ya, Hapus</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        </form>
        <!-- /.modal-dialog -->
      </div>
      {{-- End modal delete data --}}

@endsection

@push('addon-script')
<script src="{{ url('backend/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ url('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });

  function hapusdata(id)
  {
    $('#modal-delete-data form').attr('action', 'http://hgi.test/admin/pelanggan/'+id);
    url = $('#modal-delete-data form').attr('action');
    console.log(url);
    $('#modal-delete-data').modal('show');
  }
</script>

@endpush
