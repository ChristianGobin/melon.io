<?php
//server side validation
$error = '';
if ($_POST) {
    if (!$_POST["email"]) {
        $error .= 'Email not submitted by user. <br>';
        echo $error;
    }
    if (!$_POST["subject"]) {
        $error .= 'Subject not submitted by user. <br>';
        echo $error;
    }
    if (!$_POST["message"]) {
        $error .= 'Message not submitted by user. <br>';
        echo $error;
    }
    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL === false)) {
        $error .= "Invalid email format";
        echo $error . "<br>";
    }
    if ($error != '') {
        echo "<div class='alert alert-danger' role='alert'>" . $error . "</div>";
    } else {
        $emailTo = "chrisgobin94@gmail.com";
        $subject = $_POST["subject"];
        $from = $_POST["email"];
        $message = $_POST["message"];
        $successMsg = "<div class='alert alert-success' role='alert'> Sent! </div>";
    }
}
?>
<!DOCTYPE html>

<head>
    <title>Melon Contact Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <h5 class="display-4">Contact</h5>
        <div id="error"><? echo $error ?></div>
        <form id='contact-form' method="post">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" class="form-control" row="3" name="message"></textarea>
            </div>
            <button type="submit" id="submit" class="btn btn-primary">Submit</button>
        </form>
        <ul>
            <?php
            foreach ($_POST as $item) {
                echo "<li>" . $item . "</li>";
            }
            ?>
        </ul>
    </div>

    <!--JQuery, Bootstrap4 Js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script type='text/javascript'>
        //Check if fields are filled. Hookup on Submit event handler. 
        //Client side validation.

        $("#contact-form").submit((e) => {
            let errorMsg = "";
            e.preventDefault();
            if ($("#email").val() == "") {
                errorMsg += "<div class='alert alert-danger' role='alert'> Email cannot be blank. </div>";
                $("#error").html(errorMsg);
            }
            if ($("#subject").val() == "") {
                errorMsg += "<div class='alert alert-danger' role='alert'> Subject cannot be blank. </div>";
                $("#error").html(errorMsg);
            }
            if ($("#message").val() == "") {
                errorMsg += "<div class='alert alert-danger' role='alert'> Message cannot be blank. </div>";
                $("#error").html(errorMsg);
            } else {
                $("#contact-form").unbind('submit').submit();
            }
        })
    </script>

</body>