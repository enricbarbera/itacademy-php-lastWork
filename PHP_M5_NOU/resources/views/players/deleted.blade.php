<x-app-layout>
    <x-slot name="header"> 
            {{ __('Stupendous People Soccer League') }}
    </x-slot>
    <h3 class="text-center">Player <b>{{$player->name}}</b> deleted</h3>
    <a class="text-center" href="{{route('players.index')}}"><p>Back to players list</p></a>
</x-app-layout>