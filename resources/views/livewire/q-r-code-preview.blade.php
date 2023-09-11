<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <div class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-800 bg-opacity-50" style="z-index: 9999;">
        <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75">
            <div class="bg-white p-4 rounded-lg">
                {!! $qrCode !!}
                <button wire:click="$emit('closeModal')" class="block mt-4 px-4 py-2 bg-primary text-white rounded-md">Close</button>
            </div>
        </div>
    </div>
</div>

