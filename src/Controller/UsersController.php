<?

namespace App\Controller;

class UsersController extends AppController{

    public function index(){
        $this->viewBuilder()->$layout('my_layout');
    }

    public function register(){
        $this->viewBuilder()->layout('my_layout');
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if($this->Users->save($user)){
                $user = $user['idname'];
                return $this->redirect(['action'=>'registerSucceed',$user]);
            }else{
                
            }
        }
        
        $this->set(compact('user'));
        
    }

    public function registerSucceed(){
        $this->viewBuilder()->layout('my_layout');
    }

    // public function beforeFilter(Event $event)
    // {
    //     parent::beforeFilter($event);
    //     // ユーザーの登録とログアウトを許可します。
    //     // allow のリストに "login" アクションを追加しないでください。
    //     // そうすると AuthComponent の正常な機能に問題が発生します。
    //     $this->Auth->allow(['register', 'logout']);
    // }

    public function login(){
        $this->viewBuilder()->layout('my_layout');
        $user = $this->Auth->identify();
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl('index'));
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
        
    }

}

?>