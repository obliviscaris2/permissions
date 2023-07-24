@extends('admin.layouts.master')

@section('content')
    @include('admin.includes.forms')
    <div class="card-header">
        <h1 class="card-title">{{ $page_title }}</h1>
    </div>

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

    <form id="quickForm" novalidate="novalidate" method="POST" action="{{ route('admin.transaction.store') }}">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="registrations">Registration No:</label>
                        {{ $registration->reg_no }}
                        <input type="hidden" name="registration_id" value="{{ $registration->id }}"> 
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="tran_date">Transaction Date:</label>
                        <input type="text" name="tran_date" class="form-control nepali-datepicker" id="tran_date"
                            placeholder="Transaction Date" value="{{ old('tran_date') }}">

                        @error('tran_date')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="tran_purpose_id">Transaction Purpose:</label><br>
                       


                        @foreach ($tranpurposes as $tranpurpose)
                        <div class="form-check">
                            <input type="checkbox" name="tran_purpose_id[]" value="{{ $tranpurpose->id }}"
                                   id="tran_purpose_{{ $tranpurpose->id }}"
                                   @if (in_array($tranpurpose->id, old('tran_purpose_id', []))) checked @endif>
                            <label for="tran_purpose_{{ $tranpurpose->id }}">{{ $tranpurpose->title }}</label>
                        </div>
                    @endforeach
                  
{{-- 
                            <select name="tran_purpose_id" id="tran_purpose_id">
                                <option value="0" disabled selected>--Select Type --</option>
                                @foreach ($tranpurposes as $tranpurpose )
                                    <option value="{{ $tranpurpose->id }}">{{ $tranpurpose->title }}</option>
                                @endforeach
                            </select> --}}



                        @error('tran_purpose_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="tran_nature">Transaction Nature:</label><br>
                       
                        @foreach ($trannatures as $trannature)
                        <div class="form-check">
                            <input type="checkbox" name="tran_nature_id[]" value="{{ $trannature->id }}"
                                   id="tran_nature_{{ $trannature->id }}"
                                   @if (in_array($trannature->id, old('tran_nature_id', []))) checked @endif>
                            <label for="tran_nature_{{ $trannature->id }}">{{ $trannature->title }}</label>
                        </div>
                    @endforeach

                        @error('tran_nature_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="tran_proof">Transaction Proof:</label><br>
                       
                        
                        @foreach ($tranproofs as $tranproof)
                        <div class="form-check">
                            <input type="checkbox" name="tran_proof_id[]" value="{{ $tranproof->id }}"
                                   id="tran_proof_{{ $tranproof->id }}"
                                   @if (in_array($tranproof->id, old('tran_proof_id', []))) checked @endif>
                            <label for="tran_proof_{{ $tranproof->id }}">{{ $tranproof->title }}</label>
                        </div>
                    @endforeach

                        @error('tran_proof_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="tran_amount">Transaction Amount:</label>
                        <input type="text" name="tran_amount" class="form-control" id="tran_amount"
                            placeholder="Transaction Amount" value="{{ old('tran_amount') }}">
                        @error('tran_amount')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
@endsection
