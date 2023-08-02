@extends('admin.layouts.master')

<!-- Main content -->
@section('content')
    @include('admin.includes.forms')
    
    <div class="card-header">
        <h1 class="card-title">Update users</h1>
    </div>

    <form id="quickForm" novalidate="novalidate" method="POST" action="{{ route('admin.users.update') }}">
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="exampleInputName"
                    placeholder="Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="exampleInputEmail1"
                    placeholder="Enter email">
            </div>
            <div class="form-group">
                <label>Role</label>
                <select class="form-control" name="role">
                    @if (isset($role))
                        @foreach ($role as $role)
                            <option value="{{ $role->id }}" @if ($user->roles->id==$role->id)
                                selected
                            @endif>{{ $role->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group mt-2 mb-2">
                <label for="Districts">Select District</label>
                <select name="district_id" id="districts" required>
                    <option disabled {{ $user->district_id ? '' : 'selected' }} value> -- Select district -- </option>
                    @foreach ($districts as $district)
                        <option value="{{ $district->id }}" {{ $user->district_id == $district->id ? 'selected' : '' }}>
                            {{ $district->name }}
                        </option>
                    @endforeach
                </select>
            </div>            
            <div class="form-group">
                <label>Active Status</label>
                <select class="form-control" name="is_active">
                    <option value="0" @if ($user->is_active == 0) selected @endif>Inactive</option>
                    <option value="1" @if ($user->is_active == 1) selected  @endif>
                        Active</option>
                </select>
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
