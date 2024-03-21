<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Appointment;

class BookController extends Controller
{
    public function index(){
        $appointments = Appointment::get();
        return view('appointment.index', compact('appointments'));
    }

    public function create(){
        return view('appointment.create');
    }

    public function store(Request $request){
        $request->validate([
            'Name' => 'required|string',
            'Mobno' => 'required|numeric|min:1000000000|max:9999999999',
            'Date' => 'required|date',
            'Slot' => 'required|string',
        ]);

        $existingBooking = Appointment::where('Date', $request->Date)
        ->where('Slot', $request->Slot)
        ->exists();

        if ($existingBooking) {
        return redirect()->back()->with('exist', 'Sorry! The slot is not available.');
        }


        Appointment::create($request->all());

        return redirect()->back()->with('status', 'Booking created successfully.');

    }
    
    public function delete($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();

        return redirect()->back()->with('success', 'Booking deleted successfully.');
    }

    public function edit($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('appointment.update', compact('appointment'));
    }

    public function update($id, Request $request)
    {
        // Validate the form data
        $request->validate([
            'Name' => 'required|string',
            'Mobno' => 'required|numeric|min:1000000000|max:9999999999',
            'Date' => 'required|date',
            'Slot' => 'required|string',
        ]);

        // Find the booking by ID
        $appointment = Appointment::findOrFail($id);

        // Check if a booking already exists for the given bookingDate and bookingSlot
        $existingBooking = Appointment::where('Date', $request->Date)
                                    ->where('Slot', $request->Slot)
                                    ->exists();

        if ($existingBooking) {
            return redirect()->back()->with('exist', 'Sorry! The slot is not available.');
        }

        // Update the booking
        $appointment->update($request->all());

        return redirect()->route('appointment')->with('success', 'Booking updated successfully.');
    }



}
