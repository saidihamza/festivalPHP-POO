<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/pay.css">
</head>

<body>

    <div class="mainscreen">
        <div class="card">
            <div class="leftside">
                <img src="./img/festivalsmarhba.png" class="product" alt="Shoes" />
            </div>
            <div class="rightside">
                <form method="POST" action="affiche.php">
                    <h1>CheckOut</h1>
                    <h2>Payment Information</h2>
                    <p>Cardholder Name</p>
                    <input type="text" class="inputbox" name="name" required />
                    <p>Card Number</p>
                    <input type="number" class="inputbox" name="card_number" id="card_number" required />

                    <p>Card Type</p>
                    <select class="inputbox" name="card_type" id="card_type" required>
                        <option value="">--Select a Card Type--</option>
                        <option value="Visa">Visa</option>
                        <option value="RuPay">RuPay</option>
                        <option value="MasterCard">MasterCard</option>
                    </select>
                    <div class="expcvv">

                        <p class="expcvv_text">Expiry</p>
                        <input type="date" class="inputbox" name="exp_date" id="exp_date" required />

                        <p class="expcvv_text2">CVV</p>
                        <input type="password" class="inputbox" name="cvv" id="cvv" required />
                    </div>
                    <p></p>
                    <button name="checkout" type="submit" class="button">CheckOut</button>
                </form>
            </div>
        </div>
    </div>
    <!-- php-->
    <?php
    include "./class/class.pay.php";
    $new_payement = new payement;
    if (isset($_POST["checkout"]) && (is_array($_POST)) && !empty($_POST)) {
        $new_payement->regiter($_POST['name'], $_POST['card_number'], $_POST['card_type'], $_POST['exp_date'], $_POST['cvv']);
    }


    ?>

</body>

</html>