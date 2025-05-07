@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header bg-primary text-white text-center">
        <h4 class="mb-0">Dashboard</h4>
    </div>
    <div class="card-body text-center">
        <div class="alert alert-success">
            Welcome to the VV-VillaVisitors web, <strong>{{ $username ?? 'Guest' }}</strong>!
            <p class="mb-0">Silakan pilih menu di atas untuk akses yang kamu inginkan.</p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-info text-white mb-3 text-center card-stat">
                    <div class="card-body">
                        <h5 class="card-title">Total Pengunjung</h5>
                        <p class="card-text display-6">15</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-success text-white mb-3 text-center card-stat">
                    <div class="card-body">
                        <h5 class="card-title">Sedang Menginap</h5>
                        <p class="card-text display-6">3</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-warning text-dark mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Akan Check-out</h5>
                        <p class="card-text display-6">2</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    /* Custom CSS untuk card statistik */
    .card-stat {
        min-height: 150px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease;
    }
    .card-stat:hover {
        transform: scale(1.03);
    }
</style>
@endsection
