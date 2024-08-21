<x-app-layout>

    <x-slot name="pagename">{{ $product->name }}</x-slot>

    <x-slot name="header">
        <h1 class="text-2xl">Produto | {{ $product->name }}</h1>
    </x-slot>

    <div class="py-12 bg-grey">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-lg sm:rounded-lg">
                <div class="text-gray-900">
                    <section class="flex">

                        <section class="max-h-sm">
                            <figure>
                                <img class="max-w-lg" src="{{ asset($product->image) }}" alt="">
                            </figure>
                        </section>

                        <section class="p-4 flex flex-col w-full" >
                            <section class="h-full">
                                <p>
                                    <h1 class="text-2xl">{{ $product->name }}</h1>
                                    <p>
                                        <a href="#">{{ $product->category->name }}</a>
                                        /
                                        <a href="#">{{ $product->company->name }}</a>
                                    </p>
                                </p>
                                <p class="text-2xl py-3">R$ {{ number_format($product->price, 2, ',', '.') }}</p>
                                <p>{{ $product->description }}</p>
                            </section>

                            <section class="py-4 flex justify-end ">
                                <button class="flex justify-center p-4 text-white border-black bg-emerald-700 rounded">
                                    <span class="font-semibold pe-2">Adicionar ao Carrinho</span>
                                    <span class="material-symbols-outlined">shopping_cart</span>
                                </button>
                            </section>
                        </section>

                    </section>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
