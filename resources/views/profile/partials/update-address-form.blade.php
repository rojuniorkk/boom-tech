<x-slot name="script">
    <script src="{{ asset('js/profile.js') }}"></script>
</x-slot>

<section>


    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Seu endereço') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Endereço padrão para o envio de seus pedidos.') }}
        </p>
    </header>

    <form method="post" action="{{ route('address.store') }}" class="mt-6 space-y-6">
        @csrf
        @method('post')

        @php
            $address = $user->address();
        @endphp

        <div class="max-w-sm">
            <x-input-label for="update_password_current_password" :value="__('CEP')" />
            <x-text-input id="update_password_current_password" id="cep_input" maxlength="9" name="cep"
                value="{{ $address !== null ? $address->cep : '' }}" type="text" class="mt-1 block w-full"
                autocomplete="cep" />
            <x-input-error :messages="$errors->updateAddress->get('cep')" class="mt-2" />

                <label id="cep_error" class="text-grey-900 text-md"></label>
        </div>

        <div class="flex flex-col">

            <div class="grid grid-cols-2 gap-3">
                <div>
                    <x-input-label for="update_password_current_password" :value="__('Rua')" />
                    <x-text-input id="update_password_current_password" id="rua"
                        value="{{ $address !== null ? $address->rua : '' }}" name="rua" type="text"
                        class="mt-1 block w-full" autocomplete="rua" />
                    <x-input-error :messages="$errors->updateAddress->get('rua')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="update_password_current_password" :value="__('Bairro')" />
                    <x-text-input id="update_password_current_password" id="bairro"
                        value="{{ $address !== null ? $address->bairro : '' }}" name="bairro" type="text"
                        class="mt-1 block w-full" autocomplete="bairro" />
                    <x-input-error :messages="$errors->updateAddress->get('bairro')" class="mt-2" />
                </div>

                <div class="grid grid-cols-3 gap-3 col-span-2">
                    <div>
                        <x-input-label for="update_password_current_password" :value="__('Cidade')" />
                        <x-text-input id="update_password_current_password" id="cidade"
                            value="{{ $address !== null ? $address->cidade : '' }}" name="cidade" type="text"
                            class="mt-1 block w-full" autocomplete="cidade" />
                        <x-input-error :messages="$errors->updateAddress->get('cidade')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="update_password_current_password" :value="__('Estado')" />

                        <select id="estado" name="uf"
                            class="mt-1 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-lg shadow-sm block w-full p-2">
                            <option value="">Selecione</option>

                            @php
                                $ufs = [
                                    'AC',
                                    'AL',
                                    'AP',
                                    'AM',
                                    'BA',
                                    'CE',
                                    'DF',
                                    'ES',
                                    'GO',
                                    'MA',
                                    'MS',
                                    'MT',
                                    'MG',
                                    'PA',
                                    'PB',
                                    'PR',
                                    'PE',
                                    'PI',
                                    'RJ',
                                    'RN',
                                    'RS',
                                    'RO',
                                    'RR',
                                    'SC',
                                    'SP',
                                    'SE',
                                    'TO',
                                ];
                            @endphp

                            @foreach ($ufs as $uf)
                                <option {{ $address != null && $uf == $address->uf ? 'selected' : '' }}
                                    value="{{ $uf }}">{{ $uf }}</option>
                            @endforeach

                        </select>

                        <x-input-error :messages="$errors->updateAddress->get('uf')" class="mt-2" />
                    </div>
                    <div class="col-span-1">
                        <x-input-label for="update_password_current_password" :value="__('Nº')" />
                        <x-text-input id="update_password_current_password"
                            value="{{ $address !== null ? $address->numero : '' }}" name="numero" type="text"
                            class="mt-1 block w-full" autocomplete="numero" />
                        <x-input-error :messages="$errors->updateAddress->get('numero')" class="mt-2" />
                    </div>

                </div>

                <div class="col-span-2">
                    <x-input-label for="update_password_current_password" :value="__('Complemento')" />
                    <x-text-input id="update_password_current_password"
                        value="{{ $address !== null ? $address->complemento : '' }}" name="complemento" type="text"
                        class="mt-1 block w-full" autocomplete="complemento" />
                    <x-input-error :messages="$errors->updateAddress->get('complemento')" class="mt-2" />
                </div>
            </div>


        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Salvar') }}</x-primary-button>

            @if (session('status') === 'address-success')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Endereço alterado com sucesso.') }}</p>
            @endif
        </div>
    </form>
</section>
