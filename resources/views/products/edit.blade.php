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
                    <form method="POST" action="{{ route('update_product')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{$product->id}}"/>
                        <div>
                        <div>
       <x-jet-label for="name" value="{{ __('Naziv') }}"/>
        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$product->name}}" required autofocus />
</div>



<div class="mt-4">
  <x-jet-label for="description" value="{{ __('Opis') }}"/>
  <x-jet-input id="description" class="block mt-1 w-full" type="text" name="description"  value="{{$product->description}}" required autofocus />
</div> 

<div class="mt-4">
  <x-jet-label for="price" value="{{ __('Cijena') }}"/>
  <x-jet-input id="price" class="block mt-1 w-full" type="number" name="price"  value="{{$product->price}}"  required autofocus />
</div>


<div class="mt-4">
  <x-jet-label for="code" value="{{ __('Kod') }}"/>
  <x-jet-input id="code" class="block mt-1 w-full" type="number" name="code"  value="{{$product->code}}"  required autofocus />
</div> 

<div class="mt-4">
  <x-jet-label for="type" value="{{ __('Tip') }}"/>
  <x-jet-input id="type" class="block mt-1 w-full" type="text" name="type"   value="{{$product->type}}" required autofocus />
</div>

<div class="mt-4">
  <x-jet-label for="color" value="{{ __('Boja') }}"/>
  <x-jet-input id="color" class="block mt-1 w-full" type="text" name="color"   value="{{$product->color}}" required autofocus />
</div>

<div class="mt-4">
  <x-jet-label for="size" value="{{ __('Velicina') }}"/>
  <x-jet-input id="size" class="block mt-1 w-full" type="text" name="size"  value="{{$product->size}}" required autofocus />
</div>




<div class="mt-4">
  <x-jet-label for="brand" value="{{ __('Brend') }}"/>
<select id="brand" name="brand" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300
focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
<option >Odaberi</option>
@foreach($brands as $brand)
<option value="{{$brand->id}}"
@if($product->brand == $brand->id) selected
@endif>{{$brand->name}}</option>
@endforeach
</select>
</div>

<div class="mt-4">
  <x-jet-label for="category" value="{{ __('Kategorija') }}"/>
<select id="category" name="category" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300
focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
<option >Odaberi</option>
@foreach($categories as $category)
<option value="{{$category->id}}"
@if($product->size == $category->id) selected
@endif>{{$category->typeofclothing}}</option>
@endforeach
</select>
</div>

<div class="mt-4">
  <x-jet-label for="image" value="{{ __('Slika') }}"/>
  <x-jet-input id="image" class="block mt-1 w-full" type="text" name="image"  value="{{$product->image}}" required autofocus />
</div>


<div class="flex items-center justify-end mt-4">
    <x-jet-button class="ml-4">
        {{ __('Uredi')}}
</x-jet-button>

                    
            </div>
</form>
@endforeach
        </div>
    </div>
</div>
    </div>
</x-app-layout>