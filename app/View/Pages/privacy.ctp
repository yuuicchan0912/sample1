<?php
//タイトル設定
$this->set('title_for_layout' , 'プライバシーポリシー');
//CSS設定
echo $this->Html->css('contact' , false , array('inline' => 'false') );
?>
<h1>プライバシーポリシー</h1>
<p>個人情報に関する法令およびその他の規範を順守し、お客様の個人情報を当サービスの改善、開発およびサポート以外の目的では利用いたしません。</p>

<?php echo $this->Html->link('戻る' , array('action' => 'index') ); ?>