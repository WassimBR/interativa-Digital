<?PHP

class Comment
{
private $Idcomment;
private $name;
private $email;
private $message;
private $ip;
private $date;
private $post;

function __construct($Idcomment,$name,$email,$message,$ip,$date,$post)
{
$this->Idcomment=$Idcomment;
$this->name=$name;
$this->email =$email;
$this->message =$message;
$this->ip =$ip;
$this->date =$date;
$this->post =$post;
}

//debut get
    function getIdcomment() {
        return $this->Idcomment;
    }

    function getName() {
        return $this->name;
    }

    function getEmail() {
        return $this->email;
    }

    function getMessage() {
        return $this->message;
    }

    function getIp() {
        return $this->ip;
    }

    function getDate() {
        return $this->date;
    }
    
    function getPost() {
    return $this->post;
    }
     //fin GEt
 
 
 //debut SET
 function setIdcomment($Idcomment) {
     $this->Idcomment = $Idcomment;
 }

 function setName($name) {
     $this->name = $name;
 }

 function setEmail($email) {
     $this->email = $email;
 }

 function setMessage($message) {
     $this->message = $message;
 }

 function setIp($ip) {
     $this->ip = $ip;
 }

 function setDate($date) {
     $this->date = $date;
 }

 function setPost($post) {
     $this->post = $post;
 }

  //fin SEt
 
}

?>
