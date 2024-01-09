<?php

class SecurityController
{
    /**
     * inscription d'un utilisateur
     *
     * @return void
     */
    public static function inscription(): void
    {
        // include VIEWS.'app/inscription.php';

        // ici on simule la réception des données du formulaire d'inscription qui sera créé dans la vue app/inscription.php
        // les données seront transmises en POST, devront être validées et "nettoyées" comme on le fait habituellement
        $newUser = [
            'email' => 'lio1@gmail.com',
            'password' => 'toutpourri',
            'username' => 'letitbe',
            'role' => 'user',
        ];

        // on stocke l'email dans une variable mais on pourrait passer directement $newUser['email'] à la méthode findByEmail()
        $userEmail = $newUser['email'];

        // on invoque la méthode statique findByEmail() de la classe Utilisateur pour récupérer l'utilisateur qui correspond à l'email reçu du formulaire
        $user = Utilisateur::findByEmail($userEmail);

        // si l'utilisateur existe on arrête le script et on affiche un message
        // évidemment ultérieurement on traitera le cas d'une manière plus propre avec un message d'erreur en session et une redirection par exemple vers la route /connexion
        if ($user) {
            exit('Email existe déjà');
        }

        // on hash le mdp utilisateur en utilisant l'algorithme par défaut, actuellement Bcrypt
        // la fonction password_hash prend en paramètres au minimum le mdp qui doit être hash et l'algorithme
        $newUser['password'] = password_hash($newUser['password'], PASSWORD_DEFAULT);

        // on invoque la méthode statique create() du modèle pour créer l'utilisateur et retourner son id
        $idUser = Utilisateur::create($newUser);

        // on affiche provisoirement l'id pour tester
        var_dump($idUser);
    }

    /**
     * connexion d'un utilisateur
     *
     * @return void
     */
    public static function connexion(): void
    {
        include VIEWS.'app/connexion.php';
    }
}
