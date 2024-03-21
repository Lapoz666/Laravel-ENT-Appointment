<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENT-Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+zI3+hNXF6Q5KsZNoc+omb+O5tcW1yJEMtkk5W7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-C48yZV0DvlMofnD1L5S3BsxUq2ZLTxF8C7fItTx65KAn+JpZ8z2L+oRYmkDsqxk8" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="/images/logo.jpg"  height="50" class="d-inline-block align-top" alt="">E N T - Appoints
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link font-weight-bold " href="{{ url('appointment/create') }}">Book_Appointment</a>
        </li>
        <li class="nav-item">
            <a class="nav-link font-weight-bold " href="{{ url('appointment') }}">List_Bookings</a>
        </li>
        </ul>
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link font-weight-bold text-dark" href="#">
                <i class="fa-solid fa-right-from-bracket"></i>
            </a>
        </li>
        </ul>
    </div>
    </nav>


<div class="container mt-5">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">

        @if (session('exist'))
            <div class="alert alert-danger">
                {{ session('exist') }}
            </div>
        @endif

        @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
        @endif

            <div class="card">
                <div class="card-header">
                    <h3>Book appointment
                        <a href="{{ url('appointment') }}" class="btn btn-primary float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('appointment/create') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="Name">Name:</label>
                            <input type="text" class="form-control" id="Name" name="Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="Mobno">Mobile:</label>
                            <input type="text" class="form-control" id="Mobno" name="Mobno" required>
                        </div>
                        <div class="mb-3">
                            <label for="Date">Booking Date:</label>
                            <input type="date" class="form-control" id="Date" name="Date" required>
                        </div>
                        <div class="mb-3">
                            <label for="Slot">Booking Slot:</label>
                            <select id="Slot" class="form-control" name="Slot" required>
                                
                                <option value="10:00 am">10:00 am</option>
                                <option value="10:30 am">10:30 am</option>
                                <option value="11:00 am">11:00 am</option>
                                <option value="11:30 am">11:30 am</option>
                                <option value="12:00 pm">12:00 pm</option>
                                <option value="01:00 pm">01:00 pm</option>
                                <option value="01:30 pm">01:30 pm</option>
                                <option value="02:00 pm">02:00 pm</option>
                                <option value="02:30 pm">02:30 pm</option>
                                <option value="03:00 pm">03:00 pm</option>
                                <option value="03:30 pm">03:30 pm</option>
                                <option value="04:00 pm">04:00 pm</option>
                                <option value="04:30 pm">04:30 pm</option>
                                <option value="05:00 pm">05:00 pm</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>