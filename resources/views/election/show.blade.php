@extends('layouts.main')


@section('activity')
<div class="card">
    <h4 class="card-header text-center">
        {{$election->election_title}}
    </h4>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <h5 class="card-title">Start Date and Time</h5>
                <p class="card-text">{{$election->start_date}}</p>
            </div>
            <div class="col-sm-6">
                <h5 class="card-title">End Date and Time</h5>
                <p class="card-text">{{$election->end_date}}</p>
            </div>
        </div>
        <br>
        <div class="my-4">
            <h5 class="card-title">Description</h5>
            <p class="card-text">{{$election->election_description}}</p>

        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Candidate Name</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($election->candidates as $candidate)
                <tr>
                    <td>{{$candidate->name}}</td>
                    <td><a href="#" class="btn btn-primary">Vote</a></td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer text-muted">

    </div>
</div>
@endsection