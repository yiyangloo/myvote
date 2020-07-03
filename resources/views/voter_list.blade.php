@if(Auth::user()-> role == 0)
    <?php $layout = 'layouts.admin'; ?>

@elseif(Auth::user()-> role == 1)
    <?php $layout = 'layouts.main'; ?>

@elseif(Auth::user()-> role == 2)
    <?php $layout = 'layouts.main'; ?>

@endif
@extends($layout)

@section('activity')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Voter List
                </div>

                <div class="card-body">
                    <div class="col-sm-5">
                        {{-- Content --}}
                        @foreach ($voters as $voter)
                        <p>{{$voter->name}}</p>
                        <img class="card-img-top" src="{{url('image/'.$voter->image)}}" alt="{{$voter->image}}">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
