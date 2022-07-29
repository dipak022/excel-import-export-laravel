<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-5 bg-info text-white text-center">
  <h1>Import / Export Excel </h1>
</div>
  
<div class="container mt-5">
<form action="{{ route('import-user') }}" enctype="multipart/form-data" method="POST">
    @csrf
  <div class="mb-3 mt-3">
    <label for="file" class="form-label">Excel Import:</label>
    <input type="file" class="form-control" id="file" placeholder="Enter file" name="file">
  </div>
  
  
  <button type="submit" class="btn btn-success">Submit</button>
  <a href="{{ route('export-user') }}" class="btn btn-primary float-right">Export</a>
</form>
</div>

</body>
</html>