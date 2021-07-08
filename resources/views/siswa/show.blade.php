@extends('layouts.app')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 mb-2 mb-lg-0">Detail Siswa</h1>
    <a href="{{ url('/dashboard/siswa') }}" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali</a>
</div>

<table class="table table-striped">
    <tr>
        <th style="width: 200px;">ID</th>
        <td>{{ $row->_id }}</td>
    </tr>
    <tr>
        <th>NIS</th>
        <td>{{ $row->siswa_nis }}</td>
    </tr>
    <tr>
        <th>NISN</th>
        <td>{{ $row->siswa_nisn }}</td>
    </tr>
    <tr>
        <th>NAMA</th>
        <td>{{ $row->siswa_nama }}</td>
    </tr>
    <tr>
        <th>JENIS KELAMIN</th>
        <td>{{ $row->siswa_jk??'Tidak Diketahui' }}</td>
    </tr>
    <tr>
        <th>TEMPAT LAHIR</th>
        <td>{{ $row->siswa_tmplahir }}</td>
    </tr>
    <tr>
        <th>TANGGAL LAHIR</th>
        <td>{{ \Carbon\Carbon::parse($row->siswa_tgllahir)->formatLocalized('%d %B %Y') }}</td>
    </tr>
    <tr>
        <th>AGAMA</th>
        <td>{{ $row->siswa_agama }}</td>
    </tr>
    <tr>
        <th>STATUS DALAM KELUARGA</th>
        <td>{{ $row->status_anak }} Anak Ke - {{$row->anak_ke}}</td>
    </tr>
    <tr>
        <th>ALAMAT</th>
        <td>{{ $row->siswa_alamat }}</td>
    </tr>
    <tr>
        <th>HP</th>
        <td>{{ $row->siswa_hp }}</td>
    </tr>
    <tr>
        <th>EMAIL</th>
        <td>{{ $row->email }}</td>
    </tr>
    <tr>
        <th>DATA AYAH</th>
        <td>Nama: <b class="text-danger">{{ $row->nama_ayah??'' }}</b>, Pekerjaan: <b class="text-danger">{{$row->pekerjaan_ayah}}</b></td>
    </tr>
    <tr>
        <th>DATA IBU</th>
        <td>Nama: <b class="text-danger">{{ $row->nama_ibu??'' }}</b>, Pekerjaan: <b class="text-danger">{{$row->pekerjaan_ibu}}</b></td>
    </tr>
    <tr>
        <th>DATA WALI</th>
        <td>Nama: <b class="text-danger">{{ $row->nama_wali??'' }}</b>, Pekerjaan: <b class="text-danger">{{$row->pekerjaan_wali}}</b>, No Telp/HP: <b class="text-danger">{{$row->no_telp_wali??''}}</b></td>
    </tr>
    <tr>
        <th>KELAS</th>
        <td>{{ $row->kelas->kelasjurusan_nama }} (<span class="font-weight-bold">{{ $row->kelas->kelasjurusan_kode }}</span>)</td>
    </tr>
    <tr>
        <th>WALI KELAS</th>
        <td>{{ $row->waliKelas()->getFullName() }}
        </td>
    </tr>
    <tr>
        <th>ABSENSI</th>
        <td>
            Hadir {{$absensi->where('absen','h')->count()}},
            Izin {{$absensi->where('absen','i')->count()}},
            Sakit {{$absensi->where('absen','s')->count()}},
            Alfa {{$absensi->where('absen','a')->count()}}
        </td>
    </tr>
    <tr>
        <th>POIN PELANGGARAN</th>
        <td>{!! $row->totalPoint() !!}</td>
    </tr>
    <tr>
        <th>DIBUAT</th>
        <td>{{ \Carbon\Carbon::parse($row->created_at)->formatLocalized('%d %B %Y %H:%M:%S') }}</td>
    </tr>
    <tr>
        <th>DIEDIT</th>
        <td>{{ $row->updated_at != '' ? \Carbon\Carbon::parse($row->updated_at)->formatLocalized('%d %B %Y %H:%M:%S') : '' }}
        </td>
    </tr>
</table>

@endsection

@push('js')
    <script>
        $('#collapseTwo').addClass('show').parent().addClass('active');
        $('#data-siswa').addClass('active');
    </script>
@endpush
