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
                                            <span class="badge badge-warning">Proses</span>
                                            @elseif ($item->status == 'Tidak Jadi')
                                            <span class="badge badge-danger">Tidak Jadi</span>
                                            @elseif ($item->status == 'Berhasil')
                                            <span class="badge badge-success">Berhasil</span>
                                            @else
                                            <span class="badge badge-danger">Gagal</span>
                                            @endif
                                        </td>
                                        <td>{{ $item->keterangan }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>
                                            <button data-bs-toggle="modal" data-bs-target="#modaledit{{ $item->id }}" class="btn btn-primary">Edit</button>
                                            <button data-bs-toggle="modal" data-bs-target="#modaldelete{{ $item->id }}" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>

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
