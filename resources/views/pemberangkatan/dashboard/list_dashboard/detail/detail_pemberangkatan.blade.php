@extends('pemberangkatan.main')

@section('title', 'Detail TKI')
@section('breadcrumbs')


@endsection

<style>
    .button-container {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .button-approved {
        background-color: green;
        color: white;
        width: 50%;
        margin-right: 8px;
        margin-left: 8px
    }

    .button-rejected {
        background-color: red;
        color: white;
        width: 50%;
        margin-right: 8px;
        margin-left: 8px
    }
</style>

@section('content')

    <div class="content mt-3">

        <div class="animated fadeIn">

            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Detail TKI</strong>
                    </div>
                </div>
                <div class="card -body">

                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <form action="">

                                @csrf

                                <div class="form-group">
                                    <label> Nama TKI</label>
                                    <input type="text" name="nama" class="form-control"
                                        value="{{ $detail_pemberangkatan->nama }}" readonly autofocus required>
                                </div>
                                <div class="form-group">
                                    <label> Jenis Kelamin</label>
                                    <input type="text" name="jenis_kelamin" class="form-control"
                                        value="{{ $detail_pemberangkatan->jenis_kelamin }}" readonly required>
                                </div>
                                <div class="form-group">
                                    <label> Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control"
                                        value="{{ $detail_pemberangkatan->tempat_lahir }}" readonly required>
                                </div>
                                <div class="form-group">
                                    <label> Tgl Lahir</label>
                                    <input type="text" name="tgl_lahir" class="form-control"
                                        value="{{ $detail_pemberangkatan->tgl_lahir }}" readonly required>
                                </div>
                                <div class="form-group">
                                    <label> Alamat</label>
                                    <textarea type="text" name="alamat" class="form-control" readonly>{{ $detail_pemberangkatan->alamat }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label> Agama </label>
                                    <input type="text" name="agama" class="form-control"
                                        value="{{ $detail_pemberangkatan->agama }}" readonly required>
                                </div>
                                <div class="form-group">
                                    <label> Pendidikan</label>
                                    <input type="text" name="pendidikan" class="form-control"
                                        value="{{ $detail_pemberangkatan->pendidikan }}" readonly required>
                                </div>
                                <div class="form-group">
                                    <label> No Telfon</label>
                                    <input type="number" name="no_tlp" class="form-control"
                                        value="{{ $detail_pemberangkatan->no_tlp }}" readonly required>
                                </div>
                                <div class="form-group">
                                    <label> Sponsor</label>
                                    <input type="text" name="sponsor" class="form-control"
                                        value="{{ $detail_pemberangkatan->sponsor }}" readonly required>
                                </div>
                                <div class="col-md-12">
                                    <label>KTP</label>
                                    <img src="{{ asset('images/' . $detail_pemberangkatan->ktp) }}" alt="Gambar Contoh"
                                        style="height: 300px; width: 500px;">
                                </div>
                                <div class="form-group">
                                    <label> Ijazah</label>
                                    <img src="{{ asset('images/' . $detail_pemberangkatan->ijazah) }}" alt="Gambar Contoh"
                                        style="height: 200px; width: 400px;">
                                </div>
                                <td class="text-center">
                                    @if (isset($detail_pemberangkatan->sertifikat_kesehatan))
                                        <div class="form-group">
                                            <label> Sertifikat Kesehatan</label>
                                            <img src="{{ asset('images/' . $detail_pemberangkatan->sertifikat_kesehatan) }}"
                                                alt="Gambar Contoh" style="height: 200px; width: 400px;">
                                        </div>
                                    @else
                                        <div>
                                            <label> Sertifikat Kesehatan</label>
                                        </div>
                                        <i class="fa fa-times-circle" style="color: red;"></i>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if (isset($detail_pemberangkatan->sertifikat_blk))
                                        <div class="form-group">
                                            <label> Sertifikat BLK</label>
                                            <img src="{{ asset('images/' . $detail_pemberangkatan->sertifikat_blk) }}"
                                                alt="Gambar Contoh" style="height: 200px; width: 400px;">
                                        </div>
                                    @else
                                        <div>
                                            <label> Sertifikat BLK</label>
                                        </div>
                                        <i class="fa fa-times-circle" style="color: red;"></i>
                                    @endif
                                </td>
                                <div class="form-group">
                                    <label> Paspor</label>
                                    <img src="{{ asset('images/' . $detail_pemberangkatan->paspor) }}" alt="Gambar Contoh"
                                        style="height: 200px; width: 400px;">
                                </div>
                                <div class="form-group">
                                    <label>Visa</label>
                                    <img src="{{ asset('images/' . $detail_pemberangkatan->visa) }}" alt="Gambar Contoh"
                                        style="height: 200px; width: 400px;">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>


        </div>

    </div>



@endsection
