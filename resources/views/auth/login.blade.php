@include('partials.admin.head')

<div class="am-signin-wrapper">
    <div class="am-signin-box">
        <div class="row no-gutters">
            <div class="col-lg-5">
                <div>
                    <h2>amanda</h2>
                    <p>The Responsive Bootstrap 4 Admin Template</p>
                    <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate.</p>

                    <hr>
                    <p>Don't have an account? <br> <a href="{{route('register')}}">Sign up Now</a></p>
                </div>
            </div>
            <div class="col-lg-7">
                <h5 class="tx-gray-800 mg-b-25">Signin to Your Account</h5>

                @error('error')
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="d-flex align-items-center justify-content-start">
                        <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
                        <span><strong>Oh snap!</strong> {{$message}}</span>
                    </div><!-- d-flex -->
                </div><!-- alert -->
                @enderror
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label class="form-control-label">Email:</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div><!-- form-group -->

                    <div class="form-group">
                        <label class="form-control-label">Password:</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div><!-- form-group -->
                    <div class="form-group">
                        <label class="form-control-label">Remember me</label>
                        <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>


                    </div>
                    <div class="form-group mg-b-20"><a href="{{ route('password.request') }}">Reset password</a></div>

                    <button type="submit" class="btn btn-block">Sign In</button>
                </form>
            </div><!-- col-7 -->
        </div><!-- row -->
        <p class="tx-center tx-white-5 tx-12 mg-t-15">Copyright &copy; <script>document.write(new Date().getFullYear());</script>. All Rights Reserved. Inofinity Labs</p>
    </div><!-- signin-box -->
</div><!-- am-signin-wrapper -->

@include('partials.admin.foot')