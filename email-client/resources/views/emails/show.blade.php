@extends('layouts.app')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 50%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            margin-top: 50px;
        }

        h1 {
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }
    </style>

    <div class="container">
        <h1>Email Details (ID: {{ $email->id }})</h1>
        <p><strong>Subject:</strong> {{ $email->subject }}</p>
        <p><strong>To:</strong> {{ $email->to }}</p>
        <p><strong>CC:</strong> {{ $email->cc }}</p>
        <p><strong>BCC:</strong> {{ $email->bcc }}</p>
        <p><strong>Message:</strong> {{ $email->message }}</p>
        <p><strong>Created at:</strong> {{ $email->created_at->format('d M Y, h:i A') }}</p>
        <p><strong>Updated at:</strong> {{ $email->updated_at->format('d M Y, h:i A') }}</p>
    </div>
@endsection