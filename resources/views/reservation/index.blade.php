<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna-Proizvodi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="grid grid-cols-4 gap-4 p-4 justify-items-center ">
<div>
                        <h1> <b> Upit 1: Ispisati kupljene proizvode</h1> </b>
                       
                        @foreach ($most_common_products as $most_common_product)

            <p>{{$loop->iteration}} . {{$most_common_product->name}} - {{$most_common_product->brojac}} </p>
                        @endforeach
</div>


<div>
                        <h1><b>Upit 2: Ispisati kupljene proizvode marke Zara</h1></b>
                       
                        @foreach ($product_zara as $product_zaras)

            <p>{{$loop->iteration}} . {{$product_zaras->product_name}} </p>
                        @endforeach
</div>


<div>
                        <h1><b>Upit 3: Ispisati sve proizvode kategorije Haljine veličine XS kupljene u određenom periodu od 2022-15-01 00:00:00 do 2022-10-02 23:59:59.</h1></b>
                       
                        @foreach ($product_haljina as $product_haljinas)

            <p>{{$loop->iteration}} . {{$product_haljinas->product_name}} </p>
                        @endforeach
</div>




<div>
<h1><b>Upit 4: Ispisati sve proizvode brenda Adidas crne boje, tipa Ž</h1></b>
                       
                       @foreach ($product_adidas as $product_adidass)

           <p>{{$loop->iteration}} . {{$product_adidass->product_name}} </p>
                       @endforeach
</div>

<div>

<h1><b>Upit 5: Ispisati sve brendove tipa Hlače, iz države SAD.a plave boje tipa: muške</h1></b>
                       
                       @foreach ($brand_country as $brand_countrys)

           <p>{{$loop->iteration}} . {{$brand_countrys->brand_name}} </p>
                       @endforeach


</div>
  

<div>

<h1><b>Upit 6: Ispisati sve kupljene proizvode raspona cijena od 30 do 60 KM, opisa 'široke hlače', veličine L, opisa plave, država Turska</h1></b>
                       
                       @foreach ($product_price as $product_prices )

           <p>{{$loop->iteration}} . {{$product_prices->product_name}} </p>
                       @endforeach

</div>

  
<div>
<h1><b>Upit 7: Ispisati sve kupce koji su kupili Džemperi i Kardigani, država Francuska</h1></b>
                       
                       @foreach ($user_product as $user_products)

           <p>{{$loop->iteration}} . {{$user_products->user_name}} </p>
                       @endforeach

</div>


<div>
<h1><b>Upit 8: Ispisati sve proizvode  koje su kupljene od korisnika Lejla, veličine XS i boje roza</h1></b>
                       
                       @foreach ($product_Elma as $product_Elmas)

           <p>{{$loop->iteration}} . {{$product_Elmas->product_name}} </p>
                       @endforeach

</div>


</div>




  </div>





        </div>
    </div>
</div>

</x-app-layout>
