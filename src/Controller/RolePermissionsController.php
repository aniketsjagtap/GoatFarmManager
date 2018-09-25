<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;

/**
 * RolePermissions Controller
 *
 * @property \App\Model\Table\RolePermissionsTable $RolePermissions
 *
 * @method \App\Model\Entity\RolePermission[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RolePermissionsController extends AppController
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
            'contain' => ['Roles', 'Permissions']
        ];
        $rolePermissions = $this->paginate($this->RolePermissions);

        $this->set(compact('rolePermissions'));
    }

    /**
     * View method
     *
     * @param string|null $id Role Permission id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rolePermission = $this->RolePermissions->get($id, [
            'contain' => ['Roles', 'Permissions']
        ]);

        $this->set('rolePermission', $rolePermission);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rolePermission = $this->RolePermissions->newEntity();
        if ($this->request->is('post')) {
            $rolePermission = $this->RolePermissions->patchEntity($rolePermission, $this->request->getData());
            if ($this->RolePermissions->save($rolePermission)) {
                $this->Flash->success(__('The role permission has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The role permission could not be saved. Please, try again.'));
        }
        $roles = $this->RolePermissions->Roles->find('list', ['limit' => 200]);
        $permissions = $this->RolePermissions->Permissions->find('list', ['limit' => 200]);
        $this->set(compact('rolePermission', 'roles', 'permissions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Role Permission id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rolePermission = $this->RolePermissions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rolePermission = $this->RolePermissions->patchEntity($rolePermission, $this->request->getData());
            if ($this->RolePermissions->save($rolePermission)) {
                $this->Flash->success(__('The role permission has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The role permission could not be saved. Please, try again.'));
        }
        $roles = $this->RolePermissions->Roles->find('list', ['limit' => 200]);
        $permissions = $this->RolePermissions->Permissions->find('list', ['limit' => 200]);
        $this->set(compact('rolePermission', 'roles', 'permissions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Role Permission id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rolePermission = $this->RolePermissions->get($id);
        if ($this->RolePermissions->delete($rolePermission)) {
            $this->Flash->success(__('The role permission has been deleted.'));
        } else {
            $this->Flash->error(__('The role permission could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
