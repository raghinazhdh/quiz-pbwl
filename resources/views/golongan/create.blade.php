@extends('layouts.app')

@section('content')
<h2>Tambah Golongan</h2>

<form action="{{ url('golongan') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="">KODE</label>
        <input type="text" name="gol_kode" id="" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">NAMA</label>
        <input type="text" name="gol_nama" id="" class="form-control" required>
    </div>
    <div class="mb-3">
        <input type="submit" value="SAVE" class="btn btn-primary">
    </div>
</form>

<style>
    .btn {
        background-color: #AD6966;
        border-radius: 7px;
        color: #ffffff;
        padding: 7px;
    }
    .btn:hover {
    background-color: #8d524e;
    }
</style>
@endsection