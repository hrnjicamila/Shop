<x-app-layout>
    <br> <br>
    <section class="bg-white py-8">
            <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
                <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
                        <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">
                            Kategorije
                        </a>
                </div>
                </nav>
                @foreach ($categories as $category)
                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="{{ $category->image }}">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">{{ $category->typeofclothing }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
    </section>
</x-app-layout>
