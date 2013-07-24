<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registration Form</title>
        <meta name="description" content="A Registration Form example page">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="icon" href="favicon.ico">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144-precomposed.png">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>

        <!-- Add a little help for old browsers -->
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <div class="container">
            <div class="hero-unit">
                <h1>Hello <?=$_POST['inputName']?></h1>
                <p>
                    <?php
                    if($_POST['inputDate']) {
                        ?>
                            You are <?=strtolower($_POST['inputGender'])?>, born on <?=date('d M Y', strtotime($_POST['inputDate']))?>.
                        <?php
                    }
                    else {
                        ?>
                            You are <?=strtolower($_POST['inputGender'])?>, and did not provide a date of birth.
                        <?php
                    }
                    ?>
                </p>
                <p>
                    <?php
                    if($_POST['inputEmail']) {
                        ?>
                            Your email address is <?=$_POST['inputEmail']?>.
                        <?php
                    }
                    else {
                        ?>
                            You failed to provide an email address.
                        <?php
                    }
                    ?>
                </p>
                <p>
                    You do <?=$_POST['inputHTML5'] == 'Yes' ? '' : 'not'?> use HTML5.
                </p>
                <p>
                    <?=$_POST['inputMarketing'] ? 'You have registered for marketing emails.': ''?>
                </p>
                <p>
                    <a href="/" class="btn btn-primary btn-large">Try again</a>
                </p>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>

        <!-- In Production - these should be concatenated together. -->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
