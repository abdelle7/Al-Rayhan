<?php include("connection.php"); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Al Rayhan</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
    <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/multi-form.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/fileinput.css">
    <link rel="icon" href="favicon.ico">

</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Al Rayhan</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <time id="today"></time> </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <a href="index.html"><img src="assets/img/find_user.png" class="user-image img-responsive" /></a>
                    </li>


                    <li>
                        <a href="index.html"><i class="fa fa-shopping-cart fa-3x"></i> Produit<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="index.html">Produits</a>
                            </li>
                            <li>
                                <a href="promotion.html">Promotion</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-users fa-3x"></i> Client<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="client.html">Famille</a>
                            </li>
                            <li>
                                <a href="passager.html" class="active-submenu">Passager</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="fourniseur.html"><i class="fa fa-truck fa-3x"></i> Fournisseur</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-home fa-3x"></i> Magazin<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="magazin.html">Magazins</a>
                            </li>
                            <li>
                                <a href="depots.html">Depots</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="active-menu" href="administration.html"><i class="fa fa-edit fa-3x"></i> Administration<span class="fa arrow"></span> </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="active-submenu" href="administration.html">Ouvriers</a>
                            </li>
                            <li>
                                <a href="conge.html">Congé</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="etat.html"><i class="fa fa-exclamation-triangle fa-3x"></i> Etat</a>
                    </li>


                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">

                <div class="row">

                    <div class="col-md-12 form-box">
                        <div class="col-md-12 col-sm-12">

                            <div class="panel panel-default">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3><span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>Ouvrièr</h3>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <ul class="nav nav-pills">
                                        <li id="home" class="active"><a href="#home-pills" data-toggle="tab">Ajouter</a>
                                        </li>
                                        <li class=""><a id="click_mod" id="modifier" href="#profile-pills" data-toggle="tab">Modifier</a>
                                        </li>
                                        <li class=""><a href="#messages-pills" data-toggle="tab">Supprimer</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <!--                                   ajouter-tab-->
                                        <div class="tab-pane fade active in" id="home-pills">

                                            <div class="col-md-12 form-box">
                                                <br>
<!--                                                Tab Ajouter-->

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile-pills">

                                            <div class="col-md-12 form-box">
                                                <br>
<!--                                                tab Modifier-->

                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="messages-pills">
                                            <div class="col-md-12 form-box">
                                                <br>
<!--                                                tab Suuprimer-->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./row -->

                <div class="row">
                    <div class="col-md-12 form-box">

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span style="font-weight: bold">Liste des Ouvrièrs</span>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Référence</th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Adresse</th>
                                                <th>Numéro de Téléphone</th>
                                                <th>Sexe</th>
                                                <th>Salaire</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td><a href="index.php?ref=5">D978891</a></td>
                                                <td>Internet Explorer 4.0</td>
                                                <td>Win 95+</td>
                                                <td class="center">4</td>
                                                <td class="center">4</td>
                                                <td class="center">4</td>
                                                <td class="center">1500</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                </div>
                <!-- /. ROW  -->




            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
        <div>
            <h4 class="inner"><small>&copy; 2018 Al Rayhan</small></h4>
        </div>
    </div>

    <script src="assets/js/JsBarcode.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script src="assets/js/multi-form.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable();
        });
        var today = new Date();
        document.getElementById('today').innerHTML = today.toDateString();

        function change() {
            document.getElementById('modifier').click();
        }
        function toModifier(){
            document.getElementById("click_mod").click();
        }
         function showMe(e) {
            JsBarcode("#barcode", e.value, {
                format: "CODE39",
                lineColor: "#000",
            });
        }
        function putUnite(e) {
            document.getElementById('unite-holder').value=e.value;
            document.getElementById('quantite').setAttribute("max",e.value);
        }

    </script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/JsBarcode.all.min.js"></script>
    <script src="assets/js/fileinput.js"></script>
    <script src="assets/js/plugins/sortable.js"></script>
    <script src="assets/js/plugins/piexif.js"></script>
    <script src="assets/js/plugins/purify.js"></script>



<?php
if(isset($_GET['ref']))
{
echo "<script>";
echo "toModifier();";
echo "</script>";
}
    ?>
</body>

</html>
