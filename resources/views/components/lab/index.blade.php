@extends('layouts.master')
@section('title','Laboratorium')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"> Tabel Laboratorium</h4>
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <button data-bs-toggle="modal" data-bs-target="#lab" class="btn btn-primary mx-3 my-3" style="float:left"><i class='bx bxs-plus-circle'></i> Tambah Komputer</button>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block mb-2 mx-3 mx-3">
                        <p><i class='bx bx-check'></i><strong> Selamat! </strong>{{ $message }}</p>
                    </div>
                @endif
                @if ($message = Session::get('info'))
                    <div class="alert alert-info alert-block mb-2 mx-3 mx-3">
                        <p><i class='bx bx-info-circle'></i><strong> Pemberitahuan! </strong>{{ $message }}</p>
                    </div>
                @endif
                @if ($message = Session::get('info2'))
                    <div class="alert alert-info alert-block mb-2 mx-3 mx-3">
                        <p><i class='bx bx-info-circle'></i><strong> Pemberitahuan! </strong>{{ $message }}</p>
                    </div>
                @endif
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lab</th>
                        <th>Gedung</th>
                        <th>Jumlah_pc</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php
                        $no=1;
                    @endphp
                    @foreach ($lab as $l)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $l->nama_lab }}</td>
                        <td>{{ $l->gedung }}</td>
                        <td>{{ $l->jumlah_pc}}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#lab{{ $l->id }}"><i class="bx bx-edit-alt me-2"></i> Edit</button>
                                    <a class="dropdown-item" href="{{ route('destroylab', $l->id) }}"><i class="bx bx-trash me-2"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="lab" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('storelab') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Nama Lab</label>
                  <input type="text" name="nama_lab" class="form-control" id="basic-default-company" placeholder="" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Gedung</label>
                  <input type="text" name="gedung" class="form-control" id="basic-default-company" placeholder="" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Jumlah PC</label>
                  <input type="number" name="jumlah_pc" class="form-control" id="basic-default-company"  />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary btn-sm">Tambahkan</button>
                  </div>
            </form>
        </div>
      </div>
    </div>
  </div>

@foreach ($lab as $item)
    <!-- Modal -->
  <div class="modal fade" id="lab{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('updatelab', $item->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Nama Lab</label>
                  <input type="text" value="{{ $item->nama_lab }}" name="nama_lab" class="form-control" id="basic-default-company" placeholder="" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Gedung</label>
                  <input type="text" value="{{ $item->gedung }}" name="gedung" class="form-control" id="basic-default-company" placeholder="" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Jumlah PC</label>
                  <input type="number" value="{{ $item->jumlah_pc }}" name="jumlah_pc" class="form-control" id="basic-default-company" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary btn-sm">Tambahkan</button>
                  </div>
            </form>
        </div>
      </div>
    </div>
  </div>
@endforeach
{{-- <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"> Tabel Laboratorium</h4>
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <button data-bs-toggle="modal" data-bs-target="#lab" class="btn btn-primary mx-3 my-3" style="float:left"><i class='bx bxs-plus-circle'></i> Tambah Lab</button>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block mb-2 mx-3 mx-3">
                        <p><i class='bx bx-check'></i><strong> Selamat! </strong>{{ $message }}</p>
                    </div>
                @endif
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lab</th>
                        <th>Lokasi</th>
                        <th>Jumlah Komputer</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php
                        $no=1;
                    @endphp
                    @foreach ($lab as $l)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $l->nama_lab }}</td>
                        <td>{{ $l->gedung }}</td>
                        <td>{{ $l->jumlah_pc }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#lab{{ $l->id }}"><i class="bx bx-edit-alt me-2"></i> Edit</button>
                                    <a class="dropdown-item" href="{{ route('destroylab', $l->id) }}"><i class="bx bx-trash me-2"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    <!--/ Basic Bootstrap Table -->

<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="lab" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Masukan Data</h5>
        </div>
        <div class="modal-body">
            <form action="{{ route('storelab') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Nama Lab</label>
                    <input type="text" name="nama_lab" class="form-control" id="basic-default-fullname" placeholder="Lab Komputer 1" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Gedung-Ruangan</label>
                    <input type="text" name="gedung" class="form-control" id="basic-default-fullname" placeholder="Contoh:SM.3.01" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Jumlah Komputer</label>
                    <input type="number" name="jumlah_pc" class="form-control" id="basic-default-fullname"  />
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Tambahkan</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>

@foreach ($lab as $item)
<div class="modal fade" id="lab{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Masukan Data</h5>
        </div>
        <div class="modal-body">
            <form action="{{ route('updatelab', $item->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Nama Lab</label>
                    <input type="text" value="{{ $item->nama_lab }}" name="nama_lab" class="form-control" id="basic-default-fullname" placeholder="Lab Komputer 1" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Gedung-Ruangan</label>
                    <input type="text" value="{{ $item->gedung }}" name="gedung" class="form-control" id="basic-default-fullname" placeholder="Contoh:SM.3.01" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Jumlah Komputer</label>
                    <input type="number" value="{{ $item->jumlah_pc }}" name="jumlah_pc" class="form-control" id="basic-default-fullname"  />
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Tambahkan</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
@endforeach --}}
@endsection
