<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

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
            <h1>Fake Registration Form</h1>

            <hr>

            <div class="alert alert-error" id="error" style="display: none;">
                <strong>Warning!</strong> Make sure you've entered a name.
            </div>

            <form id="registration" class="form-horizontal well" action="<?=$_SERVER['PHP_SELF']?>" method="POST">

                <div class="control-group">
                    <p>
                        Fields with a <span style="color:red;">*</span> are required fields.
                    </p>
                </div>

                <div class="control-group">
                    <label class="control-label" for="inputName">Name <span style="color:red;">*</span></label>
                    <div class="controls">
                        <input type="text" id="inputName" placeholder="Name">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputDate">Date of Birth</label>
                    <div class="controls">
                        <input type="date" id="inputName" placeholder="Date of Birth">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>
                    <div class="controls">
                        <input type="email" id="inputEmail" placeholder="Email">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPassword">Password</label>
                    <div class="controls">
                        <input type="password" id="inputPassword" placeholder="Password">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">
                        Gender
                    </label>
                    <div class="controls">
                        <label for="inputGenderMale" class="radio inline">
                            <input type="radio" name="inputGender" id="inputGenderMale" value="Male" checked>
                            Male
                        </label>
                        <label for="inputGenderFemale" class="radio inline">
                            <input type="radio" name="inputGender" id="inputGenderFemale" value="Female">
                            Female
                        </label>
                    </div>
                </div>

                 <div class="control-group">
                    <label class="control-label">
                        I use HTML5?
                    </label>
                    <div class="controls">
                        <label for="inputHTML5Yes" class="radio inline">
                            <input type="radio" name="inputHTML5" id="inputHTML5Yes" value="Yes" checked>
                            Yes
                        </label>
                        <label for="inputHTML5No" class="radio inline">
                            <input type="radio" name="inputHTML5" id="inputHTML5No" value="No">
                            No
                        </label>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox" name="inputMarketing"> Add me to the mailing list
                        </label>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn">Register</button>
                </div>
            </form>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>

        <!-- In Production - these would be concatenated together. -->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
