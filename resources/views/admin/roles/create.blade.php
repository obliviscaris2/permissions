@extends('admin.layouts.master')

<!-- Main content -->
@section('content')
    @include('admin.includes.forms')

    <div class="card-header">
        <h1 class="card-title">Add Role</h1>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

    <form id="quickForm" novalidate="novalidate" method="POST" action="{{ route('admin.roles.store') }}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Name"
                    onkeyup="replaceFunction(this.value)" required>
            </div>

            <div class="form-group" >
                <label>Permissions</label>
                <div class="select2-purple" data-select2-id="38">
                    @foreach ($permissions as $permission)
                        <input type="checkbox" id="permission" name="permissions[]" value="{{ $permission->id }}">
                        <label for="permission"> {{ $permission->name }}</label><br>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
    </div>
    <script>
        $(function() {
            $.noConflict();
            //Initialize Select2 Elements
            $('.select2').select2()

            $('#quickForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    permissions: {
                        required: true,
                    }
                },
                messages: {
                    name: {
                        required: "Please provide a name of role",
                    },
                    permissions:{
                        required: "Choose at lease one permission",
                    }
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });

        function replaceFunction(val) {
            document.getElementById('exampleInputName').value=val.replace(' ', '-');
        }

    </script>
@endsection
