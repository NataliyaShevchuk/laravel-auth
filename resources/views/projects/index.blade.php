@extends('layouts.app')

@section('content')
<main class="container-fluid">
    <div class="container-fluid text-start">
        <button class="btn btn-warning m-3" class="text-decoration-none text-white">
            <a href="{{route('dashboard')}}">
                Back to Dashboard
            </a>
        </button>
    </div>
    <div class="row mx-5">
        @foreach($project as $single_project)
                <div class="col-3 my-3 ">
                    <div class="card">
                        <img src="http://localhost/storage/{{$single_project->new_cover_img }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$single_project->name}}</h5>
                            <p class="card-text">{{$single_project->description}}</p>
                            <a href="{{$single_project->github_link}}" class="btn btn-primary">Github Link</a>
                            <button class="btn btn-info"> <a href="{{route('projects.edit', $single_project->id)}}" class="text-decoration-none">Modify</a></button>
                            {{-- <button class="btn btn-danger"> <a href="{{route('projects.destroy')}}" class="text-decoration-none"><i class="fas fa-trash"></i></a></button> --}}
                            <form action="{{ route('projects.destroy', $single_project->id) }}" method="POST" id="form-delete">
                                @csrf()
                                @method('delete')

                                <button class="btn btn-danger my-3">
                                    <i class="fas fa-trash w-3">Delete</i>
                                </button>
                            </form>
                            

                            <script>
                                  // recuperiamo l'elemnto html del form
                                const form = document.getElementById("form-delete");
                                  // aggiungiamo un event listener sul submit
                                form.addEventListener("submit", function(e) {
                                      // blocchiamo il comportamento di default
                                    e.preventDefault();
                                      // chiediamo all'utente di confermare
                                    const conferma = confirm("Sei sicuro di voler cancellare questo prodotto? Proprio sicuro sicuro?");
                                      // Se conferma, inviamo il form
                                    if (conferma === true) {
                                        form.submit();
                                    }
                                })

                            </script>


                        </div>
                    </div>
                </div>
        @endforeach
    </div>
</main>
@endsection