<?php

class Organisation
{
    private String $organisation;
    private String $adresse;
    private Users $users;
    private Questionnaire $questionnaire;

    public function __construct(String $organisation, String $adresse)
    {
        $this->organisation = $organisation;
        $this->adresse = $adresse;
    }

    public function getAdresse(): string
    {
        return($this->adresse);
    }

    public function getOrganisation(): string
    {
        return($this->organisation);
    }

    public function getUsers(): Users
    {
        return($this->users);
    }
}