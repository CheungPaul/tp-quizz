<?php

class Users
{
    private String $nom;
    private String $prenom;
    private String $email;

    public function __construct(String $nom, String $prenom, String $email) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
    }

    public function getNom(): string
    {
        return($this->nom);
    }

    public function getPrenom(): string
    {
        return($this->prenom);
    }

    public function getEmail(): string
    {
        return($this->email);
    }

    public function setUser(String $unUser){

    }
}