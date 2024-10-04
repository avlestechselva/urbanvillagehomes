<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PropertyValuationController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the request data
        $request->validate([
            'valuation_type' => 'required',
            'property_address' => 'required',
            'property_postcode' => 'required',
            'full_name' => 'required',
            'email_address' => 'required|email',
            'contact_number' => 'required',
            'property_details' => 'required',
        ]);

        // Send the email
        Mail::send('emails.property_valuation', ['data' => $request->all()], function ($message) use ($request) {
            $message->to('recipient@example.com')
                    ->subject('New Property Valuation Request');
        });

        return redirect()->back()->with('success', 'Your property valuation request has been submitted successfully!');
    }
}
