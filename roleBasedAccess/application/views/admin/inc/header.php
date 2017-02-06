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

