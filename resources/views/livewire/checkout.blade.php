<div>
   <section class="bg-white pt-20 pb-10 lg:pt-[120px] lg:pb-20">
      <div class="container mx-auto">
         <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4 lg:w-7/12 xl:w-8/12">
               <div class="mb-12 lg:mb-0">
                
               <h3 class="mb-8 text-xl font-bold text-black sm:text-3xl">
                    {{ __('Wybierz metodę dostawy') }}
                  </h3>
                  <div
                     class="mb-10  overflow-hidden rounded-lg border border-[#e7e7e7] bg-gray-1 py-10 px-6 sm:px-10"
                     >
                     <div class="-mx-3 flex flex-wrap">
                        @foreach($carriers as $key => $carrier)
                        <div class="w-full px-3 md:w-1/2 lg:w-full xl:w-1/2">
                           <div class="mb-3">
                              <input
                                 type="radio"
                                 name="shipping"
                                 id="shipping{{ $key }}"
                                 class="shipping sr-only"
                                 />
                              <label
                                 for="shipping{{ $key }}"
                                 class="flex cursor-pointer items-center overflow-hidden rounded-md border border-transparent bg-white py-4 px-6 sm:px-4 md:px-6 lg:px-4 xl:px-6"
                                 >
                                 <div class="mr-4 w-full max-w-[40px] sm:max-w-[65px]">
                                    <img
                                       src="{{ asset($carrier->logo) }}"
                                       alt="{{ $carrier->name }}"
                                       />
                                 </div>
                                 <div class="border-l border-[#e7e7e7] pl-4">
                                    <span class="mb-1 block text-sm font-semibold text-black sm:text-base md:text-sm lg:text-base">
                                        {{ $carrier->name }}
                                    </span>
                                    <span class="block text-sm font-medium text-body-color">
                                        {{ $carrier->delivery_text }}
                                    </span>
                                    <span class="block text-sm font-semibold text-body-color">
                                        {{ $carrier->price }} zł
                                    </span>
                                 </div>
                              </label>
                           </div>
                        </div>
                        @endforeach
                     </div>
                  </div>

                  <h3 class="mb-8 text-xl font-bold text-black sm:text-3xl">
                     {{ __('Twoje dane') }}
                  </h3>
                  <div
                     class="overflow-hidden rounded-lg border border-[#e7e7e7] bg-gray-1 py-10 px-6 sm:px-10"
                     >
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 md:w-1/2">
                            <div class="mb-5">
                                <label for="" class="mb-[10px] block text-base font-medium text-body-color">
                                    {{ __('Imię') }}<span class="text-rose-600">*</span>:
                                </label>
                                <input type="text" wire:model="first_name" placeholder="Mark"
                                class="@error('first_name') border-2 border-rose-600 @enderror w-full rounded-lg border border-form-stroke py-3 px-5 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]"
                                />

                                @error('first_name')
                                    <span class="text-rose-600 dark:text-rose-500 text-sm">{{ $message }}</span> 
                                @enderror
                            </div>
                        </div>
                        <div class="w-full px-3 md:w-1/2">
                            <div class="mb-5">
                                <label for="" class="mb-[10px] block text-base font-medium text-body-color">
                                    {{ __('Nazwisko') }}<span class="text-rose-600">*</span>:
                                </label>
                                <input type="text" wire:model="last_name" placeholder="Litho"
                                class="@error('last_name') border-2 border-rose-600 @enderror w-full rounded-lg border border-form-stroke py-3 px-5 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]"
                                />

                                @error('last_name')
                                    <span class="text-rose-600 dark:text-rose-500 text-sm">{{ $message }}</span> 
                                @enderror
                            </div>
                        </div>
                        <div class="w-full px-3 md:w-1/2">
                            <div class="mb-5">
                                <label for="" class="mb-[10px] block text-base font-medium text-body-color">
                                    Email<span class="text-rose-600">*</span>:
                                </label>
                                <input
                                    type="email"
                                    placeholder="yourmail@gmail.com"
                                    wire:model="email"
                                    class="@error('email') border-2 border-rose-600 @enderror w-full rounded-lg border border-form-stroke py-3 px-5 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]"
                                />
                                @error('email')
                                    <span class="text-rose-600 dark:text-rose-500 text-sm">{{ $message }}</span> 
                                @enderror
                            </div>
                        </div>
                        <div class="w-full px-3 md:w-1/2">
                            <div class="mb-5">
                                <label for="" class="mb-[10px] block text-base font-medium text-body-color">
                                    {{ __('Numer telefonu kontaktowego') }}<span class="text-rose-600">*</span>:
                                </label>
                                <input
                                    type="text"
                                    placeholder="883-992-145"
                                    wire:model="phone"
                                    class="@error('phone') border-2 border-rose-600 @enderror w-full rounded-lg border border-form-stroke py-3 px-5 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]"
                                />
                                @error('phone')
                                    <span class="text-rose-600 dark:text-rose-500 text-sm">{{ $message }}</span> 
                                @enderror
                            </div>
                        </div>
                        <div class="w-full px-3">
                            <div class="mb-5">
                                <label for="" class="mb-[10px] block text-base font-medium text-body-color">
                                    {{ __('Ulica') }}<span class="text-rose-600">*</span>:
                                </label>
                                <input
                                type="text"
                                placeholder="{{ __('Ulica') }}"
                                class="@error('address1') border-2 border-rose-600 @enderror w-full rounded-lg border border-form-stroke py-3 px-5 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]"
                                />
                                @error('address1')
                                    <span class="text-rose-600 dark:text-rose-500 text-sm">{{ $message }}</span> 
                                @enderror
                            </div>
                        </div>
                        <div class="w-full px-3">
                            <div class="mb-5">
                                <label for="" class="mb-[10px] block text-base font-medium text-body-color">
                                    {{ __('Numer domu / lokal') }}<span class="text-rose-600">*</span>:
                                </label>
                                <input
                                type="text"
                                placeholder="{{ __('Numer domu / lokal') }}"
                                class="@error('address2') border-2 border-rose-600 @enderror w-full rounded-lg border border-form-stroke py-3 px-5 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]"
                                />
                                @error('address2')
                                    <span class="text-rose-600 dark:text-rose-500 text-sm">{{ $message }}</span> 
                                @enderror
                            </div>
                        </div>
                        <div class="w-full px-3 md:w-1/3">
                            <div class="mb-5">
                                <label for="" class="mb-[10px] block text-base font-medium text-body-color">
                                    {{ __('Kraj dostawy') }}<span class="text-rose-600">*</span>:
                                </label>
                                <div class="relative">
                                    <select 
                                        wire:model="country"
                                        class="w-full appearance-none rounded-lg border border-form-stroke py-[14px] px-6 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]">
                                        @foreach($countries as $country)
                                            <option value="{{ $country->code }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="absolute right-4 top-1/2 mt-[-2px] h-[10px] w-[10px] -translate-y-1/2 rotate-45 border-r-2 border-b-2 border-body-color">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-3 md:w-1/3">
                            <div class="mb-5">
                                <label for="" class="mb-[10px] block text-base font-medium text-body-color">
                                {{ __('Miasto') }}<span class="text-rose-600">*</span>:
                                </label>
                                <input
                                    type="text"
                                    placeholder="Szczecin"
                                    wire:model="city"
                                    class="w-full rounded-lg border border-form-stroke py-3 px-5 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]"
                                />
                            </div>
                        </div>
                        <div class="w-full px-3 md:w-1/3">
                            <div class="mb-5">
                                <label for="" class="mb-[10px] block text-base font-medium text-body-color">
                                    {{ __('Kod pocztowy') }}<span class="text-rose-600">*</span>:
                                </label>
                                <input
                                    type="text"
                                    placeholder="71-004"
                                    wire:model="postal_code"
                                    class="w-full rounded-lg border border-form-stroke py-3 px-5 font-medium text-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]"
                                />
                            </div>
                        </div>
                    </div>
                  </div>

               </div>
            </div>
            <div class="w-full px-4 lg:w-5/12 xl:w-4/12">
               <div>
                  <h3 class="mb-8 text-xl font-bold text-black sm:text-3xl">
                    Podsumowanie
                  </h3>

                  <div
                     class="mb-10 overflow-hidden rounded-lg border border-[#e7e7e7] bg-gray-1 py-10 px-6 sm:px-10 lg:px-8 2xl:px-10"
                     >
                     <div class="mb-6 border-b border-[#e7e7e7] pb-5">
                        <h3 class="mb-2 text-lg font-semibold text-black">Coupon Code</h3>
                        <p class="text-sm font-medium text-body-color">
                           Enter code to get discount instantly
                        </p>
                     </div>
                     <form class="relative">
                        <input
                           type="text"
                           placeholder="Coupon code"
                           class="w-full rounded-lg border border-form-stroke py-[14px] px-6 font-medium text-body-color placeholder-body-color outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]"
                           />
                        <button
                           class="absolute right-3 top-1/2 mb-3 h-[34px] -translate-y-1/2 rounded bg-primary px-5 text-sm font-medium text-white transition hover:bg-opacity-90"
                           >
                        Apply
                        </button>
                     </form>
                  </div>
                  <div
                     class="mb-10 overflow-hidden rounded-lg border border-[#e7e7e7] bg-gray-1 py-10 px-6 sm:px-10 lg:px-8 2xl:px-10"
                     >
                     <div>
                        <p
                           class="mb-2 flex items-center justify-between text-base text-black"
                           >
                           <span class="font-medium">{{ __('Wartość') }}</span>
                           <span class="font-semibold"> 140.98 zł</span>
                        </p>
                        <p
                           class="mb-2 flex items-center justify-between text-base text-black"
                           >
                           <span class="font-medium">{{ __('Koszt wysyłki') }}</span>
                           <span class="font-semibold"> $10.99 </span>
                        </p>
                        <p
                           class="mb-4 flex items-center justify-between text-base text-black"
                           >
                           <span class="font-medium">Discount</span>
                           <span class="font-semibold"> $5.00 </span>
                        </p>
                     </div>
                     <div class="border-t border-[#e7e7e7] pt-5">
                        <p
                           class="mb-4 flex items-center justify-between text-base text-black"
                           >
                           <span class="font-medium">{{ __('Do zapłaty') }}</span>
                           <span class="font-semibold">{{ $total }} zł</span>
                        </p>
                     </div>
                     <button
                        wire:click="save"
                        class="flex w-full items-center justify-center rounded-md bg-primary py-3 px-10 text-center text-base font-semibold text-white hover:bg-opacity-90"
                        >
                      {{ __('Zapłać za zamówienie') }}
                     </button>
                  </div>
                  
               </div>
            </div>
        </div>
      </div>
   </section>
</div>