<div class="$class">
    @if($label ?? null)
    <label class="ml-1 block text-sm font-medium leading-5 text-gray-700 mb-2" for="{{ $id }}">
        {{ $label }}
    </label>
    @endif
    @error($id)
    <p class="form-error" role="alert">{{ $message }}</p>
    @enderror
    <div class="mt-1 rounded-md">
        <textarea {{ $attributes }} rows="3" id="{{ $id }}" class="bg-cool-gray-100 border-3 border-cool-gray-100 focus:border-3 focus:border-brand-300 w-full px-3 py-3 rounded-md shadow-sm focus:outline-none text-gray-600 font-medium bg-white @error({{ $id }}) border-red-500 @enderror transition duration-150 ease-in-out sm:text-sm sm:leading-5" {{ ($required ?? false) ? 'required' : '' }}>{{ $slot }}</textarea>
    </div>
</div>
