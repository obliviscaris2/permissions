@extends('admin.layouts.master')

<!-- Main content -->
@section('content')
    @include('admin.includes.forms')
    <div class="card-header">
        <h1 class="card-title">{{ $page_title }}</h1>
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



    <form id="quickForm" novalidate="novalidate" method="POST" action="{{ route('admin.registration.store') }}">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Registration No.</label>
                        <input type="text" name="reg_no" class="form-control" id="exampleInputName"
                            placeholder="Registration Number" onkeyup="replaceFunction(this.value)" value="{{ old('reg_no') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nepali-datepicker">Registration Date</label>
                        <input type="date" name="reg_date" class="form-control nepali-datepicker" id="nepali-datepicker"
                            placeholder="Registration Date" value="{{ old('reg_date') }}">
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
   

  
@endsection
