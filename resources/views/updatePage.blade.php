<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-dark bg-dark justify-content-center">
        <h3 class="text-light my-3">CRUD (Create, Read, Update, Delete) using PHP</h3>
    </nav>

    <div class="container my-5">
        <h2 class="text-center">ID: {{ $id }}</h2>
        <form method="post" action="{{url('update')}}/{{$id}}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Full Name" name="name"
                    value="{{ $emp->name }}" required>
            </div>


            <div class="mb-3">
                <label for="name" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Email Address"
                    name="email" value="{{ $emp->email }}" required>
            </div>


            <div class="mb-3">
                <label for="name" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" placeholder="Enter Age" name="age"
                    value="{{ $emp->age }}" required>
            </div>


            <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Gender</label>
                <select class="form-select" id="validationCustom04" name="gender">
                    <option {{$emp->gender == "Female" ? "selected" : ""}}>Female</option>
                    <option {{$emp->gender == "Male" ? "selected" : ""}}>Male</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid state.
                </div>
            </div>
            <br>

            <div class="mb-3">
                <label for="name" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="dob" placeholder="Enter DOB" name="dob"
                    value="{{ $emp->dob }}" required>
            </div>

            <div class="form-group">
                <label>About User</label>
                <textarea class="form-control" id="about_user" name="about_user" rows="3" placeholder="Write a short description">{{ $emp->about_user }}</textarea>
            </div>
            <br>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-dark" name="update_btn">Update</button>
            </div>
        </form>
        <br>
        <a href="{{ url('/') }}">
            <div class="d-grid gap-2">
                <button class="btn btn-danger" name="update_btn">Cancel</button>
            </div>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
