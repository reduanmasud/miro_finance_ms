<x-jet-form-section submit="createStuff">
    <x-slot name="title">
        {{ __('Stuff Deatils') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Create a new Stuff in your company') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Stuff Name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autofocus />
            <x-jet-input-error for="name" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Stuff Email') }}" />
            <x-jet-input id="email" type="text" class="mt-1 block w-full" wire:model.defer="state.email" autofocus />
            <x-jet-input-error for="email" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="role" value="{{ __('Stuff Role') }}" />
            <select id="role" type="select" class="mt-1 block w-full" wire:model.defer="state.role">
            <option value="1">Manager</option>
            <option value="2">Branch Manager</option>
            <option value="3">Stuff</option>
            </select>
            <x-jet-input-error for="role" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="mobile" value="{{ __('Stuff Mobile') }}" />
            <x-jet-input id="mobile" type="text" class="mt-1 block w-full" wire:model.defer="state.mobile" autofocus />
            <x-jet-input-error for="mobile" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password" value="{{ __('Stuff Password') }}" />
            <x-jet-input id="password" type="text" class="mt-1 block w-full" wire:model.defer="state.password" autofocus />
            <x-jet-input-error for="password" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="confirm_password" value="{{ __('Confirm Password') }}" />
            <x-jet-input id="confirm_password" type="text" class="mt-1 block w-full" wire:model.defer="state.confirm_password" autofocus />
            <x-jet-input-error for="confirm_password" class="mt-2" />
        </div>
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-button>
            {{ __('Add Stuff') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
