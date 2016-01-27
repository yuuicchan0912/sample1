<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright   Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @package     app.View.Layouts
 * @since     CakePHP(tm) v 0.10.0.1076
 * @license     http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
  <?php echo $this->Html->charset(); //メタタグが出力される→出力結果 <meta http-equiv="Contant-Type" content="text/html; charset=utf-8" />
  ?>
  <title>
    <?php echo $cakeDescription //CAKEPHP:
    ?>:
    <?php echo $this->fetch('title'); //the rapid development php framework : Home
    ?>
  </title>
  <?php
    //アイコン出力
    echo $this->Html->meta('icon');

    //<link rel="stylesheet" type="text/css" href="/css/cake.generic.css" />
    echo $this->Html->css('cake.generic');

    echo $this->fetch('meta');

    //<link rel="stylesheet" type="text/css" href="/css/contact.css"/>
    echo $this->fetch('css');

    //Javascript呼び出し用のコード
    echo $this->fetch('script');
  ?>
</head>
<body>
  <div id="container">
    <div id="header">
      <h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
    </div>
    <div id="content">

      <?php echo $this->Flash->render(); //Sessionヘルパーのflashメソッドを通して一時的なメッセージ(エラー等)が出力するために用意されているもの 1度しか表示されないためリロード時には消える
      ?>

      <?php echo $this->fetch('content'); //ビューテンプレートの内容が出力される
      ?>
    </div>
    <div id="footer">
      <?php echo $this->Html->link(
          $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
          'http://www.cakephp.org/',
          array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
        );
      //上の$this->Html->linkはlinkメソッドを使ってリンクを出力している
      ?>
      <p>
        <?php echo $cakeVersion; ?>
      </p>
    </div>
  </div>
  <?php echo $this->element('sql_dump'); 
  //sql_dumpという名前のエレメントを出力している箇所 sql_dumpはapp以下に入っていないが、CakePHPのコアファイルが入っている。
  //デバッグモードが2(ON)担っているときに下に表示されている
  ?>
</body>
</html>
