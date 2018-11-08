<?php
use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use yii\debug\Toolbar;

// You can use the registerAssetBundle function if you'd like
//$this->registerAssetBundle('app');
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<title><?php echo Html::encode($this->title); ?></title>
<meta property='og:site_name' content='<?php echo Html::encode($this->title); ?>' />
<meta property='og:title' content='<?php echo Html::encode($this->title); ?>' />
<meta property='og:description' content='<?php echo Html::encode($this->title); ?>' />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<link rel='stylesheet' type='text/css' href='<?php echo $this->theme->baseUrl; ?>/files/mainstyle.css' title='wsite-theme-css' />
<?php $this->head(); ?>
</head>
<body class='wsite-theme-light tall-header-page wsite-page-index weeblypage-index'>
  <?php $this->beginBody(); ?>
<div id="header-wrap">
  <div class="container">
    <table id="header">
      <tr>
        <td id="logo"><span class='wsite-logo'><a href='/'><span id="wsite-title"><?php echo Html::encode(\Yii::$app->name); ?></span></a></span></td>
        <td id="header-right">
          <table>
            <tr>
              <td class="phone-number"></td>
              <td class="social"></td>
              <td class="search"></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </div>
</div>
<div id="navigation-wrap">
  <div id="navigation">
 <?php echo Menu::widget(array(
        'options' => array('class' => 'nav'),
        'items' => array(
          array('label' => 'Inicio', 'url' => array('/site/index')),
          array('label' => 'Registro', 'url' => array('/registro/create')),
          //array('label' => 'Contact', 'url' => array('/site/contact')),
          Yii::$app->user->isGuest ?
            array('label' => 'Login', 'url' => array('/site/login')) :
            array('label' => 'Logout (' . Yii::$app->user->identity->username .')' , 'url' => array('/site/logout')),
        ),
      )); ?>
    <div class="clear"></div>
  </div>
</div>
<div id="main-wrap">
  <div id="main">
    <div id="main-in">
      <div id="banner">
        <div class="wsite-header"></div>
        <em id="tl"></em>
        <em id="tr"></em>
      </div>
      <div id="content">
        <div id='wsite-content' class='wsite-not-footer'>
          <?php echo $content; ?>
</div>

        <div class="clear"></div>
      </div>
    </div>
  </div>
</div>
<div id="footer-wrap">
  <div id="footer">
    <?php echo Html::encode(\Yii::$app->name); ?>

    <div class="clear"></div>
  </div>
</div>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
