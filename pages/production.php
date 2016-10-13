<?php 

    include("header.php");

?>
    
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12" style="text-align:center">
                    <h1 class="page-header">Livrables</h1>
               
                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Les sprints
                        </div>
                        <!-- .panel-heading -->
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                

                                <!-- Sprint 1 -->
                              <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#sprint1">1 - A venir</a>
                                        </h4>
                                    </div>
                                    <div id="sprint1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <h4> CV </h4>
                                            <p><a href="../CVAlexSept2016.pdf" download="CV_Alexandre">Télécharger le CV d'Alexandre</a></p>
                                            <p><a href="../CV_WillyPezant.pdf" download="CV_Alexandre">Télécharger le CV de Willy</a></p>
                        <!-- /.panel-body -->
                                        </div>
                                </div>
                                

                                <!-- Sprint 0 -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#sprint0">0 - Réalisation du site WEB</a>
                                        </h4>
                                    </div>
                                    <div id="sprint0" class="panel-collapse collapse">
                                        <div class="panel-body">
                           
                                        </div>
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
        </div>
    </div>

<?php
    include("footer.php");
?>