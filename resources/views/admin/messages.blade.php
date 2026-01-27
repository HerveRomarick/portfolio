@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-center text-green">Remarques reçues</h1>
    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $msg)
                <tr>
                    <td>{{ $msg->id }}</td>
                    <td>{{ $msg->name }}</td>
                    <td>{{ $msg->email }}</td>
                    <td>{{ Str::limit($msg->message, 100) }}</td>
                    <td>{{ $msg->created_at->format('d/m/Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
