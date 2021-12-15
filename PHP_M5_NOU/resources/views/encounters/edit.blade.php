<x-app-layout>
    <x-slot name="header"> 
            {{ __('Stupendous People Soccer League') }}
    </x-slot>
    <h4 class="text-center">EDIT VALUES FOR MATCH</h4>
    <h3 class="text-center"><b>{{$encounter->team_1->name}}</b> vs <b>{{$encounter->team_2->name}}</b></h3>
    <form class="text-center w-75 mx-auto mt-3" method="post" action="{{route('encounters.update', $encounter)}}">
        @csrf
        @method('put')
        <div class="row mb-2">
            <div class="col-3">
                <h5>First team</h5>
                <select class="text-center border-none" name="team_1_id" value="{{old('team_1_id', $encounter->team_1->name)}}">
                    @foreach ($teams as $team)
                        <option value="{{$team->id}}" {{$team->id==$encounter->team_1->id?'selected':''}}>{{$team->name}}</option>
                    @endforeach
                </select>
                <!-- <input class="text-center" name="team_1" value="{{old('team_1', $encounter->team_1_id)}}"> -->
            </div>
            <div class="col-3">
                <h5>Second team</h5>
                <select class="text-center border-none" name="team_2_id" value="{{old('team_2_id', $encounter->team_2->name)}}">
                    @foreach ($teams as $team)
                        <option value="{{$team->id}}" {{$team->id==$encounter->team_2->id?'selected':''}}>{{$team->name}}</option>
                    @endforeach
                </select>
                <!-- <input class="text-center" name="team_2" value="{{old('team_2', $encounter->team_2_id)}}"> -->
            </div>
            <div class="col-3">
                <h5>Date & Time</h5>
                <input class="text-center" name="when" value="{{old('when', $encounter->when)}}">
            </div>
            <div class="col-3">
                <h5>Where</h5>
                <select class="text-center border-none" name="where">
                    @foreach ($teams as $team)
                        <option value="{{$team->where}}" {{$team->stadium==$encounter->where?'selected':''}}>{{$encounter->where}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row text-danger" style="height:40px">
            <div class="col-3">
                @error('team_1_id')
                *{{$message}}
                @enderror
            </div>
            <div class="col-3">
                @error('team_2_id')
                *{{$message}}
                @enderror
            </div>
            <div class="col-3">
                @error('when')
                *{{$message}}
                @enderror
            </div>
        </div>
        <button class="btn btn-primary">Edit</button>
    </form>
</x-app-layout>