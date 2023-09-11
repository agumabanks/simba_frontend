<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div>
        <h2>Ticket Status: {{ $ticketId }}</h2>
    
        <div>
            <h4>Activation Status:</h4>
            <button wire:click="toggleActivation">
                {{ $activated ? 'Activated' : 'Not Activated' }}
            </button>
        </div>
    
        <div>
            <h4>Used Status:</h4>
            <button wire:click="toggleUsed">
                {{ $used ? 'Used' : 'Not Used' }}
            </button>
        </div>
    
        <div>
            <h4>Downloaded Status:</h4>
            <button wire:click="toggleDownloaded">
                {{ $downloaded ? 'Downloaded' : 'Not Downloaded' }}
            </button>
        </div>
    </div>
    
</div>
