<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Proizvodi') }}
        </h2>
    </x-slot>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    @foreach($products as $product)
                    <form method="POST" action="{{ route('store_reservation')}}">
                        @csrf
                        <input type="hidden" name="product" value="{{$product->id}}"/>
                        <div>
  
<div>
  <x-jet-label for="reservationdate" value="{{ __('Datum rezervacije') }}"/>
  <x-jet-input id="reservationdate" class="block mt-1 w-full" type="date" name="reservationdate"  required autofocus />
</div>

<div>
  <x-jet-label for="amount" value="{{ __('Količina') }}"/>
  <x-jet-input id="amount" class="block mt-1 w-full" type="number" name="amount"  required autofocus />
</div>



<div class="flex items-center justify-end mt-4">
    <x-jet-button class="ml-4">
        {{ __('Kupi')}}
</x-jet-button>

                    
            </div>
</form>
@endforeach
        </div>
    </div>
</div>
    </div>
</x-app-layout>

