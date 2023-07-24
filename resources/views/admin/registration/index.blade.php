@extends('admin.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->

    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">{{ $page_title }}</h1>
            <a href="{{ route('admin.registration.create') }}"><button class="btn-primary btn-sm"><i class="fa fa-plus"></i>
                    Add New</button></a>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->

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


    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Reg. Id</th>
                <th>Reg. Date</th>
                <th>Applicant</th>
                <th>Offender</th>
                <th>Tran. Date</th>
                <th>Tran. Amount</th>
                <th>Tran. Purpose</th>
                <th>Tran. Nature</th>
                <th>Tran. Proof</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($registrations as $reg)
                <tr data-widget="expandable-table" aria-expanded="false">
                    <td>{{ $reg->reg_no }}</td>
                    <td>{{ $reg->reg_date ?? '' }}</td>
                    <td>{{ $reg->applicant->first_name ?? '' }} {{ $reg->applicant->middle_name ?? '' }}
                        {{ $reg->applicant->last_name ?? '' }}</td>
                    <td>{{ $reg->offender->first_name ?? '' }} {{ $reg->offender->middle_name ?? '' }}
                        {{ $reg->offender->last_name ?? '' }}</td>
                    <td>{{ $reg->transaction->tran_date ?? '' }}</td>
                    <td>{{ $reg->transaction->tran_amount ?? '' }}</td>
                    <td>
                      @foreach ($reg->transaction->tranPurpose as $tranPurpose)
                      {{ $tranPurpose->title }}
                      @if (!$loop->last)
                          , {{-- Add a comma if it's not the last tranPurpose --}}
                      @endif
                  @endforeach
                    </td>
                    <td>
                      @foreach ($reg->transaction->tranNature as $tranNature)
                      {{ $tranNature->title }}
                      @if (!$loop->last)
                          , {{-- Add a comma if it's not the last tranPurpose --}}
                      @endif
                  @endforeach
                    </td>
                    <td>
                      @foreach ($reg->transaction->tranProof as $tranProof)
                      {{ $tranProof->title }}
                      @if (!$loop->last)
                          , {{-- Add a comma if it's not the last tranPurpose --}}
                      @endif
                  @endforeach
                    </td>


                    <td>

                        {{-- <a href="edit/{{ $post->id }}"> --}}
                        <div style="display: flex; flex-direction:row;">
                            <button type="button" class="btn-warning button-size" data-bs-toggle="modal"
                                data-bs-target="#edit{{ $reg->id }}">
                                Update
                            </button>
                            {{-- </a> --}}

                            {{-- <a href="{{ url('admin/posts/destroy/'.$post->id) }}"> --}}
                            <button type="button" class="btn-danger button-size" data-bs-toggle="modal"
                                data-bs-target="#delete{{ $reg->id }}">
                                Delete
                            </button>
                            {{-- </a> --}}

                    </td>
                </tr>
            @endforeach
        </tbody>

        {{-- update --}}
        {{-- @foreach ($posts as $post)

        <div class="modal fade" id="edit{{ $post->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">This can't be undone. Are you sure?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                 <a href="{{ url('Admin/Posts/Edit/' .$post->id) }}">
                  <button type="button" class="btn btn-danger">Yes
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>

        @endforeach


        @foreach ($posts as $post)

        <div class="modal fade" id="delete{{ $post->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">This can't be undone. Are you sure?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                 <a href="{{ url('Admin/Posts/Destroy/' .$post->id) }}">
                  <button type="button" class="btn btn-danger">Yes
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>

        @endforeach --}}
    </table>

    <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })
    </script>
@endsection
