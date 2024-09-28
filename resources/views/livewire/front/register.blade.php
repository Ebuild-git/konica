<form wire:submit="save" class="singin-form">
    <div class="form-group">
        <label>Nom</label>
        <input type="text" class="form-control"wire:model="nom" name="nom" placeholder="votre nom">
    </div>
    <div class="form-group">
        <label>Prénom</label>
        <input type="text" class="form-control"wire:model="prenom" name="prenom" placeholder="votre prénom">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="Adresse email" wire:model="email" name="email">
    </div>
    <div class="form-group">
        <label>Mot de passe</label>
        <input type="password" wire:model="password" id="passwordInput2" class="form-control" placeholder="Mot de passe"
            required />
        <i class="bi bi-eye-slash" id="togglePassword2" style="cursor: pointer;"></i>

    </div>
    <div class="form-group">
        <label>Confirmation mot de passe</label>
        <input type="password" class="form-control" wire:model="password_confirmation" placeholder="Votre mot de passe"
            aria-describedby="password" required /> <i class="bi bi-eye-slash" id="togglePassword3"></i>

    </div>
    <div class="form-group">
        @if ($errors->any())
            <div class="alert alert-danger small">
                @foreach ($errors->all() as $error)
                    {{ $error }} <br>
                @endforeach
            </div>
        @endif
        <button type="submit" class="axil-btn btn-bg-primary submit-btn">

            <span wire:loading>
                <img src="/icons/kOnzy.gif" height="20" width="20" alt="" srcset="">
            </span>
            <span>
                Confirmation
            </span>
        </button>
    </div>
</form>
{{-- 
<form wire:submit="save">
    <div class="form-inner mb-25">
        <input type="text" placeholder="Nom" wire:model="nom" name="nom">
    </div>
    <div class="form-inner mb-25">
        <input type="text" placeholder="Prénom" wire:model="prenom" name="prenom">
    </div>


    <div class="form-inner mb-25">
        <input type="email" placeholder="Adresse email" wire:model="email" name="email">
    </div>

    <div class="form-inner mb-25">
        <input type="password" wire:model="password" id="passwordInput2" class="form-control" placeholder="Mot de passe" required />
        <i class="bi bi-eye-slash" id="togglePassword2" style="cursor: pointer;"></i>
    </div>
    
  
    

    <div class="form-inner mb-35">
        <input type="password" class="form-control" wire:model="password_confirmation" placeholder="Votre mot de passe"
            aria-describedby="password" required /> <i class="bi bi-eye-slash" id="togglePassword3"></i>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger small">
            @foreach ($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        </div>
    @endif
    <button class="primary-btn1 hover-btn3" type="submit">
        <span wire:loading>
            <img src="/icons/kOnzy.gif" height="20" width="20" alt="" srcset="">
        </span>
        <span>
            Confirmation
        </span>
    </button>
</form>
 --}}
{{-- 
<script>
    document.addEventListener('DOMContentLoaded', function() {
   
        const togglePassword3 = document.getElementById('togglePassword3');
        const togglePassword = document.querySelector('#togglePassword2');
        const passwordInput = document.querySelector('#passwordInput2');
    

        togglePassword.addEventListener('click', function () {
          
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
    
          
            if (type === 'text') {
                this.classList.remove('bi-eye-slash');
                this.classList.add('bi-eye');
            } else {
                this.classList.remove('bi-eye');
                this.classList.add('bi-eye-slash');
            }
        });
         if (togglePassword3) {
             togglePassword3.addEventListener('click', function () {
                 const passwordConfirmInput = document.querySelector('input[wire\\:model="password_confirmation"]');
                 if (passwordConfirmInput) {
                     const type = passwordConfirmInput.getAttribute('type') === 'password' ? 'text' : 'password';
                     passwordConfirmInput.setAttribute('type', type);
                     this.classList.toggle('bi-eye');
                 }
             });
         } 
    });
</script>;
 --}}
