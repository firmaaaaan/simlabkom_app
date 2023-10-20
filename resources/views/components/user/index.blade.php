@extends('layouts.master')
@section('title','Pengguna')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"> Tabel Pengguna</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
    <a href="{{ route('create') }}" class="btn btn-primary mx-3 my-3" style="float:left"><i class='bx bxs-plus-circle'></i> Tambah Pengguna</a>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>username</th>
                    <th>Email</th>
                    <th>Passowrd</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @php
                    $no=1;
                @endphp
                @foreach ($user as $s)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $s->name }}</td>
                    <td>{{ $s->email }}</td>
                    <td>{{ $s->password }}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                {{-- <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-2"></i> Edit</a
                                > --}}
                                <a class="dropdown-item" href="{{ route('destroy', $s->id) }}"
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
</div>
@endsection
