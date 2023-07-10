@extends('admin.layouts.master')

<!-- Main content -->
@section('content')
    @include('admin.includes.forms')
    <?php $permission = App\Models\Permission::all(); ?>
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
                    <select class="select2 select2-hidden-accessible" multiple="" id="permissions" name="permissions[]"
                        data-placeholder="Choose Permissions" data-dropdown-css-class="select2-purple" style="width: 100%;"
                        data-select2-id="15" tabindex="-1" aria-hidden="true" required>
                        @foreach ($permission as $permission)
                            <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                        @endforeach
                    </select>
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
