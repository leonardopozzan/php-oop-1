<?php 
Class Movie {
    private $title;
    private $genres;
    private $pubblicationDate;
    private $vote;
    private $description;
    private $passedYears;
    function __construct(String $_title ,Array $_genres ,Int $_pubblicationDate ,Int $_vote ,String $_description = null)
    {
        $this->setTitle($_title);
        $this->setGenres($_genres);
        $this->setPubblicationDate($_pubblicationDate);
        $this->setVote($_vote);
        $this->setDescription($_description);
        
        //variabili caloclate
        $this->setPassedYears();
    }

    //setters and getters
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($_title)
    {
        if(strlen($_title)){
            $this->title = $_title;
        }else{
            $this->title = null;
        }
        return $this;
    }
    public function getGenres()
    {
        return $this->genres;
    }
    public function setGenres($_genres)
    {
        $this->genres = $_genres;
        return $this;
    }
    public function getPubblicationDate()
    {
        return $this->pubblicationDate;
    }
    public function setPubblicationDate($_pubblicationDate)
    {
        if($_pubblicationDate > 0){
            $this->pubblicationDate = $_pubblicationDate;
        }else{
            $this->pubblicationDate = null;
        }
        return $this;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($_description)
    {
        if(strlen($_description)){
            $this->description = $_description;
        }else{
            $this->description = null;
        }
        
        return $this;
    }
    public function getVote()
    {
        return $this->vote;
    }
    public function setVote($_vote)
    {
        if(0 <= $_vote && $_vote >=5){
            $this->vote = $_vote;
        }else{
            $this->vote = null;
        }
        return $this;
    }
    //variabili calcolate
    private function setPassedYears(){
        if($this->pubblicationDate){
            date_default_timezone_set('Europe/Rome');
            $currentYear = date("Y");
            $this->passedYears = $currentYear - $this->pubblicationDate;
        }else{
            $this->passedYears = null;
        }
        return $this;
    }
}

?>
