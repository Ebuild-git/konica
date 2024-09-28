<div>
    @include('components.alert')

    <form wire:submit="update_user">
       
        <div class="col-lg-12">
            <div class="form-group">
            <label class="form-label" for="RePassword">Ancien mot de passe</label>
            <input type="password" value=" {{ Auth::user()->old_password }}"placeholder="8 - 15 Characters"
                wire:model="old_password" class= "form-control" style="font-size: 18px; color:black">
            @error('old_password')
                <span class="text-danger small"> {{ $message }} </span>
            @enderror
        </div>
        </div>
        <br>
        
        <div class="col-lg-12">
            <div class="form-group">
            <label class="form-label" for="RePassword">Nouveau mot de passe</label>
            <input type="password" placeholder="8 - 15 caractères" wire:model="password" class= "form-control"
                style="font-size: 18px; color:black">
            @error('password')
                <span class="text-danger small"> {{ $message }} </span>
            @enderror
        </div>
        </div>

        
        <div class="col-lg-12">
            <div class="form-group">
            <label class="form-label" for="RePassword">Confirmation</label>
            <input type="password" placeholder="8 - 15 Caractères" wire:model="password_confirmation"
                class= "form-control" style="font-size: 18px; color:black">
            @error('password_confirmation')
                <span class="text-danger small"> {{ $message }} </span>
            @enderror
        </div>
        </div>
     

     {{--    <div class="col-12">
            <div class="button-group">
                <button type="submit"
                    class="primary-btn3 black-bg  hover-btn5 hover-white"> Confirmer les modification</button>
                
            </div>
        </div> --}}
        <div class="form-group mb--0">
            <input type="submit" class="axil-btn" value="Confirmer les modification">
        </div>
       
    </form>
</div>
