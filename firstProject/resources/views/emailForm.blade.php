<form method="POST" action="/send">
    @csrf
    <input type="text" name = "to" placeholder="to email">
    <input type="text" name = "subject" placeholder="subject">
    <input type="text" name = "message" placeholder="message">
    <button type="submit">Send</button>
</form>