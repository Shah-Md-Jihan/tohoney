<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="{{ asset('dashboard_assets') }}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('dashboard_assets') }}/lib/Ionicons/css/ionicons.css" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard_assets') }}/css/starlight.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">starlight <span class="tx-info tx-normal">admin</span></div>
        <div class="tx-center mg-b-60">Professional Admin Template Design</div>
        <form method="post" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Type your email address">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div><!-- form-group -->
            <div class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Type your password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
                @if (Route::has('password.request'))
                    <a class="tx-info tx-12 d-block mg-t-10" href="{{ route('password.request') }}" style="text-decoration: none;font-weight: 600;">
                        Forgot password?
                    </a>
                @endif
            </div><!-- form-group -->
            
            <button type="submit" class="btn btn-info btn-block">Sign In</button>
        </form>
        

        <div class="mg-t-60 tx-center">
            Not yet a member?
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="tx-info" style="text-decoration: none;font-weight: 600;">Sign Up</a>
            @endif
        </div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="{{ asset('dashboard_assets') }}/lib/jquery/jquery.js"></script>
    <script src="{{ asset('dashboard_assets') }}/lib/popper.js/popper.js"></script>
    <script src="{{ asset('dashboard_assets') }}/lib/bootstrap/bootstrap.js"></script>

  </body>
</html>

