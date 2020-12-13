@if (session()->has('success'))
    <div
    x-data="{ shown: false, timeout: null }"
    x-init="shown = true; timeout = setTimeout(() => { shown = false }, 5000);"
    x-show.transition.opacity.out.duration.1500ms="shown"
    class="max-w-6xl mx-auto sm:px-10 md:px-14 mt-6">
        <div class="rounded-md bg-green-50 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <!-- Heroicon name: check-circle -->
                    <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm leading-5 font-medium text-green-800">
                        {{ session('message') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endif
