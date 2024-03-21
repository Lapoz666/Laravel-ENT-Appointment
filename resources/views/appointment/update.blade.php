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
        <img src="/images/logo.jpg"  height="50" class="d-inline-block align-top" alt="">E N T - Appoint
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

<div class="container text-center">
        <h1 class='text-bold mb-5'>Update your Appointment</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('exist'))
            <div class="alert alert-danger">
                {{ session('exist') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('appointment.update', $appointment->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <input type="text" id="Name" name="Name" placeholder="Enter Name" class="form-control" value="{{ $appointment->Name }}" required><br>
                </div>
                <div class="form-group">
                    <input type="text" id="Mobno" name="Mobno" placeholder="Enter Mobile Number" class="form-control" value="{{ $appointment->Mobno }}" required><br>
                </div>
                <div class="form-group">
                    <input type="date" id="Date" name="Date" class="form-control" value="{{ $appointment->Date }}" required>
                    <small class="form-text text-muted text-left">Select Appointment date</small>
                </div>
                <div class="form-group">
                    <select id="Slot" name="Slot" class="form-control" value="{{ $appointment->Slot }}" required>
                        <option value="" disabled selected>Select your Preffered Time Slot</option>
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
                <div class="form-group">
                    <button type="submit" class="btn btn-dark btn-block mt-4">Book Now</button>
                </div>

                
                
            </form>
        </div>
    </div>
    </div>

    
</body>
</html>