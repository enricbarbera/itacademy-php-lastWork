<x-app-layout>
    <x-slot name="header">
            {{ __('Stupendous People Soccer League') }}
    </x-slot>
    <h3 class="text-center">Enroled team list</h3>
    @can('teams.create')
    <a href="{{route('teams.create')}}" class="text-center"><h5>Add new team</h5></a>
    @endcan
    <ul class="mt-3 w-75 m-auto p-0">
        <div class="row border-bottom border-5 bg-primary text-white">
            <div class="col-1 text-center"><p>ID</p></div>
            <div class="col-2 text-center"><p>NAME</p></div>
            <div class="col-2 text-center"><p>CITY</p></div>
            <div class="col-2 text-center"><p>STADIUM</p></div>
            <div class="col-2 text-center"><p>COLOR</p></div>
        </div>
        @foreach ($teams as $team)
            <div class="row border-bottom">
                <div class="col-1 text-center"><p>{{$team->id}}</p></div>
                <div class="col-2 text-center"><p>{{$team->name}}</p></div>
                <div class="col-2 text-center"><p>{{$team->city}}</p></div>
                <div class="col-2 text-center"><p>{{$team->stadium}}</p></div>
                <div class="col-2 text-center"><p>{{$team->color}}</p></div>
                <div class="col-3 text-center">
                    @can('teams.show')
                    <a href="{{route('teams.show', $team)}}" class="border border-primary rounded-3 px-2 no-underline hover:bg-black hover:text-white hover:border-white">SHOW</a>
                    @endcan
                    @can('teams.edit')
                    <a href="{{route('teams.edit', $team)}}" class="text-warning border border-warning rounded-3 px-2 no-underline hover:bg-black hover:text-white">EDIT</a>
                    @endcan
                    @can('teams.destroy')
                    <a href="{{route('teams.delete', $team)}}" class="text-danger border border-danger rounded-3 px-2 no-underline hover:bg-black hover:text-white">DELETE</a>
                    @endcan
                </div>
            </div>
        @endforeach
    </ul>
</x-app-layout>