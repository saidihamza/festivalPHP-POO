<?php
class payement
{
    public function __construct()
    {
        
        $this->cnx = new PDO('mysql:host=localhost;dbname=festival', 'root', '');
    }
    public function regiter($name, $card_number, $card_type, $exp_date, $cvv)
    {
        $sql = "INSERT INTO `payement`(`name`, `card_number`, `card_type`, `exp_date`, `cvv`) VALUES ('$name','$card_number','$card_type','$exp_date','$cvv')";
        $query = $this->cnx->prepare($sql);
        $pay = $query->execute(); //chaque execute return true or false 
        if ($pay) {
            return true;
        } else {
            return false;
        }
        echo $pay;
    }

}
