<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Autologin Controller
 *
 * @property \App\Model\Table\AutologinTable $Autologin
 *
 * @method \App\Model\Entity\Autologin[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AutologinController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $autologin = $this->paginate($this->Autologin);

        $this->set(compact('autologin'));
    }

    /**
     * View method
     *
     * @param string|null $id Autologin id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $autologin = $this->Autologin->get($id, [
            'contain' => []
        ]);

        $this->set('autologin', $autologin);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $autologin = $this->Autologin->newEntity();
        if ($this->request->is('post')) {
            $autologin = $this->Autologin->patchEntity($autologin, $this->request->getData());
            if ($this->Autologin->save($autologin)) {
                $this->Flash->success(__('The autologin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The autologin could not be saved. Please, try again.'));
        }
        $this->set(compact('autologin'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Autologin id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $autologin = $this->Autologin->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $autologin = $this->Autologin->patchEntity($autologin, $this->request->getData());
            if ($this->Autologin->save($autologin)) {
                $this->Flash->success(__('The autologin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The autologin could not be saved. Please, try again.'));
        }
        $this->set(compact('autologin'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Autologin id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $autologin = $this->Autologin->get($id);
        if ($this->Autologin->delete($autologin)) {
            $this->Flash->success(__('The autologin has been deleted.'));
        } else {
            $this->Flash->error(__('The autologin could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
