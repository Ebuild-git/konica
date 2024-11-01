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
        <button type="submit" class="axil-btn btn-bg-primary2 submit-btn">

            <span wire:loading>
                <img src="/icons/kOnzy.gif" height="20" width="20" alt="" srcset="">
            </span>
            <span>
                Confirmation
            </span>
        </button>
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
