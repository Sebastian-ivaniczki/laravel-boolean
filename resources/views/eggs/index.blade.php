@extends('/layouts.main')

@section('content')
<div class="container py-5">
    <div class="text-center py-3">
        <a class="btn btn-success" href="{{route('eggs.create')}}">Add new egg</a>
    </div>
    <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
        @foreach($eggs as $egg)
        <div class="col">
            <div class="card text-center" style="width: 18rem;">
                <img src="{{$egg->main_thumb}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$egg->name}}</h5>
                    <p class="card-text">{{$egg->chocolate_type}}</p>
                    <a href="{{route('eggs.show', $egg->id)}}" class="btn btn-primary">More Info</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection