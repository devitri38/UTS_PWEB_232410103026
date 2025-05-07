@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Profile</h4>
            </div>
            <div class="card-body">
                <div class="mb-3 text-center">
                    <img src="https://id.pinterest.com/pin/26317979066309408/{{ urlencode($username) }}&background=0D8ABC&color=fff&size=150"
                         class="rounded-circle mb-3"
                         alt="Profile Picture">
                    <h3>{{ $username ?? 'Guest' }}</h3>
                    <p class="text-muted">Admin VillaVisitor</p>
                </div>
                <div class="list-group">
                    <div class="list-group-item">
                        <strong>Email:</strong> {{ strtolower($username) }}@villavisitor.com
                    </div>
                    <div class="list-group-item">
                        <strong>Terdaftar sejak:</strong> 1 Januari 2025
                    </div>
                    <div class="list-group-item">
                        <strong>Terakhir login:</strong> {{ date('d F Y H:i') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
