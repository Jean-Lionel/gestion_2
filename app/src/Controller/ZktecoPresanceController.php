<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

/**
 * ZktecoPresance Controller
 *
 * @property \App\Model\Table\ZktecoPresanceTable $ZktecoPresance
 *
 * @method \App\Model\Entity\ZktecoPresance[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ZktecoPresanceController extends AppController
{
    public function initialize(){
        parent::initialize();
        $this->loadModel('ZktecoUsers');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $zktecoPresance = $this->paginate($this->ZktecoPresance,['order' => ['date_day' => 'DESC', 'LIMIT'=>200]]);

        $nom = $this->request->query('nom');

        if($nom){
            $zktecoPresance = $this->paginate($this->ZktecoPresance,[
                'conditions'=>['name LIKE' => '%'.$nom.'%'],
                'order' => ['date_day' => 'DESC', 'LIMIT'=>20]]);
        }

        $this->set(compact('zktecoPresance'));
    }

    /**
     * View method
     *
     * @param string|null $id Zkteco Presance id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $zktecoPresance = $this->ZktecoPresance->get($id, [
            'contain' => [],
        ]);

        $this->set('zktecoPresance', $zktecoPresance);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $zktecoPresance = $this->ZktecoPresance->newEntity();
        if ($this->request->is('post')) {
            $zktecoPresance = $this->ZktecoPresance->patchEntity($zktecoPresance, $this->request->getData());
            if ($this->ZktecoPresance->save($zktecoPresance)) {
                $this->Flash->success(__('The zkteco presance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zkteco presance could not be saved. Please, try again.'));
        }
        $this->set(compact('zktecoPresance'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Zkteco Presance id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $zktecoPresance = $this->ZktecoPresance->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $zktecoPresance = $this->ZktecoPresance->patchEntity($zktecoPresance, $this->request->getData());
            if ($this->ZktecoPresance->save($zktecoPresance)) {
                $this->Flash->success(__('The zkteco presance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zkteco presance could not be saved. Please, try again.'));
        }
        $this->set(compact('zktecoPresance'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Zkteco Presance id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $zktecoPresance = $this->ZktecoPresance->get($id);
        if ($this->ZktecoPresance->delete($zktecoPresance)) {
            $this->Flash->success(__('The zkteco presance has been deleted.'));
        } else {
            $this->Flash->error(__('The zkteco presance could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }



    // id_number`, `uid`, `date_day`, `day_time`, `name`, `Status`, `Verification`


    // TO DO in the nigth 16th Agust 2020

     public function userlogs(){


      $datas = $this->request->getData();

      

      foreach ($datas['data'] as $data) {
        # code...
        if(is_array($data)){
          foreach ($data as $user) {

           

           $zktecoUser = $this->ZktecoPresance->newEntity();
           $zktecoUser = $this->ZktecoPresance->patchEntity($zktecoUser, [

            'id_number' => $user['ID Number'],
            'name' => $user['Name'],
            'day_time' => $user['Time'],
            'date_day' => $user['Date'],
            'Status' => $user['Status'],
            'Verification' => $user['Verification'],
          ]);


           $check_user_exist = $this->ZktecoPresance->find('list',['conditions' => [
            'id_number' => $user['ID Number'],
            'date_day' => $user['Date'],
            'day_time' => $user['Time']
          ]]);

           
           if($check_user_exist->count() === 0){
             if(!$this->ZktecoPresance->save($zktecoUser));
             echo "Error";

           }
           
         }
       }else{
         $zktecoUser = $this->ZktecoPresance->newEntity();
       }
     }

     return $this->redirect(['action' => 'index']);

   }

   public function rapport()
   {

    // Rechercher la semaine par defaut

    $get_date = $this->request->query('edate');

    $semaine = $this->Myfonction->check_curent_week($get_date);

    // dd($semaine);

    // "monday" => "2020-08-31"
    // "freeday" => "2020-09-04"

    $monday = $semaine['monday'];
    $freeday = $semaine['sunday'];

    // dd($semaine);

    $connection = ConnectionManager::get('default');

    $users = $this->ZktecoUsers->find('all',['fields'=>['id_number','name']]);

    $rapports =  [];

    foreach ($users as $key => $value) {

    $result = $connection->execute('SELECT COUNT(DISTINCT date_day) as nbre_jour FROM zkteco_presance WHERE id_number='.$value->id_number.' and date_day BETWEEN "'. $monday.'" and "'.$freeday.'"')->fetchAll('assoc');

        $value['presence'] = $result[0]['nbre_jour'];

        $rapports[] = $value;
    }


    $this->set(compact('rapports'));
       
   }
}
