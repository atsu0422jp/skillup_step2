<? 
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table{
    public function initialize(array $config){
        
    }

    public function validationDefault(Validator $validator){
      $validator
      ->notEmpty('username','username is empty')
      ->requirePresence('username')
      ->notEmpty('idname')
      ->requirePresence('idname')
      ->notEmpty('password')
      ->requirePresence('password')
      ->notEmpty('password_affirm')
      ->requirePresence('password_affirm')
      ->notEmpty('email')
      ->requirePresence('email')
      ->add('password' ,[
        // 確認用と同じかどうか
        'comWith' => ['rule' => ['compareWith', 'password_affirm']]
    ]);
        return $validator;
    }

    // public $validate = array(

    //     'idname' => array(
    //       array(
    //         'rule' => 'isUnique', //重複禁止
    //         'message' => '既に使用されている名前です。'
    //       ),
    //       array(
    //         'rule' => 'alphaNumeric', //半角英数字のみ
    //         'message' => '名前は半角英数字にしてください。'
    //       ),
    //       array(
    //         'rule' => array('between', 2, 32), //2～32文字
    //         'message' => '名前は2文字以上32文字以内にしてください。'
    //       )
    //     ),
    //     'password' => array(
    //       array(
    //         'rule' => 'alphaNumeric',
    //         'message' => 'パスワードは半角英数字にしてください。'
    //       ),
    //       array(
    //         'rule' => array('between', 8, 32),
    //         'message' => 'パスワードは8文字以上32文字以内にしてください。'
    //       )
    //     )
    //   );

      
    
}
?>