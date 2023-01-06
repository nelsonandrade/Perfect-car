<?php
if(!empty($_POST['surname']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['message'])){
    $surname = htmlspecialchars($_POST['surname']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    $body = [
        'Messages' => [
        [
            'From' => [
            'Email' => "$email",
            'Name' => "$surname"
            ],
            'To' => [
            [
                'Email' => "nelsonandrade7771@gmail.com",
                'Name' => "Nelson"
            ]
            ],
            'Subject' => "Demande de renseignement",
            'TextPart' => "$email, $message", 
            
        ]
        ]
    ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success();
        echo "Email envoyé avec succès !";
    }
    else{
        echo "Email non valide";
    }

} else {
    header('Location: contact.html');
    die();
} 

