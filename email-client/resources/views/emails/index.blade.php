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

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        li:last-child {
            border-bottom: none;
        }
    </style>

    <div class="container">
        <h1>All Emails</h1>
        <ul>
            @foreach ($emails as $email)
            <li>
                <a href="/emails/{{ $email->id }}">{{ $email->subject }}</a><br>
                <small>Created at: {{ $email->created_at->format('d M Y, h:i A') }}</small>
            </li>
            @endforeach
        </ul>
        <footer style="margin-top: 40px;">
            <p>Note: Click on the email will redirect you to show details of the emails</p>
        </footer>
    </div>
@endsection