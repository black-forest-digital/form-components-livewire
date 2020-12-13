@props(['on'])

<div x-data="{ shown: false, timeout: null }"
    x-init="@this.on('{{ $on }}', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })"
    x-show.transition.opacity.out.duration.1500ms="shown"
    style="display: none;"
    {{ $attributes->merge(['class' => 'text-sm text-gray-600 uppercase leading-4 mr-4']) }}>
    <svg
        class="w-4 h-4 fill-none inline-block mr-1 align-middle text-green-500"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        stroke-width="3"
        stroke-linecap="round"
        stroke-linejoin="round"
    ><use xlink:href="/img/feather.svg#check-circle"/></svg>
    {{ $slot ?? 'Gespeichert' }}
</div>
