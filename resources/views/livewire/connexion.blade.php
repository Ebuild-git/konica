{{-- <form wire:submit='connexion'>

    
    @if (session()->has('error'))
        <div class="alert alert-danger p-3 small">
            {{ session('error') }}
        </div>
    @endif
    @if (session()->has('success'))
        <div class="alert alert-success p-3 small">
            {{ session('success') }}
        </div>
    @endif

    <div class="form-group mb-6">
        <label for="user_login_email">Adresse email</label>
        <input type="email" class="form-control" id="user_login_email" wire:model="email" placeholder="Email Address" />
        @error('email')
            <span class="text-danger small">
                {{ $message }}
            </span>
        @enderror
    </div>
    <br>
    <div class="form-group mb-6">
        <label for="user_login_password">Mot de passe</label>
        <input type="password" class="form-control" id="user_login_password" placeholder="Password"
            wire:model="password" />
        @error('password')
            <span class="text-danger small">
                {{ $message }}
            </span>
        @enderror
    </div>
    <br>
    <button type="submit" class="btn btn-primary w-100 mb-7">
        <span wire:loading>
            <img src="https://i.gifer.com/ZKZg.gif" height="15" alt="" srcset="">
        </span>
        <i class="ri-git-repository-private-line"></i>
        Connexion
    </button>
    <br>
    <hr>
</form>
 --}}


 <form wire:submit='connexion'>
      
    @if (session()->has('error'))
        <div class="alert alert-danger p-3 small">
            {{ session('error') }}
        </div>
    @endif
    @if (session()->has('success'))
        <div class="alert alert-success p-3 small">
            {{ session('success') }}
        </div>
    @endif
    <div class="form-inner mb-35">
        <input type="email" id="user_login_email" wire:model="email" placeholder="Email Address" />
        @error('email')
            <span class="text-danger small">
                {{ $message }}
            </span>
        @enderror
    </div>
    <div class="form-inner">
        <input type="password"  id="user_login_password" placeholder="Password"
            wire:model="password" />
        @error('password')
            <span class="text-danger small">
                {{ $message }}
            </span>
        @enderror
        <i class="bi bi-eye-slash" id="togglePassword"></i>
        
    </div>
    <div class="form-remember-forget">
        <div class="remember">
            <input type="checkbox" class="custom-check-box" id="check1">
            <label for="check1">Remember me</label>
        </div>
        <a href="{{ route('forgot-password') }}" class="forget-pass hover-underline">Forget Password</a>
    </div>
    {{-- <a href="#" class="primary-btn1 hover-btn3">Log In</a> --}}
   
    <button type="submit" class="primary-btn1 hover-btn3">
        <span wire:loading>
            <img src="https://i.gifer.com/ZKZg.gif" height="15" alt="" srcset="">
        </span>
        <i class="ri-git-repository-private-line"></i>
        Connexion
    </button>
    <a href="#" class="member">Not a member yet?</a>
</form>


<script>
   document.getElementById('togglePassword').addEventListener('click', function () {
    const passwordInput = document.getElementById('user_login_password');
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    this.classList.toggle('bi-eye');
});

</script>