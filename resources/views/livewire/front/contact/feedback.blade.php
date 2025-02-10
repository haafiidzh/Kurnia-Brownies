<div id="feedback">
    <div class="px-10 lg:px-[120px] pb-20">
        <div class="w-full px-7 md:px-20 md:py-10 py-7 bg-gradient-to-tr bg-accent rounded-2xl drop-shadow-md relative overflow-hidden">
            
            {{-- Decoration Start--}}
            <div class="h-full w-full inset-0 absolute bg-gradient-to-bl from-accent to-transparent from-55% to-100% -z-10"></div>
            <div class=" inset-0 absolute -z-20 bottom-0 scale-150 md:scale-100 translate-y-28 sm:translate-y-12 md:translate-y-0">
                <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 800 800" width="800" height="800"><g transform="scale(1.3) rotate(170) translate(0 3) skewX(-2) skewY(-2)" transform-origin="400 400"><rect width="1600" height="1600" x="-400" y="-400" fill="url(#rrreplicate-pattern1)"></rect><rect width="1600" height="1600" x="-400" y="-400" fill="url(#rrreplicate-pattern2)"></rect><rect width="1600" height="1600" x="-400" y="-400" fill="url(#rrreplicate-pattern3)"></rect></g><defs><pattern id="rrreplicate-pattern1" width="168" height="168" patternUnits="userSpaceOnUse" patternTransform="rotate(61)" stroke-width="2" fill="none" stroke="#331800" stroke-opacity="0.48">
                    <line x1="21" y1="0" x2="21" y2="168"></line><line x1="63" y1="0" x2="63" y2="168"></line><line x1="105" y1="0" x2="105" y2="168"></line><line x1="147" y1="0" x2="147" y2="168"></line>
                    </pattern><pattern id="rrreplicate-pattern2" width="168" height="168" patternUnits="userSpaceOnUse" patternTransform="rotate(61)" stroke-opacity="0.67" stroke-width="2" fill="none" stroke="#6b680d">
                    <line x1="14" y1="0" x2="14" y2="168"></line><line x1="42" y1="0" x2="42" y2="168"></line><line x1="70" y1="0" x2="70" y2="168"></line><line x1="98" y1="0" x2="98" y2="168"></line><line x1="126" y1="0" x2="126" y2="168"></line><line x1="154" y1="0" x2="154" y2="168"></line>
                    </pattern><pattern id="rrreplicate-pattern3" width="168" height="168" patternUnits="userSpaceOnUse" patternTransform="rotate(59)" stroke-opacity="1" stroke-width="1.8" fill="none" stroke="#7c2301">
                    <line x1="21" y1="0" x2="21" y2="168"></line><line x1="63" y1="0" x2="63" y2="168"></line><line x1="105" y1="0" x2="105" y2="168"></line><line x1="147" y1="0" x2="147" y2="168"></line>
                    </pattern></defs></svg>
            </div>
            {{-- Decoration End --}}

            <h3 class="mb-2 font-nunito font-bold italic text-primary text-3xl md:text-5xl drop-shadow-md">
                {{ cache('contact.feedback-title') ?: 'Reach To Us' }}
            </h3>
            <div class="flex">
                <div class="border-b-2 border-primary/65 w-[50%] md:w-[20%] text-center"></div>
            </div>

            <div class="w-full flex flex-col gap-3 md:gap-6">
                <div class="w-full md:w-3/4 mt-3 md:mt-6">
                    <p class="text-gray-800 md:text-base text-xs font-poppins leading-relaxed ">
                        {{ cache('contact.feedback-description') ?: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid aut omnis corporis, perferendis laudantium dicta repellendus accusamus? Odit, unde neque.' }}
                    </p>
                </div>
                <form wire:submit="sendFeedback" class="space-y-6">
                    @csrf

                    <div class="flex flex-col md:flex-row gap-5 w-full">
                        <!-- Nama Depan -->
                        <div class="relative flex-grow pt-0 md:pt-4">
                            <input type="text" id="first_name" name="first_name" wire:model="first_name" class="font-poppins tracking-wide peer w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-accent focus:border-accent transition" placeholder=" ">
                            <label for="first_name" 
                            class="absolute pointer-events-none font-poppins left-4 -translate-y-[22px] text-gray-800 text-sm 
                            peer-placeholder-shown:translate-y-[13px]
                            peer-placeholder-shown:left-5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 transition-all">
                                Nama Depan
                            </label>
                            @error('first_name')
                            <span class="backdrop-blur-sm px-2 rounded-full font-poppins text-xs absolute bottom-0 translate-y-[18px] left-2 text-red-600">{{ $message }}</span>    
                            @enderror
                            
                        </div>

                        <!-- Nama Belakang -->
                        <div class="relative flex-grow pt-4">
                            <input type="text" id="last_name" name="last_name" wire:model="last_name" class="font-poppins tracking-wide peer w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-accent focus:border-accent transition" placeholder=" ">
                            <label for="last_name" 
                            class="absolute pointer-events-none font-poppins left-4 -translate-y-[22px] text-gray-800 text-sm 
                            peer-placeholder-shown:translate-y-[13px]
                            peer-placeholder-shown:left-5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 transition-all">
                                Nama Belakang
                            </label>
                            @error('last_name')
                            <span class="backdrop-blur-sm px-2 font-poppins text-xs absolute bottom-0 translate-y-[18px] left-2 text-red-600">{{ $message }}</span>    
                            @enderror
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row gap-5 w-full">
                        <!-- Email -->
                        <div class="relative flex-grow pt-4">
                            <input type="text" id="email" name="email" wire:model="email" class="font-poppins tracking-wide peer w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-accent focus:border-accent transition" placeholder=" ">
                            <label for="email" 
                            class="absolute pointer-events-none font-poppins left-4 -translate-y-[22px] text-gray-800 text-sm 
                            peer-placeholder-shown:translate-y-[13px]
                            peer-placeholder-shown:left-5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 transition-all">
                                Email
                            </label>
                            @error('email')
                            <span class="backdrop-blur-sm px-2 rounded-full font-poppins text-xs absolute bottom-0 translate-y-[18px] left-2 text-red-600">{{ $message }}</span>    
                            @enderror
                        </div>

                        <!-- Jenis -->
                        <div class="relative w-full md:w-1/3 pt-4">
                            <input type="text" id="phone" name="phone" wire:model="phone" class="font-poppins tracking-wide peer w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-accent focus:border-accent transition" placeholder=" ">
                            <label for="phone" 
                            class="absolute pointer-events-none font-poppins left-4 -translate-y-[22px] text-gray-800 text-sm 
                            peer-placeholder-shown:translate-y-[13px]
                            peer-placeholder-shown:left-5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 transition-all">
                                No. Telepon
                            </label>
                            @error('phone')
                            <span class="backdrop-blur-sm px-2 rounded-full font-poppins text-xs absolute bottom-0 translate-y-[18px] left-2 text-red-600">{{ $message }}</span>    
                            @enderror
                        </div>
                    </div>
                    
                    <!-- Email -->
                    <div class="relative flex-grow pt-4">
                        <textarea type="text" id="message" name="message" wire:model="message" class="font-poppins tracking-wide peer w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-accent focus:border-accent transition min-h-[200px]" placeholder=" "></textarea>
                        <label for="message" 
                        class="absolute font-poppins left-4 -translate-y-[22px] text-gray-800 text-sm 
                        peer-placeholder-shown:translate-y-[13px]
                        peer-placeholder-shown:left-5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 transition-all">
                            Isi Pesan
                        </label>
                        @error('message')
                            <span class="backdrop-blur-sm px-2 rounded-full font-poppins text-xs absolute bottom-0 translate-y-[18px] left-2 text-red-600">{{ $message }}</span>    
                            @enderror
                    </div>
                
                    <div class="flex flex-col md:flex-row justify-normal items-center md:justify-between gap-5 md:gap-0">
                        <div class="relative">
                            
                            <div wire:ignore>
                                {!! NoCaptcha::renderJs('id') !!}    
                                {!! NoCaptcha::display(['data-callback' => 'onCallback']) !!}
                            </div>
                            
                            
                            @if ($errors->has('g-recaptcha-response'))
                            {{$errors->first('g-recaptcha-response')}}
                            @endif
                            @error('recaptcha')
                            <span class="backdrop-blur-sm px-2 rounded-full font-poppins text-xs absolute bottom-0 translate-y-[18px] left-4 text-red-600">
                                {{ $message }}</span>    
                            @enderror
                            
                        </div>
                        <div>
                            <button type="submit"
                            class=" px-6 py-3 text-lg font-semibold text-gray-200 bg-primary rounded-full shadow-md hover:bg-primary-dark transition-all duration-300">
                                Submit <i wire:loading wire:target="sendFeedback" class="fa-solid fa-spinner animate-spin"></i>
                            </button>
                        </div>
                        
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script type="text/javascript">
        var onCallback =function() {
            @this.set('recaptcha', grecaptcha.getResponse());
        };

        window.addEventListener('reset-captcha', event => {
            grecaptcha.reset(); // Fungsi untuk mereset CAPTCHA
        });
    </script>
@endpush