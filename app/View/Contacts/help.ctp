<?php
// タイトル設定
$this->set('title_for_layout',"お問い合わせフォームについて");

// 独自CSS設定
echo $this->Html->css('contact' , false , array('inline'=>false));
?>

<h1>お問い合わせフォームについて</h1>
<h2>ご利用上の注意</h2>
<p>フォームよりいただいたお問い合わせフォームに関しまして、ご連絡から<?php echo h($requests['request_time']);?>時間<?php echo h($requests['request_min']);?>分以内のお返事をお約束致します。</p>
<h2>プライバシーポリシー</h2>
<p>個人情報に関する法令およびその他の規範を順守し、お客様の個人情報を当サービスの改善、開発およびサポート以外の目的では利用いたしません。</p>

<?php echo $this->Html->link('戻る', array('action' => 'index'));?>
