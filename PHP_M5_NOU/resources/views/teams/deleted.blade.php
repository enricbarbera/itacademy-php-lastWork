<x-app-layout>
    <x-slot name="header">
            {{ __('Stupendous People Soccer League') }}
    </x-slot>
    <h3 class="text-center">Team <b>{{$team->name}}</b> deleted</h3>
    <a class="text-center" href="{{route('teams.index')}}"><p>Back to teams list</p></a>
</x-app-layout>