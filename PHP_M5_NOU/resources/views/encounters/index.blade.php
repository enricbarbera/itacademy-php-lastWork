<x-app-layout>
    <x-slot name="header"> 
            {{ __('Stupendous People Soccer League') }}
    </x-slot>
    <h3 class="text-center">Current competition program</h3>
    @can('encounters.create')
    <a class="text-center" href="{{route('encounters.create')}}"><h5>Add new match</h5></a>
    @endcan
    <ul class="mt-3 mx-5 m-auto p-0">
        <div  class="row border-bottom border-5 bg-primary text-white">
            <div class="col-1 text-center"><p>ID</p></div>
            <div class="col-2 text-center"><p>TEAM 1</p></div>
            <div class="col-2 text-center"><p>TEAM 2</p></div>
            <div class="col-2 text-center"><p>WHEN</p></div>
            <div class="col-2 text-center"><p>WHERE</p></div>
        </div>
        @foreach ($encounters as $encounter)
            <div class="row border-bottom">
                <div class="col-1 text-center"><p>{{$encounter->id}}</p></div>
                <div class="col-2 text-center"><p>{{$encounter->team_1->name}}</p></div>
                <div class="col-2 text-center"><p>{{$encounter->team_2->name}}</p></div>
                <div class="col-2 text-center"><p>{{$encounter->when}}</p></div>
                <div class="col-2 text-center"><p>{{$encounter->where}}</p></div>
                <div class="col-3 text-center">
                    @can('encounters.show')
                    <a href="{{route('encounters.show', $encounter)}}" class="border border-primary px-2 no-underline hover:bg-black hover:text-white hover:border-white">SHOW</a>
                    @endcan
                    @can('encounters.edit')
                    <a href="{{route('encounters.edit', $encounter)}}" class="text-warning border border-warning px-2 no-underline no-underline hover:bg-black hover:text-white">EDIT</a>
                    @endcan
                    @can('encounters.destroy')
                    <a href="{{route('encounters.delete', $encounter)}}" class="text-danger border border-danger px-2 no-underline no-underline hover:bg-black hover:text-white">DELETE</a>
                    @endcan
                </div>
            </div>
        @endforeach
    </ul>
</x-app-layout>