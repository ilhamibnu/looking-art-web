@extends('admin.layout.main')
@section('title', 'Domisili - ')
@section('content')
<div class="container-fluid">
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="components-preview wide-md mx-auto">
                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title">Data Table with Export</h4>
                            <div class="nk-block-des">
                                <p>To intialize datatable with export buttons, use <code class="code-class">.datatable-init-export</code> with <code>table</code> element. <br> <strong class="text-dark">Please Note</strong> By default export libraries is not added globally, so please include <code class="code-class">"js/libs/datatable-btns.js"</code> into your page to active export buttons.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-bordered card-preview">
                        <div class="card-inner">
                            @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show mt-2  mb-2">



                                <?php

                                $nomer = 1;

                                ?>

                                @foreach ($errors->all() as $error)
                                <li>{{ $nomer++ }}. {{ $error }}</li>
                                @endforeach
                            </div>
                            @endif
                            <button data-bs-toggle="modal" data-bs-target="#modaladd" class="btn btn-primary mb-2">Add</button>
                            <table class="datatable-init-export nowrap table" data-export-title="Export">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($keahlian as $item )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <button data-bs-toggle="modal" data-bs-target="#modaledit{{ $item->id }}" class="btn btn-warning">Edit</button>
                                            <button data-bs-toggle="modal" data-bs-target="#modaldelete{{ $item->id }}" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="modaldelete{{ $item->id }}">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Delete</h5><a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/admin/keahlian/delete/{{ $item->id }}" method="POST" class="form-validate is-alter">
                                                        @csrf
                                                        @method('delete')
                                                        <p>Anda yakin akan menghapus {{ $item->name }}</p>
                                                        <div class="form-group"><button type="submit" class="btn btn-lg btn-primary">Delete</button></div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="modal fade" id="modaledit{{ $item->id }}">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit</h5><a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/admin/keahlian/update/{{ $item->id }}" method="POST" class="form-validate is-alter">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group"><label class="form-label" for="full-name">Full Name</label>
                                                            <div class="form-control-wrap"><input type="text" name="name" value="{{ $item->name }}" class="form-control" id="full-name" required=""></div>
                                                        </div>


                                                        <div class="form-group"><button type="submit" class="btn btn-lg btn-primary">Save</button></div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal fade" id="modaladd">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add</h5><a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross"></em></a>
                                </div>
                                <div class="modal-body">
                                    <form action="/admin/keahlian/store" method="POST" class="form-validate is-alter">
                                        @csrf
                                        <div class="form-group"><label class="form-label" for="full-name">Name</label>
                                            <div class="form-control-wrap"><input type="text" name="name" class="form-control" id="full-name" required=""></div>
                                        </div>



                                        <div class="form-group"><button type="submit" class="btn btn-lg btn-primary">Save</button></div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
