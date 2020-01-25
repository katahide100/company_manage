<?php
$cakeDescription = 'Cakeswatch Theme';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?= $this->Html->charset(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cakeswatch is adaptation of Bootswatch for CakePHP themes">
    <title>
        <?= $cakeDescription; ?>:
        <?= $this->fetch('title'); ?>
    </title>
    <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('bootstrap.min.css');
        echo $this->Html->css('font-awesome.min.css');
        echo $this->Html->css('datatables.min.css');
        echo $this->Html->css('flatly.css');
        echo $this->Html->css('custom.min.css');

        echo $this->Html->script('jquery.min');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <?= $this->element('top'); ?>
    <div class="container">
        <div class="bs-docs-section clearfix">
            <div class="row">
            <center>
            <?= $this->Flash->render(); ?>
            </center>
            <?= $this->fetch('content'); ?>
            </div>
        </div>
    <?= $this->element('footer'); ?>
    </div>



    <?php

      echo $this->Html->script('bootstrap.min');
      echo $this->Html->script('main');

    ?>

  </body>
</html>
