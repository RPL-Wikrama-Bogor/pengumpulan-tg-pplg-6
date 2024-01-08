<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <!-- Tambahkan link ke font-awesome jika belum ada -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-azb+UkO+rrQl8bDE4Wn8Fm7s/Jnrt6u3yKDWaCU/d9blS1fiz/QRy33Nfmh1TQVk7uybDZbNGqy7LuX3mTc9Cg==" crossorigin="anonymous" />

    <style>
        .container-login100 {
            background-color: #fff; /* Warna putih */
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            max-width: 600px; /* Lebar maksimum formulir login */
            padding: 20px; /* Padding umum */
            margin-top: 10%
        }

        .wrap-login100 {
            padding: 10px; /* Padding dalam formulir login */
        }

        .login100-form-title {
            font-size: 24px;
            color: #333; /* Warna hitam */
            display: block;
            text-align: center;
            margin-bottom: 30px;
        }

        .wrap-input100 {
            position: relative;
            width: 100%;
            margin-bottom: 20px;
        }

        .input100 {
            width: 100%;
            height: 40px;
            border: 1px solid #ccc; /* Warna abu-abu lebih gelap */
            border-radius: 5px;
            padding: 0 10px;
            outline: none;
        }

        .symbol-input100 {
            position: absolute;
            font-size: 18px;
            color: #666; /* Warna abu-abu sedang */
            top: 50%;
            transform: translateY(-50%);
        }

        .focus-input100::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: #3498db; /* Warna biru */
            bottom: 0;
            left: 0;
            transform: scaleX(0);
            transition: transform 0.3s ease-in-out;
        }

        .input100:focus + .focus-input100::before {
            transform: scaleX(1);
        }

        .login100-form-btn {
            background-color: #3498db; /* Warna biru */
            color: #fff; /* Warna putih */
            border: none;
            border-radius: 5px;
            padding: 10px ;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease-in-out;
        }

        .login100-form-btn:hover {
            background-color: #2980b9; /* Warna biru lebih gelap saat hover */
        }

        .text-danger {
            color: #e74c3c; /* Warna merah */
        }

        .alert {
            margin-bottom: 15px;
            padding: 15px;
            border-radius: 5px;
        }

        .alert-danger {
            background-color: #f8d7da; /* Warna merah muda */
            border: 1px solid #f5c6cb; /* Warna merah lebih gelap */
            color: #721c24; /* Warna merah lebih gelap */
        }

        .alert-primary {
            background-color: #cce5ff; /* Warna biru muda */
            border: 1px solid #b8daff; /* Warna biru lebih gelap */
            color: #004085; /* Warna biru lebih gelap */
        }
    </style>
</head>

<body>

    <div class="content">
    </div>
    <center>
        <div class="container-login100">
            <div class="wrap-login100">
                @if (Session::get('failed'))
                    <div class="alert alert-danger">
                        {{ Session::get('failed') }}
                    </div>
                @endif
                @if (Session::get('logout'))
                    <div class="alert alert-primary">
                        {{ Session::get('logout') }}
                    </div>
                @endif
                @if (Session::get('canAccess'))
                    <div class="alert alert-danger">
                        {{ Session::get('canAccess') }}
                    </div>
                @endif

                <form action="{{ route('login.auth') }}" method="POST" class="login100-form validate-form">
                    @csrf
                    <span class="login100-form-title">
                        Login
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="email" name="email" placeholder="Email">
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
