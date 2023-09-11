<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
      <x-slot name="header">
        {{ __('Activation VIP 2') }}
    </x-slot>
    
    
    
    
    <div class="dropzone p-12">
        
        <input  wire:model="ticketId" type="text" placeholder="Ticket Number" wire:keydown.enter="activateTicket">
</div>
    
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
</div>
</div>
