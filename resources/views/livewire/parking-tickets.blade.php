<div>
    <x-slot name="header">
        {{ __('Parking') }}
    </x-slot>
<div >
    <h2></h2>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <h2 class="intro-y text-lg font-medium mt-10">
        Parking Code List
    </h2>

    <div class="grid grid-cols-12 gap-6 mt-5">

        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button wire:click="addtru" class="btn btn-primary shadow-md mr-2">Add New Codes</button>
          

            @if ($addCode)
            
            @endif

            <div class="dropdown">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i> </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item"> <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hidden md:block mx-auto text-slate-500">    {{ $ticket->links() }}
            </div>
            
        </div>


        @foreach ($ticket as $ticket)
                <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3">
                    <div class="box">
                        <div class="p-5">
                            <div class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black before:to-black/10">
                                

                                {!! QrCode::size(300)
                                    ->backgroundColor(255,55,0)
                                    ->generate($ticket->id); !!}
                                


                            <div class="absolute bottom-0 text-white px-5 pb-6 z-10"> <a href="" class="block font-medium text-base">RD Congo {{ $ticket->id }}</a> <span class="text-white/90 text-xs mt-3">By Matic</span> </div>
                            </div>
                            <div class="text-slate-600 dark:text-slate-500 mt-5">
                                <div class="flex items-center"> <i data-lucide="link" class="w-4 h-4 mr-2"></i> Access Code: {{ $ticket->access_code }} </div>
                                <div class="flex items-center mt-2"> <i data-lucide="layers" class="w-4 h-4 mr-2"></i> Use Status: {{ $ticket->used ? 'Used' : 'Not Used' }} </div>
                                
                                
                                
                                <div class="flex items-center mt-2"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> 
                                    Status: @if ( $ticket->activated)
                                        <div class="text-primary">

                                            Yes Active
                                        </div>
                                    @else
                                    <div class="text-danger">
                                        Not Active
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                            <a wire:click="showQRCodePreview('{{ $ticket->id }}')" class="flex items-center text-primary mr-auto cursor-pointer">
                                <i data-lucide="eye" class="w-4 h-4 mr-1"></i>
                                Preview
                            </a>
                                                        
                            @if ($ticket->downloaded)
                            <a class="flex items-center text-primary" href="#"  data-tw-toggle="modal" data-tw-target="">  Downloaded </a>

                            @else
                            <!--<a class="flex items-center text-primary" href="#"  data-tw-toggle="modal" data-tw-target="">  Downloaded </a>-->

                            <a class="flex items-center text-danger" href="#" wire:click.prevent="downloadQRCode({{ $ticket->id }})" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-lucide="download" class="w-4 h-4 mr-1"></i> Download </a>

                            @endif
                            
                        </div>
                    </div>
                </div>

                

        @endforeach

        {{-- @livewire('q-r-code-preview') --}}

        <!-- Listen for the 'showQRCodePreview' event and display the QRCodePreviewComponent -->
        {{-- @if ($showQRCodePreview)
        @livewire('q-r-code-preview', ['showQRCodePreview' => $showQRCodePreview])
        @endif --}}

        <!-- QR code preview modal -->
            @if ($showQRCodePreview)
            <div class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-800 bg-opacity-50" style="z-index: 9999;">
                <div class="bg-white w-96 mx-auto rounded-lg p-5">
                    <h2 class="text-lg font-bold mb-4">QR Code Preview</h2>
                    <div class="flex justify-center mb-4">
                        {!! QrCode::size(200)->generate($ticket->id); !!}
                    </div>
                    <button wire:click="closeQRCodePreview" class="block w-full bg-gray-200 hover:bg-gray-300 text-center py-2 rounded">Close</button>
                </div>
            </div>
            @endif

           

    </div>
    
    {{-- <div>
        <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75">
            <div class="bg-white p-4 rounded-lg">
                {!! $qrCode3 !!}
                <button wire:click="$emit('closeModal')" class="block mt-4 px-4 py-2 bg-primary text-white rounded-md">Close</button>
            </div>
        </div>
    </div> --}}

    
</div>


@livewireScripts
<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('qrCodeDownloaded', function () {
            // Reload the page after the download
            window.location.reload();
        });
    });
</script>

</div>
