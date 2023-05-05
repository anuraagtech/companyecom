<form method="post" action="/users/store">
    @csrf
    <input type="text" name="name" value="{{old('name')}}">
    @error('name')
        {{$message}}
    @enderror
    <input type="email" name="email" value="{{old('email')}}">
    @error('email')
        {{$message}}
    @enderror
    <input type="password" name="password">
    @error('password')
        {{$message}}
    @enderror
    <input type="password" name="password_confirmation">
    @error('password_confirmation')
        {{$message}}
    @enderror
    <button type="submit">Create</button>
</form>
