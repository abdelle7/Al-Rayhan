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
                        <a class="active-menu" href="index.php"><i class="fa fa-shopping-cart fa-3x"></i> Produit<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="active-submenu" href="index.php">Produits</a>
                            </li>
                            <li>
                                <a href="promotion.php">Promotion</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-users fa-3x"></i> Client<span class="fa arrow"></span></a>
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
                        <a href="fourniseur.php"><i class="fa fa-truck fa-3x"></i> Fournisseur</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-home fa-3x"></i> Magazin<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="magazin.php">Magazins</a>
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
                                        <h3><span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>Produit</h3>
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
                                                <form role="form" class="registration-form" action="" method="post" name="add_proForm" enctype="multipart/form-data">
                            <fieldset>

                                <div class="form-bottom">
                                    <div class="row">
                                        <div class="form-group col-md-3 col-sm-6">
                                            <label>Référence :</label>
                                            <input type="text" class="form-control" id="ref" value="" name="addref" onkeyup="showMe(this)" />
                                        </div>
                                        <div class="form-group col-md-8 col-sm-6">
                                            <label>Désignation :</label>
                                            <textarea id="desi" name="adddesi" class="form-control" rows="1" style="resize: none"></textarea>
                                        </div>

                                    </div>

                                    <div class="form-group" style="margin-bottom:3px;">
                                        <div class="row">
                                            <div class="form-group col-md-2 col-sm-6">
                                                <label>TVA :</label>
                                                <div class="form-group input-group">

                                                    <select name="addtva" id="" class="form-control">
                                                <option value="10.00">10.00</option>
                                                <option value="20.00">20.00</option>
                                                <option value="30.00">30.00</option>
                                                <option value="40.00">40.00</option>
                                                <option value="50.00">50.00</option>
                                                <option value="60.00">60.00</option>
                                                <option value="70.00">70.00</option>
                                                <option value="80.00">80.00</option>
                                            </select>
                                                    <span class="input-group-addon">&#37;</span>
                                                </div>

                                            </div>
                                            <div class="form-group col-md-1 col-sm-3">
                                                <label>unité :</label>
                                                <input type="number" name="addunite" class="form-control" min="0" onkeyup="putUnite(this)" oninput="validity.valid||(value=value.replace(/\D+/g, ''))">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-8 col-sm-6">
                                            <label>Description :</label>
                                            <textarea class="form-control" name="adddesc" rows="3" style="resize: none"></textarea>
                                        </div>
                                    </div>
                                    <div class="nxt-prv">
                                        <button type="button" class="btn btn-next">Next</button>
                                    </div>
                                </div>
                            </fieldset>


                            <fieldset>

                                <div class="form-bottom">
                                    <div class="row">
                                        <div class="form-group col-md-3 col-sm-3">
                                            <label>Prix d'achat :</label>
                                            <div class="form-group input-group">
                                                <input name="addprixach" type="number" class="form-control" min="0" oninput="validity.valid||(value=value.replace(/\D+/g, ''))"><span class="input-group-addon" style="font-weight:bold">DH</span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3 col-sm-3">
                                            <label>Prix de vente :</label>
                                            <div class="form-group input-group">
                                                <input name="addprixvnt" type="number" class="form-control" min="0" oninput="validity.valid||(value=value.replace(/\D+/g, ''))"><span class="input-group-addon" style="font-weight:bold">DH</span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3 col-sm-3">
                                            <label>Prix pour famille :</label>
                                            <div class="form-group input-group">
                                                <input name="addprixfami" type="number" class="form-control" min="0" oninput="validity.valid||(value=value.replace(/\D+/g, ''))"><span class="input-group-addon" style="font-weight:bold">DH</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nxt-prv">
                                        <button type="button" class="btn btn-previous">Previous</button>
                                        <button type="button" class="btn btn-next">Next</button>
                                    </div>
                                </div>
                            </fieldset>


                            <fieldset>
                                <div class="form-bottom">
                                    <div class="row">

                                        <div class="form-group col-md-6 col-sm-3">
                                            <label>Image :</label>
                                            <div class="form-group input-group">
                                                <input id="addimg" type="file" class="file" data-preview-file-type="text" name="file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nxt-prv">
                                        <button type="button" class="btn btn-previous">Previous</button>
                                        <button type="button" class="btn btn-next">Next</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="form-bottom">
                                    <div class="row">
                                        <div class="form-group col-md-1 col-sm-3">
                                            <label>unité :</label>
                                            <input type="number" class="form-control" min="0" disabled value="" id="unite-holder">
                                        </div>
                                        <div class="form-group col-md-3 col-sm-6">
                                                <label>Depot :</label>
                                                <select name="adddepot" id="" class="form-control">
                                                <option disabled selected value> -- Choisir un Depot -- </option>
                                                                <?php
                                                                $querydep="SELECT Numero_dep,Nom_dep from depot;";
                                                                $resultdep=mysqli_query($conn,$querydep);
                                                                if(mysqli_num_rows($resultdep)>0){
                                                                    while($rowdep=mysqli_fetch_assoc($resultdep)){
                                                                        echo '<option value="'.$rowdep["Numero_dep"].'">'.$rowdep["Nom_dep"].'</option>';
                                                                    }
                                                                }else{
                                                                    echo '<option disabled selected value> -- Creer un Depot -- </option>';
                                                                }

                                                                ?>
                                            </select>
                                            </div>
                                            <div class="form-group col-md-1 col-sm-6">
                                            <label>Quantité:</label>
                                            <input id="quantite" type="number" class="form-control" min="0" value="" oninput="validity.valid||(value=value.replace(/\D+/g, ''))" name="addqnt">
                                        </div>
                                        <div class="form-group col-md-3 col-sm-6">
                                                <label>Magazin :</label>
                                                <select name="addmag" id="" class="form-control">
                                                <option disabled selected value> -- Choisir un Magazin -- </option>
                                                                <?php
                                                                $querymag="SELECT Numero_mag,Nom_mag from magazin;";
                                                                $resultmag=mysqli_query($conn,$querymag);
                                                                if(mysqli_num_rows($resultmag)>0){
                                                                    while($rowmag=mysqli_fetch_assoc($resultmag)){
                                                                        echo '<option value="'.$rowmag["Numero_mag"].'">'.$rowmag["Nom_mag"].'</option>';
                                                                    }
                                                                }else{
                                                                    echo '<option disabled selected value> -- Creer un Magasin -- </option>';
                                                                }

                                                                ?>
                                            </select>
                                            </div>

                                    </div>
                                    <div class="nxt-prv">
                                        <button type="button" class="btn btn-previous">Previous</button>
                                        <button type="button" class="btn btn-next">Next</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="form-bottom">
                                    <div class="row">
                                               <div class="form-group col-md-3 col-sm-6">
                                                <label>Fournisseur :</label>
                                                <select name="addfour" id="" class="form-control" required>
                                                <option disabled selected value> -- Choisir un Fournisseur -- </option>
                                                                <?php
                                                                $queryfour="SELECT Numero_four,Nom_four from fournisseur;";
                                                                $resultfour=mysqli_query($conn,$queryfour);
                                                                if(mysqli_num_rows($resultfour)>0){
                                                                    while($rowfour=mysqli_fetch_assoc($resultfour)){
                                                                        echo '<option value="'.$rowfour["Numero_four"].'">'.$rowfour["Nom_four"].'</option>';
                                                                    }
                                                                }else{
                                                                    echo '<option disabled selected value> -- Creer un Fournisseur -- </option>';
                                                                }

                                                                ?>

                                            </select>
                                            </div>
                                    </div>
                                    <div class="nxt-prv">
                                        <button type="button" class="btn btn-previous">Previous</button>
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
                                if(!isset($_GET['ref'])){
                            echo'<form class="registration-form" method="get" name="putMod_magForm">
                            <fieldset>
                                <div class="form-bottom">
                                    <div class="row">
                                        <div class="form-group col-md-3 col-sm-6">
                                            <label>Référence :</label>
                                            <input type="text" class="form-control" id="ref" value="" name="ref" required/>
                                        </div>
                                    </div>
                                    <div class="nxt-prv">
                                        <button type="submit" class="btn btn-next">Next</button>
                                    </div>
                                </div>
                                </fieldset>
                            </form>';
                                };
                                if(isset($_GET['ref'])){
                                $ref=$_GET['ref'];
                                $query="select * from produit where Reference='".$ref."'";
                                $result=mysqli_query($conn,$query);
                                $row=mysqli_fetch_row($result);
                            echo '
                                                <form role="form" class="registration-form" action="" name="modifier_proForm" method="post"  enctype="multipart/form-data">

                            <fieldset>

                                <div class="form-bottom">
                                    <div class="row">

                                    <div class="form-group col-md-3 col-sm-6">
                                        <label>Référence :</label>
                                        <input type="text" class="form-control" id="ref" value="'.$row[0].'" name="modref" onkeyup="showMe(this)" />
                                        </div>
                                        <div class="form-group col-md-8 col-sm-6">
                                            <label>Désignation :</label>
                                            <textarea id="desi" class="form-control" rows="1"  name="moddesi" style="resize: none">'.$row[2].'</textarea>
                                        </div>

                                    </div>

                                    <div class="form-group" style="margin-bottom:3px;">
                                        <div class="row">

                                            <div class="form-group col-md-3 col-sm-6">
                                                <label>TVA :</label>
                                                <div class="form-group input-group">

                                                    <select name="modtva" id="" class="form-control">
                                                <option value="10.00" '.(($row[3]==10.00) ? "selected" :"").'>10.00</option>
                                                <option value="20.00" '.(($row[3]==20.00) ? "selected" :"").'>20.00</option>
                                                <option value="30.00" '.(($row[3]==30.00) ? "selected" :"").'>30.00</option>
                                                <option value="40.00" '.(($row[3]==40.00) ? "selected" :"").'>40.00</option>
                                                <option value="50.00" '.(($row[3]==50.00) ? "selected" :"").'>50.00</option>
                                                <option value="60.00" '.(($row[3]==60.00) ? "selected" :"").'>60.00</option>
                                                <option value="70.00" '.(($row[3]==70.00) ? "selected" :"").'>70.00</option>
                                                <option value="80.00" '.(($row[3]==80.00) ? "selected" :"").'>80.00</option>
                                            </select>
                                                    <span class="input-group-addon">&#37;</span>
                                                </div>

                                            </div>
                                            <div class="form-group col-md-1 col-sm-3">
                                                <label>unité :</label>
                                                <input type="number" class="form-control" min="0" name="modunite" onkeyup="putUniteMod(this)" oninput="validity.valid||(value=value.replace(/\D+/g, ""))" value="'.$row[4].'">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-8 col-sm-6">
                                            <label>Description :</label>
                                            <textarea class="form-control" rows="3" style="resize: none" name="moddesc">'.$row[5].'</textarea>
                                        </div>
                                    </div>
                                    <div class="nxt-prv">
                                        <button type="button" class="btn btn-next">Next</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>

                                <div class="form-bottom">
                                    <div class="row">
                                        <div class="form-group col-md-3 col-sm-3">
                                            <label>Prix d\'achat :</label>
                                            <div class="form-group input-group">
                                                <input name="modprixach" type="number" class="form-control" min="0" oninput="validity.valid||(value=value.replace(/\D+/g, ""))" value="'.$row[6].'"><span class="input-group-addon" style="font-weight:bold">DH</span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3 col-sm-3">
                                            <label>Prix de vente :</label>
                                            <div class="form-group input-group">
                                                <input name="modprixvnt" type="number" class="form-control" min="0" oninput="validity.valid||(value=value.replace(/\D+/g, ""))" value="'.$row[8].'"><span class="input-group-addon" style="font-weight:bold">DH</span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3 col-sm-3">
                                            <label>Prix pour famille :</label>
                                            <div class="form-group input-group">
                                                <input name="modprixfami" type="number" class="form-control" min="0" oninput="validity.valid||(value=value.replace(/\D+/g, ""))" value="'.$row[7].'"><span class="input-group-addon" style="font-weight:bold">DH</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nxt-prv">
                                        <button type="button" class="btn btn-previous">Previous</button>
                                        <button type="button" class="btn btn-next">Next</button>
                                    </div>
                                </div>
                            </fieldset>


                            <fieldset>
                                <div class="form-bottom">
                                    <div class="row">

                                        <div class="form-group col-md-6 col-sm-3">
                                            <label>Image :</label>
                                            <div class="form-group input-group">
                                                <input id="modimg" type="file" class="file" data-preview-file-type="text" name="filemod">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nxt-prv">
                                        <button type="button" class="btn btn-previous">Previous</button>
                                        <button type="button" class="btn btn-next">Next</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="form-bottom">
                                    <div class="row">
                                        <div class="form-group col-md-1 col-sm-3">
                                            <label>unité :</label>
                                            <input type="number" class="form-control" min="0" disabled value="'.$row[4].'" id="unite-holderMod">
                                        </div>
                                        <div class="form-group col-md-3 col-sm-6">
                                                <label>Depot :</label>
                                                <select name="moddep" id="" class="form-control">';
                                    $querydep="SELECT Numero_dep,Nom_dep from depot;";
                                                                $resultdep=mysqli_query($conn,$querydep);
                                                                if(mysqli_num_rows($resultdep)>0){
                                                                    echo '<option disabled selected value> -- Choisir un Depot -- </option>';
                                                                    while($rowdep=mysqli_fetch_assoc($resultdep)){
                                                                        echo '<option value="'.$rowdep["Numero_dep"].'" '.(($row[1]==$rowdep["Numero_dep"]) ? "selected" :"").'>'.$rowdep["Nom_dep"].'</option>';
                                                                    }
                                                                }else{
                                                                    echo '<option disabled selected value> -- Creer un Depot -- </option>';
                                                                }
                                                                echo '

                                            </select>
                                            </div>
                                            <div class="form-group col-md-1 col-sm-6">
                                            <label>Quantité:</label>
                                            <input id="quantiteMod" type="number" class="form-control" min="0" value="" oninput="validity.valid||(value=value.replace(/\D+/g, ""))" name="modqnt">
                                        </div>
                                        <div class="form-group col-md-3 col-sm-6">
                                                <label>Magazin :</label>
                                                <select name="moddep" id="" class="form-control">';
                                    $querymag="SELECT Numero_mag,Nom_mag from magazin;";
                                                                $resultmag=mysqli_query($conn,$querymag);
                                                                if(mysqli_num_rows($resultmag)>0){
                                                                    echo '<option disabled selected value> -- Choisir un Magasin -- </option>';
                                                                    while($rowmag=mysqli_fetch_assoc($resultmag)){
                                                                        echo '<option value="'.$rowmag["Numero_mag"].'" '.(($row[1]==$rowmag["Numero_mag"]) ? "selected" :"").'>'.$rowmag["Nom_mag"].'</option>';
                                                                    }
                                                                }else{
                                                                    echo '<option disabled selected value> -- Creer un Magasin -- </option>';
                                                                }
                                                                echo '

                                            </select>
                                            </div>

                                    </div>
                                    <div class="nxt-prv">
                                        <button type="button" class="btn btn-previous">Previous</button>
                                        <button type="button" class="btn btn-next">Next</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="form-bottom">
                                    <div class="row">
                                               <div class="form-group col-md-3 col-sm-6">
                                                <label>Fournisseur :</label>
                                                <select name="modfour" id="" class="form-control">';
                                    $queryfour="SELECT Numero_four,Nom_four from fournisseur;";
                                                                $resultfour=mysqli_query($conn,$queryfour);
                                                                if(mysqli_num_rows($resultfour)>0){
                                                                    echo '<option disabled selected value> -- Choisir un Fournissuer -- </option>';
                                                                    while($rowfour=mysqli_fetch_assoc($resultfour)){
                                                                        echo '<option value="'.$rowfour["Numero_four"].'" '.(($row[1]==$rowfour["Numero_four"]) ? "selected" :"").'>'.$rowfour["Nom_four"].'</option>';
                                                                    }
                                                                }else{
                                                                    echo '<option disabled selected value> -- Creer un Fournissuer -- </option>';
                                                                }
                                                                echo '
                                            </select>
                                            </div>
                                    </div>
                                    <div class="nxt-prv">
                                        <button type="button" class="btn btn-previous">Previous</button>
                                        <button type="submit" class="btn" name="modiferForm">Modifier</button>
                                    </div>
                                </div>
                            </fieldset>

                        </form>';}; ?>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="messages-pills">
                                            <div class="col-md-12 form-box">
                                                <br>
                                                <form role="form" class="registration-form" method="post" name="delete-Form">
                                                    <fieldset>
                                                        <div class="form-bottom">
                                                            <div class="row">
                                                                <div class="form-group col-md-3 col-sm-6">
                                                                    <label>Référence :</label>
                                                                    <input type="text" class="form-control" value="" name="delpro" required />
                                                                </div>
                                                            </div>
                                                            <div class="nxt-prv">
                                                                <button type="submit" class="btn" name="deleteForm">Supprimer</button>
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
                    <div class="col-md-12 form-box">

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span style="font-weight: bold">Liste des Produits</span>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Référence</th>
                                                <th>N&deg; Fournisseur </th>
                                                <th>Désignation </th>
                                                <th>Prix d'achat</th>
                                                <th>Prix de vent</th>
                                                <th>Prix de Famille </th>
                                                <th>TVA </th>
                                                <th>Unité </th>
                                                <th>Déscription </th>
                                                <th>Barre a Code </th>
                                                <th>Image </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                            $query = "SELECT * from produit;";
                                            $result = mysqli_query($conn,$query);
                                            if(mysqli_num_rows($result)>0){
                                                while($row=mysqli_fetch_assoc($result)){
                                                    echo"<tr>
                                                <td><a href='?ref=".$row['Reference']."'>".$row['Reference']."</a></td>
                                                <td>".$row['Numero_four']."</td>
                                                <td>".$row['Designiation']."</td>
                                                <td>".$row['Prix_achat']."</td>
                                                <td>".$row['Prix_vente']."</td>
                                                <td>".$row['Prix_famille']."</td>
                                                <td>".$row['TVA']."</td>
                                                <td>".$row['Unite']."</td>
                                                <td>".$row['Description']."</td>
                                                <td><div class='hover_img'>
     <a href='' onclick='return false;'>Afficher Code a barre<span><svg id='".$row['Reference']."'></svg></span></a>
</div></td>
                                                <td><div class='hover_img'>
     <a href='' onclick='return false;'>Afficher l'Image<span><img src='".$row['Image']."' alt='image' height='100' /></span></a>
</div></td>
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
            window.location.replace("index.php");
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
        function putUniteMod(e) {
            document.getElementById('unite-holderMod').value=e.value;
            document.getElementById('quantiteMod').setAttribute("max",e.value);
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
echo "<script>";
    $query = "SELECT Reference from produit;";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
    echo "JsBarcode('#".$row['Reference']."','".$row['Reference']."', {
                format: 'CODE39',
                height : 50,
                wight : 1,
            });";}}
echo "</script>";
    ?>
<?php
if(isset($_POST['ajouter'])){
    $addref = $_POST['addref'];
    $addfour = $_POST['addfour'];
    $adddesi = $_POST['adddesi'];
    $addatva = $_POST['addtva'];
    $addunite = $_POST['addunite'];
    $adddesc = $_POST['adddesc'];
    $addprixach = $_POST['addprixach'];
    $addprixvnt = $_POST['addprixvnt'];
    $addprixfami = $_POST['addprixfami'];
    include("uploadAdd.php");
    $query = "INSERT INTO produit VALUES('$addref','$addfour','$adddesi','$addatva','$addunite','$adddesc','$addprixach','$addprixvnt','$addprixfami','$name');";
    if(mysqli_query($conn,$query)){
        echo '<script>  modalPopup(); </script>';
    }else{
        echo '<script> document.getElementById("warningmodel").click(); </script>';
        echo("Error description: " . mysqli_error($conn));
    }
    mysqli_close($conn);

}
if(isset($_POST['modiferForm'])){
    $modref = $_POST['modref'];
    $oldref = $_GET['ref'];
    $modfour = $_POST['modfour'];
    $moddesi = $_POST['moddesi'];
    $modatva = $_POST['modtva'];
    $modunite = $_POST['modunite'];
    $moddesc = $_POST['moddesc'];
    $modprixach = $_POST['modprixach'];
    $modprixvnt = $_POST['modprixvnt'];
    $modprixfami = $_POST['modprixfami'];
    include("uploadMod.php");
    $query = "UPDATE produit SET Reference='$modref',Numero_four='$modfour',Designiation='$moddesi',TVA='$modatva',Unite='$modunite',Description='$moddesc',Prix_achat='$modprixach',Prix_famille='$modprixfami',Prix_vente='$modprixvnt',Image='$name' WHERE Reference='$oldref';";
    if(mysqli_query($conn,$query)){
        echo '<script> document.getElementById("modifiermodal").click(); </script>';
    }else{
        echo '<script> document.getElementById("warningmodel").click(); </script>';
        echo("Error description: " . mysqli_error($conn));
    }
    mysqli_close($conn);
}
if(isset($_POST['deleteForm'])){
    $delpro = $_POST['delpro'];
    $query = "DELETE FROM produit WHERE reference='$delpro';";
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
