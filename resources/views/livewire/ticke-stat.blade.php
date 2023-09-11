<div>
    <h2 class="mb-4">Ticket Activation</h2>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @elseif (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="mb-4">
        {{-- <form action=""> --}}
            <input type="text" wire:model.debounce.500ms="ticketNumber" id="ticketNumber" placeholder="Enter Ticket ID">

            {{-- <button wire> active</button> --}}
        {{-- </form> --}}
    </div>

        {{-- wire:model.debounce.500ms --}}
    
        @livewireScripts() 
                <script>
                    document.getElementById('ticketNumber').addEventListener('keypress', function(event) {
                        if (event.key === 'Enter') {
                            event.preventDefault();
                            document.getElementById('ticketNumber').submit();
                        }
                    });
                </script>
    


</div>