<x-app-layout>

    <x-slot name="pagename">{{ $product->name }}</x-slot>

    <x-slot name="header">
        <h1 class="text-2xl">Produto > {{ $product->name }}</h1>
    </x-slot>

    <div class="py-12 bg-grey">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-lg sm:rounded-lg">
                <div class="text-gray-900">


                    <section class="bg-white rounded-lg shadow-lg p-4">
                        <section class="flex flex-col lg:flex-row">
                            <section>
                                <img class="rounded" src="{{ $product->image }}" alt="">
                            </section>
                            <section class="px-4 max-w-xl mt-4 lg:mt-0">
                                <h1 class="text-3xl mb-2">{{ $product->name }}</h1>
                                <div class="mb-10">
                                    <a class="text-emerald-700 underline"
                                        href="#">{{ $product->category->name }}</a>
                                    <strong>/</strong>
                                    <a class="text-emerald-700 underline"
                                        href="#">{{ $product->company->name }}</a>
                                </div>
                                <h3 class="text-4xl mb-4">R$ {{ number_format($product->price, 2, ',', '.') }}</h3>
                                <p class="text-justify">{{ $product->description }}</p>
                            </section>
                        </section>

                        <section class="flex justify-center lg:justify-end mt-5 lg:mt-0 ">
                            <form action="{{ route('cart.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $product->id }}">

                                <div class="flex gap-2">
                                    <input type="number" name="quantity" value="1" min="1" max="999"
                                        class="appearance-none me-2 border border-gray-300 rounded-md shadow-sm">
                                    <button type="submit"
                                        class="col-span-1 flex justify-center p-4 text-white border-black bg-emerald-700 rounded">
                                        {{-- <span class="font-semibold pe-2">+Carrinho</span> --}}
                                        <span class="material-symbols-outlined">add_shopping_cart</span>
                                    </button>
                                </div>
                            </form>
                        </section>
                    </section>

                    {{-- <section class="flex">

                        <section class="max-h-sm">
                            <figure>
                                <img class="max-w-lg" src="{{ asset($product->image) }}" alt="">
                            </figure>
                        </section>

                        <section class="p-4 flex flex-col w-full">
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

                                <form action="{{ route('cart.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $product->id }}">

                                    <div class="flex">
                                        <input type="number" name="quantity" value="1" min="1" max="999"
                                            class="appearance-none me-2 border border-gray-300 rounded-md shadow-sm">
                                        <button type="submit"
                                            class="col-span-1 flex justify-center p-4 text-white border-black bg-emerald-700 rounded">
                                            <span class="font-semibold pe-2">Adicionar ao Carrinho</span>
                                            <span class="material-symbols-outlined">shopping_cart</span>
                                        </button>
                                    </div>
                                </form>

                            </section>
                        </section>

                    </section> --}}

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
