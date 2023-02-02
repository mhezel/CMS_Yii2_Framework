<?php

/** @var \yii\web\View $this */
/** @var string $content */

use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
$this->beginContent('@frontend/views/layouts/base.php');
?>
    <main class="d-flex">
        <?php echo $this->render('sidebar') ?>
        <div class="content-wrapper p-3">
            <?= $content ?>
        </div>
    </main>
<?php echo $this->render('footer') ?>

<?php $this->endContent() ?>