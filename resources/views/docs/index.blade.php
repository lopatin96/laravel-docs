<x-guest-layout>
    <style>
        .tab-button {
            border-right-width: 3px;
            border-right-color: transparent;
            color: gray;
            padding: 3px 20px 3px 5px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: left;
        }

        .tab-button:hover {
            color: #262626;
        }

        .tab-button.active {
            border-right-color: #3b82f6;
            color: #2563eb;
        }

        .tab-panel {
            display: none;
        }

        .tab-panel.active {
            display: block;
        }
    </style>

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
                            <span>{{ __('laravel-docs::docs.buttons.back_to_website.title') }}</span>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="py-16 px-4 mx-auto max-w-6xl overflow-hidden">
        <p class="text-center font-mono text-sm select-none pb-12 text-gray-500">
            {{ __('laravel-docs::docs.disclaimers.documentation_only_in_english') }}
        </p>

        <div class="flex flex-wrap">
            <div class="border-r border-gray-200">
                <nav class="flex flex-col space-y-2" aria-label="Tabs" role="tablist">
                    @foreach(config("laravel-docs.sections") as $section)
                        <button
                                type="button"
                                class="tab-button py-1 pe-4"
                                data-hs-tab="#tab-{{ $loop->iteration }}"
                                aria-controls="tab-{{ $loop->iteration }}"
                                aria-selected="{{ $loop->first ? 'true' : 'false' }}"
                        >
                            {{ $loop->iteration }}. {{ __("laravel-docs::docs.sections.$section.title") }}
                        </button>
                    @endforeach
                </nav>
            </div>

            <div class="ms-3">
                @foreach(config("laravel-docs.sections") as $section)
                    <div
                            id="tab-{{ $loop->iteration }}"
                            class="tab-panel {{ $loop->first ? 'active' : '' }}"
                            role="tabpanel"
                    >
                        <div class="prose  lg:prose-xl mx-auto px-4 mb-4 break-normal leading-normal">
                            {!! Illuminate\Support\Str::markdown(File::get(resource_path("markdown/docs/$section.md"))) !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include(config('laravel-blog.footer_path'))


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabPanels = document.querySelectorAll('.tab-panel');

            // Set the first tab as active
            if (tabButtons.length > 0) {
                tabButtons[0].classList.add('active');
                tabPanels[0].classList.add('active');
            }

            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Remove the active class from all buttons and hide all panels
                    tabButtons.forEach(btn => btn.classList.remove('active'));
                    tabPanels.forEach(panel => panel.classList.remove('active'));

                    // Add an active class to the pressed button and show the corresponding panel
                    button.classList.add('active');
                    document.querySelector(button.getAttribute('data-hs-tab')).classList.add('active');
                });
            });
        });
    </script>
</x-guest-layout>
