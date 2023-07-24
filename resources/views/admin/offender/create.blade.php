@extends('admin.layouts.master')

<!-- Main content -->
@section('content')
    @include('admin.includes.forms')
    <div class="card-header">
        <h1 class="card-title">Add Offender</h1>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



    <form id="quickForm" novalidate="novalidate" method="POST" action="{{ route('admin.offender.store') }}">
        @csrf
        <div class="card-body">
            <div class="row">
                <input type="hidden" name="registration_id" value="{{ $registration->id }}"> 
                
                
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="registrations">Registration No</label>
                        {{ $registration->reg_no }}

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" name="first_name" class="form-control" id="exampleInputName"
                            placeholder="First Name" onkeyup="replaceFunction(this.value)" value="{{ old('first_name') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Middle Name</label>
                        <input type="text" name="middle_name" class="form-control" id="exampleInputName"
                            placeholder="Middle Name" onkeyup="replaceFunction(this.value)" value="{{ old('middle_name') }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" name="last_name" class="form-control" id="exampleInputName"
                            placeholder="Last Name" onkeyup="replaceFunction(this.value)" value="{{ old('last_name') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">State</label>
                        <input type="text" name="state" class="form-control" id="exampleInputName" placeholder="State"
                            onkeyup="replaceFunction(this.value)" value="{{ old('state') }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">District</label>
                        <input type="text" name="district" class="form-control" id="exampleInputName"
                            placeholder="District" onkeyup="replaceFunction(this.value)" value="{{ old('district') }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Local Government</label>
                        <input type="text" name="local_govn" class="form-control" id="exampleInputName"
                            placeholder="Local Government" onkeyup="replaceFunction(this.value)" value="{{ old('local_govn') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ward No.</label>
                        <input type="text" name="ward_no" class="form-control" id="exampleInputName"
                            placeholder="Ward No." onkeyup="replaceFunction(this.value)" value="{{ old('ward_no') }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Permanent Address</label>
                        <input type="text" name="permanent_address" class="form-control" id="exampleInputName"
                            placeholder="Permanent Address" onkeyup="replaceFunction(this.value)" value="{{ old('permanent_address') }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contact No.</label>
                        <input type="text" name="contact_no" class="form-control" id="exampleInputName"
                            placeholder="Contact No." onkeyup="replaceFunction(this.value)" value="{{ old('contact_no') }}">
                    </div>
                </div>
            </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
    </div>
    {{-- <script>
        $(function() {
            $.noConflict();
            $('#quickForm').validate({
                rules: {
                    name: {
                        required: true,
                    }
                },
                messages: {
                    name: {
                        required: "Please provide a name of permission",
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
            document.getElementById('exampleInputName').value = val.replace(' ', '-');
        }
    </script> --}}
@endsection
