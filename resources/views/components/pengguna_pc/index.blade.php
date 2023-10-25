@extends('layouts.master')
@section('title','Komputer')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"> Tabel Pengguna Komputer</h4>
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <button data-bs-toggle="modal" data-bs-target="#penggunakomputer" class="btn btn-primary mx-3 my-3" style="float:left"><i class='bx bxs-plus-circle'></i> Tambah Pengguna Komputer</button>
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
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Nomor PC</th>
                        <th>Program Studi</th>
                        <th>Mata Kuliah - Dosen</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php
                        $no=1;
                    @endphp
                    @foreach ($penggunapc as $pc)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $pc->nim }}</td>
                        <td>{{ $pc->nama_lengkap }}</td>
                        <td>{{ $pc->komputer->no_pc }} - {{ $pc->komputer->lab->nama_lab }}</td>
                        <td>{{ $pc->prodi }}</td>
                        <td>{{ $pc->makul }}</td>
                        <td>{{ $pc->tanggal }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#penggunapc{{ $pc->id }}"><i class="bx bx-edit-alt me-2"></i> Edit</button>
                                    <a class="dropdown-item" href="{{ route('destroypenggunapc', $pc->id) }}"><i class="bx bx-trash me-2"></i> Delete</a>
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
  <div class="modal fade" id="penggunakomputer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('storepenggunapc') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">NIM</label>
                    <input type="number" name="nim" class="form-control" id="basic-default-company" placeholder="" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" class="form-control" id="basic-default-company" placeholder="" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Program Studi</label>
                  <input type="text" name="prodi" class="form-control" id="basic-default-company" placeholder="" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Mata Kuliah - Dosen</label>
                  <input type="text" name="makul" class="form-control" id="basic-default-company" placeholder=" Pemrograman Full Stack - Sadr Lufti Mufreni" />
                </div>
                <select name="komputer_id" id="komputer_id" class="form-control">
                    <option value="">--Pilih PC--</option>
                    @foreach($komputer as $k)
                        <option value="{{ $k->id }}">{{ $k->lab->nama_lab }} - {{ $k->no_pc }}</option>
                    @endforeach
                </select>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Tanggal</label>
                  <input type="date" name="tanggal" class="form-control" id="basic-default-company" placeholder="" />
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

@foreach ($penggunapc as $item)
    <!-- Modal -->
    <div class="modal fade" id="penggunapc{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('storepenggunapc', $item->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">NIM</label>
                        <input type="number" value="{{ $item->nim }}" name="nim" class="form-control" id="basic-default-company" placeholder="" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-company">Nama Lengkap</label>
                      <input type="text" value="{{ $item->nama_lengkap }}" name="nama_lengkap" class="form-control" id="basic-default-company" placeholder="" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-company">Program Studi</label>
                      <input type="text" value="{{ $item->prodi }}" name="prodi" class="form-control" id="basic-default-company" placeholder="" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-company">Mata Kuliah - Dosen</label>
                      <input type="text" value="{{ $item->makul }}" name="makul" class="form-control" id="basic-default-company" placeholder=" Pemrograman Full Stack - Sadr Lufti Mufreni" />
                    </div>
                    <select name="komputer_id" id="komputer_id" class="form-control">
                        <option value="">--Pilih PC--</option>
                        @foreach($komputer as $k)
                            <option value="{{ $k->id }}">{{ $k->lab->nama_lab }} - {{ $k->no_pc }}</option>
                        @endforeach
                    </select>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-company">Tanggal</label>
                      <input type="date" value="{{ $item->tanggal }}" name="tanggal" class="form-control" id="basic-default-company" placeholder="" />
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


