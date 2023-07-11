@extends('admin.layouts.master')

<!-- Main content -->
@section('content')
@include('admin.includes.forms')




    <div class="card-header">
        <h1 class="card-title">Update Role</h1>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

    <form id="quickForm" novalidate="novalidate" method="POST" action="/admin/roles/update">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <input type="hidden" value="{{ $role->id }}"  name="id" id="">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $role->name }}" id="exampleInputName" placeholder="Name"
                    onkeyup="replaceFunction(this.value)">
            </div>

            <div class="form-group" data-select2-id="39">
                <label>Permissions</label>
                <div class="select2-purple" data-select2-id="38">
                    {{-- <select class="select2 select2-hidden-accessible" multiple="" name="permissions[]"
                        data-placeholder="Choose Permissions" data-dropdown-css-class="select2-purple" style="width: 100%;"
                        data-select2-id="15" tabindex="-1" aria-hidden="true">
                        @foreach ($permissions as $permission)
                            <option value="{{ $permission->id }}" @if ($role->permissions->contains($permission->id)) selected @endif>
                                {{ $permission->name }}
                            </option>
                        @endforeach
                    </select> --}}

                    @foreach ($permissions as $permission)
                        <input type="checkbox" id="permission" name="permissions[]" value="{{ $permission->id }}" @if ($role->permissions->contains($permission->id)) checked @endif>
                        <label for="permission"> {{ $permission->name }}</label><br>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
    </div>
    <script>
        $(function() {
            $.noConflict();
            //Initialize Select2 Elements
            $('.select2').select2()

            $(document).ready(function() {
                $('.select2').select2();
            });

            $(document).ready(function() {
                $('.chosen-select').chosen();
            });

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
