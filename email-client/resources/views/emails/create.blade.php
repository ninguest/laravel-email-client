@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Email</h1>
        <form class="controlform" method="POST" action="/emails">
            @csrf
            <div class="form-group">
                <label for="emailSubject">Email Subject:</label>
                <input type="text" class="form-control" id="emailSubject" name="subject" required>
            </div>

            <div class="form-group">
                <label for="emailTo">To:</label>
                <input type="email" class="form-control" id="emailTo" name="to" required>
            </div>

            <div class="form-group">
                <label for="emailCC">CC:</label>
                <input type="email" class="form-control" id="emailCC" name="cc">
            </div>

            <div class="form-group">
                <label for="emailBCC">BCC:</label>
                <input type="email" class="form-control" id="emailBCC" name="bcc">
            </div>

            <div class="form-group">
                <label for="emailMessage">Message:</label>
                <textarea class="form-control" id="emailMessage" name="message" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Send Email</button>
        </form>
    </div>
@endsection