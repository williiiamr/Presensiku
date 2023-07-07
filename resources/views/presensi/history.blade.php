@extends('layouts/presensi')
@section('header')
<div class='appHeader bg-primary text-light'>
    <div class='left'>
        <a href='/dashboard' class='headerButton goBack'>
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class='pageTitle'>History</div>
    <div class='right'></div>
</div>
@endsection

@section('content')
<div class="presencetab mt-10">
    <div class="tab-content mt-2" style="margin-bottom:100px; padding-top: 40px">
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
</div>  
@endsection