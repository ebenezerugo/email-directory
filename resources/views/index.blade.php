@extends('base')

@section('main')
<div class="row">
<!-- Notification message -->
    <div class="col-sm-12">
        @if(session()->get('success'))
            <div class="alert alert-success">
            {{ session()->get('success') }}  
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
    </div>
</div>

<div class="row">
    @include('create')

    <!-- Table -->
    <div class="col-md-8">
        <!-- <h1 class="display-3">Contacts</h1>     -->
    <table class="table table-striped table-responsive-md">
        <thead>
            <tr>
            <td>ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td colspan = 2>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{$contact->id}}</td>
                <td>{{$contact->first_name}} </td>
                <td>{{$contact->last_name}}</td>
                <td>{{$contact->email}}</td>
            
                <td>
                    <form action="{{ route('destroy', $contact->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
</div>

@endsection