<div class="input-group mb-3">
  <input type="text" name="name" class="form-control" value="{{ old('username') }}" placeholder="Name" required="required" autofocus>
  <div class="input-group-append">
    <div class="input-group-text">
        <span class="bi bi-person-plus"></span>
    </div>
  </div>
    @if ($errors->has('name'))
        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
    @endif
</div>

<div class="input-group mb-3">
  <input type="text" name="email" class="form-control" value="{{ old('email') }}" placeholder="name@example.com" required autofocus>
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="bi bi-envelope-open"></span>
    </div>
  </div>
    @if ($errors->has('email'))
        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
    @endif
</div>

<div class="input-group mb-3">
  <input type="text" name="username" class="form-control" value="{{ old('username') }}" placeholder="Username" required autofocus>
  <div class="input-group-append">
    <div class="input-group-text">
        <span class="bi bi-person-plus"></span>
    </div>
  </div>
  @if ($errors->has('username'))
        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
  @endif
</div>

<div class="input-group mb-3" id="passwordInput">
  <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}" placeholder="Password" required>
  <div class="input-group-append">
    <div class="input-group-text">
      <i class="bi bi-eye-slash" id="togglePassword" style="cursor: pointer;"></i>
    </div>
  </div>
   @if ($errors->has('password'))
        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
    @endif
</div>

<div class="input-group mb-3">
  <input type="password" id="confirm-password" name="confirm_password" class="form-control" value="{{ old('confirm_password') }}" placeholder="Confirm Password" required>
  <div class="input-group-append">
    <div class="input-group-text">
      <i class="bi bi-eye-slash" id="togglePassword1" style="cursor: pointer;"></i>
    </div>
  </div>
  @if ($errors->has('confirm_password'))
    <span class="text-danger text-left">{{ $errors->first('confirm_password') }}</span>
  @endif
</div>

<div class="row mt-4 mb-2">
  <div class="col-12">
    <button type="submit" class="btn btn-sm btn-block"  id="sign-up" style="background-color:#b98b40 !important"><span style="color:white;">Register</span></button>
  </div>
  <!-- /.col -->
</div>

<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- <script src="/adminlte/dist/js/nin.js"></script> -->

