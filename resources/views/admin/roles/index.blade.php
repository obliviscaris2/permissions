@extends('admin.layouts.master')

<!-- Main content -->
@section('content')

    @include('admin.includes.tables')

    <a href="{{ route('admin.roles.create') }}" style="text-decoration:none;">
        <button type="button" class="btn btn-block btn-success btn-lg" style="width:auto;">
            Add Role
            <i class="fas fa-user-plus"></i>
        </button>
    </a>

    <!-- BEGIN: Alert -->
    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success alert-icon d-flex gap-4" role="alert" style="width: 700px;">
                <div class="d-flex gap-4">
                    <div class="alert-icon-aside">
                        <i class="far fa-flag"></i>
                    </div>
                    <div class="alert-icon-content">
                        {{ session('success') }}
                    </div>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>

                </div>
            </div>
        @endif
    </div>
    <!-- END: Alert -->

    <hr>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Roles</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid"
                            aria-describedby="example1_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending">
                                        Name
                                    </th>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending">
                                        Permissions
                                    </th>
                                    <th class="non-sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1">
                                        Action
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @if (isset($roles))
                                    @foreach ($roles as $role)
                                        <tr class="odd">
                                            <td class="dtr-control sorting_1" tabindex="0">{{ $role->name }}</td>

                                            <td class="dtr-control sorting_1" tabindex="0">
                                                @foreach ($role->permissions as $permission)
                                                    <span class="badge badge-primary"
                                                        style="font-size: medium; color:black;">{{ $permission->name }}
                                                    </span>
                                                @endforeach
                                            </td>

                                            <td>
                                                <button type="button" class="btn btn-outline-primary btn-sm mx-1"
                                                data-bs-toggle="modal"
                                                data-bs-target="#edit{{ $role->id }}">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-danger btn-sm"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#delete{{ $role->id }}">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                            {{-- =====================================
                                                MODAL - EDIT
                                    ====================================     --}}
                            @foreach ($roles as $role)
                                <div class="modal fade" id="edit{{ $role->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">This can't be
                                                    undone.
                                                    Are you sure?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">No</button>
                                                <a href="{{ url('admin/roles/edit/' . $role->id) }}">
                                                    <button type="button" class="btn btn-danger">Yes
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{-- =====================================
                                            MODAL - DELETE
                                ====================================     --}}

                            @foreach ($roles as $role)
                                <div class="modal fade" id="delete{{ $role->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">This can't be
                                                    undone. Are you sure?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">No</button>
                                                <a href="{{ url('admin/roles/delete/' . $role->id) }}">
                                                    <button type="button" class="btn btn-danger">
                                                        Yes
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    </div>
    <!-- Page specific script -->
    <script>
        $(function() {
            $.noConflict();
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
