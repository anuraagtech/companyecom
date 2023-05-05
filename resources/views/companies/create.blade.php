<form method="post" action="/companies/store">
    @csrf
    <input type="text" name="title">
    <input type="text" name="email">
    <input type="text" name="description">
    <button>Create</button>
</form>
