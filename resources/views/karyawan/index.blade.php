@extends('dashboard.tabler')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                Karyawan
                </div>
                <h2 class="page-title">
                Data Karyawan
                </h2>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nik</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>No Hp</th>
                            <th>foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($karyawan as $d )
                        @php
                            $path = Storage::url('uploads/karyawan/' . $d->foto);
                        @endphp
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d->nik }}</td>
                                <td>{{ $d->nama }}</td>
                                <td>{{ $d->jabatan }}</td>
                                <td>{{ $d->no_hp }}</td>
                                @if (empty($d->foto))
                                    <td><img src="{{ asset('assets/img/sample/avatar/avatar1.jpg') }}" class='avatar' alt='none'></td>
                                @else
                                    <td><img src="{{ url($path) }}" class='avatar' alt='none'></td>
                                @endif
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
