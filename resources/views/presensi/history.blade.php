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
<div class='row' style='margin-top:70px'>
    <div class='col'>
        <div class='row'>
            <div class="col-12">
                <div class='form-group'>
                    <select name='bulan' id='bulan' class="form-control">
                        <option value=''>Bulan</option>
                        @for ($i=1; $i<=12; $i++)
                            <option value="{{ $i }}" {{ date('m')==$i ? 'selected' : '' }}>{{ $namabulan[$i] }}</option>
                        @endfor
                    </select>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class="col-12">
                <div class='form-group'>
                    <select name='tahun' id='tahun' class="form-control">
                        <option value=''>Tahun</option>
                        @for ($tahun = 2022; $tahun<=date('Y'); $tahun++)
                            <option value='{{ $tahun }}' {{ date('Y')==$tahun ? 'selected' : '' }}>{{ $tahun }}</option>
                        @endfor
                    </select>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class="col-12">
                <div class='form-group'>
                    <button class='btn btn-primary btn-block' id='getdata'>Cari Data</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="presencetab">
    <div class="tab-content" style="margin-bottom:100px;">
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

@push('myscript')
    <script>
        $(function(){
            $('#getdata').click(function(e){
                var bulan = $('#bulan').val();
                var tahun = $('#tahun').val();
                $.ajax({
                    type: 'POST',
                    url: '/gethistori',
                    
                });
            });
        });
    </script>
@endpush