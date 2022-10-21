<?php

/** @var yii\web\View $this */
use yii\helpers\Url;

$this->title = 'Dashboard | e-PKS';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5">
        <h1 class="display-4">e-PKS</h1>

        <p class="lead">Selamat datang di aplikasi e-PKS</p>
        <p class="lead">Aplikasi ini berguna untuk mengelola Surat Perjanjian Kerjasama (PKS) secara digital.</p>

        <p><a class="btn btn-lg btn-success" href="<?= Url::base()."/dokumen-pks" ?>">Periksa Dokumen Anda</a></p>
    </div>
</div>
