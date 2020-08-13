<div>
    @if($label ?? null)
    <label for="{{ $id }}" class="block text-sm font-medium leading-5 text-gray-700">{{ $label }}</label>
    @endif
    <div class="mt-1 relative rounded-md shadow-sm">
        <input {{ $attributes }} type="{{ $type ?? 'text' }}" id="{{ $id }}" class="form-input bg-cool-gray-100 border-3 border-cool-gray-100 focus:border-3 focus:border-brand-300 w-full px-3 py-3 rounded-md shadow-sm focus:outline-none text-gray-600 font-medium bg-white transition duration-150 ease-in-out @error({{ $id }}) border-red-500 @enderror" placeholder="{{ $placeholder ?? '' }}" {{ ($required ?? false) ? 'required' : '' }}>
    </div>
    @error($id)
    <p class="form-error" role="alert">{{ $message }}</p>
    @enderror
</div>
