@extends('layouts.main')


@section('activity')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Election List
                </div>

                <div class="card-body">
                    {{-- Content --}}
                    <button type="button" class="btn btn-primary">Add New Election</button>
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#new_election_modal">Create New Election</button>

                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="new_election_modal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New Election</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group row">
                                    <label for="election_title" class="col-sm-2 col-form-label">Election Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="election_title">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="election_candidate" class="col-sm-2 col-form-label">Candidates</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="election_candidate" name="">
                                            @foreach($candidates as $candidate)
                                                <option value="{{$candidate->id}}">{{ $candidate->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="election_candidate" class="col-sm-2 col-form-label">Candidates</label>
                                    <div class="col-sm-10">
                                        <select class="form-control selectpicker" multiple>
                                            @foreach($candidates as $candidate)
                                                <option value="{{$candidate->id}}">{{ $candidate->name }}</option>
                                            @endforeach
                                          </select>                                          
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection