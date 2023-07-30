@extends('admin.main')

@section('title', 'Total TKI')
@section('breadcrumbs')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Total TKI</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li>
                            <a href="#">Total TKI</a>
                        </li>
                        <li class="active">Total TKI</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content')

    <div class="content mt-3">

        <div class="animated fadeIn">


            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>List TKI</strong>
                    </div>
                </div>
                <div class="card -body table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat Lahir</th>
                                <th>Tgl Lahir</th>
                                <th>Alamat</th>
                                <th>Agama</th>
                                <th>Pendidikan</th>
                                <th>No Telfon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listTki as $item)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    <td>{{ $item->tempat_lahir }}</td>
                                    <td>{{ $item->tgl_lahir }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->agama }}</td>
                                    <td>{{ $item->pendidikan }}</td>
                                    <td>{{ $item->no_tlp }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('list-total-tki/admin/detail-tki/' . $item->id) }}"
                                            class="btn btn-success btn-sm" style="color: white;">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


        </div>

    </div>

@endsection
