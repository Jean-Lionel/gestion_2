<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PlaningConges Controller
 *
 * @property \App\Model\Table\PlaningCongesTable $PlaningConges
 *
 * @method \App\Model\Entity\PlaningConge[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PlaningCongesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employes'],
        ];

        $key_word = $this->request->query('matricule');
        $planingConges = $this->paginate($this->PlaningConges,['limit' => 200]);

         $key_word = $this->request->query('matricule');

         if($key_word){
            

             $planingConges = $this->paginate($this->PlaningConges,
                [
                    'conditions' => [
                        'Employes.matricule' => $key_word,
                    ],
                    'limit' => 200]
             );
         }

        $this->set(compact('planingConges'));
    }

    /**
     * View method
     *
     * @param string|null $id Planing Conge id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $planingConge = $this->PlaningConges->get($id, [
            'contain' => ['Employes'],
        ]);

        $this->set('planingConge', $planingConge);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $planingConge = $this->PlaningConges->newEntity();
        if ($this->request->is('post')) {
            $planingConge = $this->PlaningConges->patchEntity($planingConge, $this->request->getData());
            if ($this->PlaningConges->save($planingConge)) {
                $this->Flash->success(__('The planing conge has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The planing conge could not be saved. Please, try again.'));
        }
        $employes = $this->PlaningConges->Employes->find('list', ['limit' => 200]);

         $key_word = $this->request->query('matricule');

         if($key_word){
             $employes = $this->PlaningConges->Employes->find('list', 
                [
                    'conditions' => ['matricule' => $key_word],
                    'limit' => 1
                ]);
         }
        $this->set(compact('planingConge', 'employes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Planing Conge id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $planingConge = $this->PlaningConges->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $planingConge = $this->PlaningConges->patchEntity($planingConge, $this->request->getData());
            if ($this->PlaningConges->save($planingConge)) {
                $this->Flash->success(__('The planing conge has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The planing conge could not be saved. Please, try again.'));
        }
        $employes = $this->PlaningConges->Employes->find('list', ['limit' => 200]);
        $this->set(compact('planingConge', 'employes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Planing Conge id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $planingConge = $this->PlaningConges->get($id);
        if ($this->PlaningConges->delete($planingConge)) {
            $this->Flash->success(__('The planing conge has been deleted.'));
        } else {
            $this->Flash->error(__('The planing conge could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
