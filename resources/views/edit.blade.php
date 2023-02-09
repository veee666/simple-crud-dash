<!DOCTYPE html>
<html>
<head>
    <title>Library App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#myBtn").click(function(){
            $("#myModal").modal("show");
        });
    });
    </script>
    <script>
        // document.getElementsByName("genre")[0].value = "{{ $library->genre }}";
    </script>
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
	<div class="card-header">Edit Book</div>
	<div class="card-body">
		<form method="post" action="{{ route('library.update', $library->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
            <div class="row mb-3">
                <label for="name" class="form-label">Book Title</label>
                <input type="text" class="form-control id="name" name="author" value="{{ old('name', $library->name) }}">
            </div>
            <div class="row mb-3">
                <label for="author" class="form-label">Book Author</label>
                <input type="text" class="form-control" id="author" name="author" value="{{ old('author', $library->author) }}">
            </div>
            <div class="row mb-3">
                <label for="released" class="form-label">Release Date</label>
                <input type="date" class="form-control" id="released" name="released" value="{{ old('released', $library->released) }}">
            </div>
            <div class="row mb-3">
                <label for="genre" class="form-label">Genre</label> <br>
                <select id="genre" class="form-select" name="genre">
                    <option>{{ old('genre', $library->genre) }}</option>
                    <option>Action and adventure</option>
                    <option>Alternate history</option>
                    <option>Anthology</option>
                    <option>Art/architecture</option>
                    <option>Autobiography</option>
                    <option>Biography</option>
                    <option>Business/economics</option>
                    <option>Chick lit</option>
                    <option>Children's</option>
                    <option>Classic</option>
                    <option>Comic book</option>
                    <option>Coming-of-age</option>
                    <option>Cookbook</option>
                    <option>Crime</option>
                    <option>Diary</option>
                    <option>Dictionary</option>
                    <option>Drama</option>
                    <option>Encyclopedia</option>
                    <option>Fairytale</option>
                    <option>Fantasy</option>
                    <option>Guide</option>
                </select>
            </div>
            <div class="row mb-3">
                <label for="summary" class="form-label">Book Summary</label>
                <textarea class="form-control" id="summary" rows="7" name="summary" >{{ old('summary', $library->summary) }}</textarea>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                    <!-- Button HTML (to Trigger Modal) -->
                    <a href="{{ route('library.index') }}" class="btn btn-secondary me-md-2">Back</a>
                    <button type="button" id="myBtn" class="btn btn-primary">Submit</button>
                
                    <!-- Modal HTML -->
                    <div id="myModal" class="modal fade" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Confirmation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Do you want to save changes to this book?</p>
                                    <p class="text-secondary"><small>If you don't save, your changes will be lost.</small></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <div class="">
                                        <input type="hidden" name="hidden_id" value="{{ $library->id }}" />
                                        <input type="submit" class="btn btn-primary" value="Save" />
                                        <a href="{{ route('library.index') }}"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
	</div>
</div>

