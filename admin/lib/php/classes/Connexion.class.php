<?php

class Connexion
{
    private static $_instance = null;

    public static function getInstance($dsn, $user, $password)
    {
        //Si on n'a pas encore d'objet de connexion
        if (!self::$_instance) {
            try {
                self::$_instance = new PDO($dsn, $user, $password);
                //print "Connecté";

            } catch (PDOException $e) {
                print "Erreur de connexion " . $e->getMessage();

            }
        }
        return self::$_instance;
    }

}