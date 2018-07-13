<h1>Contact Form</h1>
<div class="container">
    <form action="{{ route('store.thienpham.contact') }}" method="post">
        <input type="text" name="fullname" placeholder="Your fullname..">
        <br>
        <input type="email" name="email" placeholder="Your email..">
        <br>
        <input type="text" name="address" placeholder="Your address..">
        <br>
        <input type="text" name="phone" placeholder="Your phone..">
        <br>
        <input type="text" name="subject" placeholder="Your subject..">
        <br>
        <textarea placeholder="Message" name="msg"></textarea>
        <br>
        <input type="submit" value="Submit">
    </form>
</div>