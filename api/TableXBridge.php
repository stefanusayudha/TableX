<?php
// SETTING ===================================================================================
// Requires DB Connection as $db_connection
    include "./DB_Connection.php";      //Replace this line with your own connection xxxxxxxxxxxxxx
    include "./Authentification.php";   //Dummy authentification, replace this with your own auth method
    include "./TableXForbiden.php";     //List of forbiden tables
    
    if(!Permitted()) return;            //API Policy from Re, Replace with your own
    

    // Variable Initiation 
    $res=new stdClass() ;               //result initiation
//============================================================================================




// Begin the operation -----------------------------------------------------------------------

    // action required
    if(!isset($_GET["action"])) {
        $res->error=true;
        $res->message="No action specified";
        echo json_encode($res);
        exit;
    };

    // Actions
    switch($_GET['action']){
        case "sync":
            // data required : tablex,
            if(!isset($_GET['tablex'] )){
                $res->error=true;
                $res->message="Missing requirement";
                echo json_encode($res);
                exit;
            }

            //config
            $tablex_config = json_decode($_GET['tablex']);

            $res->error=false;
            $res->data= $tablex_config;
            echo json_encode($res);

            //accessing forbiden table
        break;
    }

?>