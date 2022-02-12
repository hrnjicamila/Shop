
<style>
.verticalhorizontal {
    display: table-cell;
    height: 200px;
    text-align: center;
    width: 600px;
    vertical-align: middle;
    align:center;
}
</style>


<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <!-- <x-jet-authentication-card-logo /> -->
        </x-slot>
        <div class="verticalhorizontal">
    <img src="https://images.assetsdelivery.com/compings_v2/sellingpix/sellingpix1509/sellingpix150900012.jpg" alt="centered image" />
</div>

         <!--<div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
               <p class="text-center text-3xl">Dobrodošli na našu stranicu.</p> </div> -->

        <x-jet-validation-errors class="mb-4" />

        <div class="w-full md:w-1/2 flex flex-col">
                    <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
                <a href="#" class="bg-black text-white font-bold text-xl p-4">Logo</a>
            </div> 

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf	

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" placeholder="your@email.com"  class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            
</div>
            <div class="mt-4">
               
                <x-jet-label for="password" value="{{ __('Šifra') }}" />
                <x-jet-input id="password" placeholder="Šifra"  class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Zamapti me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Zaboravili ste šifru?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Prijava') }}
                </x-jet-button>
            </div>
<br>
<br>
            <div class="text-center pt-12 pb-12">
                    <p>Još uvijek nemate račun? <a href="{{ route('register') }}" class="underline font-semibold">Registrirajte se ovdje</a></p>
                </div>

        </form>

        

    </x-jet-authentication-card>
</x-guest-layout>




