<form method="post" action="/users/auth">
    @csrf
    <input type="email" name="email" value="{{old('email')}}">
    @error('email')
        {{$message}}
    @enderror
    <input type="password" name="password">
    @error('password')
        {{$message}}
    @enderror
    <button type="submit">Login</button>
</form>
