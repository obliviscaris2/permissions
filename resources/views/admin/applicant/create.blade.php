@extends('admin.layouts.master')

<!-- Main content -->
@section('content')
    @include('admin.includes.forms')
    <div class="card-header">
        <h1 class="card-title">{{ $page_title }}</h1>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <form id="quickForm" novalidate="novalidate" method="POST" action="{{ route('admin.applicant.store') }}">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">



                    <div class="form-group">
                        <label for="registrations">Registration No</label>
                        {{ $registration->reg_no }}
                        <input type="hidden" name="registration_id" value="{{ $registration->id }}">
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" name="first_name" class="form-control" id="exampleInputName"
                            placeholder="First Name" value="{{ old('first_name') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Middle Name</label>
                        <input type="text" name="middle_name" class="form-control" id="exampleInputName"
                            placeholder="Middle Name" value="{{ old('middle_name') }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" name="last_name" class="form-control" id="exampleInputName"
                            placeholder="Last Name" value="{{ old('last_name') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="state">State</label>
                        <select name="state" id="state" class="form-control">
                            <option value="">Select State</option>
                            @foreach ($states as $state)
                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="district">District</label>
                        <select name="district" id="district" class="form-control">
                            <option value="">Select District</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="local_govn">Local Government</label>
                        <select name="local_govn" id="local_govn" class="form-control">
                            <option value="">Select Local Government</option>
                        </select>
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
                            placeholder="Permanent Address" onkeyup="replaceFunction(this.value)"
                            value="{{ old('permanent_address') }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contact No.</label>
                        <input type="text" name="contact_no" class="form-control" id="exampleInputName"
                            placeholder="Contact No." onkeyup="replaceFunction(this.value)"
                            value="{{ old('contact_no') }}">
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


    <!-- Include jQuery library -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

    <script>
        $(document).ready(function() {
            $('#state').change(function() {
                var state_id = $(this).val();
                console.log(state_id); // Check if the state_id is correct
                var url = '/admin/applicant/get-districts/' + state_id;
                $('#district').empty();
                $('#local_govn').empty();

                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        if (response.length > 0) {
                            $.each(response, function(key, value) {
                                $('#district').append('<option value="' + value.id +
                                    '">' + value.name + '</option>');
                            });

                            // Add this part to set the selected district value if it exists in the database
                            var selectedDistrict =
                                "{{ old('district', $userInformation->district ?? '') }}";
                            if (selectedDistrict !== '') {
                                $('#district').val(selectedDistrict);
                                // Trigger the change event to fetch local governments for the selected district
                                $('#district').trigger('change');
                            }
                        } else {
                            $('#district').append(
                                '<option value="">No districts found</option>');
                            $('#local_govn').append(
                                '<option value="">Select Local Government</option>');
                        }
                    }
                });
            });

            // When a district is selected
            $('#district').change(function() {
                var district_id = $(this).val();
                console.log(district_id); // Check if the district_id is correct
                var url = '/admin/applicant/get-local-governments/' + district_id;
                $('#local_govn').empty();

                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        if (response.length > 0) {
                            $.each(response, function(key, value) {
                                $('#local_govn').append('<option value="' + value.id +
                                    '">' + value.name + '</option>');
                            });

                            // Add this part to set the selected local government value if it exists in the database
                            var selectedLocalGovn =
                                "{{ old('local_govn', $userInformation->local_govn ?? '') }}";
                            if (selectedLocalGovn !== '') {
                                $('#local_govn').val(selectedLocalGovn);
                            }
                        } else {
                            $('#local_govn').append(
                                '<option value="">No local governments found</option>');
                        }
                    }
                });
            });

            // Add this part to set the selected state value when the page loads
            var selectedState = "{{ old('state', $userInformation->state ?? '') }}";
            if (selectedState !== '') {
                $('#state').val(selectedState);
                // Trigger the change event to fetch districts for the selected state
                $('#state').trigger('change');
            }
        });
    </script>




@endsection
