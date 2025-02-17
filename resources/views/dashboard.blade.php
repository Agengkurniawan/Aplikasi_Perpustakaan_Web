@extends('layouts.master')
@section('title', 'Dashboard')

@section('content')
<h2>Welcome, {{ auth()->user()->username }}</h2>

<div class="row mt-5">
    <div class="col-lg-4">
        <div class="card-data book">
            <div class="row">
                <div class="col-6">
                    <i class="bi bi-journal-bookmark"></i>
                </div>
                <div class="col-6 d-flex justify-content-center flex-column align-items-end">
                    <div class="card-desc">Buku</div>
                    <div class="card-count">{{ $bookCount }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card-data category">
            <div class="row">
                <div class="col-6">
                    <i class="bi bi-list-task"></i>
                </div>
                <div class="col-6 d-flex justify-content-center flex-column align-items-end">
                    <div class="card-desc">Kategori</div>
                    <div class="card-count">{{ $categoriCount }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card-data user">
            <div class="row">
                <div class="col-6">
                    <i class="bi bi-people"></i>
                </div>
                <div class="col-6 d-flex justify-content-center flex-column align-items-end">
                    <div class="card-desc">User</div>
                    <div class="card-count">{{ $userCount }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-5">
    <h2>Data Peminjam</h2>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>User</th>
                <th>Judul Buku</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Tanggal Pengembalian Sebenarnya</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="7" style="text-align:center">No data</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection