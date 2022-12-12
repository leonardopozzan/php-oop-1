<?php 
Class Movie {
    private $title;
    private $genres;
    private $pubblicationDate;
    private $vote;
    private $description;
    function __construct(String $_title ,Array $_genres ,String $_pubblicationDate ,Int $_vote ,String $_description = null)
    {
        $this->title = $_title;
        $this->genres = $_genres;
        $this->pubblicationDate = $_pubblicationDate;
        $this->vote = $_vote;
        $this->description = $_description;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($_title)
    {
        $this->title = $_title;
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
        $this->pubblicationDate = $_pubblicationDate;
        return $this;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($_description)
    {
        $this->description = $_description;
        return $this;
    }
    public function getVote()
    {
        return $this->vote;
    }
    public function setVote($_vote)
    {
        $this->vote = $_vote;
        return $this;
    }
}

?>
