<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ComplaintEmail;

class ComplaintController extends Controller
{
    public function show_complaint_page() {
        return view('pengaduan');
    }

    public function send_complaint(Request $request) {
        $request->validate([
            'nama' => 'required|string',
            'gender' => 'required|string',
            'umur' => 'required|integer',
            'alamat' => 'required|string|max:255',
            'email' => 'required|email|string',
            'deskripsi' => 'required'
        ]);

        Mail::to('admin@complaint.com')->send(new ComplaintEmail($request));
        
        return redirect()->route('home.page');
    }
}
