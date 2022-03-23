<?php
// TODO: Lire les utilisateurs dans la DB


    if($_GET['id']) {
        echo "on va chercher le contact : ".$_GET['id'];

    }


 ?>

    <div class="text-center">
        <h2>En tournée</h2>
        <div class="" id="collapseGroup">
            <div class="row justify-content-between mx-auto">
                <button class="col-5 btn btn-primary" type="button" id="scannerBtn" data-toggle="collapse" data-target="#collapseScanner" aria-expanded="false" aria-controls="collapseScanner">
                    <h3>Scanner</h3>
                </button>
                <button class="col-5 btn btn-primary" type="button" id="circuitBtn" data-toggle="collapse" data-target="#collapseCircuit" aria-expanded="false" aria-controls="collapseCircuit">
                    <h3>Circuit</h3>
                </button>
            </div>
            <div class="">
                <br /><div id="aa">

                </div>
            </div>
            <div class="collapse multi-collapse" id="collapseScanner" aria-labelledby="scannerBtn" data-parent="#collapseGroup">
                <div class="card">
                    <h3>Scanner le QRCode :</h3>
                    <div class=" text-center mx-auto" id="readerBox" style="width: 100% ">
                        <div style="width: 100% border: 1px solid;" id="reader"></div>
                    </div>
                    <div class="" id="QRCode_value">

                    </div>


                </div>
            </div>
            <div class="collapse multi-collapse" id="collapseCircuit" aria-labelledby="circuitBtn" data-parent="#collapseGroup">
                <div class="card card-body">
                    <div>
                        <h5>
                            Nom de la famille
                        </h5>
                        <p>
                            Adresse
                        </p>
                    </div>
                    <div class="">
                        <button type="button" class="col-8 btn btn-success"><h3>Ramassage OK</h3></button>
                    </div>
                    <br />
                    <div class="">
                        <button type="button" class="col-8 btn btn-warning"><h3>Problème Ramassage</h3></button>
                    </div>
                    <br />
                    <div class="">
                        <button type="button" class="col-8 btn btn-danger"><h3>PAS DE RAMASSAGE</h3></button>
                    </div>

                </div>
            </div>
        </div>
    </div>
