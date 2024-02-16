<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Categories</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>All Categories</h1>
    </header>
    <main>
        <table id="categoryTable">
            <a href="{{url('add-category')}}"><button>Add-Category</button></a>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category Title</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="categoryList">
                <!-- Category items will be added here dynamically -->
                @foreach($categories as $category)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$category->title}}</td>
                    <td>
                        <a href="{{url('edit-category/'.$category->id)}}">Edit</a>
                        <a onclick="deleteItem(event, {{$category->id}})">Delete</a>
                        <form id="delete-form_{{$category->id}}" method="POST"
                            action="{{url('all-category/delete',$category->id)}}" class="hidden" style="display:none">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div class="form-group">
                                <input type="submit" class="btn btn-danger" value="Delete user">
                            </div>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <th>#</th>
                <th>Category Title</th>
                <th>Action</th>
            </tfoot>
        </table>
    </main>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function deleteItem(event, item_id) {
            let id = item_id;
            event.preventDefault();
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form_' + id).submit();

                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });
                }
            });
        }

    </script>

</body>

</html>