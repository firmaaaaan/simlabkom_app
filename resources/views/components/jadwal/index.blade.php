@extends('layouts.master')
@section('title','Jadwal')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"> Tabel Jadwal</h4>
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <button data-bs-toggle="modal" data-bs-target="#komputer" class="btn btn-primary mx-3 my-3" style="float:left"><i class='bx bxs-plus-circle'></i> Tambah Jadwal</button>
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
                        <th>Tanggal - Jam</th>
                        <th>Prodi</th>
                        <th>Mata Kuliah</th>
                        <th>Materi</th>
                        <th>Dosen</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php
                        $no=1;
                    @endphp
                    @foreach ($jadwal as $j)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $j->jam }} - {{ $j->tanggal }}</td>
                        <td>{{ $j->prodi }}</td>
                        <td>{{ $j->matakuliah }}</td>
                        <td>{{ $j->materi }}</td>
                        <td>{{ $j->dosen }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#jadwal{{ $j->id }}"><i class="bx bx-edit-alt me-2"></i> Edit</button>
                                    <a class="dropdown-item" href="{{ route('destroyjadwal', $j->id) }}"><i class="bx bx-trash me-2"></i> Delete</a>
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
  <div class="modal fade" id="komputer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('storejadwal') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Tanggal</label>
                  <input type="date" name="tanggal" class="form-control" id="basic-default-company" placeholder="" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Waktu</label>
                  <input type="time" name="jam" class="form-control" id="basic-default-company" placeholder="" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Prodi</label>
                  <select name="prodi" id="prodi" class="form-control">
                    <option value="">--Pilih Lab--</option>
                    <option value="Teknologi Informasi">Teknologi Informasi</option>
                    <option value="Arsitek">Arsitek</option>
                    <option value="Akuntansi">Akuntansi</option>
                    <option value="Manajemen">Manajemen</option>
                    <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                </select>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Matakuliah</label>
                  <input type="text" name="matakuliah" class="form-control" id="basic-default-company" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Materi</label>
                  <input type="text" name="materi" class="form-control" id="basic-default-company" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Nama Dosen</label>
                  <input type="text" name="dosen" class="form-control" id="basic-default-company" />
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

@foreach ($jadwal as $item)
    <!-- Modal -->
  <div class="modal fade" id="jadwal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('updatejadwal', $item->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Tanggal</label>
                  <input type="date" value="{{ $item->tanggal }}" name="tanggal" class="form-control" id="basic-default-company" placeholder="" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Waktu</label>
                  <input type="time" value="{{ $item->jam }}" name="jam" class="form-control" id="basic-default-company" placeholder="" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Prodi</label>
                  <select name="prodi" id="prodi" class="form-control">
                    <option value="">--Pilih Lab--</option>
                    <option value="Teknologi Informasi">Teknologi Informasi</option>
                    <option value="Arsitek">Arsitek</option>
                    <option value="Akuntansi">Akuntansi</option>
                    <option value="Manajemen">Manajemen</option>
                    <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                </select>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Mata Kuliah</label>
                  <input type="text" value="{{ $item->matakuliah }}" name="matakuliah" class="form-control" id="basic-default-company" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Materi</label>
                  <input type="text" value="{{ $item->materi }}" name="materi" class="form-control" id="basic-default-company" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Nama Dosen</label>
                  <input type="text" value="{{ $item->dosen }}" name="dosen" class="form-control" id="basic-default-company" />
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



@endsection
