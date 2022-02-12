<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-jet-welcome /> -->
            </div>
        </div>
    </div>
    <div class="carousel relative container mx-auto" style="max-width:1600px;">
        <div class="carousel-inner relative overflow-hidden w-full">
            <!--Slide 1-->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('https://thumbs.dreamstime.com/b/close-up-collection-black-gray-white-color-monochrome-hanging-wooden-clothes-hanger-closet-clothing-rack-over-141435713.jpg');">
                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-black text-2xl my-4">Pregled velikog broja raličitih proizvoda</p>
                            <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="{{ route('products') }}">Pregled proizvoda</a>
                        </div>
                    </div>
                </div>
            </div>
            <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0 bg-cover bg-right" style="height:50vh;">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('http://www.womenfitness.net/wp/wp-content/uploads/2016/11/right-color-1-1000x667.jpg');">
                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-black text-2xl my-4">Velike rasprodaje sa popustom i do -60%</p>
                            <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black z-index-5" href="{{ route('categories') }}">Pregled kategorija</a>
                        </div>
                    </div>
                </div>
            </div>
            <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
            <!--Slide 3-->
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-bottom" style="background-image: url('https://gp1.com/wp-content/uploads/2019/08/Shopping.jpg');">
                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-black text-2xl my-4">Nudimo veliki broj poznatih brendova</p>
                            <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black z-index-5" href="{{ route('brands') }}">Pregledaj brendove</a>
                        </div>
                    </div>
                </div>
            </div>
            <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
            </ol>
        </div>
    </div>





    <section class="bg-white py-8">
        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
            <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
                    <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">
                        Preporučujemo Vam
                    </a> 
             </div>
            </nav>
           <!-- <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg" src="X">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">X</p>
                    </div>
                    <p class="pt-1 text-gray-900">X</p>
                </a>
            </div>
        </div>
    </section> -->


    <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg" src="https://www.fashionandfriends.com/pub/media/catalog/product/cache/9ad54f012d0a684862df591f2a0fb29d/R/W/RWA432T-108-935-011-1.jpg">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Šorc Trendyol 74X1</p>
                      <!--  <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg> -->
                    </div>
                    <p class="pt-1 text-gray-900">57 KM</p>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg" src="https://pa.namshicdn.com/product/A9/111301W/v1/1-web-desktop-list.jpg">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Muška trenerka Adidas Regular</p>
                        
                    </div>
                    <p class="pt-1 text-gray-900">162 KM</p>
                </a>
            </div>


            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg" src="https://hr.beauty-fashion-world.com/images/96/96333/e22be369cc0b54f8ed8ef4a39c5dc723.jpg">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Ženska tunika </p>
                        
                    </div>
                    <p class="pt-1 text-gray-900">31 KM</p>
                </a>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="#">
                    <img class="hover:grow hover:shadow-lg" src="https://www.kayakfashion.gr/docs/Images/Products/e2719666-5fa0-4aff-b9c4-9e570c1f636c.jpg">
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Muški džemper Lacoste WX1728</p>
                        
                    </div>
                    <p class="pt-1 text-gray-900">64 KM</p>
                </a>
            </div>

            </div>

    </section>


    <section class="bg-white py-8">

<div class="container py-8 px-6 mx-auto">

    <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl mb-8" href="#">
    O nama
</a>

    <p class="mt-8 mb-8">Znamo da kvaliteta naših usluga odražava sposobnost zajedničkog rada kao tima.
        <br>
        Svakodnevno nudimo velki broj različitih bredova,a uskoro nastojimo i proširiti asortiman.
        Za sva pitanja i pomoć možete se obratiti lokalnoj korisničkoj službi koja vam je spremni pomoći.</p>

    <p class="mb-8"> Vi, naši kupci, ogledalo ste našeg truda. Povratne informacije nas pokreću i motiviraju da budemo bolji. Da budemo iskreni, radimo s maksimalno dostupnim informacijama o proizvodu. 
        Na našoj stranici imate mogućnost kupovine najpoznatijih brendova kao što su: Adidas, Nike, Trendyol, Puma, Celine i drugi uz veoma povoljen cijene. Također
        omogućujemo velike popust uz različite kodove koje je potrebno da pratite na našoj stranici. Mi smo kompanija koja želi biti otvorena za kupce, ali i za svoje zaposlenike. Svoje zaposlenike redovno informišemo o svemu što se događa u kompaniji, a istovremeno podržavamo njihov entuzijazam za inovacijama i želju za donošenjem novih ideja. Te su uvijek dobrodošle.
    </p>

</div>

</section> 


</x-app-layout>
