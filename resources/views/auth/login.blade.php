{{-- <form method="POST" action="{{ route('login') }}">
  @csrf

  <!-- Email Address -->
  <div>
      <x-label for="email" :value="__('Email')" />

      <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
  </div>

  <!-- Password -->
  <div class="mt-4">
      <x-label for="password" :value="__('Password')" />

      <x-input id="password" class="block mt-1 w-full"
                      type="password"
                      name="password"
                      required autocomplete="current-password" />
  </div>

  <div class="flex items-center justify-end mt-4">
      <x-button class="ml-3">
          {{ __('Log in') }}
      </x-button>
  </div>
</form> --}}



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ asset('assets') }}/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets') }}/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/iCheck/square/blue.css">
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <h1><b>POS - TESTING</b></h1>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        {{-- <p class="login-box-msg">Sign in to start your session</p> --}}
        <form action="{{ route('login') }}" method="post">
          @csrf
          <div class="form-group has-feedback">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
  </body>
</html>

