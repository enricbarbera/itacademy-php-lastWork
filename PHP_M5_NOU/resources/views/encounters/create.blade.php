<x-app-layout>
    <x-slot name="header"> 
            {{ __('Stupendous People Soccer League') }}
    </x-slot>
    <h3 class="text-center">Create new match</h3>
    <form class="text-center w-75 mx-auto mt-3" method="post" action="{{route('encounters.store')}}">
        @csrf
        <div class="row mb-2">
            <div class="col-3">
                <h5>First team</h5>
                <select class="text-center border-none" name="team_1" value="{{old('team_1')}}">
                    @foreach ($teams as $team)
                        <option value="{{$team->id}}">{{$team->name}}</option>
                    @endforeach
                </select>
                <!-- <input class="text-center" name="team_1" placeholder="insert first team ID" value="{{old('team_1')}}"> -->
            </div>
            <div class="col-3">
                <h5>Second team</h5>
                <select class="text-center border-none" name="team_2" value="{{old('team_2')}}">
                    @foreach ($teams as $team)
                        <option value="{{$team->id}}">{{$team->name}}</option>
                    @endforeach
                </select>
                <!-- <input class="text-center" name="team_2" placeholder="insert second team ID" value="{{old('team_2')}}"> -->
            </div>
            <div class="col-3">
                <h5>Date & Time</h5>
                <input class="text-center" name="when" placeholder="yyyy-mm-dd hh:mm:ss" value="{{old('when')}}">
            </div>
            <div class="col-3">
                <h5>Where</h5>
                <select class="text-center border-none" name="where" value="{{old('where')}}">
                    @foreach ($teams as $team)
                        <option>{{$team->stadium}}</option>
                    @endforeach
                </select>
                <!-- <input class="text-center" name="where" placeholder="insert match location" value="{{old('where')}}"> -->
            </div>
        </div>
        <div class="row text-danger" style="height:40px">
            <div class="col-3">
                @error('team_1')
                *{{$message}}
                @enderror
            </div>
            <div class="col-3">
                @error('team_2')
                *{{$message}}
                @enderror
            </div>
            <div class="col-3">
                @error('when')
                *{{$message}}
                @enderror
            </div>
            <div class="col-3">
                @error('where')
                *{{$message}}
                @enderror
            </div>
        </div>
        <button class="btn btn-primary">Add</button>
    </form>
</x-app-layout>