@extends('admin.layouts.master')

@section('content')

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

    <a href="{{ route('admin.notransaction.create') }}" class="btn btn-primary add-list">
        <i class="fa-solid fa-plus me-3"></i>
        Add
    </a>


    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Title</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($noTransactionPurpose as $noTransaction)
                        <tr>
                            <th scope="row">
                                {{$loop->iteration }}
                            </th>
                            <td>{{ $noTransaction->title }}</td>
                            <td>
                                <div class="d-flex">
                                    {{-- <a href="{{ route('admin.category.show', $product->id) }}"
                                                class="btn btn-outline-success btn-sm mx-1">
                                                <i class="fa-solid fa-eye"></i>
                                    </a> --}}
                                    <button type="button" class="btn btn-outline-primary btn-sm mx-1"
                                        data-bs-toggle="modal"
                                        data-bs-target="#edit{{ $noTransaction->id }}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-danger btn-sm"
                                        data-bs-toggle="modal"
                                        data-bs-target="#delete{{ $noTransaction->id }}">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

                {{-- =====================================
                            MODAL - EDIT
                ====================================     --}}
                @foreach ($noTransactionPurpose as $noTransaction)
                    <div class="modal fade" id="edit{{ $noTransaction->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">This can't be undone.
                                        Are you sure?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger"
                                        data-bs-dismiss="modal">No</button>
                                    <a href="{{ url('admin/notransaction/edit/' . $noTransaction->id) }}">
                                        <button type="button" class="btn btn-danger">Yes
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- =====================================
                        MODAL - DELETE
            ====================================     --}}

                @foreach ($noTransactionPurpose as $noTransaction)
                    <div class="modal fade" id="delete{{ $noTransaction->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">This can't be
                                        undone. Are you sure?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger"
                                        data-bs-dismiss="modal">No</button>
                                    <a href="{{ url('admin/notransaction/destroy/' . $noTransaction->id) }}">
                                        <button type="button" class="btn btn-danger">
                                            Yes
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </table>
        </div>
    </div>


@endsection
