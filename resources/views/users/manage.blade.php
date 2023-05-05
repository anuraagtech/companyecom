@unless ($companies->isEmpty())
    <table class="table-auto">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>

            @foreach ($companies as $company)
            <tr>
                <td>{{$company->title}}</td>
                <td>{{$company->email}}</td>
                <td>{{$company->description}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@else

    <p>No Company Found</p>

@endunless


