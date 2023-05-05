@extends('layout')
@section('content')

    @if (count($companies) !=0)
    @foreach ($companies as $company)
    <a class="font-bold underline" href="/company/{{$company['id']}}"><h2>{{$company['title']}}</h2></a>
    <p>{{$company['description']}}</p>

    @endforeach

    @else

    <p>No Companies Found</p>

    @endif
    <a href="/companies/create">Create New Company</a>
@endsection
