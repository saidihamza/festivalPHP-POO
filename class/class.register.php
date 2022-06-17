<?php
class register_info
{
    private $name;
    private $email;
    private $phone;
    private $gender;
    private $festival_date;
    private $name_festival;
    private $choix;
    public function __construct() //construct
    {
        $this->cnx = new PDO('mysql:host=localhost;dbname=festival', 'root', '');
    }
    public function Inscription($name,$email,$phone,$gender,$festival_date,$name_festival,$choix)
    {
   
        $sql="INSERT INTO `carthage`(`name`, `email`, `phone`, `gender`, `date_festival`, `name_festival`, `choix`) VALUES ('$name','$email','$phone','$gender','$festival_date','$name_festival','$choix')";
       
        $query = $this->cnx->prepare($sql);
        $res = $query->execute(); //chaque execute return true or false 
        if ($res) {
            return true;
        } else {
            return false;
        }
    header("location:../payement.php");

    }
    public function selectfestival()
    {
        $sql = "SELECT * FROM `carthage`";
        $query = $this->cnx->prepare($sql);
        $query->execute(); 
        $new = $query->fetchAll(PDO::FETCH_ASSOC);
        return $new;
     
     
    }

}
