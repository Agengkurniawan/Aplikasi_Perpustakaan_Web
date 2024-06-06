@extends('layouts.master')
@section('title', 'Halaman Rent Log')

@section('content')
<h1>List Peminjaman</h1>

<div class="mt-5">
    <x-rent-log-table :rentlog='$rentlogs' />
</div>
@endsection