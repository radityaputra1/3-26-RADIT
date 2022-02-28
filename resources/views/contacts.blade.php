@extends('layouts.main')

@section('container')
<div class="title-top mb-5">
    <h2 class="fw-bold">Contact Us</h2>
</div>
<form method = "POST" action="{{ route('contact.store')}}">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="inputnama">Nama</label>
    <input type="text" name="nama" class="form-control" id="inputnama" placeholder="Masukan Nama">
    </div>
    <div class="mb-3">
        <label for="inputemail">Email</label>
        <input type="email" name="email" class="form-control" id="inputemail" placeholder="Masukan Email">
    </div>
    <div class="mb-3">
        <label for="inputnote">Pesan</label>
        <textarea class="form-control" name="pesan" id="inputnote" placeholder="Masukan Pesan" style="height: 100px"></textarea>
    </div>
    <button type="submit" class="btn btn-danger">Kirim</button>
</form>
    @endsection