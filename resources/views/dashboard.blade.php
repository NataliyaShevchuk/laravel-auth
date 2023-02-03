@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <div class="col-12 py-3">
                    <button type="submit" class="btn btn-primary"><a class="text-decoration-none text-white" href="{{ route('projects.create')}}">Create a new project</a></button>
                    <button type="submit" class="btn btn-success mx-3"><a class="text-decoration-none text-white" href="{{ route('projects.index')}}">Show all projects</a></button>
                </div>
                </div>
            </div>    
        </div>
    </div>
</div>
@endsection
