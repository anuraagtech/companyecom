@extends('layout')
@section('content')
    @if ($company)
    <h2 class="font-bold">{{$company->title}}</h2>
    <h4 class="font-bold">{{$company['email']}}</h4>
    <p>{{$company['description']}}</p>
    <a href="/companies/edit/{{$company->id}}">Edit</a>
    <form method="post" action="/companies/destroy/{{$company->id}}">
        @csrf
        @method('DELETE')
        <button>Delete</button>
    </form>

    @else
    <p>No Company Found</p>
    @endif
@endsection
