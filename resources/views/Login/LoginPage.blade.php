@extends('partial.main')

@section('container')
   <div class="container">
    @if(session()->has('failed'))
            <div class="alert alert-danger alert-dismissible fade show col-3">
                {{ session('failed') }}
                <button type="button" class="btn btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="card-title text-center mb-4">Login Form</h1>
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <form action="{{ route('login') }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="mb-3 shadow-sm">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" id="username" name="username" class="form-control  @error('username') is-invalid @enderror"
                                    placeholder="Enter your username" required value="{{ old('username') }}">
                                @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 shadow-sm">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Enter your password" required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="d-grid shadow-sm">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center bg-white">
                        <small>&copy; 2023 Himpunan Mahasiswa Makassar. All rights reserved.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <style>
        .card {
            border-radius: 10px;
            border: none;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            color: #333;
            font-size: 32px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .form-label {
            font-weight: bold;
            color: #555;
            font-size: 18px;
            margin-bottom: 8px;
        }

        .form-control {
            border-color: #ddd;
            box-shadow: none;
            transition: border-color 0.3s ease-in-out;
            font-size: 16px;
            padding: 12px;
            border-radius: 8px;
            background-color: #f7f7f7;
            color: #333;
        }

        .form-control:focus {
            border-color: #4CAF50;
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
        }

        .btn-primary {
            background-color: #4CAF50;
            border-color: #007bff;
            font-size: 18px;
            font-weight: bold;
            letter-spacing: 1px;
            padding: 14px 20px;
            transition: background-color 0.3s ease-in-out;
            border-radius: 8px;
            text-transform: uppercase;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .btn-primary:focus {
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
        }

        .card-footer {
            color: #777;
            font-size: 12px;
            background-color: #f7f7f7;
            border-top: none;
            padding: 12px;
        }

        .link-forgot-password {
            text-decoration: none;
            color: #007bff;
            font-size: 14px;
            transition: color 0.3s ease-in-out;
        }

        .link-forgot-password:hover {
            color: #0056b3;
        }
    </style>
      <script>
        // Check if the error message exists in the DOM
        document.addEventListener('DOMContentLoaded', function() {
            var errorMessage = document.querySelector('.alert-danger');
            if (errorMessage) {
                // Display the error message for a few seconds
                setTimeout(function() {
                    errorMessage.style.display = 'none';
                }, 3000);
            }
        });
    </script>
@endsection
