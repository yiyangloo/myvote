@if(Auth::user()-> role == 0)
    <?php $layout = 'layouts.admin'; ?>

@elseif(Auth::user()-> role == 1)
    <?php $layout = 'layouts.candidate'; ?>

@elseif(Auth::user()-> role == 2)
    <?php $layout = 'layouts.voter'; ?>

@endif
@extends($layout)

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
                        <table class="table table-bordered" id="user_table">
                            <thead>
                             <tr>
                                 <th width="15%">Candidate's Image</th>
                                 <th width="35%">Name</th>
                                 <th width="35%">Manisfesto</th>

                             </tr>


                                @foreach ($candidates as $candidate)
                                <tr>
                                <td><img class="card-img-top" src="{{url('image/'.$candidate->image)}}" alt="{{$candidate->image}}"></td>
                                    <td>{{$candidate->name}}</td>
                                    <td>{{$candidate->manifesto}}<</td>
                                </tr>
                                    @endforeach

                            </thead>
                        </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

