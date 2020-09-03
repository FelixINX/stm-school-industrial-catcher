@extends('layouts.app')

@section('content')
    <div class="flex flex-col">
        <div class="w-full bg-primary-500 p-3 md:px-8 md:py-3 flex items-center justify-between">
            <h1 class="font-bold text-base md:text-2xl text-white">Extras Catcher</h1>
{{--            <a href="{{ route('download') }}" class="p-2 bg-primary-700 text-white rounded">Download</a>--}}
        </div>
        <div class="flex-grow w-full flex flex-col">
            <livewire:trips-view />
        </div>
    </div>
{{--    <div class="fixed z-10 inset-0 overflow-y-auto">--}}
{{--        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">--}}
{{--            <!----}}
{{--              Background overlay, show/hide based on modal state.--}}

{{--              Entering: "ease-out duration-300"--}}
{{--                From: "opacity-0"--}}
{{--                To: "opacity-100"--}}
{{--              Leaving: "ease-in duration-200"--}}
{{--                From: "opacity-100"--}}
{{--                To: "opacity-0"--}}
{{--            -->--}}
{{--            <div class="fixed inset-0 transition-opacity">--}}
{{--                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>--}}
{{--            </div>--}}

{{--            <!-- This element is to trick the browser into centering the modal contents. -->--}}
{{--            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;--}}
{{--            <!----}}
{{--              Modal panel, show/hide based on modal state.--}}

{{--              Entering: "ease-out duration-300"--}}
{{--                From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"--}}
{{--                To: "opacity-100 translate-y-0 sm:scale-100"--}}
{{--              Leaving: "ease-in duration-200"--}}
{{--                From: "opacity-100 translate-y-0 sm:scale-100"--}}
{{--                To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"--}}
{{--            -->--}}
{{--            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">--}}
{{--                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">--}}
{{--                    <div class="sm:flex sm:items-start">--}}
{{--                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">--}}
{{--                            <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />--}}
{{--                            </svg>--}}
{{--                        </div>--}}
{{--                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">--}}
{{--                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">--}}
{{--                                Download GTFS set--}}
{{--                            </h3>--}}
{{--                            <div class="mt-2">--}}
{{--                                <p class="text-sm leading-5 text-gray-500">--}}
{{--                                @foreach($downloadFiles as $file)--}}
{{--                                    <li>--}}
{{--                                        <a download="{{ basename($file) }}" href="{{ \Illuminate\Support\Facades\Storage::url($file) }}" title="{{ basename($file) }}">--}}
{{--                                            {{ basename($file) }}--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                @endforeach--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">--}}
{{--        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">--}}
{{--          <button type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red transition ease-in-out duration-150 sm:text-sm sm:leading-5">--}}
{{--            See others options--}}
{{--          </button>--}}
{{--        </span>--}}
{{--                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">--}}
{{--          <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">--}}
{{--            Close--}}
{{--          </button>--}}
{{--        </span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
