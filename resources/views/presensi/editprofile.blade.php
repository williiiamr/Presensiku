@extends('layouts.presensi')
@section('header')
<div class='appHeader bg-primary text-light'>
    <div class='left'>
        <a href='/dashboard' class='headerButton goBack'>
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class='pageTitle'>Edit Profile</div>
    <div class='right'></div>
</div>
@endsection

@section('content')
<form action="#" method="POST" enctype="multipart/form-data" style="margin-top: 4rem"'>
    @csrf
    <div class="col">
        <div class="form-group boxed">
            <div class="input-wrapper">
                <input type="text" class="form-control" value="" name="nama_lengkap" placeholder="Nama Lengkap" autocomplete="off">
            </div>
        </div>
        <div class="form-group boxed">
            <div class="input-wrapper">
                <input type="text" class="form-control" value="" name="no_hp" placeholder="No. HP" autocomplete="off">
            </div>
        </div>
        <div class="form-group boxed">
            <div class="input-wrapper">
                <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off">
            </div>
        </div>
        <div class="custom-file-upload" id="fileUpload1">
            <input type="file" name="foto" id="fileuploadInput" accept=".png, .jpg, .jpeg">
            <label for="fileuploadInput">
                <span>
                    <strong>
                        <ion-icon name="cloud-upload-outline" role="img" class="md hydrated" aria-label="cloud upload outline"></ion-icon>
                        <i>Tap to Upload</i>
                    </strong>
                </span>
            </label>
        </div>
        <div class="form-group boxed">
            <div class="input-wrapper">
                <button type="submit" class="btn btn-primary btn-block">
                    <ion-icon name="refresh-outline"></ion-icon>
                    Update
                </button>
            </div>
        </div>
    </div>
</form>

<div style='position: absolute; bottom:60px; right:0px'>
    <a href="/proseslogout" class="btn btn-danger btn-block ">
        <strong>Logout</strong>
    </a>
</div>
@endsection