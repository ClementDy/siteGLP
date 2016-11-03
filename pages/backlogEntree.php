<?php 

    include("header.php");

?>

 	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12" style="text-align:center">
                    <h1 class="page-header">Projet - GLP</h1>
               
                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            BackLog Entr&eacute;e
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Cas Utilisation</th>
                                            <th>Numéro de sprint</th>
                                            <th>Etat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="danger">
                                            <td> Préparation des serveurs (Intégration continue et site)</td>
                                            <td> Sprint n°1</td>
                                            <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
                                        </tr>
                                        <tr class="danger">
                                            <td> Réalisation du dossier d'expression des besoins</td>
                                            <td> Sprint n°1</td>
                                            <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
                                        </tr>
                                        <tr class="danger">
                                            <td> Hébergement du site</td>
                                            <td> Sprint n°0</td>
                                            <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                                        </tr>
                                        <tr class="danger">
                                            <td class="success"> Réalisation du site de suivi du projet</td>
                                            <td> Sprint n°0</td>
                                            <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                                                <!-- /.table-responsive -->
                        </div>
                    </div>
                        <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <tbody>
                                        <tr class="success">
                                            <td>Priorit&eacute; faible</td>
                                        </tr>
                                        <tr class="warning">
                                            <td>Priorit&eacute; moyenne</td>
                                        </tr>
                                        <tr class="danger">
                                            <td>Priorit&eacute; importante</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            </div>
                        </div>
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            </div>
        </div>
        <!-- /#page-wrapper -->

<?php
    include("footer.php");
?>