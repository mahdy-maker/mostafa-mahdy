<?php

use app\Database\models\User;
use app\Http\request\validation;

$titel = 'sign up';
include "layouts/header.php";
include "layouts/nav.php";
include "layouts/breadcrumb.php";
//submition form
$validation = new validation;

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST) {
    //validation
    $validation->setValuename('first name')->setValue($_POST['first_name'])->required()->string()->max(32)->min(3);
    $validation->setValuename('last name')->setValue($_POST['last_name'])->required()->string()->max(32)->min(3);
    $validation->setValuename('Email')->setValue($_POST['email'])->required()->unique('users', 'email')
        ->regex("/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/");
    $validation->setValuename('Password')->setValue($_POST['password'])->required()->regex("/^.*(?=.{10,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=]).*$/", "Must be at least 10 characters,Must contain at least one one lower case letter,one upper case letter,one digit and one special character")->confirmed($_POST['password_confirmation']);
    $validation->setValuename('Confermed password')->setValue($_POST['password_confirmation'])->required();
    $validation->setValuename('Gender')->setValue($_POST['gender'])->required()->in(['m', 'f']);
    $validation->setValuename('Phone')->setValue($_POST['phone'])->required()->unique('users', 'phone')
        ->regex("/^01[0125][0-9]{8}$/");

    if (empty($validation->getErrors())) {
        //password hashing
        //insert user
        //create ver code
        $ver_code = rand(100000, 999999);
        $user = new User;
        $user->setVerification_code($ver_code)
            ->setFirst_name($_POST['first_name'])->setLast_name($_POST['last_name'])
            ->setEmail($_POST['email'])->setPassword($_POST['password'])->setGender($_POST['gender'])->setPhone($_POST['phone']);

        if ($user->create()) {

            $_SESSION['verification'] = $_POST['email'];

            header('location:verification-code.php');
        } else {
            $errorr = "<div class = 'alert alert-danger text-center'>Something went wrong!</div>";
        }
    }
}
?>





<div class="login-register-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">

                        <a class="active" data-toggle="tab" href="#lg2">
                            <h4> sign up </h4>
                        </a>
                    </div>
                    <div class="tab-content">

                        <div id="lg2" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <?= $errorr ?? " " ?>

                                    <form method="post">

                                        <input type="text" name="first_name" placeholder="first name" value="<?= $_POST['first_name'] ?? "" ?>">
                                        <?=
                                        $validation->getMassege('first name')
                                        ?>

                                        <input type="text" name="last_name" placeholder="last name" value="<?= $_POST['last_name'] ?? "" ?>">
                                        <?= $validation->getMassege('last name') ?>

                                        <input type="tel" name="phone" placeholder="phone" value="<?= $_POST['phone'] ?? "" ?>">
                                        <?= $validation->getMassege('Phone') ?>

                                        <input type="password" name="password" placeholder="password">
                                        <?= $validation->getMassege('Password') ?>

                                        <input type="password" name="password_confirmation" placeholder="password confirmation">
                                        <?= $validation->getMassege('Confermed password') ?>

                                        <input name="email" placeholder="Email" type="email" value="<?= $_POST['email'] ?? "" ?>">
                                        <?= $validation->getMassege('Email') ?>

                                        <select name="gender" class="form-control">
                                            <option <?= isset($_POST['gender']) && $_POST['gender'] == 'm' ? 'selected' : '' ?> value="m">male</option>
                                            <option <?= isset($_POST['gender']) && $_POST['gender'] == 'f' ? 'selected' : '' ?> value="f">female</option>
                                        </select>
                                        <?= $validation->getMassege('Gender') ?>
                                        <div class="button-box">
                                            <button type="submit"><span>sign up</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<?php
include "layouts/footer.php";
include "layouts/scripts.php";
?>