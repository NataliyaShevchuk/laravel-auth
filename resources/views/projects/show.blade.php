@extends('layouts.app')

@section('content')
<main class="container">
    <div class="row">
        <div class="col-12">
            @foreach ($project as $single_project )
                
            <div class="card" style="width: 18rem;">
                <img src="{{ $project->cover_img }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$project->name}}</h5>
                    <p class="card-text">{{$project->description}}</p>
                    <a href="#" class="btn btn-primary">{{$project->github_link}}</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>
@endsection