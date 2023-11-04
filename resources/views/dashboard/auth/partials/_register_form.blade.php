<div class="input-group mb-3">
    <input type="text" name="name" class="form-control" value="{{ old('username') }}" placeholder="Name" required
        autofocus>
    <div class="input-group-append">
        <div class="input-group-text bg-white">
            <span class="bi bi-person-plus"></span>
        </div>
    </div>
    @error('name')
        <span class="text-danger text-left">{{ $message }}</span>
    @enderror
</div>

<div class="input-group mb-3">
    <input type="text" name="email" class="form-control" value="{{ old('email') }}" placeholder="name@example.com"
        required autofocus>
    <div class="input-group-append">
        <div class="input-group-text bg-white">
            <span class="bi bi-envelope-open"></span>
        </div>
    </div>
    @error('email')
        <span class="text-danger text-left">{{ $message }}</span>
    @enderror
</div>

<div class="input-group mb-3">
    <input type="text" name="username" class="form-control" value="{{ old('username') }}" placeholder="Username"
        required autofocus>
    <div class="input-group-append">
        <div class="input-group-text bg-white">
            <span class="bi bi-person-plus"></span>
        </div>
    </div>
    @error('username')
        <span class="text-danger text-left">{{ $message }}</span>
    @enderror
</div>

<div class="input-group mb-3" id="passwordInput">
    <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}"
        placeholder="Password" required>
    <div class="input-group-append">
        <div class="input-group-text bg-white">
            <i class="bi bi-eye-slash" id="togglePassword" style="cursor: pointer;"></i>
        </div>
    </div>
    @error('password')
        <span class="text-danger text-left">{{ $message }}</span>
    @enderror
</div>

<div class="input-group mb-3">
    <input type="password" id="confirm-password" name="confirm_password" class="form-control"
        value="{{ old('confirm_password') }}" placeholder="Confirm Password" required>
    <div class="input-group-append">
        <div class="input-group-text bg-white">
            <i class="bi bi-eye-slash" id="togglePassword1" style="cursor: pointer;"></i>
        </div>
    </div>
    @error('confirm_password')
        <span class="text-danger text-left">{{ $message }}</span>
    @enderror
</div>

I'm already a member? <a href="{{ route('login.show-form') }}"
    style="color: #b98b40 !important; text-decoration: underline;">Sign in</a>

<div class="row mt-4 mb-4">
    <div class="col-12">
        <button type="submit" class="btn btn-sm btn-block p-2" id="sign-up"
            style="background-color:#b98b40 !important"><span style="color:white;">Sign Up</span></button>
    </div>
</div>

<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
