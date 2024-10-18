@php
    use Carbon\Carbon;
@endphp

@extends('main')

@section('content')
    @include('header')

    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-md-6 bg-white p-3 rounded-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $user->fullname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ Carbon::parse($user->created_at)->isoFormat('HH:mm:ss, DD MMMM G') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
