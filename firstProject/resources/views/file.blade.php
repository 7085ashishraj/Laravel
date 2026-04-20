<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<h1>Upload</h1>
<form method="POST" action="uploadimage" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image">
    <div class="alert alert-danger" >
    @error('image')
        <div class="error">{{ $message }}</div>
    @enderror</div>
    <button type="submit">Upload</button>
</form>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif