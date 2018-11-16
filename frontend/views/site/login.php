<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
<!-- Start of Login Wrapper -->
<div class="login-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <main id="primary" class="site-main">
                    <div class="user-login">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="section-title">
                                    <h2>Log in to your account</h2>
                                </div>
                            </div>
                        </div> <!-- end of row -->

                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-6 offset-lg-2 offset-xl-3">
                                <div class="login-form">
                                    <form action="#">
                                        <div class="form-group row align-items-center mb-4">
                                            <label for="email" class="col-12 col-sm-12 col-md-4 col-form-label">Username</label>
                                            <div class="col-12 col-sm-12 col-md-8">
                                            	<?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder'=>'Username'])->label(false) ?>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center mb-4">
                                            <label for="c-password" class="col-12 col-sm-12 col-md-4 col-form-label">Password</label>
                                            <div class="col-12 col-sm-12 col-md-8">
                                                <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password'])->label(false) ?>
                                                <button class="pass-show-btn" type="button">Show</button>
                                        <?= $form->field($model, 'rememberMe')->checkbox() ?>
                                            </div>
                                        </div>
                                        <div class="login-box mt-5 text-center">
                                            <p><a href="<?= Url::to(['/site/request-password-reset'])?>">Forgot your password?</a></p>
                                            <?= Html::submitButton('Sign In', ['class' => 'default-btn tiny-btn mt-4', 'name' => 'login-button']) ?>
                                        </div>
                                        <div class="text-center mt-half pt-half top-bordered">
                                            <p>No account? <a href="<?= Url::to(['/site/signup'])?>">Create one here</a>.</p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of user-login -->
                </main> <!-- end of #primary -->
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div>
<!-- End of Login Wrapper -->
<?php ActiveForm::end(); ?>
