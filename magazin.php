﻿<?php include("connection.php"); ?>
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
                <a class="navbar-brand" href="index.php">Al Rayhan</a>
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
                        <a href="index.php"><img src="assets/img/find_user.png" class="user-image img-responsive" /></a>
                    </li>


                    <li>
                        <a  href="index.php"><i class="fa fa-shopping-cart fa-3x"></i> Produit<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a  href="index.php">Produits</a>
                            </li>
                            <li>
                                <a href="promotion.php">Promotion</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" ><i class="fa fa-users fa-3x"></i> Client<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="client.php">Famille</a>
                            </li>
                            <li>
                                <a href="passager.php">Passager</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="fourniseur.php" ><i class="fa fa-truck fa-3x"></i> Fournisseur</a>
                    </li>
                    <li>
                        <a href="#" class="active-menu"><i class="fa fa-home fa-3x"></i> Magazin<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="magazin.php" class="active-submenu">Magazins</a>
                            </li>
                            <li>
                                <a href="depots.php">Depots</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="administration.php"><i class="fa fa-edit fa-3x"></i> Administration<span class="fa arrow"></span> </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="administration.php">Ouvriers</a>
                            </li>
                            <li>
                                <a href="conge.php">Congé</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="etat.php"><i class="fa fa-exclamation-triangle fa-3x"></i> Etat</a>
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
                                        <h3><span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>Magazin</h3>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <ul class="nav nav-pills">
                                        <li id="home" class="active"><a href="#home-pills" data-toggle="tab">Ajouter</a>
                                        </li>
                                        <li class=""><a id="click_mod" href="#profile-pills" data-toggle="tab">Modifier</a>
                                        </li>
                                        <li class=""><a href="#messages-pills" data-toggle="tab">Supprimer</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <!--                                   ajouter-tab-->
                                        <div class="tab-pane fade active in" id="home-pills">

                                            <div class="col-md-12 form-box">
                                                <br>
                                                <form role="form" class="registration-form" action="" method="post" name="add_MagForm">
                            <fieldset>
                                <div class="form-bottom">
                                    <div class="row">
                                       <div class="form-group col-md-3 col-sm-6">
                                            <label>N&deg; :</label>
                                            <input type="text" class="form-control" id="ref" value="" name="addNmag"  required />
                                        </div>
                                        <div class="form-group col-md-3 col-sm-6">
                                            <label>Nom :</label>
                                            <input type="text" class="form-control" id="ref" value="" name="addNom"  required />
                                        </div>
                                        <div class="form-group col-md-3 col-sm-6">
                                            <label>Adresse :</label>
                                            <input type="text" class="form-control" id="ref" value="" name="addAdresse"  required />
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-3 col-sm-6">
                                            <label>Numéro de Téléphone :</label>
                                            <input type="tel" class="form-control" id="ref" value="" minlength="10" maxlength="14" pattern="^(?:0|\(?\+212\)?\s?|00212\s?)[1-79](?:[\.\-\s]?\d\d){4}$" name="addNum" required/>
                                        </div>
                                    </div>
                                    <div class="nxt-prv">
                                        <button type="submit" class="btn" name="ajouter">Ajouter</button>
                                    </div>
                                </div>
                            </fieldset>

                        </form>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile-pills">

                                            <div class="col-md-12 form-box">
                                                <br>
                                            <?php

                                                if(!isset($_GET['Nmag'])){
                            echo'<form class="registration-form" method="get" name="putMod_magForm">
                            <fieldset>
                                <div class="form-bottom">
                                    <div class="row">
                                        <div class="form-group col-md-3 col-sm-6">
                                            <label>N&deg; :</label>
                                            <input type="text" class="form-control" id="ref" value="" name="Nmag" required />
                                        </div>
                                    </div>
                                    <div class="nxt-prv">
                                        <button type="submit" class="btn btn-next">Modifier</button>
                                    </div>
                                </div>
                                </fieldset>
                            </form>';
                                };
                                                if(isset($_GET['Nmag'])){
                                                    $Nmag=$_GET['Nmag'];
                                $query="select * from magazin where Numero_mag='".$Nmag."'";
                                $result=mysqli_query($conn,$query);
                                $row=mysqli_fetch_row($result);
                                                    echo '<form role="form" class="registration-form" action="" name="modifier_magForm" method="post">
                            <fieldset>
                                <div class="form-bottom">
                                    <div class="row">
                                       <div class="form-group col-md-3 col-sm-6">
                                            <label>N&deg; :</label>
                                            <input type="text" class="form-control" id="ref" value="'.$row[0].'" name="modNmag"  required />
                                        </div>
                                        <div class="form-group col-md-3 col-sm-6">
                                            <label>Nom :</label>
                                            <input type="text" class="form-control" id="ref" value="'.$row[1].'" name="modNom"  required />
                                        </div>
                                        <div class="form-group col-md-3 col-sm-6">
                                            <label>Prénom :</label>
                                            <input type="text" class="form-control" id="ref" value="'.$row[2].'" name="modAdresse"  required />
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-3 col-sm-6">
                                            <label>Numéro de Téléphone :</label>
                                            <input type="tel" class="form-control" id="ref" value="'.$row[3].'" minlength="10" maxlength="14" pattern="^(?:0|\(?\+212\)?\s?|00212\s?)[1-79](?:[\.\-\s]?\d\d){4}$" name="modNum" required/>
                                        </div>
                                    </div>
                                    <div class="nxt-prv">
                                        <button type="submit" class="btn" name="modiferForm">Modifier</button>
                                    </div>
                                </div>
                            </fieldset>

                        </form>';
                                                };

                                            ?>

                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="messages-pills">
                                            <div class="col-md-12 form-box">
                                                <br>

                                                <form class="registration-form" method="post" name="delete-Form">
                            <fieldset>
                                <div class="form-bottom">
                                    <div class="row">
                                        <div class="form-group col-md-3 col-sm-6">
                                            <label>N&deg; :</label>
                                            <input type="text" class="form-control" id="ref" value="" name="delNmag" required/>
                                        </div>
                                    </div>
                                    <div class="nxt-prv">
                                        <button type="submit" class="btn btn-next" name="deleteForm">Supprimer</button>
                                    </div>
                                </div>
                                </fieldset>
                            </form>
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
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span style="font-weight: bold">Liste des Magazins</span>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>N&deg;</th>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Numéro de Téléphone</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                            $query = "SELECT * from magazin;";
                                            $result = mysqli_query($conn,$query);
                                            if(mysqli_num_rows($result)>0){
                                                while($row=mysqli_fetch_assoc($result)){
                                                    echo"<tr>
                                                <td><a href='?Nmag=".$row['Numero_mag']."'>".$row['Numero_mag']."</a></td>
                                                <td>".$row['Nom_mag']."</td>
                                                <td>".$row['Adresse_mag']."</td>
                                                <td class='center'>".$row['Numero_tele_mag']."</td>
                                            </tr>";
                                                }
                                            }
                                             ?>
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

                        <!-- Button trigger modal add -->
<button id="modal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="display:none">
  Launch demo modal
</button>

<!-- Modal add -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h1 style="display:inline">Ajouté avec Succès&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1><image src="assets/img/Added_Successfully.png"  style="width:150px;height:150px;"></image>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="reload();">OK</button>
      </div>
    </div>
  </div>
</div>

            <!-- Button trigger modal delete -->
<button id="deletemodal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#deleteModel" style="display:none">
  Launch demo modal
</button>

<!-- Modal delete -->
<div class="modal fade" id="deleteModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h1 style="display:inline">Supprimé avec Succès&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1><image src="assets/img/Added_Successfully.png"  style="width:150px;height:150px;"></image>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="reload();">OK</button>
      </div>
    </div>
  </div>
</div>

            <!-- Button trigger modal modifier -->
<button id="modifiermodal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modifierModel" style="display:none">
  Launch demo modal
</button>

<!-- Modal modifier-->
<div class="modal fade" id="modifierModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h1 style="display:inline">Modifier avec Succès&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1><image src="assets/img/Added_Successfully.png"  style="width:150px;height:150px;"></image>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="reload();">OK</button>
      </div>
    </div>
  </div>
</div>

         <!-- Button trigger modal Warning -->
<button id="warningmodel" type="button" class="btn btn-primary" data-toggle="modal" data-target="#warningModel" style="display:none">
  Launch demo modal
</button>

<!-- Modal Warning-->
<div class="modal fade" id="warningModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h1 style="display:inline">Une erreur est survenue, veuillez vérifier votre saisie&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1><image src="assets/img/Warning.png"  style="width:150px;height:150px;"></image>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="">OK</button>
      </div>
    </div>
  </div>
</div>
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
        function toModifier(){
            document.getElementById("click_mod").click();
        }
        function reload(){
            window.location.replace("magazin.php");
        }
        function modalPopup(){
            document.getElementById("modal").click();
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
    <!-- optionally if you need a theme like font awesome theme you can include it as mentioned below -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/themes/fa/theme.js"></script>
    <!-- optionally if you need translation for your language then include  locale file as mentioned below -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/js/locales/(lang).js"></script>
    <script src="assets/js/fileinput.js"></script>
    <script src="assets/js/plugins/sortable.js"></script>
    <script src="assets/js/plugins/piexif.js"></script>
    <script src="assets/js/plugins/purify.js"></script>
    <?php
if(isset($_GET['Nmag']))
{
echo "<script>";
echo "toModifier();";
echo "</script>";
}
    ?>
<?php
if(isset($_POST['ajouter'])){
    $addNmag = $_POST['addNmag'];
    $addnom = $_POST['addNom'];
    $addadresse = $_POST['addAdresse'];
    $addnum = $_POST['addNum'];
    $query = "INSERT INTO magazin VALUES('$addNmag','$addnom','$addadresse','$addnum');";
    if(mysqli_query($conn,$query)){
        echo '<script>  modalPopup(); </script>';
    }else{
        echo '<script> document.getElementById("warningmodel").click(); </script>';
    }
    mysqli_close($conn);

}
if(isset($_POST['modiferForm'])){
    $modNmag = $_POST['modNmag'];
    $oldNmag=$_GET['Nmag'];
    $modnom = $_POST['modNom'];
    $modadresse = $_POST['modAdresse'];
    $modnum = $_POST['modNum'];
    $query = "UPDATE magazin SET Numero_mag='$modNmag',Nom_mag='$modnom',Adresse_mag='$modadresse',Numero_tele_mag='$modnum' WHERE Numero_mag='$oldNmag';";
    if(mysqli_query($conn,$query)){
        echo '<script> document.getElementById("modifiermodal").click(); </script>';
    }else{
        echo '<script> document.getElementById("warningmodel").click(); </script>';
    }
    mysqli_close($conn);
}
if(isset($_POST['deleteForm'])){
    $delNmag = $_POST['delNmag'];
    $query = "DELETE FROM magazin WHERE Numero_mag='$delNmag';";
    if(mysqli_query($conn,$query)){
        echo '<script> document.getElementById("deletemodal").click(); </script>';
    }else{
        echo '<script> document.getElementById("warningmodel").click(); </script>';
    }
    mysqli_close($conn);
}
?>
</body>

</html>
