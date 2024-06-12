<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;

class EmailController extends Controller
{
    public function index()
    {
        $emails = Email::all();
        return view('emails.index', compact('emails'));
    }

    public function create()
    {
        return view('emails.create');
    }

    public function store(Request $request)
    {
        $email = new Email;
        $email->to = $request->to;
        $email->cc = $request->cc;
        $email->bcc = $request->bcc;
        $email->subject = $request->subject;
        $email->message = $request->message;
        $email->save();

        return redirect('/emails');
    }

    public function show($id)
    {
        $email = Email::find($id);
        return view('emails.show', compact('email'));
    }

    public function destroy($id)
    {
        $email = Email::find($id);
        $email->delete();

        return redirect('/emails');
    }
}
