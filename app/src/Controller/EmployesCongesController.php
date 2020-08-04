<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmployesConges Controller
 *
 * @property \App\Model\Table\EmployesCongesTable $EmployesConges
 *
 * @method \App\Model\Entity\EmployesConge[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployesCongesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employes', 'Conges'],
        ];
        $employesConges = $this->paginate($this->EmployesConges);

        $this->set(compact('employesConges'));
    }

    /**
     * View method
     *
     * @param string|null $id Employes Conge id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employesConge = $this->EmployesConges->get($id, [
            'contain' => ['Employes', 'Conges'],
        ]);

        $this->set('employesConge', $employesConge);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employesConge = $this->EmployesConges->newEntity();
        if ($this->request->is('post')) {
            $employesConge = $this->EmployesConges->patchEntity($employesConge, $this->request->getData());
            if ($this->EmployesConges->save($employesConge)) {
                $this->Flash->success(__('The employes conge has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employes conge could not be saved. Please, try again.'));
        }
        $employes = $this->EmployesConges->Employes->find('list', ['limit' => 200]);
        $conges = $this->EmployesConges->Conges->find('list', ['limit' => 200]);
        $this->set(compact('employesConge', 'employes', 'conges'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employes Conge id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employesConge = $this->EmployesConges->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employesConge = $this->EmployesConges->patchEntity($employesConge, $this->request->getData());
            if ($this->EmployesConges->save($employesConge)) {
                $this->Flash->success(__('The employes conge has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employes conge could not be saved. Please, try again.'));
        }
        $employes = $this->EmployesConges->Employes->find('list', ['limit' => 200]);
        $conges = $this->EmployesConges->Conges->find('list', ['limit' => 200]);
        $this->set(compact('employesConge', 'employes', 'conges'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employes Conge id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employesConge = $this->EmployesConges->get($id);
        if ($this->EmployesConges->delete($employesConge)) {
            $this->Flash->success(__('The employes conge has been deleted.'));
        } else {
            $this->Flash->error(__('The employes conge could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
