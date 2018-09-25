<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PersonPermissions Controller
 *
 * @property \App\Model\Table\PersonPermissionsTable $PersonPermissions
 *
 * @method \App\Model\Entity\PersonPermission[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PersonPermissionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function initialize()
    {
        parent::initialize();
       if (!($this->Auth->user())) {
            return $this->redirect($this->Auth->logout());
        }
         $usersTable = TableRegistry::get('Users');

        $usersTable->newEntity();
        $this->user= $usersTable->get($this->Auth->user('id'));
    }
    public function index()
    {
        $this->paginate = [
            'contain' => ['People', 'Permissions']
        ];
        $personPermissions = $this->paginate($this->PersonPermissions);

        $this->set(compact('personPermissions'));
    }

    /**
     * View method
     *
     * @param string|null $id Person Permission id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $personPermission = $this->PersonPermissions->get($id, [
            'contain' => ['People', 'Permissions']
        ]);

        $this->set('personPermission', $personPermission);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $personPermission = $this->PersonPermissions->newEntity();
        if ($this->request->is('post')) {
            $personPermission = $this->PersonPermissions->patchEntity($personPermission, $this->request->getData());
            if ($this->PersonPermissions->save($personPermission)) {
                $this->Flash->success(__('The person permission has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The person permission could not be saved. Please, try again.'));
        }
        $people = $this->PersonPermissions->People->find('list', ['limit' => 200]);
        $permissions = $this->PersonPermissions->Permissions->find('list', ['limit' => 200]);
        $this->set(compact('personPermission', 'people', 'permissions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Person Permission id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $personPermission = $this->PersonPermissions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $personPermission = $this->PersonPermissions->patchEntity($personPermission, $this->request->getData());
            if ($this->PersonPermissions->save($personPermission)) {
                $this->Flash->success(__('The person permission has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The person permission could not be saved. Please, try again.'));
        }
        $people = $this->PersonPermissions->People->find('list', ['limit' => 200]);
        $permissions = $this->PersonPermissions->Permissions->find('list', ['limit' => 200]);
        $this->set(compact('personPermission', 'people', 'permissions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Person Permission id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $personPermission = $this->PersonPermissions->get($id);
        if ($this->PersonPermissions->delete($personPermission)) {
            $this->Flash->success(__('The person permission has been deleted.'));
        } else {
            $this->Flash->error(__('The person permission could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
