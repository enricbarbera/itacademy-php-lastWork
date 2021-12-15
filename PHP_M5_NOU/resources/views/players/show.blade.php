<x-app-layout>
    <x-slot name="header"> 
            {{ __('Stupendous People Soccer League') }}
    </x-slot>
    <h3 class="text-center">CURRENT VALUES FOR PLAYER</h3>
    <h2 class="text-center"><b>{{$player->name}}</b></h2>
    <div class="text-center">
        <p>Name: {{$player->name}}</p>
        <p>Address: {{$player->address}}</p>
        <p>Email: {{$player->email}}</p>
        <p>License: {{$player->license}}</p>
        <p>Team: {{$player->team->name}}</p>
        <a href="{{route('players.index')}}">Back to players list</a>
    </div>
</x-app-layout>