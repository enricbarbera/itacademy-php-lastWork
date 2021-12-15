<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-5xl text-primary leading-tight text-center"> 
            {{ __('Stupendous People Soccer League') }}
        </h1>
    </x-slot>

    <div class="py-2">
        <div class="sm:max-w-xl w-full mx-auto">
            <div class="bg-white overflow-hidden shadow-sm rounded-lg ">
                <div class="border-b-8 border-gray-800 text-center py-2">
                    <h5 class="mb-0">You're logged in as</h5>
                    <b class="text-3xl text-primary">{{ Auth::user()->name }}</b>
                </div>
            </div>
        </div>
    </div>
    <div class="py-2 w-100">
        <div class="text-center mt-3">
            @can('teams.index')
            <a class="btn-primary p-3 rounded-3 mx-3" href="{{route('teams.index')}}">Show teams</a>
            @endcan
            @can('players.index')
            <a class="btn-primary p-3 rounded-3 mx-3" href="{{route('players.index')}}">Show players</a>
            @endcan
            @can('encounters.index')
            <a class="btn-primary p-3 rounded-3 mx-3" href="{{route('encounters.index')}}">Show matches</a>
            @endcan
        </div>
    </div>
</x-app-layout>
