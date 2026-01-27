<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        Message::create($validated);

        return redirect()->back()->with(
            'success',
            'Merci pour ta remarque ! Elle a bien été enregistrée.'
        );
    }
}
