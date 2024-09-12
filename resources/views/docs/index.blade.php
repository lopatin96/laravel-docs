<x-guest-layout>
    <div class="overflow-hidden max-w-6xl mx-auto">
        <div class="flex items-center justify-between px-4 py-10">
            <div class="flex flex-wrap items-center">
                <div class="w-auto mr-6">
                    <a href="{{ route('home') }}" >
                        <x-application-logo class="hidden sm:block" />
                    </a>
                </div>
            </div>
            <div class="w-auto">
                <div class="flex flex-wrap items-center">
                    <div class="inline-block">
                        <a
                            class=" flex items-center space-x-2 py-3 px-5 w-full text-white font-semibold rounded-xl focus:ring focus:outline-none focus:ring-gray-500 bg-black hover:bg-gray-900 transition ease-in-out duration-200 select-none"
                            href="{{ route('dashboard') }}"
                        >
                            <span>{{ __('laravel-docs::docs.go-to-main') }}</span>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="py-16 overflow-hidden">
        <div class="container px-4 mx-auto max-w-6xl">
            <div class="flex flex-wrap">
                <div class="border-e border-gray-200">
                    <nav class="flex flex-col space-y-2" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                        <button type="button" class="hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 py-1 pe-4 inline-flex items-center gap-x-2 border-e-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none active" id="vertical-tab-with-border-item-1" aria-selected="true" data-hs-tab="#vertical-tab-with-border-1" aria-controls="vertical-tab-with-border-1" role="tab">
                            1. Plagiarism
                        </button>
                        <button type="button" class="hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 py-1 pe-4 inline-flex items-center gap-x-2 border-e-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="vertical-tab-with-border-item-2" aria-selected="false" data-hs-tab="#vertical-tab-with-border-2" aria-controls="vertical-tab-with-border-2" role="tab">
                            2. Report
                        </button>
                        <button type="button" class="hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 py-1 pe-4 inline-flex items-center gap-x-2 border-e-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="vertical-tab-with-border-item-3" aria-selected="false" data-hs-tab="#vertical-tab-with-border-3" aria-controls="vertical-tab-with-border-3" role="tab">
                            3. API
                        </button>
                    </nav>
                </div>

                <div class="ms-3">
                    <div id="vertical-tab-with-border-1" role="tabpanel" aria-labelledby="vertical-tab-with-border-item-1">
                        <div class="prose  lg:prose-xl mx-auto px-4 mb-4 break-normal leading-normal">
                            {!! Illuminate\Support\Str::markdown(File::get(base_path('views/vendor/laravel-docs/markdowns/policy.md'))) !!}
                        </div>
                    </div>
                    <div id="vertical-tab-with-border-2" class="hidden" role="tabpanel" aria-labelledby="vertical-tab-with-border-item-2">
                        <div class="prose  lg:prose-xl mx-auto px-4 mb-4 break-normal leading-normal">
                            {!! Illuminate\Support\Str::markdown(File::get('/Users/vladyslavlopatin/Packages/laravel-docs/resources/views/markdowns/terms.md')) !!}
                        </div>
                    </div>
                    <div id="vertical-tab-with-border-3" class="hidden" role="tabpanel" aria-labelledby="vertical-tab-with-border-item-3">
                        <div class="prose  lg:prose-xl mx-auto px-4 mb-4 break-normal leading-normal">
                            {!! Illuminate\Support\Str::markdown(File::get('/Users/vladyslavlopatin/Packages/laravel-docs/resources/views/markdowns/policy.md')) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@preline/tabs@2.4.1/index.min.js"></script>
</x-guest-layout>
