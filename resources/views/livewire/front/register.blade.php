{{-- <form wire:submit="save">
    <div class="row gx-20">
        <div class="col-md-6 mb-20">
            <div class="tp-contact-input-box p-relative">
                <input type="text" placeholder="Nom" wire:model="nom" name="nom">
                <span class="tp-contact-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7.877 12.5853L7.99611 12.5853L8.26007 12.5861C10.502 12.5982 15.754 12.8041 15.754 16.3045C15.754 19.55 11.4406 19.9837 8.0854 20L7.49393 19.9997C5.25199 19.9876 0 19.7818 0 16.2823C0 12.9682 4.495 12.5853 7.877 12.5853ZM7.877 14.1009C3.646 14.1009 1.5 14.8354 1.5 16.2823C1.5 17.7433 3.646 18.4849 7.877 18.4849C12.108 18.4849 14.254 17.7504 14.254 16.3045C14.254 14.8415 12.108 14.1009 7.877 14.1009ZM17.2041 5.98014C17.6181 5.98014 17.9541 6.31963 17.9541 6.73793L17.954 8.00525L19.25 8.00606C19.664 8.00606 20 8.34555 20 8.76385C20 9.18215 19.664 9.52163 19.25 9.52163L17.954 9.52082L17.9541 10.7906C17.9541 11.2089 17.6181 11.5484 17.2041 11.5484C16.7901 11.5484 16.4541 11.2089 16.4541 10.7906L16.454 9.52082L15.16 9.52163C14.746 9.52163 14.41 9.18215 14.41 8.76385C14.41 8.34555 14.746 8.00606 15.16 8.00606L16.454 8.00525L16.4541 6.73793C16.4541 6.31963 16.7901 5.98014 17.2041 5.98014ZM7.877 0C10.81 0 13.195 2.41077 13.195 5.37321C13.195 8.33565 10.81 10.7464 7.877 10.7464H7.846C6.427 10.7414 5.097 10.1786 4.1 9.16416C3.102 8.14873 2.555 6.80088 2.55997 5.37018C2.55997 2.41077 4.945 0 7.877 0ZM7.877 1.51557C5.773 1.51557 4.05997 3.24636 4.05997 5.37321C4.056 6.40279 4.448 7.3677 5.163 8.09619C5.879 8.82366 6.833 9.2268 7.849 9.23084L7.877 9.97954V9.23084C9.982 9.23084 11.695 7.50006 11.695 5.37321C11.695 3.24636 9.982 1.51557 7.877 1.51557Z"
                            fill="currentcolor" />
                    </svg>
                </span>
            </div>
        </div>
        <div class="col-md-6 mb-20">
            <div class="tp-contact-input-box p-relative">
                <input type="text" placeholder="Prénom" wire:model="prenom" name="prenom">
                <span class="tp-contact-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7.877 12.5853L7.99611 12.5853L8.26007 12.5861C10.502 12.5982 15.754 12.8041 15.754 16.3045C15.754 19.55 11.4406 19.9837 8.0854 20L7.49393 19.9997C5.25199 19.9876 0 19.7818 0 16.2823C0 12.9682 4.495 12.5853 7.877 12.5853ZM7.877 14.1009C3.646 14.1009 1.5 14.8354 1.5 16.2823C1.5 17.7433 3.646 18.4849 7.877 18.4849C12.108 18.4849 14.254 17.7504 14.254 16.3045C14.254 14.8415 12.108 14.1009 7.877 14.1009ZM17.2041 5.98014C17.6181 5.98014 17.9541 6.31963 17.9541 6.73793L17.954 8.00525L19.25 8.00606C19.664 8.00606 20 8.34555 20 8.76385C20 9.18215 19.664 9.52163 19.25 9.52163L17.954 9.52082L17.9541 10.7906C17.9541 11.2089 17.6181 11.5484 17.2041 11.5484C16.7901 11.5484 16.4541 11.2089 16.4541 10.7906L16.454 9.52082L15.16 9.52163C14.746 9.52163 14.41 9.18215 14.41 8.76385C14.41 8.34555 14.746 8.00606 15.16 8.00606L16.454 8.00525L16.4541 6.73793C16.4541 6.31963 16.7901 5.98014 17.2041 5.98014ZM7.877 0C10.81 0 13.195 2.41077 13.195 5.37321C13.195 8.33565 10.81 10.7464 7.877 10.7464H7.846C6.427 10.7414 5.097 10.1786 4.1 9.16416C3.102 8.14873 2.555 6.80088 2.55997 5.37018C2.55997 2.41077 4.945 0 7.877 0ZM7.877 1.51557C5.773 1.51557 4.05997 3.24636 4.05997 5.37321C4.056 6.40279 4.448 7.3677 5.163 8.09619C5.879 8.82366 6.833 9.2268 7.849 9.23084L7.877 9.97954V9.23084C9.982 9.23084 11.695 7.50006 11.695 5.37321C11.695 3.24636 9.982 1.51557 7.877 1.51557Z"
                            fill="currentcolor" />
                    </svg>
                </span>
            </div>
        </div>
        <div class="col-md-12 mb-20">
            <div class="tp-contact-input-box p-relative">
                <input type="text" placeholder="Numéro de téléphone" wire:model="telephone" name="telephone">
                <span class="tp-contact-icon">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.5 11.0934L11.8211 9.44419L11.807 9.43794C11.5679 9.33485 11.3067 9.29334 11.0474 9.31723C10.7881 9.34111 10.5389 9.42962 10.3227 9.57466C10.2923 9.59495 10.2631 9.61686 10.2352 9.64028L8.49219 11.1247C7.47657 10.5739 6.42735 9.53325 5.87579 8.53013L7.36485 6.75981C7.38879 6.73124 7.41096 6.70124 7.43126 6.66997C7.57249 6.45447 7.65824 6.20738 7.68087 5.95071C7.70349 5.69405 7.6623 5.43577 7.56094 5.19888C7.55854 5.19434 7.55645 5.18964 7.55469 5.18481L5.90626 1.49966C5.77094 1.19147 5.54001 0.935038 5.24763 0.768305C4.95525 0.601571 4.61696 0.533399 4.28282 0.573876C3.14873 0.722855 2.10765 1.27956 1.35402 2.14001C0.600386 3.00047 0.185733 4.10583 0.187506 5.24966C0.187506 11.6254 5.37422 16.8122 11.75 16.8122C12.8938 16.8139 13.9992 16.3993 14.8597 15.6456C15.7201 14.892 16.2768 13.8509 16.4258 12.7168C16.4663 12.3827 16.3981 12.0444 16.2314 11.752C16.0646 11.4597 15.8082 11.2287 15.5 11.0934ZM11.75 14.9372C9.18167 14.9341 6.71942 13.9124 4.90333 12.0963C3.08725 10.2802 2.06561 7.81799 2.06251 5.24966C2.06072 4.60239 2.28046 3.97399 2.68522 3.46889C3.08999 2.96379 3.6554 2.61239 4.28751 2.47309L5.75782 5.75434L4.26094 7.53716C4.23675 7.56599 4.21431 7.59625 4.19376 7.62778C4.04622 7.85321 3.95947 8.11297 3.94195 8.38182C3.92443 8.65067 3.97672 8.91948 4.09376 9.16216C4.82969 10.6684 6.3461 12.1747 7.86797 12.9122C8.11227 13.028 8.38244 13.0784 8.65207 13.0586C8.9217 13.0387 9.18156 12.9492 9.40626 12.7989C9.43647 12.7785 9.46543 12.7563 9.49297 12.7325L11.2453 11.2426L14.5266 12.7122C14.3873 13.3443 14.0359 13.9097 13.5308 14.3144C13.0257 14.7192 12.3973 14.9389 11.75 14.9372Z"
                            fill="currentcolor" />
                    </svg>
                </span>
            </div>
        </div>
        <div class="col-md-12 mb-20">
            <div class="tp-contact-input-box p-relative">
                <input type="email" placeholder="Adresse email" wire:model="email" name="email">
                <span class="tp-contact-icon">
                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17.3327 1.99992C17.3327 1.08325 16.5827 0.333252 15.666 0.333252H2.33268C1.41602 0.333252 0.666016 1.08325 0.666016 1.99992V11.9999C0.666016 12.9166 1.41602 13.6666 2.33268 13.6666H15.666C16.5827 13.6666 17.3327 12.9166 17.3327 11.9999V1.99992ZM15.666 1.99992L8.99935 6.16658L2.33268 1.99992H15.666ZM15.666 11.9999H2.33268V3.66659L8.99935 7.83325L15.666 3.66659V11.9999Z"
                            fill="currentcolor" />
                    </svg>
                </span>
            </div>
        </div>
        <div class="col-md-12 mb-50">
            <div class="tp-contact-input-box p-relative">
                <input type="password" wire:model="password" placeholder="Mot de passe" name="password">
                <span class="tp-contact-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.3243 3.33341C18.3243 2.41675 17.5827 1.66675 16.666 1.66675H3.33268C2.41602 1.66675 1.66602 2.41675 1.66602 3.33341V13.3334C1.66602 14.2501 2.41602 15.0001 3.33268 15.0001H14.9993L18.3327 18.3334L18.3243 3.33341ZM16.666 3.33341V14.3084L15.691 13.3334H3.33268V3.33341H16.666ZM4.99935 10.0001H14.9993V11.6667H4.99935V10.0001ZM4.99935 7.50008H14.9993V9.16675H4.99935V7.50008ZM4.99935 5.00008H14.9993V6.66675H4.99935V5.00008Z"
                            fill="currentcolor" />
                    </svg>
                </span>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger small">
            @foreach ($errors->all() as $error)
                - {{ $error }} <br>
            @endforeach
        </div>
    @endif

    <button class="tp-btn-theme" type="submit">
        <span wire:loading>
            <img src="/icons/kOnzy.gif" height="20" width="20" alt="" srcset="">
        </span>
        <span>
            Enregistrer
        </span>
    </button>
</form>
 --}}

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
    
  
    
  {{--   <div class="form-inner mb-25">
        <input type="password"  wire:model="password" class="form-control" placeholder="Mot de passe"  required/>
        <i class="bi bi-eye-slash" id="togglePassword2" ></i>
    </div> --}}
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


<script>
    document.addEventListener('DOMContentLoaded', function() {
     //  const togglePassword2 = document.getElementById('togglePassword2');
        const togglePassword3 = document.getElementById('togglePassword3');
        const togglePassword = document.querySelector('#togglePassword2');
        const passwordInput = document.querySelector('#passwordInput2');
    

        togglePassword.addEventListener('click', function () {
            // Basculer le type de 'password' à 'text' pour afficher le mot de passe
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
    
            // Basculer l'icône entre 'bi-eye-slash' (œil barré) et 'bi-eye' (œil ouvert)
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