<?php

//Chargement de l'environement twig
require_once 'vendor/autoload.php';
//Chemin des fichiers twig
$loader = new Twig_Loader_Filesystem('view');
$twig = new Twig_Environment($loader, array());

// switch qui définit l'action à effectuer
switch ($action) {

    case 'display':
        display();
    break;

    case 'login':
        login($id);
    break;

    case 'logout':
        logout();
    break;

    default: //Affichage de la page 404
        echo $twig->render('404.twig', array());
    break;
 }

 function login($id){

    global $twig;

    if($id != ""){
        $error = 'Identifiant ou mot de passe incorrect';
    } else{
        $error = '';
    }

    echo $twig->render('login.twig', array('error'=>$error));

 }
 
 function display(){
    global $twig;
    global $bdd;
    
    $error = "";

    $auth_info = logTest();
    $session = $auth_info['session'];
    $user = $auth_info['id'];
  
    displayDashboard($session, $user);
 }

 function logTest(){
    global $twig;
    global $bdd;
    $_SESSION['authentification'] = false;

    //Récupération des informations saisies
    $id = $_POST['id'];
    $pass = $_POST['pass'];

    //Récupération des infos de la bdd
    require_once 'model/login_model.php';
    //getConnexionLogs($identifiant);
    $logs = getConnexionLogs($id);

    if(isset($logs[0])){
        if($pass === $logs[0]['password']){
            session_start();
            $_SESSION['authentification'] = true;
        } 
    } 
    $auth_info = ['id'=>$id, 'session'=>$_SESSION['authentification']];
    return $auth_info;
}

function displayDashboard($session, $user){

    global $twig;

    if($session === true){

        require_once 'model/dashboard_model.php';
        echo $twig->render('dashboard.twig', array('user'=>$user));

    } else{

        $error = 'Identifiant ou mot de passe incorrect';
        session_destroy();
        echo $error;
        header("Location: http://localhost:8080/dashboard/login/false");
    }

}

function logout(){
    $error = '';
    session_destroy();
    header("Location: http://localhost:8080/dashboard/login");
}

 