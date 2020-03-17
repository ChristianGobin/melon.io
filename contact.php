<!DOCTYPE html>

<head>
    <title>Melon Contact Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

</head>

<body>
    <div class="container">
        <h5 class="display-4">Contact</h5>
        <div id="error"></div>
        <form id='contact-form'>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" class="form-control" row="3"></textarea>
            </div>
            <button type="submit" id="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!--JQuery, Bootstrap4 Js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script type='text/javascript'>
        $("#contact-form").submit((e) => {
            let errorMsg = "";
            e.preventDefault();
            if ($("#email").val() == "") {
                errorMsg += "Email cannot be blank.";
                $("#error").html(errorMsg);
            }
            if ($("#subject").val() == "") {
                errorMsg += "Subject cannot be blank.";
                $("#error").html(errorMsg);
            }
            if ($("#message").val() == "") {
                errorMsg += "Message cannot be blank.";
                $("#error").html(errorMsg);
            }
        })
    </script>

</body>