<x-app-layout>
    <x-slot name="header"> 
            {{ __('Stupendous People Soccer League') }}
    </x-slot>
    <h3 class="text-center">Registered players list</h3>
    @can('players.create')
    <a href="{{route('players.create')}}" class="text-center"><h5>Add new player</h5></a>
    @endcan
    <ul class="mt-3 mx-5 m-auto p-0">
        <div class="row border-bottom border-5 bg-primary text-white">
            <div class="col-1 text-center flex-fill"><p>ID</p></div>
            <div class="col-2 text-center flex-fill"><p>NAME</p></div>
            <div class="col-2 text-center flex-fill"><p>ADDRESS</p></div>
            <div class="col-2 text-center flex-fill"><p>EMAIL</p></div>
            <div class="col-1 text-center flex-fill"><p>LICENSE</p></div>
            <div class="col-1 text-center flex-fill"><p>TEAM</p></div>
            <div class="col-3 text-center flex-fill"><p></p></div>
        </div>
        @foreach ($players as $player)
            <div class="row row-cols-auto border-bottom">
                <div class="col-1 text-center flex-fill"><p>{{$player->id}}</p></div>
                <div class="col-2 text-center flex-fill"><p>{{$player->name}}</p></div>
                <div class="col-2 text-center flex-fill"><p>{{$player->address}}</p></div>
                <div class="col-2 text-center flex-fill"><p>{{$player->email}}</p></div>
                <div class="col-1 text-center flex-fill"><p>{{$player->license}}</p></div>
                <div class="col-1 text-center flex-fill"><p>{{$player->team->name}}</p></div>
                <div class="col-3 text-center flex-fill">
                    @can('players.show')
                    <a class="border border-primary px-2 no-underline hover:bg-black hover:text-white hover:border-white" href="{{route('players.show', $player)}}">SHOW</a>
                    @endcan
                    @can('players.edit')
                    <a class="text-warning border border-warning px-2 no-underline no-underline no-underline hover:bg-black hover:text-white" href="{{route('players.edit', $player)}}">EDIT</a>
                    @endcan
                    @can('players.destroy')
                    <a class="text-danger border border-danger px-2 no-underline no-underline no-underline hover:bg-black hover:text-white" href="{{route('players.delete', $player)}}">DELETE</a>
                    @endcan
                </div>
            </div>
        @endforeach
    </ul>
</x-app-layout>