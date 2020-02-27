<?php
namespace App\Controller;

use App\Controller\AppController;

class PeopleController extends AppController {
    public $paginate = [
        'finder' => 'byAge',
        'limit' => '5',
        'contain'=> ['Messages'],
    ];

    public function initialize(){
        parent::initialize();
        $this->loadComponent('Paginator');
    }
    
    public function index() {
        $data = $this->paginate($this->People);
        $this->set('data', $data);
    }

    public function edit() {
        $id = $this->request->query['id'];
        $entity = $this->People->get($id);
        $this->set('entity', $entity);
    }

    public function update() {
        if ($this->request->is('post')) {
            $data = $this->request->data['People'];// フォーム送信されたデータを取り出す
            $entity = $this->People->get($data['id']);//指定のid(フォームで送信されたid)でDBからデータを取り出す。
            $this->People->patchEntity($entity, $data);// 第一引数のエンティティの内容を、第二引数の値で更新する。第一引数にgetで取り出して代入した$entityを指定、第二引数にフォーム送信された値を指定して上書きする。
            $this->People->save($entity); //上書きされた$entity
        }
        return $this->redirect(['action'=>'index']);
    }

    public function add() {
        $msg = 'please type your personal data...';
        $entity = $this->People->newEntity();//対応するテーブルクラスのnewEntityを使う,一括代入を行っている
        if ($this->request->is('post')) {
            $data = $this->request->data['People'];
            $entity = $this->People->newEntity($data);
            if ($this->People->save($entity)) {
                return $this->redirect(['action'=>'index']);
            }
            $msg = 'Error was occured...';
        }
        $this->set('msg', $msg);
        $this->set('entity', $entity);
    }

    public function create() {
        if ($this->request->is('post')) {
            $data = $this->request->data['People'];
            $entity = $this->People->newEntity($data);
            $this->People->save($entity);
        }
        return $this->redirect(['action'=>'index']);
    }

    public function delete() {
        $id = $this->request->query['id'];
        $entity = $this->People->get($id);
        $this->set('entity', $entity);
    }

    public function destroy() {
        if ($this->request->is('post')){
            $data = $this->request->data['People'];
            $entity =$this->People->get($data['id']);
            $this->People->delete($entity);
        }
        return $this->redirect(['action'=>'index']);
    }
}