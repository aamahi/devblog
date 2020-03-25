@include('admin.layout.head')

<body class="login-body">

<div class="container">

    <form class="form-signin" method="post" action="{{route('login')}}">
        @csrf
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">

            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" name="email" placeholder="Email Address" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                         <strong>{{$message}}</strong>
                    </span>
            @enderror
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" name="password" placeholder="Password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                         <strong>{{$message}}</strong>
                    </span>
            @enderror
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
            <div class="registration">
                    Don't have an account yet?
                <a class="" href="">
                    Create an account
                </a>
            </div>

        </div>

    </form>

</div>



<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('admin/js/jquery.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>


</body>

</html>
