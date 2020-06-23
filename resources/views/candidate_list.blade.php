@extends('layouts.main')

@section('activity')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Candidates List
                </div>

                <div class="card-body">
                     <div class="col-sm-5">
                    {{-- Content --}}
                    @foreach ($candidates as $candidate)
                        <p>{{$candidate->name}}</p>
                        <img class="card-img-top" src="{{url('image/'.$candidate->image)}}" alt="{{$candidate->image}}">
                        <p>{{$candidate->manifesto}}</p>

                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
