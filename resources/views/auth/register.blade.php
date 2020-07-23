@include('partials.admin.head')

<div class="am-signup-wrapper">
    <div class="am-signup-box">
        <div class="row no-gutters">
            <div class="col-lg-5">
                <div>
                    <h2>amanda</h2>
                    <p>The Responsive Bootstrap 4 Admin Template</p>
                    <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate.</p>

                    <hr>
                    <p>Already have an account? <br> <a href="{{route('login')}}">Sign In</a></p>
                </div>
            </div>
            <div class="col-lg-7">
                <h5 class="tx-gray-800 mg-b-25">Signin to Your Account</h5>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label class="form-control-label">Email:</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div><!-- form-group -->

                    <div class="row row-xs">
                        <div class="col">
                            <div class="form-group">
                                <label class="form-control-label">Name:</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div><!-- form-group -->
                        </div><!-- col -->

                    </div><!-- row -->

                    <div class="row row-xs">
                        <div class="col">
                            <div class="form-group">
                                <label class="form-control-label">Password:</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">


                            </div><!-- form-group -->
                        </div><!-- col -->
                        <div class="col">
                            <div class="form-group">
                                <label class="form-control-label">Confirm Password:</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div><!-- form-group -->
                        </div><!-- col -->
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div><!-- row -->

                    <div class="form-group mg-b-20 tx-12">By clicking Sign Up button below you agree to our <a href="">Terms of Use</a> and our <a href="">Privacy Policy</a></div>

                    <button type="submit" class="btn btn-block">Sign Up</button>
                </form>
            </div><!-- col-7 -->
        </div><!-- row -->
        <p class="tx-center tx-white-5 tx-12 mg-t-15">Copyright &copy; <script>document.write(new Date().getFullYear());</script>. All Rights Reserved. Inofinity Labs</p>
    </div><!-- signin-box -->
</div><!-- am-signin-wrapper -->

@include('partials.admin.foot')
