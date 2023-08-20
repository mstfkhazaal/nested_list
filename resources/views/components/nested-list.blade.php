<x-dynamic-component
        :component="$getFieldWrapperView()"
        :field="$field"
        class="filament-navigation"
>

    <div wire:key="navigation-items-wrapper">
        <div
                class="space-y-2"
                x-data="{ state: $wire.$entangle('{{ $getStatePath() }}') }"
                data-sortable-container
        >
            @forelse($state as $uuid => $item)
                <x-filament-navigation::nav-item :statePath="$getStatePath() . '.' . $uuid" :item="$item"/>
            @empty
                <div @class([
                    'w-full bg-white rounded-lg border border-gray-300 px-3 py-2 text-left',
                    'dark:bg-gray-700 dark:border-gray-600',
                ])>
                    {{__('filament-navigation::filament-navigation.items.empty')}}
                </div>
            @endforelse
        </div>
    </div>

    <div class="flex justify-end">
        {{ $createNav() }}
        <x-filament-actions::modals/>
    </div>
</x-dynamic-component>
