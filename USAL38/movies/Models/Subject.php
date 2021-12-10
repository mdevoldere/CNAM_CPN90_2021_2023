<?php 

class Subject 
{
    /** @var int $subject_id The subject identifier */
    private int $subject_id;

    /** @var string $subject_name The subject name */
    private string $subject_name;

    /**
     * Constructeur de l'objet 
     * (initialiser les attributs de l'objet)
     */
    public function __construct()
    {
        $this->subject_id = 0;
        $this->subject_name = 'Unknown Category';
        echo 'Je suis dans le constructeur de Subject';
    }

    /**
     * Get the subject identifier
     * @return int The subject identifier
     */
    public function getSubjectId(): int 
    {
        return $this->subject_id;
    }

    /**
     * Get the subject name
     * @return string The subject name
     */
    public function getSubjectName() : string 
    {
        return $this->subject_name;
    }

    /**
     * Set a new subject name
     * @param string $name The new subject name
     */
    public function setSubjectName(string $name) : void
    {
        $this->subject_name = $name;
    }
}