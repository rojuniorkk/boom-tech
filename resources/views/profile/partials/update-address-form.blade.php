<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Endereços Salvos') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Adicione ou edite seus endereços.') }}
        </p>
    </header>

    <section class="bg-white sm:rounded-lg text-gray-900">
        <section class="py-5 w-full">

            @if (!empty($user->addresses))
                <section class="grid lg:grid-cols-2 lg:gap-8">
                    @foreach ($user->addresses as $index => $address)
                        <div class="border rounded-lg bgwhite p-2 flex w-sm">

                            <div class="flex flex-wrap w-full">
                                <div class="w-full flex p-1">
                                    <div class="me-1 "><span class="font-bold">Rua: </span>{{ $address->rua }},</div>
                                    <div class="me-1 "><span class="font-bold">Bairro: </span>{{ $address->rua }}</div>
                                </div>

                                <div class="w-full flex p-1">
                                    <div class="me-1"><span class="font-bold">Nº</span> {{ $address->numero }},</div>
                                    <div class="me-1"><span class="font-bold">CEP:</span>{{ $address->cep }},</div>
                                    <div class="me-1"> - {{ $address->uf }}</div>
                                </div>

                                <div class="w-full flex p-1">
                                    <div class="me-1"><span class="font-bold">Complemento:
                                        </span>{{ $address->complemento }}</div>
                                </div>
                            </div>

                            <div class="flex justify-center h-full">
                                <a href=""><span class="material-symbols-outlined">edit</span></a>
                                <a href=""><span class="material-symbols-outlined">delete</span></a>

                            </div>

                        </div>
                    @endforeach
                </section>
            @else
                <h1>Nenhum endereço foi cadastrado ainda.</h1>
            @endif

        </section>

    </section>

    {{--
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('E-mail')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div> --}}

    {{-- <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Salvar') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Salvo com sucesso.') }}</p>
            @endif
        </div>
    </form> --}}
</section>
