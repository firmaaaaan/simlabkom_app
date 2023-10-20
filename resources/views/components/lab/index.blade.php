@extends('layouts.master')
@section('title','Laboratorium')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"> Tabel Laboratorium</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
    <button data-bs-toggle="modal" data-bs-target="#lab" class="btn btn-primary mx-3 my-3" style="float:left"><i class='bx bxs-plus-circle'></i> Tambah Lab</button>
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
                                <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#lab{{ $l->id }}"
                                ><i class="bx bx-edit-alt me-2"></i> Edit</button>
                                <a class="dropdown-item" href=""
                                ><i class="bx bx-trash me-2"></i> Delete</a
                                >
                            </div>
                        </div>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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
@endforeach
@endsection
