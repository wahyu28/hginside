@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Pelanggan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
        <div class="row">
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Menambahkan Pelanggan baru</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" placeholder="Nama" required class="form-control @error('nama') is-invalid @enderror" value="{{ $pelanggan->nama }}">

                                        @error('nama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" placeholder="Email" required class="form-control @error('email') is-invalid @enderror" value="{{ $pelanggan->email }}">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="telepon">Telepon</label>
                                        <input type="text" name="telepon" placeholder="Telepon" required class="form-control @error('telepon') is-invalid @enderror" value="{{ $pelanggan->telepon }}">

                                        @error('telepon')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="provinsi">Provinsi</label>
                                        <select name="provinsi" class="form-control select2">
                                            <option value="" {{ $pelanggan->provinsi == '' ? 'selected':'' }}>Pilih Provinsi</option>
                                            @foreach ($provinsi as $data)
                                                <option value="{{ $data->provinsi }}" {{ $pelanggan->provinsi == $data->provinsi ? 'selected':'' }}>{{ ucwords($data->provinsi) }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea name="alamat" rows="5" class="form-control @error('alamat') is-invalid @enderror">{{ $pelanggan->alamat }}</textarea>

                                        @error('alamat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="kodepos">Kode Pos</label>
                                        <input type="text" name="kodepos" placeholder="Kode Pos" class="form-control @error('kodepos') is-invalid @enderror" value="{{ $pelanggan->kodepos }}">

                                        @error('kodepos')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <a href="{{ route('pelanggan.index') }}" class="btn btn-default">Kembali</a>
                                    </div>

                                </div>

                            </div>
                        </form>

                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
            </div>
        </div>


      </section>
      <!-- /.content -->


@endsection

@push('addon-script')
<!-- Select2 -->
<script src="{{ url('backend/plugins/select2/js/select2.full.min.js') }}"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  })
</script>

@endpush

@push('addon-style')

<link rel="stylesheet" href="{{ url('backend/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ url('backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

@endpush
 <!-- Select2 -->
