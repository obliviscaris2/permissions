@extends('admin.layouts.master')

<!-- Main content -->
@section('content')
    @include('admin.includes.tables')
    
    <hr>
    <hr>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Application History</h3>
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
                                        aria-label="Rendering engine: activate to sort column descending">ID
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending">Description</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Platform(s): activate to sort column ascending">User ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Platform(s): activate to sort column ascending">IP address</th>
                                    <th class="non-sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">
                                        Time</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if ($data)
                                    @foreach ($data as $data)
                                        <tr class="odd">
                                            <td class="dtr-control sorting_1" tabindex="0">{{ $data->id }}</td>
                                            <td class="dtr-control sorting_1" tabindex="0">{{ $data->description }}</td>
                                            <td class="dtr-control sorting_1" tabindex="0">{{ $data->user_id }}</td>
                                            <td class="dtr-control sorting_1" tabindex="0">{{ $data->ip_address }}</td>
                                            <td class="dtr-control sorting_1" tabindex="0">{{ $data->created_at }}</td>
                                        </tr>
                                    @endforeach
                                @endif

                            </tbody>
                        </table>
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
                "order": [
                    [0, "desc"]
                ], //or asc 
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });

    </script>
@endsection
