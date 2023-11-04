<div class="input-group mb-3">
    <input type="text" class="form-control" name="username" value="{{ old('username') }}"
        placeholder="Username or email address" required="required" autofocus>
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="bi bi-envelope-open"></span>
        </div>
    </div>
    @error('username')
        <span class="text-danger text-left">{{ $message }}</span>
    @enderror
</div>

<div class="input-group mb-3">
    <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}"
        placeholder="Password" required />
    <div class="input-group-append">
        <div class="input-group-text">
            <i class="bi bi-eye-slash" id="togglePassword" style="cursor: pointer;"></i>
        </div>
    </div>
    @error('password')
        <span class="text-danger text-left">{{ $message }}</span>
    @enderror
</div>

<div class="social-auth-links text-center mb-4">
    <div class="text-left">
        Don't have an account? <a href="{{ route('register.show-form') }}"
            style="color: #b98b40 !important; text-decoration: underline;">Sign up</a>
    </div>
    <div class="text-left">
        <a href="/forgot-password" style="color: #b98b40 !important; text-decoration: underline;">Forgot password?</a>
    </div>
</div>

<div class="row mt-4">
    <div class="col-12">
        <input type="checkbox" id="remember" value="1" checked>
        <button type="submit" class="btn btn-sm btn-block p-2" style="background-color:#b98b40 !important"><span
                style="color:white;">Sign In</span></button>
    </div>
</div>

<div class="row mt-3 mb-4">
    <div class="col-12">
        <input type="checkbox" id="remember" value="1" checked>
        <a href="{{ route('auth.google.redirect') }}" class="btn btn-block btn-outline-dark"><i
                class="fab fa-sm fa-google"></i> Log in with Gmail</a>
    </div>
</div>
