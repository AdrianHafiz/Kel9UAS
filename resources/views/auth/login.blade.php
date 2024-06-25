@extends("layout.default")

@section("titletest", "Login")

@section("content")
    <main class="mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    @if (session()->has("success"))
                        <div class="alert alert-success">
                            {{ session()->get("success") }}
                        </div>
                    @endif
                    @if (session()->has("error"))
                        <div class="alert alert-danger">
                            {{ session()->get("error") }}
                        </div>
                    @endif
                    <div class="card">
                        <h3 class="card-header text-center">Login</h3>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login.post') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email"
                                           id="email" class="form-control" name="email"
                                           required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">
                                            {{ $errors->first('email') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group">
                                        <input type="password" placeholder="Password"
                                               id="password" class="form-control" name="password"
                                               required>
                                        <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">
                                            {{ $errors->first('password') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                        <label class="form-check-label" for="remember">
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="d-grid mx-auto mb-3">
                                    <button type="submit" class="btn btn-dark btn-block">Login</button>
                                </div>
                                <div class="text-center">
                                    <a href="{{ route('register') }}" class="btn btn-dark">Register</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            var passwordInput = document.getElementById('password');
            var icon = this.querySelector('i');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');
            }
        });
    </script>
@endpush
