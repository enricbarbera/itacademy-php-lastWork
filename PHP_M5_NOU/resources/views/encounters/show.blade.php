<x-app-layout>
    <x-slot name="header"> 
            {{ __('Stupendous People Soccer League') }}
    </x-slot>
    <h4 class="text-center">MATCH {{$encounter->id}} OPPONENTS</h4>
    <h3 class="text-center mb-3 border-bottom"><b>{{$team1->name}} vs {{$team2->name}}</b></h3>
    <h4 class="text-center">MATCH {{$encounter->id}} DATE AND TIME</h4>
    <h3 class="text-center mb-3 border-bottom"><b>{{$encounter->when}}</b></h3>
    <h4 class="text-center">MATCH {{$encounter->id}} LOCATION</h4>
    <h3 class="text-center mb-3 border-bottom"><b>{{$encounter->where}}</b></h3>
    <a class="text-center" href="{{route('encounters.index')}}"><p>Back to matches list</p></a>
</x-app-layout>