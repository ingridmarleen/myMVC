<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Ingrid van den Boom">
        
        <title>My little MVC</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="//localhost/myMvc_v2/public/css/dashboard.css">
        
    </head>
    
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <a class="navbar-brand">My MVC</a>
                </div>
                <!-- top bar -->
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="//localhost/myMvc_v2/public/users">Users</a></li>
                        <li><a href="//localhost/myMvc_v2/public/users/1">Your profile</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Log out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
            <!-- sidebar -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3 col-md-2 sidebar">
                        <ul class="nav nav-sidebar">
                            <li><a href="#">Overview</a></li>
                            <li><a href="//localhost/myMvc_v2/public/articles">Articles</a></li>
                            <li><a href="//localhost/myMvc_v2/public/articles/create">Create article</a></li>
                        </ul>
                    </div>
                    <!-- content -->
                    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
              