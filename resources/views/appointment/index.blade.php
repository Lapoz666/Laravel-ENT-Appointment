<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENT-Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+zI3+hNXF6Q5KsZNoc+omb+O5tcW1yJEMtkk5W7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-C48yZV0DvlMofnD1L5S3BsxUq2ZLTxF8C7fItTx65KAn+JpZ8z2L+oRYmkDsqxk8" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/35560a7828.js" crossorigin="anonymous"></script>
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Book appointment
                        <a href="{{ url('appointment/create') }}" class="btn btn-primary float-end">Book</a>
                    </h3>
                </div>
                <div class="card-body mt-3">
                <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Booking Date</th>
                    <th>Booking Slot</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->id }}</td>
                        <td>{{ $appointment->Name }}</td>
                        <td>{{ $appointment->Mobno }}</td>
                        <td>{{ $appointment->Date }}</td>
                        <td>{{ $appointment->Slot }}</td>
                        <td class="d-flex">
                            <a href="{{ route('appointment.edit', $appointment->id) }}" class="btn btn-white text-dark">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                            <form action="{{ route('appointment.delete', $appointment->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn text-danger me-2">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>