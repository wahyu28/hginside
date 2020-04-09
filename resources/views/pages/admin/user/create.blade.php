@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
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
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Menambahkan User baru</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" placeholder="Name" required class="form-control @error('name') is-invalid @enderror">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" placeholder="Username" required class="form-control @error('username') is-invalid @enderror">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="roles">Roles</label>
                                <select name="roles" class="form-control @error('roles') is-invalid @enderror">
                                    <option value="">Pilih Roles User</option>
                                    <option value="ADMIN">Admin</option>
                                    <option value="USER">User</option>
                                    <option value="FINANCE">Finance</option>
                                </select>

                                @error('roles')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="roles">Agama</label>
                                <select name="agama" class="form-control @error('agama') is-invalid @enderror">
                                    <option value="">Pilih Agama User</option>
                                    <option value="islam">Islam</option>
                                    <option value="protestan">Protestan</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="buddha">Buddha</option>
                                    <option value="khonghucu">Khonghucu</option>
                                </select>

                                @error('agama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" rows="5" class="form-control @error('pendidikan') is-invalid @enderror"></textarea>

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror">

                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" placeholder="Email" required class="form-control @error('email') is-invalid @enderror">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input type="text" name="nip" placeholder="Nomer Induk Pegawai" required class="form-control @error('nip') is-invalid @enderror">

                                @error('nip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <select name="jk" class="form-control @error('jk') is-invalid @enderror">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="l">Laki - Laki</option>
                                    <option value="p">Perempuan</option>
                                </select>

                                @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="pendidikan">Pendidikan</label>
                                <input type="text" name="pendidikan" placeholder="Pendidikan" required class="form-control @error('pendidikan') is-invalid @enderror">

                                @error('pendidikan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" class="form-control @error('status') is-invalid @enderror">
                                    <option value="y">Aktif</option>
                                    <option value="n">Non Aktif</option>
                                </select>

                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="#" class="btn btn-default">Kembali</a>
                        </div>

                    </div>
                </form>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

      </section>
      <!-- /.content -->


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

	window.setTimeout(function() {
		$(".alert").fadeTo(500, 0).slideUp(500, function(){
		    $(this).remove();
		});
	}, 2000);
</script>

@endpush
