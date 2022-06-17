<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>reservation carthage</title>
    <link href="./css/main.css" rel="stylesheet" media="all">

</head>

<body>
    <?php
    session_start()   ?>
    <main>

        <section class="left">
            <h1>

                مهرجان قرطاج الدولي

                <br>

                <br>
                Festival International de Carthage
                <br>
                <br>
                Carthage international festival
                <br>
                <br>
                2022-2023
            </h1>

        </section>
        <section class="sec_right">

            <h2>MAKE YOUR RESERVATION </h2>
            <form method="POST" action="">
                <div>
                    <input class="input--style-3" type="text" placeholder="Name" name="name">
                </div>
                <div>
                    <input class="input--style-3" type="email" placeholder="Email" name="email">
                </div>
                <div>
                    <input class="input--style-3" type="text" placeholder="Phone" name="phone">
                </div>
                <div>
                    <select name="gender">
                        <option disabled="disabled" selected="selected">Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div>
                    <input class="input--style-3 js-datepicker" type="date" placeholder="Festival Date" name="date_festival">
                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                </div>
                <div>
                    <select name="name_festival">
                        <option disabled="disabled" selected="Name of Festival">Name of Festival</option>
                        <option value="Arabic music">Arabic music</option>
                        <option value="Classic Music">Classic Music</option>
                        <option value="Rap Music">Rap Music</option>
                    </select>
                </div>
                <div>
                    <select name="choix">
                        <option disabled="disabled" selected="Select Class">Select Class</option>
                        <option value="First Class">First Class</option>
                        <option value="Social Class">Social Class</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div>
                    <button name="submit" class="btn btn--pill btn--green" type="submit">Next <i class="fas fa-arrow-right"></i></button>
                </div>


            </form>


        </section>
    </main>




    <?php
    include "./class/class.register.php";
    $new_reg = new register_info();
    if (isset($_POST["submit"]) && (is_array($_POST)) && !empty($_POST)) {
        $new_reg->Inscription(
            $_POST['name'],
            $_POST['email'],
            $_POST['phone'],
            $_POST['gender'],
            $_POST['date_festival'],
            $_POST['name_festival'],
            $_POST['choix']
        );

        header("location:./payement.php");
    }

    ?>
</body>

</html>