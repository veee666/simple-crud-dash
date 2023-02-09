<!DOCTYPE html>
<html>
<head>
    <title>Library App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <nav class="navbar bg-dark" data-bs-theme="dark">>
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('library.index') }}">Library</a>
        </div>
      </nav>

{{-- <h1>Showing {{ $library->name }}</h1> --}}

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Book Details</b></div>
            <div class="col col-md-6">
                <a href="{{ route('library.index') }}" class="btn btn-primary btn-sm float-end">Back</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Book Title</b></label>
            <div class="col-cm-10">
                {{ $library->name }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Book Author</b></label>
            <div class="col-cm-10">
                {{ $library->author }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Book Genre</b></label>
            <div class="col-cm-10">
                {{ $library->genre }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Release Date</b></label>
            <div class="col-cm-10">
                {{ $library->released }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Summary</b></label>
            <div class="col-cm-10">
                {{ $library->summary }}
            </div>
        </div>
    </div>
</div>

    {{-- <div class="jumbotron text-center">
        <h2>{{ $library->name }}</h2>
        <p>
            <strong>Author:</strong> {{ $library->author }}<br>
            <strong>Genre:</strong> {{ $library->genre }}<br>
            <strong>Release Date:</strong> {{ $library->released }}
        </p>
    </div> --}}

</div>
</body>
</html>