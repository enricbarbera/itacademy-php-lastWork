<x-app-layout>
    <x-slot name="header"> 
            {{ __('Stupendous People Soccer League') }}
    </x-slot>
    <h3 class="text-center">Match <b>{{$encounter->team_1->name}}</b> vs <b>{{$encounter->team_2->name}}</b> deleted</h3>
    <a class="text-center" href="{{route('encounters.index')}}"><p>Back to matches list</p></a>
</x-app-layout>