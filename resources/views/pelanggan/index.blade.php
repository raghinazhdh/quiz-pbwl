@extends('layouts.app')

@section('content')
<h2>Data Pelanggan</h2>

<a href="{{ url('pelanggan/create') }}" class="btn btn-primary mb-3 float-end">+ Tambah Pelanggan</a>
<table class="table table-bordered" style="border-color: #FF8985;">
    <thead style="background-color: #ffdbdb">
        <tr style="background-color: #D97471;">
            <th>NOMOR</th>
            <th>ID</th>
            <th>GOLONGAN</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>KTP</th>
            <th>METERAN</th>
            <th>PETUGAS</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        @foreach ($rows as $row)
        <tr>
            <td>{{ $row->pel_no }}</td>
            <td>{{ $row->pel_id }}</td>
            <td>{{ optional($row->golongan)->gol_nama }}</td>
            <td>{{ $row->pel_nama }}</td>
            <td>{{ $row->pel_alamat }}</td>
            <td>{{ $row->pel_ktp }}</td>
            <td>{{ $row->pel_meteran }}</td>
            <td>{{ optional($row->users)->name }}</td>
            <td><a href="{{ url('pelanggan/edit/' . $row->pel_id) }}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{ url('pelanggan/' . $row->pel_id) }}" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    @csrf
                    <input type="submit" value="Delete" class="btn btn-danger"
                        onclick="return confirm('Are you sure?')">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

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
    table {
        width: 100%;
        table-layout: fixed; 
    }

    th, td {
        text-align: left; 
        vertical-align: middle;
        padding: 10px; 
    }
</style>
@endsection