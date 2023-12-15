@extends('layouts.app')

@section('content')
<style>
    .custom-card-header {
        background-color: #ff9797;
        border: 2px solid #fa7d79;
    }
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

<div class="container" style="margin-bottom: 20px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card custom-card">
            <div class="card-header text-center" style="background-color: #ffdbdb; color: #fa7d79; border: 2px solid #fa7d79; font-weight: bold; font-size: 1em">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="profile-section">
                    <h4>PROFIL PLN (Perusahaan Listrik Negara)</h4>

                    <h5>Visi</h5>
                    <p>Menjadi Perusahaan Listrik Terkemuka se-Asia Tenggara dan #1 Pilihan Pelanggan untuk Solusi Energi.</p>

                    <h5>Misi</h5>
                    <ul>
                        <li>Menjalankan bisnis kelistrikan dan bidang lain yang terkait, berorientasi pada kepuasan pelanggan, anggota perusahaan, dan pemegang saham.</li>
                        <li>Menjadikan tenaga listrik sebagai media untuk meningkatkan kualitas kehidupan masyarakat.</li>
                        <li>Mengupayakan agar tenaga listrik menjadi pendorong kegiatan ekonomi.</li>
                        <li>Menjalankan kegiatan usaha yang berwawasan lingkungan.</li>
                    </ul>

                    <h5>Moto</h5>
                    <p class="moto">Listrik untuk Kehidupan yang Lebih Baik</p>
                    </div>

            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card custom-card">
                <div class="card-header text-center" style="background-color: #ffdbdb; color: #fa7d79; border: 2px solid #fa7d79; font-weight: bold; font-size: 1em">{{ __('Data Golongan') }}</div>
                <div class="card-body">
                    <p class="card-text">{{ __('Total Data: ') . \App\Models\Golongan::count() }}</p>
                    <a href="{{ url('/golongan') }}" class="btn btn-primary">{{ __('View Golongan') }}</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card custom-card">
                <div class="card-header text-center" style="background-color: #ffdbdb; color: #fa7d79; border: 2px solid #fa7d79; font-weight: bold; font-size: 1em">{{ __('Data Pelanggan') }}</div>
                <div class="card-body">
                    <p class="card-text">{{ __('Total Data: ') . \App\Models\Pelanggan::count() }}</p>
                    <a href="{{ url('/pelanggan') }}" class="btn btn-primary">{{ __('View Pelanggan') }}</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card custom-card">
                <div class="card-header text-center" style="background-color: #ffdbdb; color: #fa7d79; border: 2px solid #fa7d79; font-weight: bold; font-size: 1em">{{ __('Data User') }}</div>
                <div class="card-body">
                    <p class="card-text">{{ __('Total Data: ') . \App\Models\User::count() }}</p>
                    <a href="{{ url('/user') }}" class="btn btn-primary">{{ __('View Users') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection