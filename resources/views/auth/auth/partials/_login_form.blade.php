<div class="input-group mb-3">
  <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="bi bi-envelope-open"></span>
    </div>
  </div>
    @if ($errors->has('username'))
        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
    @endif
</div>

<div class="input-group mb-3">
  <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" placeholder="Password" required />
  <div class="input-group-append">
    <div class="input-group-text">
      <i class="bi bi-eye-slash" id="togglePassword" style="cursor: pointer;"></i>
    </div>
  </div>
    @if ($errors->has('password'))
        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
    @endif
</div>

<div class="row">
  <div class="col-8">
    <div class="icheck-warning-2">
      <input type="checkbox" id="remember">
      <label for="remember">
        Remember Me
      </label>
    </div>
  </div>
  <!-- /.col -->
  <div class="col-4">
    <button type="submit" class="btn btn-sm btn-block" style="background-color:#b98b40 !important"><span
        style="color:white;">Sign In</button>
  </div>
  <!-- /.col -->
</div>
<div class="social-auth-links text-center mt-4">
  <div class="m-2 text-left">Don't have an account?</div>
  <a href="/register" class="btn btn-sm btn-block" style="background-color:#ab8342 !important">
    <i class=""></i> <span class="text-white">Register</span>
  </a>

  <div class="m-2 text-left">Fogot Password?</div>
  <a href="/forgot-password" class="btn btn-sm btn-block" style="background-color:#ab8342 !important">
    <i class=""></i> <span class="text-white">Forgot Password</span>
  </a>
</div>
