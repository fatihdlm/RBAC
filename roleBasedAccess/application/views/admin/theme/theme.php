<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="This My Blog">
        <meta name="author" content="Fatih DİLMAÇ">
        <link rel="icon" href="../../favicon.ico">

        <title>DİLMAÇ Admin Panel |<?= date('Y') ?></title>

        <!-- Bootstrap core CSS -->
        <link href="<?=base_url()?>public/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?=base_url()?>public/admin/css/style.css" rel="stylesheet" type="text/css"/>
        <script src="http://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Adminstrap</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">Pages</a></li>
                        <li><a href="#about">Post</a></li>
                        <li><a href="#contact">Users</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Welcome,Fatih</a></li>
                        <li><a href="login.html">Logout</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <h1><span class="glyphicon glyphicon-cog" aria-hiden="true"></span> Dashboard <small>Manage Your Site</small></h1>
                    </div>
                    <div class="col-md-2">
                        <div class="dropdown create">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Create Content
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a type="button" data-toggle="modal" data-target="#addUser">Add User</a></li>
                                <li><a type="button" data-toggle="modal" data-target="#addPost">Add Post</a></li>
                                <li><a type="button" data-toggle="modal" data-target="#addPage">Add Page</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section id="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="active">Dashboard</li>
                </ol>

            </div>
        </section>
        <section id="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="list-group">
                            <a href="#" class="list-group-item active main-color-bg">
                                <span class="glyphicon glyphicon-cog" aria-hiden="true"></span>  Dashboard
                            </a>
                            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hiden="true"></span> Pages<span class="badge">12</span></a>
                            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hiden="true"></span> Posts<span class="badge">16</span></a>
                            <a href="#" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hiden="true"></span> Users<span class="badge">15</span></a>
                        </div>
                        <div class="well">
                            <h4>Disk Usage</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    60%
                                </div>
                            </div>
                            <h4>CPU Usage</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                    40%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <!-- Website Overview-->
                        <div class="panel panel-default">
                            <div class="panel-heading main-color-bg">
                                <h3 class="panel-title">Website Overview</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-3">
                                    <div class="well dash-box">
                                        <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 203</h2>
                                        <h4> Users</h4>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="well dash-box">
                                        <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 12</h2>
                                        <h4> Pages</h4>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="well dash-box">
                                        <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 33</h2>
                                        <h4> Posts</h4>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="well dash-box">
                                        <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 12,333</h2>
                                        <h4> Visitor</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--latest User-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">The Latest User</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-hover">
                                    <tr>
                                        <th>Name</th>
                                        <th>Mail</th>
                                        <th>Mail</th>
                                    </tr>
                                    <tr>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Modals-->
        <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Add Page</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Page Title</label>
                                <input type="text" name="pageTitle" placeholder="Page Title" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label>Page Body</label>
                                <textarea name="pageBody" placeholder="Page Title" class="form-control"></textarea>
                                <script>
                                    CKEDITOR.replace('pageBody');
                                </script>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"/> Published
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Meta Tags</label>
                                <input type="text" class="form-control" placeholder="Add Some Tags"/>
                            </div>
                            <div class="form-group">
                                <label>Meta Descripton</label>
                                <input type="text" class="form-control" placeholder="Add Meta Descripton"/>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Modals-->
        
        <footer id="footer">
            <p>Copyright DİLMA&copy;<?=date('Y')?></p>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="<?=base_url()?>public/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </body>
</html>
