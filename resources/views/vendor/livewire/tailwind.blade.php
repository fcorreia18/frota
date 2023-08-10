@if ($paginator->hasPages())
<div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
        @php(isset($this->numberOfPaginatorsRendered[$paginator->getPageName()]) ? $this->numberOfPaginatorsRendered[$paginator->getPageName()]++ : ($this->numberOfPaginatorsRendered[$paginator->getPageName()] = 1))

        <nav role="navigation" aria-label="Pagination Navigation" class="w-full ">
            <div class="flex justify-between flex-1 sm:hidden">
                <span>
                    @if ($paginator->onFirstPage())
                        <span
                            class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md select-none">
                            {!! __('pagination.previous') !!}{{--Anterior --}}
                        </span>
                    @else
                        <button type="button" wire:click="previousPage('{{ $paginator->getPageName() }}')"
                            wire:loading.attr="disabled"
                            dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.before"
                            class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                            {!! __('pagination.previous') !!}
                        </button>
                    @endif
                </span>

                <span>
                    @if ($paginator->hasMorePages())
                        <button type="button" wire:click="nextPage('{{ $paginator->getPageName() }}')"
                            wire:loading.attr="disabled"
                            dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.before"
                            class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                            {!! __('pagination.next') !!}
                        </button>
                    @else
                        <span
                            class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md select-none">
                            {!! __('pagination.next') !!}
                        </span>
                    @endif
                </span>
            </div>
            
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between mt-4"
                style="justify-content:space-between; flex:1;">
                <div>
                    <ul class="pagination">

                        {{-- Previous Page Link --}}
                        @if ($paginator->onFirstPage())
                            <li class="page-item" aria-disabled="true">
                                <a class="page-link" aria-label="{{ __('pagination.previous') }}"> <svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" icon-name="chevrons-left"
                                        class="lucide lucide-chevrons-left w-4 h-4" data-lucide="chevrons-left">
                                        <polyline points="11 17 6 12 11 7"></polyline>
                                        <polyline points="18 17 13 12 18 7"></polyline>
                                    </svg> </a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" wire:click="previousPage('{{ $paginator->getPageName() }}')"
                                    dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after"
                                    rel="prev" aria-label="{{ __('pagination.previous') }}"> <svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" icon-name="chevrons-left"
                                        class="lucide lucide-chevrons-left w-4 h-4" data-lucide="chevrons-left">
                                        <polyline points="11 17 6 12 11 7"></polyline>
                                        <polyline points="18 17 13 12 18 7"></polyline>
                                    </svg> </a>
                            </li>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($elements as $element)
                            {{-- "Three Dots" Separator --}}
                            @if (is_string($element))
                                <span aria-disabled="true">
                                    <span
                                        class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5 select-none">{{ $element }}</span>
                                </span>
                            @endif

                            {{-- Array Of Links --}}
                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    @if ($page == $paginator->currentPage())
                                        <li aria-current="page" class="page-item active"
                                            wire:key="paginator-{{ $paginator->getPageName() }}-{{ $this->numberOfPaginatorsRendered[$paginator->getPageName()] }}-page{{ $page }}">
                                            <a class="page-link" href="#">{{ $page }}</a>
                                        @else
                                        <li class="page-item">
                                            <a class="page-link pointer"
                                                wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')"
                                                aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                                {{ $page }}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach

                        <span>
                            {{-- Next Page Link --}}
                            @if ($paginator->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link pointer"
                                        wire:click="nextPage('{{ $paginator->getPageName() }}')"
                                        dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after"
                                        rel="next" aria-label="{{ __('pagination.next') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" icon-name="chevrons-right"
                                            class="lucide lucide-chevrons-right w-4 h-4" data-lucide="chevrons-right">
                                            <polyline points="13 17 18 12 13 7"></polyline>
                                            <polyline points="6 17 11 12 6 7"></polyline>
                                        </svg>
                                    </a>
                                </li>
                            @else
                                <li class="page-item">

                                    <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                                        <a class="page-link pointer"
                                            wire:click="nextPage('{{ $paginator->getPageName() }}')"
                                            dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after"
                                            rel="next" aria-label="{{ __('pagination.next') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                icon-name="chevrons-right"
                                                class="lucide lucide-chevrons-right w-4 h-4"
                                                data-lucide="chevrons-right">
                                                <polyline points="13 17 18 12 13 7"></polyline>
                                                <polyline points="6 17 11 12 6 7"></polyline>
                                            </svg>
                                        </a>
                                    </span>
                                </li>
                            @endif
                        </span>
                    </ul>

                </div>

                <div class="mt-4 hidden md:block mx-auto text-slate-500">
                    <p class="">
                        <span>{!! __('Mostrando') !!}</span>
                        <span class="font-medium">{{ count($paginator->Items()) }}</span>
                        <span>{!! __('até') !!}</span>
                        <span class="font-medium">{{ count($paginator->Items()) }}</span>
                        <span>{!! __('de') !!}</span>
                        <span class="font-medium">{{ $paginator->total() }}</span>
                        <span>{!! __('resultados') !!}</span>
                    </p>
                </div>
                
                <div>
                    <select class="w-20 form-select box mt-3 sm:mt-0">
                        <option>10</option>
                        <option>25</option>
                        <option>35</option>
                        <option>50</option>
                    </select>
                </div>
                
            </div>
        </nav>
    @endif
</div>





<!-- BEGIN: Pagination -->
{{-- <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                icon-name="chevrons-left" class="lucide lucide-chevrons-left w-4 h-4"
                                data-lucide="chevrons-left">
                                <polyline points="11 17 6 12 11 7"></polyline>
                                <polyline points="18 17 13 12 18 7"></polyline>
                            </svg> </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                icon-name="chevron-left" class="lucide lucide-chevron-left w-4 h-4"
                                data-lucide="chevron-left">
                                <polyline points="15 18 9 12 15 6"></polyline>
                            </svg> </a>
                    </li>
                    <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                    <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                icon-name="chevron-right" class="lucide lucide-chevron-right w-4 h-4"
                                data-lucide="chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg> </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                icon-name="chevrons-right" class="lucide lucide-chevrons-right w-4 h-4"
                                data-lucide="chevrons-right">
                                <polyline points="13 17 18 12 13 7"></polyline>
                                <polyline points="6 17 11 12 6 7"></polyline>
                            </svg> </a>
                    </li>
                </ul>
            </nav>

            <select class="w-20 form-select box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div> --}}
<!-- END: Pagination -->
