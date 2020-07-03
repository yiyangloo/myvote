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
                    Candidates's Manifesto
                </div>

                <div class="card-body">
                <form method="POST" action="{{ route('manifesto.update', Auth::user()) }}" enctype="multipart/form-data">
                @method('PATCH')


                {{-- Content --}}
                    <div class="col-sm-5">

                            <label for="photo">{{ __('Photo') }}</label> </br>

                            <img class="card-img-top" src="{{url('image/'.Auth::user()->image)}}" alt="{{Auth::user()->image}}">

                            <input type="file" class="form-control" name="photo"/> </br>

                        </div>
                        <div class="col-sm-12">

                            <label for="manifesto">{{ __('Manifesto') }}</label>

                             <input type="text" id="manifesto" name="manifesto" class="form-control" value="{{Auth::user()->manifesto}}" required> </br>


                                <button type="submit" class="btn btn-primary">{{ __('Submit') }} </button>
                    </div>
                     @csrf

                 </form>
                 </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
