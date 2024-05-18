<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CRUD Project</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <nav class="navbar navbar-dark bg-dark justify-content-center">
        <h3 class="text-light my-3">CRUD (Create, Read, Update, Delete) using Laravel</h3>
    </nav>


    <!-- Create Modal -->
    <div class="modal fade" id="add_new_user_modal" tabindex="-1" aria-labelledby="add_new_user_modalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="add_new_user_modalLabel">Add New User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <form action="{{ url('/') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Full Name"
                                name="name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Email Address"
                                name="email" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Age</label>
                            <input type="number" class="form-control" id="age" placeholder="Enter Age"
                                name="age" required>
                        </div>


                        <div class="col-md-3">
                            <label for="validationCustom04" class="form-label">Gender</label>
                            <select class="form-select" id="validationCustom04" name="gender" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <br>

                        <div class="mb-3">
                            <label class="form-label">DOB</label>
                            <input type="date" class="form-control" id="dob" placeholder="Date of Barth"
                                name="dob" required>
                        </div>

                        <div class="form-group">
                            <label>About User</label>
                            <textarea class="form-control" id="about_user" name="about_user" rows="3" placeholder="Write a short description"></textarea>
                        </div>
                        <br>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-dark" name="submit_btn">Submit</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <button type="button" class="btn btn-outline-dark mt-5 mb-2" data-bs-toggle="modal"
            data-bs-target="#add_new_user_modal">Add New User</button>
        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">About Users</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($emps as $emp)
                    <tr>
                        <td>{{ $emp->id }}</td>
                        <td>{{ $emp->name }}</td>
                        <td>{{ $emp->email }}</td>
                        <td>{{ $emp->age }}</td>
                        <td>{{ $emp->gender }}</td>
                        <td>{{ $emp->dob }}</td>
                        <td>{{ $emp->about_user }}</td>
                        <td>
                            {{-- This is update icon --}}
                            <a href="{{url('updatePage')}}/{{$emp->id}}" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            
                            {{-- This is delete icon --}}
                            <a href="{{url('delete')}}/{{$emp->id}}" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
