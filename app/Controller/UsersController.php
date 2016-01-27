<?php
class UsersController extends AppController{

  // モデルの指定
  public $uses = array('User');

  // レイアウトの指定(defaiultの場合はなくても動作します)
  public $layout = 'default';

  // indexアクション
  public function index(){
    // Userデータを全部入手する
    $userData = $this->User->find('all');

    // Viewにデータを送る
    $this->set('userData' , $userData);
  }

  // addアクション
  public function add() {
    // editアクションを呼び出す
    $this->edit();

    //editビューを表示する
    $this->render('edit');
  }

  // editアクション
  public function edit($id = null){
    // フォーム入力があり、$this->data内にデータがある場合は
    // テーブルを更新する
    if($this->request->isPost() || $this->request->isPut()){
      if(!empty($this->data)){
        if($this->User->save($this->data)){
          $this->Session->setFlash('保存しました。');
          $this->redirect(array('action' => 'index'));
          return;
        }
      }
      // エラーがあるのでエラーメッセージを表示します
      $this->Session->setFlash('保存に失敗しました');
    } else {
      // $idが指定されていたらそのデータを読み込む
      if(!is_null($id)){
        $this->data = $this->User->findById($id);
      }
    }

    // ビューテンプレートにその他の情報を通知
    $isEdit = false;
    if(!is_null($id)) {
      $isEdit = true;
    }
    $this->set('isEdit' , $isEdit);
  }

  // deleteアクション
  public function delete($id){
    // フォーム入力があり、$this->data内にデータが有る場合は
    // 削除を実行する
    if($this->request->isDelete()){
      if(!empty($this->data)){
        if($this->User->delete(
          $this->data[$this->User->alias]['id'])){
          $this->Session->setFlash('削除しました');
          $this->redirect(array('action' => 'index'));
        }
      }

      // エラーがあるのでエラーメッセージを表示します
      $this->Session->setFlash('削除に失敗しました。');
      $this->redirect(array('action' => 'index'));

    // 確認画面を表示
    } else {
      // $idが指定されていたらそのデータを読み込む
      $this->data = $this->User->findById($id);
      if(empty($this->data)){
        $this->Session->setFlash('データが存在しません');
        $this->redirect(array('action' => 'index'));
        return;
      }
    }
  }
}