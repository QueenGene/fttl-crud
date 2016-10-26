<?php

class HeadTemplate{
    private $title;
    private $description;
    
    public function __construct($title, $description) {
        $this->title = $title; //this object 'title' is going to be whatever I pass in to this object
        $this->description = $description;
    }


function getTitle() {
    return $this->title;
}

 function getDescription() {
    return $this->description;
}

 function setTitle($title) {
    $this->title = $title;
}

 function setDescription($description) {
    $this->description = $description;
}

}

?>