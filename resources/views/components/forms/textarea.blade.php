<div class="$class">
    @if($label ?? null)
    <label class="ml-1 mb-2 block font-semibold text-xs uppercase tracking-wide leading-5 text-gray-700" for="{{ $id }}">
        {{ $label }}
    </label>
    @endif
    @error($id)
        <p class="form-error" role="alert">{{ $message }}</p>
    @enderror
    <div class="mt-1 rounded-md">
        <textarea {{ $attributes }} rows="3" id="{{ $id }}" class="form-textarea sm:text-base border-2 border-gray-200 font-normal bg-white focus:shadow-none focus:border-2 focus:border-brand-700 w-full px-3 py-3 rounded-md focus:outline-none text-gray-900  transition duration-150 ease-in-out @error($id) border-red-500 @enderror sm:text-sm sm:leading-5" {{ ($required ?? false) ? 'required' : '' }}>{{ $slot }}</textarea>
    </div>
</div>
