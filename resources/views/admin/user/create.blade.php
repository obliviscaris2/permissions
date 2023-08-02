@extends('admin.layouts.master')

<!-- Main content -->
@section('content')
    @include('admin.includes.forms')
    
    <div class="card-header">
        <h1 class="card-title">Add users</h1>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form id="quickForm" novalidate="novalidate" method="POST" action="{{ route('admin.users.store') }}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label>Role</label>
                <select class="form-control" name="role">
                    @if (isset($role))
                    @foreach ($role as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group mt-2 mb-2">
                <label for="Districts">Select District</label>
                <select name="district_id" id="districts" required>
                    <option disabled selected value> -- Select district -- </option>
                    @foreach ($districts as $district)

                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                        
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Active Status</label>
                <select class="form-control" name="is_active">
                    <option value="0">Inactive</option>
                    <option value="1">Active</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                    placeholder="Password">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
    <script>
        $(function() {
            $.noConflict();
            $('#quickForm').validate({
                rules: {
                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true,
                        minlength: 8
                    },
                    name: {
                        required: true,
                        minlength: 6
                    }
                },
                messages: {
                    email: {
                        required: "Please enter a email address",
                        email: "Please enter a vaild email address"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 8 characters long"
                    },
                    name: {
                        required: "Please provide a name",
                        minlength: "Name should be at least 6 characters long"
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

    </script>
@endsection
