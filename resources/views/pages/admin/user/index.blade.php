@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pengguna</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pengguna</li>
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
              <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm">
                  <i class="fas fa-plus"></i> Tambah User</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Status</th>
                  <th>Roles</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1 ?>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username}}</td>
                        <td>
                            @if ($user->status == 'y')
                                <span class="badge badge-success">Aktif</span>
                            @else
                                <span class="badge badge-danger">Tidak Aktif</span>
                            @endif
                        </td>
                        <td>{{ $user->roles }}</td>
                        <td>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info btn-sm">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                            <a href="#" data-toggle="modal" onclick="hapusUser({{$user->id}})" class="btn btn-danger btn-sm">
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
                  <th>Username</th>
                  <th>Status</th>
                  <th>Roles</th>
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


      {{-- Modal delete user --}}
      <div class="modal fade" id="modal-delete-user">
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
              <p>Anda yakin ingin menghapus user ini ?</p>
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
      {{-- End modal delete user --}}

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

  function hapusUser(id)
  {
    $('#modal-delete-user form').attr('action', 'http://hgi.test/admin/user/'+id);
    url = $('#modal-delete-user form').attr('action');
    console.log(url);
    $('#modal-delete-user').modal('show');
  }
</script>

@endpush
