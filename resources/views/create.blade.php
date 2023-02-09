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
</head>
<body>
<div class="container">

    <nav class="navbar bg-dark" data-bs-theme="dark">>
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('library.index') }}">Library</a>
        </div>
      </nav>
<br>
@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif
{{-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> --}}
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="h2">Add a Book</h2>
    </div>

    <form method="post" action="{{ route('library.store') }}" enctype="multipart/form-data">
        {{-- {{ csrf_field() }} --}}
        @csrf
        <div class="row mb-3">
            <label for="name" class="form-label">Book Title</label>
            <input type="text" class="form-control @error('booktitle') is-invalid @enderror" id="name" name="name" data-msg="Book title must be filled">
        </div>
        <div class="row mb-3">
            <label for="author" class="form-label">Book Author</label>
            <input type="text" class="form-control" id="author" name="author" data-msg="Nomor telephone member harus diisi">
        </div>
        <div class="row mb-3">
            <label for="released" class="form-label">Release Date</label>
            <input type="date" class="form-control" id="released" name="released" data-msg="Tanggal lahir member harus diisi">
        </div>
        <div class="row mb-3">
            <label for="bookgenre" class="form-label">Genre</label> <br>
            <select id="bookgenre" class="form-select" name="genre">
                <option selected>Action and adventure</option>
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
            <textarea class="form-control" id="summary" rows="7" name="summary"></textarea>
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
                            <p>Do you want to create a new book?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>

   

    {{-- <div class="modal fade" id="books" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add book?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Are you sure you want to add a book?
            </div>
            <div class="modal-footer">
              <button type="submit" id="input" value="SUBMIT" class="btn btn-primary">Yes</button>
              <a href="/create" class="btn btn-secondary" data-bs-dismiss="modal">No</a>
            </div>
          </div>
        </div>
      </div> --}}

<!-- if there are creation errors, they will show here -->
{{-- {{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'books')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('author', 'Author') }}
        {{ Form::email('author', Input::old('author'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('genre', 'Genre') }}
        {{ Form::select('genre', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), Input::old('genre'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('released', 'Release Date') }}
        {{ Form::select('released', Input::old('released'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Add Book!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }} --}}

</div>
</body>
</html>