@extends('layouts.presensi')
@section('content')
<div id="appCapsule">
    <div class="section" id="user-section">
        <div id="user-detail">
            <div class="avatar">
                @if(!empty(Auth::guard('karyawan')->user()->foto))
                @php
                $path = Storage::url('public/uploads/karyawan/'.Auth::guard('karyawan')->user()->foto);
                @endphp
                    <img src="{{ url($path) }}" alt="avatar" class="imaged w64 rounded">
                @else
                    <img src="assets/img/sample/avatar/avatar1.jpg" alt="avatar" class="imaged w64 rounded">
                @endif
            </div>
            <div id="user-info">
                <h2 id="user-name">{{ Auth::guard('karyawan')->user()->nama }}</h2>
                <span id="user-role">{{ Auth::guard('karyawan')->user()->jabatan }}</span>
            </div>
        </div>
    </div>

    <div class="section" id="menu-section">
        <div class="card">
            <div class="card-body text-center">
                <div class="list-menu">
                    <div class="item-menu text-center">
                        <div class="menu-icon">
                            <a href="" class="green" style="font-size: 40px;">
                                <ion-icon name="person-sharp"></ion-icon>
                            </a>
                        </div>
                        <div class="menu-name">
                            <span class="text-center">Profil</span>
                        </div>
                    </div>
                    <div class="item-menu text-center">
                        <div class="menu-icon">
                            <a href="" class="danger" style="font-size: 40px;">
                                <ion-icon name="calendar-number"></ion-icon>
                            </a>
                        </div>
                        <div class="menu-name">
                            <span class="text-center">Cuti</span>
                        </div>
                    </div>
                    <div class="item-menu text-center">
                        <div class="menu-icon">
                            <a href="" class="warning" style="font-size: 40px;">
                                <ion-icon name="document-text"></ion-icon>
                            </a>
                        </div>
                        <div class="menu-name">
                            <span class="text-center">Histori</span>
                        </div>
                    </div>
                    <div class="item-menu text-center">
                        <div class="menu-icon">
                            <a href="" class="orange" style="font-size: 40px;">
                                <ion-icon name="location"></ion-icon>
                            </a>
                        </div>
                        <div class="menu-name">
                            Lokasi
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section mt-2" id="presence-section">
        <div class="todaypresence">
            <div class="row">
                <div class="col-6">
                    <div class="card gradasigreen">
                        <div class="card-body">
                            <div class="presencecontent">
                                <div class="iconpresence">
                                    <ion-icon name="camera"></ion-icon>
                                </div>
                                <div class="presencedetail">
                                    <h4 class="presencetitle">Masuk</h4>
                                    <span>{{ $presensihariini != null ? $presensihariini->jam_in : 'Belum Absen' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card gradasired">
                        <div class="card-body">
                            <div class="presencecontent">
                                <div class="iconpresence">
                                    <ion-icon name="camera"></ion-icon>
                                </div>
                                <div class="presencedetail">
                                    <h4 class="presencetitle">Pulang</h4>
                                    <span>{{ $presensihariini != null ? $presensihariini->jam_out : 'Belum Pulang' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>   
        <div id='rekappresensi'>
            <div class="row">
                <div class="col-3">
                    <div class='card'>
                        <div class='card-body text-center'>
                            <span class='badge bg-danger'>{{ $rekap->jmlhadir }}</span>
                            <span style="font-size: 0.8rem; font-weight:500;">Hadir</span>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class='card'>
                        <div class='card-body text-center'>
                            <span class='badge bg-danger'>{{ $rekap->jmlterlambat }}</span>
                            <span style="font-size: 0.8rem; font-weight:500;">Telat</span>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class='card'>
                        <div class='card-body text-center'>
                            <span class='badge bg-danger'>10</span>
                            <span style="font-size: 0.8rem; font-weight:500;">Sakit</span>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class='card'>
                        <div class='card-body text-center'>
                            <span class='badge bg-danger'>10</span>
                            <span style="font-size: 0.8rem; font-weight:500;">Ijin</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="presencetab mt-2">
            <div class="tab-content mt-2" style="margin-bottom:100px;">
                <div class="tab-pane fade show active" id="home" role="tabpanel">
                    <ul class="listview image-listview">
                        @foreach ($histori as $d)
                            <li>
                                <div class="item" style='width:92vw;'>
                                    <div class="icon-box bg-primary">
                                        <ion-icon name="image-outline" role="img" class="md hydrated"
                                            aria-label="image outline"></ion-icon>
                                    </div>
                                    <div class="in">
                                        <div>{{ date('Y-m-d', strtotime($d->tgl_presensi)) }}</div>
                                        <span class="badge gradasigreen">{{ $d->jam_in }}</span>
                                        <span class="badge badge-danger">{{ $d->jam_out }}</span>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>    
                </div>
            </div>
        </div>   --}}
    </div>
</div>
@endsection('content')