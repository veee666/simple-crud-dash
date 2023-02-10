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
<br>
<div class="card">
<div class="card-header">
    <div class="row">
        <div class="col col-md-6"><b>My Books (Mine now!)</b></div>
        <div class="col col-md-6">
            <a href="{{ route('library.create') }}" class="btn btn-success btn-sm float-end">Add</a>
        </div>
    </div>
</div>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="card-body">
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Title</td>
            <td>Author</td>
            <td>Genre</td>
            <td>Release Date</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach ($library as $lib)
        <tr>
            <td>{{ $lib->name }}</td>
            <td>{{ $lib->author }}</td>
            <td>{{ $lib->genre }}</td>
            <td>{{ $lib->released }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>
                <form method="post" action="{{ route('library.destroy', $lib->id) }}">
                    @csrf
                    @method('DELETE')
                <!-- delete the lib (uses the destroy method DESTROY /libs/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the lib (uses the show method found at GET /libs/{id} -->
                <a href="{{ route('library.show', $lib->id) }}" class="btn btn-small btn-info">View</a>

                <!-- edit this lib (uses the edit method found at GET /libs/{id}/edit -->
                <a class="btn btn-small btn-warning" href="{{ route('library.edit', $lib->id) }}">Edit</a>

                <input type="submit" class="btn btn-small btn-danger" value="Delete"/>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
</div>


</div>
</body>
</html>