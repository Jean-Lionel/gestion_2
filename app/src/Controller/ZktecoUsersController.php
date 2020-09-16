<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ZktecoUsers Controller
 *
 * @property \App\Model\Table\ZktecoUsersTable $ZktecoUsers
 *
 * @method \App\Model\Entity\ZktecoUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ZktecoUsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        // debug(ZKTECO);

        // die();
      $zktecoUsers = $this->paginate($this->ZktecoUsers);

      $this->set(compact('zktecoUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Zkteco User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
      $zktecoUser = $this->ZktecoUsers->get($id, [
        'contain' => [],
      ]);

      $this->set('zktecoUser', $zktecoUser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
      $zktecoUser = $this->ZktecoUsers->newEntity();
      if ($this->request->is('post')) {
        $zktecoUser = $this->ZktecoUsers->patchEntity($zktecoUser, $this->request->getData());

            // debug($this->request->getData());

            // die();
        if ($this->ZktecoUsers->save($zktecoUser)) {
          $this->Flash->success(__('The zkteco user has been saved.'));

          return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('The zkteco user could not be saved. Please, try again.'));
      }
      $this->set(compact('zktecoUser'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Zkteco User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
      $zktecoUser = $this->ZktecoUsers->get($id, [
        'contain' => [],
      ]);
      if ($this->request->is(['patch', 'post', 'put'])) {
        $zktecoUser = $this->ZktecoUsers->patchEntity($zktecoUser, $this->request->getData());
        if ($this->ZktecoUsers->save($zktecoUser)) {
          $this->Flash->success(__('The zkteco user has been saved.'));

          return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('The zkteco user could not be saved. Please, try again.'));
      }
      $this->set(compact('zktecoUser'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Zkteco User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
      $this->request->allowMethod(['post', 'delete']);
      $zktecoUser = $this->ZktecoUsers->get($id);
      if ($this->ZktecoUsers->delete($zktecoUser)) {
        $this->Flash->success(__('The zkteco user has been deleted.'));
      } else {
        $this->Flash->error(__('The zkteco user could not be deleted. Please, try again.'));
      }

      return $this->redirect(['action' => 'index']);
    }

    public function save()
    {

       //  die();
        $this->autoRender = false; //Avoid to render default
        $users = $this->request->getData();


        var_dump($users);

        die();

        foreach ($users as $user) {

        // var_dump($user);

        // die();

          $zktecoUser = $this->ZktecoUsers->newEntity();

          $zktecoUser = $this->ZktecoUsers->patchEntity($zktecoUser, [

            'uid' => $user['uid'],
            'id_number' => $user['ID Number'],
            'name' => $user['Name'],
            'privilege' => $user['Privilege']
          ]);

          $check_user_exist = $this->ZktecoUsers->find('list',['conditions' => [
            'id_number' => $user['ID Number']
          ]]);

          
          if($check_user_exist->count() === 0){
           if(!$this->ZktecoUsers->save($zktecoUser));
           echo "Error";

         }

       }

       echo "tout a et correct";

       return null;
     }




 }
