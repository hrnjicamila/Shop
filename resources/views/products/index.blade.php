<x-app-layout>
    <br> <br>
   <section class="bg-white py-8">
        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
            <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
                    <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">
                        Proizvodi
                    </a>
                    <a href="\add_product" class="m-2 p-2 text x1">Dodaj proizvode</a>
              </div>
            </nav>
            @foreach ($products as $product)
            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <!--dodano 
                         <img src="{{asset('uploads/'. $product->image)}}" width="100px" height="100px">
-->
                    <img class="hover:grow hover:shadow-lg" src="{{ $product->image }}">
               

                    <div class="pt-3 flex items-center justify-between">
                         <p class="">{{ $product->name }}</p>
                          </div>
                     <p class="pt-1 text-gray-900">{{ $product->price }} KM</p> 
                    <div class="flex">
                        <div class="flex-1">
                            <form method="POST" action="{{ route('delete_product') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <div class="p-2">
                                <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                                {{ __('Obrisi')}}
                                </button>
                                </div>
                            </form>
                        </div>
                        <div class="flex-1">
                            <form method="POST" action="{{ route('edit_product') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <div class="p-2">
                                <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border 
                                    border-transparent rounded-md font-semibold text-xs text-white uppercase">
                                {{ __('Uredi')}}
                                </button>
                                </div>
                            </form>
                        </div>
                        <div class="flex-1">
                            <form method="GET" action="{{ route('reservation_product') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <div class="p-2">
                                <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border 
                                    border-transparent rounded-md font-semibold text-xs text-white uppercase">
                                {{ __('Kupi')}}
                                </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>

    


</x-app-layout>