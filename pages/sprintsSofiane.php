<?php

    include("header.php");

?>

 	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12" style="text-align:center">
                    <h1 class="page-header">Sprints - Sofiane</h1>

                    <div class="row">
                <div class="col-lg-12">
                    <p style="text-align:right"> Temps Total : 91 heures</p>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Les sprints de Sofiane
                        </div>
                        <!-- .panel-heading -->
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">

                              <!--Sprint 9 -->
                              <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#sprint9">Sprint - 9</a>
                                        </h4>
                                    </div>
                                    <div id="sprint9" class="panel-collapse collapse">

                                        <p style="text-align:right"> Temps Sprint : 24 heures</p>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                Relev&eacute; d'activit&eacute;s
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Temps passé</th>
                                                                <th>T&acirc;che</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                          <tr>
                                                            <td>20/03/2017</td>
                                                            <td>3 heures</td>
                                                            <td>Résolution du beug d'affichage de l'onglet et du bouton, liaison bouton controlleur et redéfinition de la méthode GET</td>
                                                          </tr>

                                                          <tr>
                                                            <td>17/03/2017</td>
                                                            <td>3 heures</td>
                                                            <td>Début du développement de la fonction "passage à l'année suivante", création d'une nouvelle page pour l'administrateur, lien avec le controlleur et récupération de la liste d'étudiants</td>
                                                          </tr>

                                                          <tr>
                                                            <td>17/03/2017</td>
                                                            <td>3 heures</td>
                                                            <td>Correction de beugs concernant l'affichage du profile en tant qu'administrateur</td>
                                                          </tr>

                                                          <tr>
                                                            <td>16/03/2017</td>
                                                            <td>5 heures</td>
                                                            <td>Suite à la demande du client, j'ai revu la gestion du CV, possibilité de le visualiser et de le télécharger en tant qu'étudiant mais aussi en tant que reférent dans le profile de l'étudiant</td>
                                                          </tr>

                                                          <tr>
                                                            <td>14/03/2017</td>
                                                            <td>3 heures</td>
                                                            <td>Probleme résolu avec l'ajout du model attribute dans la methode post du bouton enregistrer mais maintenant il y a le probleme lorsque le CV est vide (affichage dela page d'erreur not found)</td>
                                                          </tr>
                                                          <tr>
                                                            <td>13/03/2017</td>
                                                            <td>3 heures</td>
                                                            <td>A la place de l'Iframe, j'ai essayé l'attribut Object de Html mais le résultat est le même, il y a un problème avec la variable ${pathCV} qui necessite un reload avant d'afficher le CV</td>
                                                          </tr>

                                                          <tr>
                                                            <td>10/03/2017</td>
                                                            <td>4 heures</td>
                                                            <td>Recherche et tentative de résolution sur le beug d'affichage du CV avec la Iframe, non résolu pour le moment</td>
                                                          </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /.table-responsive -->
                                            </div>
                                            <!-- /.panel-body -->
                                        </div>
                                    </div>
                                </div>

                              <!--Sprint 8 -->
                              <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#sprint8">Sprint - 8</a>
                                        </h4>
                                    </div>
                                    <div id="sprint8" class="panel-collapse collapse">

                                        <p style="text-align:right"> Temps Sprint : 11 heures</p>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                Relev&eacute; d'activit&eacute;s
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Temps passé</th>
                                                                <th>T&acirc;che</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                          <tr>
                                                            <td>06/03/2017</td>
                                                            <td>1 heure</td>
                                                            <td>Présentation du sprint 8</td>
                                                          </tr>
                                                          <tr>
                                                            <td>06/03/2017</td>
                                                            <td>1 heure</td>
                                                            <td>Remplissage du backlog de sprint global et sprints personels</td>
                                                          </tr>

                                                          <tr>
                                                            <td>03/03/2017</td>
                                                            <td>3 heures</td>
                                                            <td>L'étudiant peut désormais modifier son cv (remplace le précédent fichier sauvegardé sur le serveur par le nouveau CV chargé par l'étudiant)</td>
                                                          </tr>
                                                          <tr>
                                                            <td>01/03/2017</td>
                                                            <td>2 heures</td>
                                                            <td>L'étudiant peut récupérer son CV, le télécharger. La possibilité de le modifier est en cours</td>
                                                          </tr>
                                                          <tr>
                                                            <td>15/02/2017</td>
                                                            <td>2 heures</td>
                                                            <td>Début du développement pour que l'étudiant puisse télécharger son CV à tout moement</td>
                                                          </tr>
                                                          <tr>
                                                            <td>13/02/2017</td>
                                                            <td>2 heures </td>
                                                            <td>Planification des taches pour le nouveau sprint, estimation des taches. Mise à jour des backlogs (entrée et sprint) sur le site de communication</td>
                                                          </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /.table-responsive -->
                                            </div>
                                            <!-- /.panel-body -->
                                        </div>
                                    </div>
                                </div>

                              <!--Sprint 7 -->
                              <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#sprint7">Sprint - 7</a>
                                        </h4>
                                    </div>
                                    <div id="sprint7" class="panel-collapse collapse">

                                        <p style="text-align:right"> Temps Sprint : 9 heures</p>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                Relev&eacute; d'activit&eacute;s
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Temps passé</th>
                                                                <th>T&acirc;che</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <td>10/02/2017</td>
                                                            <td>3 heures </td>
                                                            <td>Début du développement de la modification du CV (mettre un autre CV à la place de l'ancien), problème rencontré (conflit entre l'ancien fichier et le nouveau)</td>
                                                          </tr>
                                                          <tr>
                                                            <td>08/02/2017</td>
                                                            <td>2 heures </td>
                                                            <td>Fin du développement de l'authentification en tant que référent</td>
                                                          </tr>

                                                          <tr>
                                                            <td>07/02/2017</td>
                                                            <td>2 heures </td>
                                                            <td>Début du développement de récupération des informations référents, rencontre d'un probléme lié au conflit entre étudiant et référent lors de l'authentification</td>
                                                          </tr>
                                                          <tr>
                                                            <td>07/02/2017</td>
                                                            <td>1 heure </td>
                                                            <td>Ajout de l'interface de connexion en tant que referent</td>
                                                          </tr>
                                                          <tr>
                                                            <td>03/02/2017</td>
                                                            <td>1 heure </td>
                                                            <td>Planification des taches pour le nouveau sprint, estimation des taches. Mise à jour des backlogs (entrée et sprint) sur le site de communication</td>
                                                          </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /.table-responsive -->
                                            </div>
                                            <!-- /.panel-body -->
                                        </div>
                                    </div>
                                </div>


                              <!--Sprint 6 -->
                              <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#sprint6">Sprint - 6</a>
                                        </h4>
                                    </div>
                                    <div id="sprint6" class="panel-collapse collapse">

                                        <p style="text-align:right"> Temps Sprint : 10 heures</p>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                Relev&eacute; d'activit&eacute;s
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Temps passé</th>
                                                                <th>T&acirc;che</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <td>27/01/2017</td>
                                                            <td>1 heure </td>
                                                            <td>Amelioration du code concernant la classe Student, StudentController</td>
                                                          </tr>
                                                          <tr>
                                                            <td>24/01/2017</td>
                                                            <td>2 heures </td>
                                                            <td>Authentification, recuperation des informations en fonction du NIP</td>
                                                          </tr>
                                                          <tr>
                                                            <td>20/01/2017</td>
                                                            <td>4 heures </td>
                                                            <td>Début du développement de la fonction d'authentification (HTML,CSS et Spring)</td>
                                                          </tr>
                                                          <tr>
                                                            <td>17/01/2017</td>
                                                            <td>3 heures </td>
                                                            <td>Remplissage du tableau trello et du site de communication par rapport au début du nouveau sprint(Backlog sprint et produit)</td>
                                                          </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /.table-responsive -->
                                            </div>
                                            <!-- /.panel-body -->
                                        </div>
                                    </div>
                                </div>

                              <!--Sprint 5 -->
                              <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#sprint5">Sprint - 5</a>
                                        </h4>
                                    </div>
                                    <div id="sprint5" class="panel-collapse collapse">

                                        <p style="text-align:right"> Temps Sprint : 11 heures</p>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                Relev&eacute; d'activit&eacute;s
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Temps passé</th>
                                                                <th>T&acirc;che</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <td>13/01/2017</td>
                                                            <td>4 heures </td>
                                                            <td>Finalisation du stockage du CV sur le serveur</td>
                                                          </tr>
                                                          <tr>
                                                            <td>10/01/2017</td>
                                                            <td>2 heures </td>
                                                            <td>Recherche sur l'erreur "connexion refusée", non résolue pour le moment</td>
                                                          </tr>
                                                          <tr>
                                                            <td>06/01/2017</td>
                                                            <td>3 heures</td>
                                                            <td>Gestion du stockage du cv sur le serveur</td>
                                                          </tr>
                                                          <tr>
                                                            <td>03/01/2017</td>
                                                            <td>2 heures</td>
                                                            <td>Modification site de communication et du tableau Trello</td>
                                                          </tr>
                                                          </tbody>
                                                      </table>
                                                  </div>
                                                  <!-- /.table-responsive -->
                                              </div>
                                              <!-- /.panel-body -->
                                          </div>
                                      </div>
                                  </div>


                              <!--Sprint 4 -->
                              <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#sprint4">Sprint - 4</a>
                                        </h4>
                                    </div>
                                    <div id="sprint4" class="panel-collapse collapse">

                                        <p style="text-align:right"> Temps Sprint : 7 heures</p>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                Relev&eacute; d'activit&eacute;s
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Temps passé</th>
                                                                <th>T&acirc;che</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                                <td>14/12/2016</td>
                                                                <td>2 heures</td>
                                                                <td>Rédaction du dossier d'architecture</td>
                                                            </tr>
                                                            <tr>
                                                                  <td>13/12/2016</td>
                                                                  <td>1 heure</td>
                                                                  <td>Reflexion et discusson autour de la gestion des CV: rennomage, stockage</td>
                                                              </tr>
                                                          <tr>
                                                                <td>09/12/2016</td>
                                                                <td>1 heure</td>
                                                                <td>Suite du développement d'ajout de CV, possibilité de rechercher un fichier et de le déposer sur la plateforme</td>
                                                            </tr>
                                                          <tr>
                                                                <td>06/12/2016</td>
                                                                <td>1 heure</td>
                                                                <td>Modification Trello, creation et développement du formulaire d'ajout de CV</td>
                                                            </tr>
                                                          <tr>
                                                                <td>02/12/2016</td>
                                                                <td>2 heures</td>
                                                                <td>Modification backlog de sprints et backlog d'entrées</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /.table-responsive -->
                                            </div>
                                            <!-- /.panel-body -->
                                        </div>
                                    </div>
                                </div>
                              <!--Sprint 3 -->
                              <div class="panel panel-default">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#sprint3">Sprint - 3</a>
                                      </h4>
                                  </div>
                                  <div id="sprint3" class="panel-collapse collapse">
                                      <p style="text-align:right"> Temps Sprint : 5 heures</p>
                                      <div class="panel panel-default">
                                          <div class="panel-heading">
                                              Relev&eacute; d'activit&eacute;s
                                          </div>
                                          <!-- /.panel-heading -->
                                          <div class="panel-body">
                                              <div class="table-responsive">
                                                  <table class="table table-striped table-bordered table-hover">
                                                      <thead>
                                                          <tr>
                                                              <th>Date</th>
                                                              <th>Temps passé</th>
                                                              <th>T&acirc;che</th>
                                                          </tr>
                                                      </thead>

                                                      <tbody>
                                                        <tr>
                                                            <td>29/11/2016</td>
                                                            <td>2 heures</td>
                                                            <td>Modification du diagramme UML, modification du diagramme de classes</td>
                                                        </tr>
                                                        <tr>
                                                            <td>25/11/2016</td>
                                                            <td>3 heures</td>
                                                            <td>Redaction de la backlog, diagramme UML, modification du dossier d'expression des besoins</td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                              <!-- Sprint 2 -->
                              <div class="panel panel-default">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#sprint2">Sprint - 2</a>
                                      </h4>
                                  </div>
                                  <div id="sprint2" class="panel-collapse collapse">
                                      <p style="text-align:right"> Temps Sprint : 6 heures</p>
                                      <div class="panel panel-default">
                                          <div class="panel-heading">
                                              Relev&eacute; d'activit&eacute;s
                                          </div>
                                          <!-- /.panel-heading -->
                                          <div class="panel-body">
                                              <div class="table-responsive">
                                                  <table class="table table-striped table-bordered table-hover">
                                                      <thead>
                                                          <tr>
                                                              <th>Date</th>
                                                              <th>Temps passé</th>
                                                              <th>T&acirc;che</th>
                                                          </tr>
                                                      </thead>

                                                      <tbody>
                                                        <tr>
                                                            <td>18/11/2016</td>
                                                            <td>2 heures</td>
                                                            <td>Différents travaux sur le socle technique (Récuperation des données en base via springboot)</td>
                                                        </tr>
                                                        <tr>
                                                            <td>16/11/2016</td>
                                                            <td>2 heures</td>
                                                            <td>Réalisation des schémas CU</td>
                                                        </tr>
                                                        <tr>
                                                            <td>15/11/2016</td>
                                                            <td>2 heures</td>
                                                            <td>Modifications du dossier d'expression des besoins, corrections</td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                              <!-- Sprint 1 -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#sprint1">Sprint - 1</a>
                                        </h4>
                                    </div>
                                    <div id="sprint1" class="panel-collapse collapse">
                                        <p style="text-align:right"> Temps Sprint : 8 heures</p>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                Relev&eacute; d'activit&eacute;s
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Temps passé</th>
                                                                <th>T&acirc;che</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                              <td>04/11/2016</td>
                                                              <td>1 heures 30</td>
                                                              <td>Review en équipe et avec le client à propos du dossier d'expression des besoins</td>
                                                          </tr>
                                                          <tr>
                                                              <td>02/11/2016</td>
                                                              <td>1 heures 30 </td>
                                                              <td>Relecture et correction concernant le dossier d'expression des besoins</td>
                                                          </tr>
                                                      <tr>
                                                          <tr>
                                                              <td>28/10/2016</td>
                                                              <td>2 heures</td>
                                                              <td>Réalisation des cas d'utilisation concernant le dossier d'expression des besoins</td>
                                                          </tr>
                                                            <tr>
                                                                <td>21/10/2016</td>
                                                                <td>3 heures</td>
                                                                <td>Installation de l'infrastructure du projet et brainstorming en équipe autour de la compréhension du sujet et des premières idées de fonctionnalités</td>
                                                            </tr>
                                            </tbody>
                                                    </table>
                                                </div>
                                                <!-- /.table-responsive -->
                                            </div>
                                            <!-- /.panel-body -->
                                        </div>
                                    </div>
                                </div>

                              <!-- Sprint 0 -->
                              <div class="panel panel-default">
                                  <div class="panel-heading">
                                      <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#sprint0">Sprint - 0</a>
                                      </h4>
                                  </div>
                                  <div id="sprint0" class="panel-collapse collapse">
                                      <p style="text-align:right"> Temps Sprint : 0</p>
                                      <div class="panel panel-default">
                                          <div class="panel-heading">
                                              Relev&eacute; d'activit&eacute;s
                                          </div>
                                          <!-- /.panel-heading -->
                                          <div class="panel-body">
                                              <div class="table-responsive">
                                                  <table class="table table-striped table-bordered table-hover">
                                                      <thead>
                                                          <tr>
                                                              <th>Date</th>
                                                              <th>Temps passé</th>
                                                              <th>T&acirc;che</th>
                                                          </tr>
                                                      </thead>
                                                    </table>
                                                  </div>
                                                </div>
                                              </div>
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

<?php
    include("footer.php");
?>
