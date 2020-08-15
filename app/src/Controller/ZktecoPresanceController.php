<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ZktecoPresance Controller
 *
 * @property \App\Model\Table\ZktecoPresanceTable $ZktecoPresance
 *
 * @method \App\Model\Entity\ZktecoPresance[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ZktecoPresanceController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $zktecoPresance = $this->paginate($this->ZktecoPresance);

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
}
