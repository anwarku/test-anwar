@extends('main')
@section('content')
    <section class="row d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="col-md-3 bg-white p-4 rounded-3">
            <h3 class="text-center">Registrasi Pengguna</h3>
            <form method="POST" action="/registrasi">
                @csrf
                <div class="mb-3">
                    <label for="name"
                        class="form-label @error('fullname')
                        is-invalid
                    @enderror ">Full
                        Name</label>
                    <input type="text" class="form-control" id="name" name="fullname" placeholder="Full Name">
                    @error('fullname')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email"
                        class="form-control @error('email')
                        is-invalid
                    @enderror"
                        id="email" name="email" placeholder="example@example.com">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password"
                        class="form-control @error('password')
                        is-invalid
                    @enderror"
                        id="password" name="password" placeholder="********">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="confirm-password" class="form-label">Password Confirmation</label>
                    <input type="password" class="form-control" id="confirm-password" name="password_confirmation"
                        placeholder="*********">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <a href="/">Sudah punya akun</a>
        </div>
    </section>
@endsection
