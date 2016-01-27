<?php
class ContactsController extends AppController{

  // モデルの指定
  public $uses = array('Contact');

  // beforeRenderコールバック
  public function beforeRender(){

    // フォームの選択用リスト
    $this->set('sexList' , $this->Contact->MtrSex->find('list'));
    $this->set('ageList' , $this->Contact->MtrAge->find('list'));
    $this->set('favoliteList' , $this->Contact->MtrFavolite->find('list'));

  }

  // indexアクション
  public function index() {

    // $this->request->dataにフォームからの返答があるので
    // それが見つかったら登録処理を行う
    if(!empty($this->request->data)){

      if($this->request->data[$this->Contact->alias]['confirmed']){
        // 保存実行
        // 成功時に画面遷移・失敗時にメッセージを表示
        if($this->Contact->saveAll($this->request->data)){
          $this->redirect(array('action' => 'done'));
        } else {
          $this->request->data[$this->request->alias]['confirmed'] = false;
          $this->Session->setFlash('登録を失敗しました');
        }
      } else {
        // 確認画面
        // 成功・失敗時にメッセージを表示
        if($this->Contact->saveAll($this->request->data, array('validate' => 'only'))){
          // 入力データに問題がなかった場合に確認画面を呼び出し
          $this->render('confirm');
        } else {
          $this->Session->setFlash('エラーがあります。入力内容をご確認下さい');
        }
      }//if($this->request->data[$this->Contact->alias]['confirmed'])
    } //if(!empty($this->request->data))
  } //function index

  // doneアクション(登録が成功したとき)
  public function done(){

  }

  // helpアクション(ヘルプページ)
  public function help(){
    $requests = array(
      'request_time' => 12,
      'request_min' => 30
    );
    $this->set('requests' , $requests);
    $this->set('title_for_layout' , "お問い合わせフォームについて");


  }

}