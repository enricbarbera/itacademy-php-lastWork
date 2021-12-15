<x-app-layout>
    <x-slot name="header"> 
            {{ __('Stupendous People Soccer League') }}
    </x-slot>
    <h3 class="text-center">MATCH EDITED</h3>
    <h4 class="text-center">NEW VALUES</h4>
    <div class="mt-3 w-75 m-auto p-0">
        <div class="row border-bottom">
                <div class="col-3 text-center"><p>TEAM 1</p></div>
                <div class="col-3 text-center"><p>TEAM 2</p></div>
                <div class="col-3 text-center"><p>WHEN</p></div>
                <div class="col-3 text-center"><p>PLACE</p></div>
        </div>
        <div class="row border-bottom">
                <div class="col-3 text-center"><p>{{$encounter->team_1->name}}</p></div>
                <div class="col-3 text-center"><p>{{$encounter->team_2->name}}</p></div>
                <div class="col-3 text-center"><p>{{$encounter->when}}</p></div>
                <div class="col-3 text-center"><p>{{$encounter->where}}</p></div>
        </div>
    </div>
    <a class="text-center" href="{{route('encounters.index')}}"><p>Back to matches list</p></a>
</x-app-layout>