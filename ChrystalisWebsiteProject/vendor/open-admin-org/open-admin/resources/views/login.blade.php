<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login | Chrystalis</title>
    <link rel="icon" href="{{ asset('assets/Images/Homepage/favicon.png')}}" type="image/x-icon" />
    @if(!is_null($favicon = Admin::favicon()))
    <link rel="shortcut icon" href="{{$favicon}}">
    @endif
    <link rel="stylesheet" href="{{ Admin::asset('open-admin/css/styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Chrysalis&display=swap" rel="stylesheet">
    <style>
        body, h1 {
            font-family: 'Chrysalis', sans-serif;
        }
        h1 {
            font-size: 36px; /* Enhanced font size for the title */
        }
    </style>
    <script src="{{ Admin::asset('bootstrap5/bootstrap.bundle.min.js') }}"></script>
</head>
<body class="bg-light" @if(config('admin.login_background_image')) style="background: url('https://example.com/new-background.jpg') no-repeat;background-size: cover;" @endif>
    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="container m-4" style="max-width:400px;">
            <h1 class="text-center mb-3 h2"><a class="text-decoration-none text-dark" href="{{ admin_url('/') }}">Chrystalis Admin Dashboard</a></h1>
            <div class="bg-body p-4 shadow-sm rounded-3">
                @if($errors->has('attempts'))
                    <div class="alert alert-danger m-0 text-center">{{$errors->first('attempts')}}</div>
                @else
                <form action="{{ admin_url('auth/login') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="mb-3">
                        @if($errors->has('username'))
                            <div class="alert alert-danger">{{$errors->first('username')}}</div>
                        @endif
                        <label for="username" class="form-label">{{ __('admin.username') }}</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="icon-user"></i></span>
                            <input type="text" class="form-control" placeholder="{{ __('admin.username') }}" name="username" id="username" value="{{ old('username') }}" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('admin.password') }}</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="icon-lock"></i></span>
                            <input type="password" class="form-control" placeholder="{{ __('admin.password') }}" name="password" id="password" required>
                        </div>
                        @if($errors->has('password'))
                            <div class="alert alert-danger">{{$errors->first('password')}}</div>
                        @endif
                    </div>
                    @if(config('admin.auth.remember'))
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="remember" id="remember" value="1" {{ old('remember') ? 'checked="checked"' : '' }}>
                        <label class="form-check-label" for="remember">{{ __('admin.remember_me') }}</label>
                    </div>
                    @endif
                    <div class="clearfix">
                        <button type="submit" class="btn float-end btn-primary">{{ __('admin.login') }}</button>
                    </div>
                </form>
                @endif
            </div>
        </div>
    </div>
</body>
</html>