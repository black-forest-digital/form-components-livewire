<div>
    @if($label ?? null)
    <label for="{{ $id }}" class="block font-semibold text-xs uppercase tracking-wide leading-5 text-gray-700">{{ $label }}</label>
    @endif
    <div class="mt-1 relative rounded-md">
        <input
            {{ $attributes }}
            type="{{ $type ?? 'text' }}"
            id="{{ $id }}"
            class="appearance-none form-input font-normal bg-white border-2 border-gray-200 outline-none focus:shadow-none focus:outline-none focus:border-2 focus:border-brand-700 w-full px-4 py-2 rounded-md  text-gray-900  transition duration-150 ease-in-out @error($id) border-red-500 @enderror"
            placeholder="{{ $placeholder ?? '' }}"
            value="{{ $value ?? old($id) }}"
            >
    </div>
    @error($id)
    <p class="text-red-500 text-xs italic mt-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap float-left mr-1"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
        {{ $message }}
    </p>
    @enderror
</div>
