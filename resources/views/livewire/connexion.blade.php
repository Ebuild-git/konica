



<form   wire:submit='connexion' class="singin-form">
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
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" wire:model="email" placeholder="Votre mail">
        @error('email')
            <span class="text-danger small">
                {{ $message }}
            </span>
        @enderror
    </div>
    <div class="form-group position-relative">
        <label>Mot de passe</label>
        <input 
            type="password" 
            id="password" 
            class="form-control" 
            wire:model="password" 
            placeholder="Votre mot de passe"
        >
        <span 
            class="position-absolute" 
            style="right: 10px; top: 35px; cursor: pointer;" 
            onclick="togglePassword()"
        >
            <i id="toggleIcon" class="ri-eye-line"></i>
        </span>
        
        @error('password')
        <span class="text-danger small">
            {{ $message }}
        </span>
        @enderror
    </div>

    
    
    <script>
        function togglePassword() {
            var passwordInput = document.getElementById('password');
            var toggleIcon = document.getElementById('toggleIcon');
    
            if (passwordInput.type === 'password') {
                // Afficher le mot de passe
                passwordInput.type = 'text';
                toggleIcon.classList.remove('ri-eye-line');
                toggleIcon.classList.add('ri-eye-off-line');
            } else {
                // Masquer le mot de passe
                passwordInput.type = 'password';
                toggleIcon.classList.remove('ri-eye-off-line');
                toggleIcon.classList.add('ri-eye-line');
            }
        }
    </script>
    
    
  {{--   <div class="form-group position-relative">
        <label>Mot de passe</label>
        <input type="password" id="password" class="form-control" wire:model="password" placeholder="Votre mot de passe">
        <span class="position-absolute" style="right: 10px; top: 35px; cursor: pointer;" onclick="togglePassword()">
            <i id="toggleIcon" class="ri-eye-line"></i>
        </span>
        @error('password')
        <span class="text-danger small">
            {{ $message }}
        </span>
        @enderror
    </div> --}}
 
    <div class="form-group d-flex align-items-center justify-content-between">
        <button type="submit" class="axil-btn btn-bg-primary2 submit-btn">
            <span wire:loading>
                <img src="https://i.gifer.com/ZKZg.gif" height="15" alt="" srcset="">
            </span>
            <i class="ri-git-repository-private-line"></i>
            Connexion</button>
        <a href="{{ route('forgot_password') }}" class="forgot-btn">Mot de passe oublié?</a>
    </div>

    <style>
        .btn-bg-primary2 {
            background-color: #5EA13C;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-bg-secondary2 {
        background-color: #EFB121; /* Couleur de fond, bleu dans cet exemple */
        color: #ffffff; /* Couleur du texte, blanc dans cet exemple */
        border: none;
        padding: 10px 20px; /* Optionnel, ajuste la taille */
        border-radius: 5px; /* Optionnel, arrondit les coins */
        text-decoration: none; /* Supprime le soulignement */
    }
    </style>
</form>




{{-- 
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

</script> --}}