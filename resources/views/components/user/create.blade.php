@extends('layouts.master')
@section('title','Pengguna')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"> Form Tambah Penguna</h4>

    <!-- Basic Layout -->
    <div class="row">
      <div class="col-xl">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Masukan data</h5>
            <small class="text-muted float-end">Default label</small>
          </div>
          <div class="card-body">
            <form action="{{ route('store') }}" method="POST">
                @csrf
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname">Username</label>
                <input type="text" name="name" class="form-control" id="basic-default-fullname" placeholder="firman" />
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-email">Email</label>
                <div class="input-group input-group-merge">
                  <input
                  name="email"
                    type="email"
                    id="basic-default-email"
                    class="form-control"
                    placeholder="firman"
                    aria-label="firman"
                    aria-describedby="basic-default-email2" />
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-phone">Password</label>
                <input
                name="password"
                  type="password"
                  id="basic-default-phone"
                  class="form-control"
                  placeholder="********" />
              </div>
              <button type="submit" class="btn btn-primary btn-sm">Tambahkan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
