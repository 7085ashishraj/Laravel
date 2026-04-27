<form method="POST" action="/storecookie">
    @csrf
    <label for="username">Enter username:</label>
    <input type="text" id="username" name="username">
    <label for="password">Enter password:</label>
    <input type="password" id="password" name="password">
    <label for="code">Enter code:</label>
    <input type="text" id="code" name="code">
    <button type="submit">Submit</button>
</form>

@isset($username)
{{ $username }}
<br>
{{ $password }}
<br>
{{ $code }}
@endisset