<title>VIEWPANEL.ME | 2022</title>
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <img class="h-64 w-full object-cover object-center" src="https://cdn.discordapp.com/attachments/923643835073060886/1109214672764289185/estoritve.jpg" alt="e-Storitve" />
        <x-jet-validation-errors class="mb-4" />

        <form class="font-mono" method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" value="{{ __('E-POŠTA') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('NOVO GESLO') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="**********" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('POTRDI GESLO') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="**********"/>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('SPREMENI GESLO') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
