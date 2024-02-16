<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Category</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <header>
    <h1>Add Category</h1>
  </header>
  @if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <main>
    <form action="{{url('add-category')}}" method="post">
      @csrf
      <label for="categoryName">Category Name:</label>
      <input type="text" id="categoryName" placeholder="Enter category name" name="title"><br><br>
      <button type="submit">Submit</button>
    </form>
    <a href="{{ url('all-category') }}"><button>Cancel</button></a>
  </main>

  <script src="script.js"></script>
</body>

</html>