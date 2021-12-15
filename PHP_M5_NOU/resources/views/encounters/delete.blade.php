<x-app-layout>
    <x-slot name="header"> 
            {{ __('Stupendous People Soccer League') }}
    </x-slot>
    <h3 class="text-center">Do you really want to delete match</h3>
    <h2 class="text-center"><b>{{$encounter->team_1->name}}</b> vs <b>{{$encounter->team_2->name}}</b>?</h2>
    <form class="text-center" action="{{route('encounters.destroy', $encounter)}}" method="post">
        @csrf
        @method('delete')
        <button class="btn btn-primary mt-5" type="submit">Confirm</button>
    </form>
    <a class="text-center" href="{{route('encounters.index')}}"><p>Cancel</p></a>
</x-app-layout>