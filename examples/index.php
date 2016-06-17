<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../dist/css/dead.min.css">
        <link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="../src/js/jquery.min.js"></script>
        <script type="text/javascript" src="../dist/js/dead.min.js"></script>
        <script type="text/javascript" src="../src/js/trunk.js"></script>
    </head>
    <body class="dead">
        <nav class="navigation navigation-default">
            <div class="container">
                <div class="navigation-header">
                    <a class="brand" href="/example">
                        Dead-Css Framework
                    </a>
                </div>
                <div class="clear"></div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Registration Form</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form" action="index.php" method="post">
                                <div class="form-group">
                                    <label class="label" for="email">Email:</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="label" for="password">Password:</label>
                                    <input type="password" id="password" name="password" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-default" value="Abschicken">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="flash-panel flash-panel-default">
                        <h3>Error Box</h3>
                        <ul class="error-messages">
                            <li>Fehler 1</li>
                            <li>Fehler 2</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Testing</h3>
                        </div>
                        <div class="panel-body">
                            <img class="responsive" src="http://placekitten.com/800/400" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Testing</h3>
                        </div>
                        <div class="panel-body">
                            <img class="responsive" src="http://placekitten.com/800/400" />
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Testing</h3>
                        </div>
                        <div class="panel-body">
                            <img onclick="scroll(600);" class="responsive" src="http://placekitten.com/800/400" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>