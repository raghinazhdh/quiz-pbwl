@extends('layouts.app')

@section('content')
<?php
$no=1
?>
<h2>Data User</h2>

<a href="{{ url('user/create') }}" class="btn btn-primary mb-3 float-end">+ Tambah User</a>
<table class="table table-bordered" style="border-color: #FF8985;">
    <thead style="background-color: #ffdbdb">
        <tr style="background-color: #D97471;">
        <th>NO</th>
        <th>NAMA</th>
        <th>EMAIL</th>
        <th>ID</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>

    @foreach ($rows as $row)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $row->name }}</td>
        <td>{{ $row->email }}</td>
        <td>{{ $row->id }}</td>
        <td><a href="{{ url('user/edit/' . $row->id) }}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('user/' . $row->id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
            </form>
        </td>
    </tr>
    @endforeach

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