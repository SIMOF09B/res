<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="{{ asset('js/main.js') }}"></script>
</head>

<body>
    <section>
        <div class="container">
            <div class="user sgininbx">
                <div class="imagBox"><img  src="{{ asset('img/admn.png') }}" alt="" srcset="" ></div>
                <div class="formBox">

                    <form method="POST" action="{{ route('admin.login') }}" style="">
                        @csrf
                        <h2  style="margin-top: -100px ; padding-bottom: 50px">Welcome Admin</h2>

                        <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
{{--
                                <label style=" margin-left: 44% ; font-size: 12px ; position: absolute; margin-top: -34px">
                                    @if (Route::has('password.request'))
                                        <a class="link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </label> --}}



                        <button type="submit" class="submit " value="Login"  style="max-width:100%">
                            {{ __('Login') }}
                        </button>

                    </form>
                </div>
                <div class="user sginUpbx" id="tt">

            </div>
            </section>
        <script>
    </script>
</body>

</html>
