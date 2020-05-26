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
                    {{-- Content --}}
                    @foreach ($candidates as $candidate)
                        <p>{{$candidate->name}}</p>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection