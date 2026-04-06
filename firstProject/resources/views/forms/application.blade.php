<h1>Application form</h1>
<form method="post" action="/submit">
    @csrf
    <input type="text" name="name" placeholder="Enter your name"><br><br>
    <input type="email" name="email" placeholder="Enter your email"><br><br>
    <input type="submit" value="Submit" >

</form>