@extends('layouts.master')
@section('title','Komputer')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"> Tabel Komputer</h4>
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <button data-bs-toggle="modal" data-bs-target="#komputer" class="btn btn-primary mx-3 my-3" style="float:left"><i class='bx bxs-plus-circle'></i> Tambah Komputer</button>
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
                        <th>No PC</th>
                        <th>Kelengkapan</th>
                        <th>Spesifikasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php
                        $no=1;
                    @endphp
                    @foreach ($komputer as $k)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $k->lab->gedung }}-{{ $k->lab->nama_lab }}</td>
                        <td>{{ $k->no_pc }}</td>
                        <td>{{ $k->kelengkapan }}</td>
                        <td>{{ $k->spesifikasi }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#komputer{{ $k->id }}"><i class="bx bx-edit-alt me-2"></i> Edit</button>
                                    <a class="dropdown-item" href="{{ route('destroykomputer', $k->id) }}"><i class="bx bx-trash me-2"></i> Delete</a>
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
            <form action="{{ route('storekomputer') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Nama Lab</label>
                  <select name="lab_id" id="lab_id" class="form-control">
                    <option value="">--Pilih Lab--</option>
                    @foreach($lab as $l)
                        <option value="{{ $l->id }}">{{ $l->gedung }}-{{ $l->nama_lab }}</option>
                    @endforeach
                </select>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">No PC</label>
                  <input type="text" name="no_pc" class="form-control" id="basic-default-company" placeholder="" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Kelengkapan</label>
                  <input type="text" name="kelengkapan" class="form-control" id="basic-default-company" placeholder="Cek kelengkaoan mouse dan keyboard" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-message">Spesifikasi</label>
                  <textarea
                    name="spesifikasi"
                    id="basic-default-message"
                    class="form-control"
                    placeholder="Jelaskan Spesifikasi PC "></textarea>
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

@foreach ($komputer as $item)
    <!-- Modal -->
  <div class="modal fade" id="komputer{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('updatekomputer', $item->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Nama Lab</label>
                  <select name="lab_id" id="lab_id" class="form-control">
                    <option value="">--Pilih Lab--</option>
                    @foreach($lab as $l)
                        <option value="{{ $l->id }}">{{ $l->nama_lab }}</option>
                    @endforeach
                </select>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">No PC</label>
                  <input type="text" value="{{ $item->no_pc }}" name="no_pc" class="form-control" id="basic-default-company" placeholder="" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Kelengkapan</label>
                  <input type="text" value="{{ $item->kelengkapan }}" name="kelengkapan" class="form-control" id="basic-default-company" placeholder="Cek kelengkaoan mouse dan keyboard" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-message">Spesifikasi</label>
                  <textarea
                    name="spesifikasi"
                    id="basic-default-message"
                    class="form-control"
                    placeholder="Jelaskan Spesifikasi PC ">{{ $item->spesifikasi }}</textarea>
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


