{{-- <div>
    @livewireStyles
    <div class="alert alert-success">
        @if (session()->has('success'))
            {{ session()->get('success') }}
        @endif
    </div>
    <form wire:submit="save">
        <div class="input-validator">
            <input wire:model="nom" type="text"  id="nom"  placeholder="Votre nom">
            @error('nom')
            <span class="small text-danger">
                {{ $message }}
            </span>
        @enderror
          
        </div>
        <div class="input-validator">
            <input wire:model="email" type="email"  id="email"  placeholder="Votre Email">
            @error('email')
            <span class="small text-danger">
                {{ $message }}
            </span>
        @enderror
        </div>
        <div class="input-validator">
            <input wire:model="sujet" type="text"   id="sujet" placeholder="Sujet">
            @error('sujet')
            <span class="small text-danger">
                {{ $message }}
            </span>
        @enderror
          
        </div>
        <div class="input-validator">
            <textarea  wire:model="message" rows="10" cols="30"  id="message" placeholder="Votre message" ></textarea>
            @error('message')
                    <span class="small text-danger">
                        {{ $message }}
                    </span>
                @enderror
        </div>
    
 
        <button class="btn -dark" type="submit">
              <span wire:loading>
                <img src="/icons/kOnzy.gif" height="20" width="20" alt="" srcset="">
            </span>  
            <span>Envoyer</span>
        </button>
 
      </form>
</div>
 --}}

<div>
    @livewireStyles
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
    <form wire:submit="save">
        <div class="row">
            <div class="col-md-6">
                <div class="form-inner mb-20">
                    <label>Nom*</label>
                    <input wire:model="nom" type="text" id="nom" placeholder="Votre nom">
                    @error('nom')
                        <span class="small text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-inner mb-20">
                    <label>Email*</label>
                    <input wire:model="email" type="email" id="email" placeholder="Votre Email">
                    @error('email')
                        <span class="small text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-inner mb-20">
                    <label>Subjet*</label>
                    <input wire:model="sujet" type="text" id="sujet" placeholder="Sujet">
                    @error('sujet')
                        <span class="small text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-inner mb-30">
                    <label>Message*</label>
                    <textarea wire:model="message" rows="10" cols="30" id="message" placeholder="Votre message"></textarea>
                    @error('message')
                        <span class="small text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="form-inner">


                        <button class="primary-btn1 hover-btn3" type="submit">
                            <span wire:loading>
                                <img src="/icons/kOnzy.gif" height="20" width="20" alt="" srcset="">
                            </span>
                            <span>Envoyer</span>
                        </button>
                    </div>
                </div>
            </div>



        </div>
    </form>
</div>