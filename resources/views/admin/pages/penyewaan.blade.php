@extends('admin.layout.main')
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
                            <table class="datatable-init-export nowrap table" data-export-title="Export">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name Art</th>
                                        <th>Name Penyewa</th>
                                        <th>Status</th>
                                        <th>Keterangan</th>
                                        <th>Tanggal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($penyewaan as $item )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->art->name }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>
                                            @if ($item->status == 'Proses')
                                            <span>Proses</span>
                                            @elseif ($item->status == 'Tidak Jadi')
                                            <span>Tidak Jadi</span>
                                            @elseif ($item->status == 'Berhasil')
                                            <span>Berhasil</span>
                                            @else
                                            <span>Gagal</span>
                                            @endif
                                        </td>
                                        <td>{{ $item->keterangan }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>
                                            <button data-bs-toggle="modal" data-bs-target="#modaledit{{ $item->id }}" class="btn btn-primary">Edit</button>
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
                                                    <form action="/admin/penyewaan/delete/{{ $item->id }}" method="POST" class="form-validate is-alter">
                                                        @csrf
                                                        @method('delete')
                                                        <p>Anda yakin akan menghapus penyewaan art {{ $item->art->name }}? oleh {{ $item->user->name }}</p>
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
                                                    <form action="/admin/penyewaan/sewastatus/{{ $item->id }}" method="POST" class="form-validate is-alter" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group"><label class="form-label" for="phone-no">Status</label>
                                                            <div class="form-control-wrap">
                                                                <input hidden type="text" name="id_art" value="{{ $item->art->id }}">
                                                                <select name="status" id="" class="form-control">
                                                                    @if ($item->status == 'Proses')
                                                                    <option value="Proses" selected>Proses</option>
                                                                    <option value="Tidak Jadi">Tidak Jadi</option>
                                                                    <option value="Berhasil">Berhasil</option>
                                                                    <option value="Gagal">Gagal</option>
                                                                    @elseif ($item->status == 'Tidak Jadi')
                                                                    <option value="Proses">Proses</option>
                                                                    <option value="Tidak Jadi" selected>Tidak Jadi</option>
                                                                    <option value="Berhasil">Berhasil</option>
                                                                    <option value="Gagal">Gagal</option>
                                                                    @elseif ($item->status == 'Berhasil')
                                                                    <option value="Proses">Proses</option>
                                                                    <option value="Tidak Jadi">Tidak Jadi</option>
                                                                    <option value="Berhasil" selected>Berhasil</option>
                                                                    <option value="Gagal">Gagal</option>
                                                                    @else
                                                                    <option value="Proses">Proses</option>
                                                                    <option value="Tidak Jadi">Tidak Jadi</option>
                                                                    <option value="Berhasil">Berhasil</option>
                                                                    <option value="Gagal" selected>Gagal</option>
                                                                    @endif
                                                                </select>
                                                            </div>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
