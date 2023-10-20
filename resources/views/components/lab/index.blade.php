@extends('layouts.master')
@section('title','Laboratorium')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"> Tabel Laboratorium</h4>
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Table Basic</h5>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr>
                <th>Project</th>
                <th>Client</th>
                <th>Users</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              <tr>
                <td>
                  <i class="fab fa-angular fa-lg text-danger me-3"></i>
                  <span class="fw-medium">Angular Project</span>
                </td>
                <td>Albert Cook</td>
                <td>
                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Lilian Fuller" data-bs-original-title="Lilian Fuller">
                      <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Sophia Wilkerson" data-bs-original-title="Sophia Wilkerson">
                      <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Christina Parker" data-bs-original-title="Christina Parker">
                      <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
                    </li>
                  </ul>
                </td>
                <td><span class="badge bg-label-primary me-1">Active</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <i class="fab fa-react fa-lg text-info me-3"></i> <span class="fw-medium">React Project</span>
                </td>
                <td>Barry Hunter</td>
                <td>
                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Lilian Fuller" data-bs-original-title="Lilian Fuller">
                      <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Sophia Wilkerson" data-bs-original-title="Sophia Wilkerson">
                      <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Christina Parker" data-bs-original-title="Christina Parker">
                      <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
                    </li>
                  </ul>
                </td>
                <td><span class="badge bg-label-success me-1">Completed</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Delete</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <i class="fab fa-vuejs fa-lg text-success me-3"></i>
                  <span class="fw-medium">VueJs Project</span>
                </td>
                <td>Trevor Baker</td>
                <td>
                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Lilian Fuller" data-bs-original-title="Lilian Fuller">
                      <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Sophia Wilkerson" data-bs-original-title="Sophia Wilkerson">
                      <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Christina Parker" data-bs-original-title="Christina Parker">
                      <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
                    </li>
                  </ul>
                </td>
                <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Delete</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                  <span class="fw-medium">Bootstrap Project</span>
                </td>
                <td>Jerry Milton</td>
                <td>
                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Lilian Fuller" data-bs-original-title="Lilian Fuller">
                      <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Sophia Wilkerson" data-bs-original-title="Sophia Wilkerson">
                      <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Christina Parker" data-bs-original-title="Christina Parker">
                      <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
                    </li>
                  </ul>
                </td>
                <td><span class="badge bg-label-warning me-1">Pending</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Delete</a>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    {{-- <div class="card">
        <button data-bs-toggle="modal" data-bs-target="#lab" class="btn btn-primary mx-3 my-3" style="float:left"><i class='bx bxs-plus-circle'></i> Tambah Lab</button>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block mb-2">
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
    </div> --}}
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
