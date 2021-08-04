<?php

require_once('header.php');

?>

<div class="container">

    <h2>Contact</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias quasi molestiae blanditiis ducimus provident! Mollitia ad necessitatibus ipsum asperiores quo?</p>
</div>
<div class="container">
    <div class="form">
        <form action="form.php" method = "POST">
            <fieldset>
                <legend>Form</legend>
                <div><input type="text" name="name" placeholder="name" /></div>
                <div><input required type="email" name="email" placeholder="Email" /></div>
                <div><input required type="phone" name="phone" placeholder="+375-25-111-11-11" /></div>
                <div><textarea name="message" minlenght=5 maxlenght=8 cols="30" rows="10" placeholder="Enter your message"></textarea></div>
                <div class="button"><button>Send</button></div>
            </fieldset>
        </form>
    </div>
</div>
<?php

require_once('footer.php');

?>
