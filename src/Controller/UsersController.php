<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
	public function initialize()
	{
		parent::initialize();
		$this->Auth->allow(['logout','add']);
	}

	public function login()
	{
		$this->viewBuilder()->setLayout('login_edit');
		if ($this->request->is('post')) {
			$user = $this->Auth->identify();
			if ($user) {
				$this->Auth->setUser($user);
				return $this->redirect($this->Auth->redirectUrl([
					'controller' => 'Users', 'action' => 'index'	
					]));
			}
			$this->Flash->error('Your username or password is incorrect.');
		}
	}
	public function logout()
	{
		$this->viewBuilder()->setLayout('login_edit');
		$this->Flash->success('You are now logged out.');
		return $this->redirect($this->Auth->logout());
	}

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
		if (!($this->Auth->user())) {
			return $this->redirect($this->Auth->logout());
		}
        $this->paginate = [
            'contain' => ['Farms', 'Roles', 'Statuses'],
			 'conditions' => ['Users.farm_id'=>$this->Users->get($this->Auth->user('id'))->farm_id]
        ];
		//var_dump($this->Users->get($this->Auth->user('id'))->farm_id);
        $users = $this->paginate($this->Users);
		//var_dump($users);
        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
		if (!($this->Auth->user())) {
			return $this->redirect($this->Auth->logout());
		}
		
			$user = $this->Users->get($id, [
				'contain' => ['Farms', 'Roles', 'Statuses'],
				'conditions' => ['Users.farm_id'=>$this->Users->get($this->Auth->user('id'))->farm_id]
			]);
			
			$this->set('user', $user);
		
		
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->viewBuilder()->setLayout('register_edit');
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
		//var_dump($_POST);
			// if (empty($_POST['Farm_name'])) {
				// $this->Flash->error(__('Farm Name Can Not Be Empty !!!'));
			// }
            $user = $this->Users->patchEntity($user, $this->request->getData());
			$farmsTable = TableRegistry::get('Farms');
			$farm = $farmsTable->newEntity();

			$farm->name = $_POST['Farm_name'];
			$farm->animal_limit = 10;
			$farm->status_id = 1;
			$farm->license_id = 2;
			
			$user->role_id = 3;
			$user->status_id = 1;
			
			if ($farmsTable->save($farm)) {
				// The $article entity contains the id now
				$user->farm_id = $farm->id;
			
				if (($this->Users->save($user))&&($user->farm_id)) {
					
					$this->Flash->success(__('The user has been saved.'));
					
					return $this->redirect(['action' => 'login']);
				}
			}
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
       // $farms = $this->Users->Farms->find('list', ['limit' => 200]);
        //$roles = $this->Users->Roles->find('list', ['limit' => 200]);
        //$statuses = $this->Users->Statuses->find('list', ['limit' => 200]);
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		if (!($this->Auth->user())) {
			return $this->redirect($this->Auth->logout());
		}
        $user = $this->Users->get($id, [
            'contain' => [],
				'conditions' => ['Users.farm_id'=>$this->Users->get($this->Auth->user('id'))->farm_id]
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $farms = $this->Users->Farms->find('list', ['limit' => 200]);
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $statuses = $this->Users->Statuses->find('list', ['limit' => 200]);
        $this->set(compact('user', 'farms', 'roles', 'statuses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
		if (!($this->Auth->user())) {
			return $this->redirect($this->Auth->logout());
		}
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
