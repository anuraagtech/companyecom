<form method="post" action="/companies/update/{{$company->id}}">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{$company->title}}">
    <input type="text" name="email" value="{{$company->email}}">
    <input type="text" name="description" value="{{$company->description}}">
    <button>Update</button>
</form>
