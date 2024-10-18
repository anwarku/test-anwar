@extends('main')
@section('content')
    <section class="row d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="col-md-3 bg-white p-4 rounded-3">
            <h3 class="text-center">Login Pengguna</h3>
            <form method="POST" action="/login">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="example@example.com">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="**********">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <a href="/registrasi" class="mt-4">Buat Akun</a>
        </div>
    </section>
@endsection
