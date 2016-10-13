<?php
	session_start();

	if(!$_SESSION['connecter']){
		  header('Location: login.php');
		  exit();
	}
?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">Projet GLP 2017</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">              
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> D&eacute;connexion</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="home.php"><i class="fa fa-dashboard fa-fw"></i> Accueil</a>
                        </li>
                        <li>
                            <a href="equipe.php"><i class="fa fa-sitemap fa-fw"></i> L'&eacute;quipe</span></a>
                        </li>
                        <li>
                            <a href="suivi-projet.php"><i class="fa fa-table fa-fw"></i> Suivi du projet<span class="fa arrow"></a>
                             <ul class="nav nav-second-level">
                                <li>
                                    <a href="backlog.php">Backlog</a>
                                </li>
                                 <li>
                                    <a href="#">Sprints par membres <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="sprintsAlexandre.php">Alexandre</a>
                                        </li>
                                        <li>
                                            <a href="sprintsClement.php">Cl&eacute;ment</a>
                                        </li>
                                        <li>
                                            <a href="sprintsSofiane.php">Sofiane</a>
                                        </li>
                                        <li>
                                            <a href="sprintsCedric.php">C&eacute;dric</a>
                                        </li>
                                        <li>
                                            <a href="sprintsWilly.php">Willy</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="production.php"><i class="fa fa-product-hunt"></i> Production du Projet</a>
                        </li>
                        <li>
                            <a href="qualite.php"><i class="fa fa-heartbeat"></i> Assurance Qualité</span></a>
                           
                        </li>
                        <li>
                            <a href="outils.php"><i class="fa fa-wrench fa-fw"></i> Les outils<span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="ides.php">IDEs</a>
                                </li>
                                <li>
                                    <a href="langages.php">Langages</a>
                                </li>
                                <li>
                                    <a href="bibliotheques.php">Biblioth&egrave;ques</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="glossaire.php"><i class="fa fa-file-word-o"></i> Glossaire</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
