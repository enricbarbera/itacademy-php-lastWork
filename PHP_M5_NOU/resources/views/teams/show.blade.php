<x-app-layout>
    <x-slot name="header">
            {{ __('Stupendous People Soccer League') }}
    </x-slot>
    <h3 class="text-center">Current team values for team</h3>
    <h2 class="text-center"><b>{{$team->name}}</b></h2>
    <div class="text-center">
        <p>Name: {{$team->name}}</p>
        <p>City: {{$team->city}}</p>
        <p>Stadium: {{$team->stadium}}</p>
        <p>Color: {{$team->color}}</p>
        <a href="{{route('teams.index')}}">Back to teams list</a>
    </div>
</x-app-layout>