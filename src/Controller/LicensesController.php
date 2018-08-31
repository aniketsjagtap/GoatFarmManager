<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Licenses Controller
 *
 * @property \App\Model\Table\LicensesTable $Licenses
 *
 * @method \App\Model\Entity\License[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LicensesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $licenses = $this->paginate($this->Licenses);

        $this->set(compact('licenses'));
    }

    /**
     * View method
     *
     * @param string|null $id License id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $license = $this->Licenses->get($id, [
            'contain' => ['Farms', 'Persons', 'Transactions']
        ]);

        $this->set('license', $license);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $license = $this->Licenses->newEntity();
        if ($this->request->is('post')) {
            $license = $this->Licenses->patchEntity($license, $this->request->getData());
            if ($this->Licenses->save($license)) {
                $this->Flash->success(__('The license has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The license could not be saved. Please, try again.'));
        }
        $this->set(compact('license'));
    }

    /**
     * Edit method
     *
     * @param string|null $id License id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $license = $this->Licenses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $license = $this->Licenses->patchEntity($license, $this->request->getData());
            if ($this->Licenses->save($license)) {
                $this->Flash->success(__('The license has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The license could not be saved. Please, try again.'));
        }
        $this->set(compact('license'));
    }

    /**
     * Delete method
     *
     * @param string|null $id License id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $license = $this->Licenses->get($id);
        if ($this->Licenses->delete($license)) {
            $this->Flash->success(__('The license has been deleted.'));
        } else {
            $this->Flash->error(__('The license could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
