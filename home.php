<!DOCTYPE html>

<head>
    <!--Semantic Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha256-9mbkOfVho3ZPXfM7W8sV2SndrGDuh7wuyLjtsWeTI1Q=" crossorigin="anonymous" />
    <?php
    define("TITLE", "Melon.com");
    $family = array(
        "Cam", "Zack", "Mom", "Dad", "Adri", "Lissa"
    );
    ?>
    <title> <?php echo TITLE ?> </title>
</head>

<body>
    <div class="ui attached stackable menu">
        <div class="ui container">
            <a class="item">
                <i class="home icon"></i> Home
            </a>
            <a class="item">
                <i class="grid layout icon"></i> Browse
            </a>
            <a class="item">
                <i class="mail icon"></i> Messages
            </a>
            <div class="ui simple dropdown item">
                More
                <i class="dropdown icon"></i>
                <div class="menu">
                    <a class="item"><i class="edit icon"></i> Edit Profile</a>
                    <a class="item"><i class="globe icon"></i> Choose Language</a>
                    <a class="item"><i class="settings icon"></i> Account Settings</a>
                </div>
            </div>
            <div class="right item">
                <div class="ui input"><input type="text" placeholder="Search..."></div>
            </div>
        </div>
    </div>
    <form class="ui form">
        <div class="field">
            <label>First Name</label>
            <input type="text" name="first-name" placeholder="First Name">
        </div>
        <div class="field">
            <label>Last Name</label>
            <input type="text" name="last-name" placeholder="Last Name">
        </div>
        <div class="field">
            <div class="ui checkbox">
                <input type="checkbox" tabindex="0" class="hidden">
                <label>I agree to the Terms and Conditions</label>
            </div>
        </div>
        <button class="ui button" type="submit">Submit</button>
    </form>
</body>

</html>