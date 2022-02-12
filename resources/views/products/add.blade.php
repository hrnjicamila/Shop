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
                    <form method="POST" action="{{ route('store_product')}}" enctype="multipart/form-data">
                        @csrf
    <div>
       <x-jet-label for="name" value="{{ __('Naziv') }}"/>
        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
</div>

<div class="mt-4">
  <x-jet-label for="description" value="{{ __('Opis') }}"/>
  <x-jet-input id="description" class="block mt-1 w-full" type="text" name="description"  required autofocus />
</div>

<div class="mt-4">
  <x-jet-label for="price" value="{{ __('Cijena') }}"/>
  <x-jet-input id="price" class="block mt-1 w-full" type="number" name="price"  required autofocus />
</div>


<div class="mt-4">
  <x-jet-label for="code" value="{{ __('Kod') }}"/>
  <x-jet-input id="code" class="block mt-1 w-full" type="number" name="code"  required autofocus />
</div> 

<div class="mt-4">
  <x-jet-label for="type" value="{{ __('Tip') }}"/>
  <x-jet-input id="type" class="block mt-1 w-full" type="text" name="type"  required autofocus />
</div>

<div class="mt-4">
  <x-jet-label for="color" value="{{ __('Boja') }}"/>
  <x-jet-input id="color" class="block mt-1 w-full" type="text" name="color"  required autofocus />
</div>

<div class="mt-4">
  <x-jet-label for="size" value="{{ __('Velicina') }}"/>
  <x-jet-input id="size" class="block mt-1 w-full" type="text" name="size"  required autofocus />
</div>

<div class="mt-4">
  <x-jet-label for="category" value="{{ __('Kategorija') }}"/>
  <x-jet-input id="category" class="block mt-1 w-full" type="number" name="category"  required autofocus />
</div>

<div class="mt-4">
  <x-jet-label for="brand" value="{{ __('Brend') }}"/>
  <x-jet-input id="brand" class="block mt-1 w-full" type="number" name="brand"  required autofocus />
</div>

<div class="mt-4">
  <x-jet-label for="image" value="{{ __('Slika') }}"/>
  <x-jet-input id="image" class="block mt-1 w-full" type="text" name="image"  required autofocus />
</div> 

<!--
<div class="input-group-mt-4">
<x-jet-label for="image" value="{{ __('Slika') }}"/>
<x-jet-input id="image" class="block mt-1 w-full" type="file" name="image"  required autofocus />
<x-jet-label class="custom-file-label" value="{{ __('Slika') }}"/>
</div> -->







<div class="flex items-center justify-end mt-4">
    <x-jet-button class="ml-4">
        {{ __('Spremi')}}
</x-jet-button>

                    
            </div>
</form>
        </div>
    </div>
</div>
</x-app-layout>


