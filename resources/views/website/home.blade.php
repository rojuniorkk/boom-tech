<x-app-layout>

    <x-slot name="pagename">Produtos</x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produtos') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-grey">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid gap-3 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 mb-4">
                        @forelse ($products as $product)
                            <a class="flex max-w-sm flex-col space-y-6 bg-white border shadow rounded-lg cursor-pointer hover:shadow-lg hover:scale-[1.15] transition duration-300"
                                href="{{ route('product.show', ['id' => $product->id, 'slug' => $product->slug]) }}">
                                <section>
                                    <figure>
                                        <img class="rounded max-w-300px max-h-300px" src="{{ Storage::url($product->image) }}"
                                            alt="{{ $product->slug }}">
                                    </figure>
                                </section>

                                <section class="p-2 ">
                                    <h1 class="text-lg font-semibold">{{ Str::limit($product->name, 18) }}</h1>
                                    <h4 class="text-lg ">R$ {{ number_format($product->price, 2, ',', '.') }}</h4>
                                    {{-- <p class="text-justify">{{ Str::limit($product->description, 60) }}</p> --}}
                                </section>
                            </a>
                        @empty
                        @endforelse
                    </div>

                    <div class="w-full text-2xl flex justify-center">
                        {{ $products->links('pagination::semantic-ui') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
