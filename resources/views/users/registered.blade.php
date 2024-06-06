@extends('layouts.master')
@section('title', 'User Register')

@section('content')
<h1>List Registrasi User</h1>

<div class="mt-5">
    <a href="{{ route('users.index') }}" class="btn btn-primary">Setujui user 🔙 Back</a>
</div>

<div class="mt-5">
    <table class="table">
        <thead>
            <tr>
                <th width="5%">No.</th>
                <th>Username</th>
                <th>No.telefon</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registered as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->username }}</td>
                <td>{{ ($data->phone == true ? $data->phone : '-') }}</td>
                <td>
                    <div class="d-flex">
                        <a href="/users/user-detail/{{ $data->slug }}" class="btn btn-primary">Detail</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection