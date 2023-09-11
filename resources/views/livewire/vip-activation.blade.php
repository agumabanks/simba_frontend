<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
      <x-slot name="header">
        {{ __('Validation VIP .') }}
    </x-slot>
    
    
    
    
    <div class="intro-y box overflow-hidden mt-5 p-8">
        <div class="dropzone px-5 py-10 sm:px-20 sm:py-20">
        
            <input class="w-3/5  text-5xl font-bold leading-none"  wire:model="ticketId" type="text" placeholder="VIP Ticket Number" wire:keydown.enter="activateTicket">
        
        </div>
    </div>
    
    <div class=" show flex items-center mb-2" role="alert"> 

        <p class="text-white mb-10">
                                                <!--ppppppppppppppppppp-->
                                            </p>
    </div>

    
    
   
     @if (session()->has('message'))
        <!--                    <div class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">-->

        <!--<div class="flex justify-center items-center h-100 alert alert-primary show mb-12 text-lg" role="alert">-->

            
        <!--    <div class="w-100 h-100">-->
        <!--                    {{ session('message') }}-->

        <!--    </div>-->
        <!--</div>--><div class="pt-18">
        <div class="flex justify-center items-center h-300 pt-18 alert alert-primary show m-50 text-lg zoom-in" role="alert">

            <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 2xl:col-span-2">
                <p class="text-primary">
                                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.

                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>
                
                     <h1 class="text-8xl font-bold leading-none"> {{ session('message') }}</h1>

                
                 <p class="text-primary">
                                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p> <p class="text-primary">
                                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>
            <div class="file box rounded-md px-5   pb-5 px-3 sm:px-5 relative ">
                                   
                                    <!--<a href="" class="w-4/5 mt-10 file__icon file__icon--file mx-auto">-->
                                    <!--    <div class="file__icon__file-name block font-medium mt-4 text-xl text-center truncate">-->
                                    <!--       </div>-->
                                    <!--</a>-->
                                    
                                     <div class=" show flex items-center mb-2" role="alert"> 

                                            <p class="text-white">
                                                ppppppppppppppppppp
                                            </p>
                                     </div>

                                    
                                   
            </div>
        </div>
           
        </div>
        @endif
    
        
        


    
    @if (session()->has('error'))
        <!--<div class="alert alert-danger show mb-12" role="alert">-->
        <!--    {{ session('error') }}-->
        <!--</div>-->
        
        
        <!--                    <div class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">-->

        <!--<div class="flex justify-center items-center h-100 alert alert-primary show mb-12 text-lg" role="alert">-->

            
        <!--    <div class="w-100 h-100">-->
        <!--                    {{ session('message') }}-->

        <!--    </div>-->
        <!--</div>--><div class="pt-18">
        <div class="flex justify-center items-center h-300 pt-18 alert alert-danger show m-50 text-lg zoom-in" role="alert">

            <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 2xl:col-span-2">
                <p class="text-danger">
                                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.

                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>
                
                     <h1 class="text-8xl font-bold leading-none"> {{ session('error') }}</h1>

                
                 <p class="text-danger">
                                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p> <p class="text-danger">
                                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>
            <div class="file box rounded-md px-5   pb-5 px-3 sm:px-5 relative ">
                                   
                                    <!--<a href="" class="w-4/5 mt-10 file__icon file__icon--file mx-auto">-->
                                    <!--    <div class="file__icon__file-name block font-medium mt-4 text-xl text-center truncate">-->
                                    <!--       </div>-->
                                    <!--</a>-->
                                    
                                     <div class=" show flex items-center mb-2" role="alert"> 

                                            <p class="text-white">
                                                ppppppppppppppppppp
                                            </p>
                                     </div>

                                    
                                   
            </div>
        </div>
           
        </div>
    @endif
</div>
</div>
