<?php
use app\Database\models\User;
use app\Http\request\validation;
$titel = 'verify your account';
include "layouts/header.php";

$validation = new validation;
if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST) {
    $validation->setValuename('verification code')->setValue($_POST['verCode'])->required()->regex("/^[0-9]{6}$/")->exists('users', 'verification_code');
if (empty($validation->getErrors())) {
    $user=new User;
    $user->setEmail($_SESSION['verification'])->setVerification_code($_POST['verCode']);
    //check if email and ver_code exist in dB
    $result=$user->checkCode();
    if($result->num_rows==1){
        $user->setEmail_verified_at(date('Y-m-d H:i:s'));
        if($user->updateEmailVerified_at()){
            $done="<div class='alert alert-success text-center '>success code and you will be redirected to home page...</div>";
            $_SESSION['user']=$result->fetch_object();
            header('refresh:5;url=index.php');

        }
        else{
            $error="<div class='alert alert-danger text-center ' >something went wrong</div>";


        }

    }
    else{
            $error="<div class='alert alert-danger text-center ' >verification code is wrong</div>";
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
                            <h4> Verification Code </h4>
                        </a>
                    </div>
                    <div class="tab-content">

                        <div id="lg2" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                 <?= $error ??" " ?>
                                 <?= $done ??" " ?>

                                    <form method="POST">
                                        <input type="number" name="verCode" placeholder="verification code " value="<?= $_POST['verCode'] ?? "" ?>">
                                        <?= $validation->getMassege('verification code') ?>
                                        <div class="button-box">
                                            <button type="submit"><span>Check </span></button>
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

include "layouts/scripts.php";
?>