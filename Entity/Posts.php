<?PHP

class Posts
{
private $idpost;
private $title;
private $subtitle;
private $text;
private $date;
private $categorie;
private $comment;


function __construct($idpost,$title,$subtitle,$text,$date,$categorie,$comment)
{
$this->idpost=$idpost;
$this->title=$title;
$this->subtitle =$subtitle;
$this->text =$text;
$this->date =$date;
$this->categorie =$categorie;
$this->comment =$comment;
}

//debut get
function GetIdpost()
 { return $this->idpost;
 }
 function GetTitle()
 { return $this->title;
 }
function GetSubtitle()
 { return $this->subtitle;
 }
 function GetText()
 { return $this->text;
 }
 function GetDate()
 { return $this->date;
 }
 function GetCategorie()
 { return $this->categorie;
 }
 function GetComment()
 { return $this->comment;
 }
 //fin GEt
 
 
 //debut SET
 
 function setIdpost($idpost)
 { $this->idpost=$idpost ;}
 
 function setTitle($title)
 { $this->title=$title;}
 
  function setSubtitle($subtitle)
 { $this->subtitle=$subtitle;}
 
  function setText($text)
 { $this->text=$text;}
 
  function setDate($date)
 { $this->date=$date;}
 
  function setCategorie($categorie)
 { $this->categorie=$categorie;}
 
  function setComment($comment)
 { $this->comment=$comment;}
 
 //fin SEt
 
}

?>