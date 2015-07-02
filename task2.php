<html>
    <head>
        
        
    </head>

    <body>
        <?php
        
        
        
        
        class Movie{
            public $mytitle;
            public $myyear;
            public $mydirector;
            public $myrating;
            
            
            public function GetTitle(){
                $this->mytitle=$_POST["title"];
            }
            
            public function GetYear(){
                $this->myyear=$_POST["year"];
            }
            
            public function GetDirector(){
                $this->mydirector=$_POST["director"];
            }
            
            public function GetRating(){
                $this->myrating=$_POST["rating"];
            }
            
        }
        
        $person=new Movie;
        $person->GetTitle();
        $person->GetYear();
        $person->GetDirector();
        $person->GetRating();
        
        
        echo "The name of the movie is " . strtoupper($person->mytitle) ." released in the year " . $person->myyear;
        
        echo "<p></p> It is directed by " . strtoupper($person->mydirector) . " and it's MPAA rating is " . $person->myrating;
        
        
        ?>
        
        
        
        
        
        
    </body>
</html>
