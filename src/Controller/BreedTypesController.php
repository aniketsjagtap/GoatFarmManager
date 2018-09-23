<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;

/**
 * BreedTypes Controller
 *
 * @property \App\Model\Table\BreedTypesTable $BreedTypes
 *
 * @method \App\Model\Entity\BreedType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BreedTypesController extends AppController
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
        $breedTypes = $this->paginate($this->BreedTypes);

        $this->set(compact('breedTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Breed Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $breedType = $this->BreedTypes->get($id, [
            'contain' => []
        ]);

        $this->set('breedType', $breedType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $breedType = $this->BreedTypes->newEntity();
        if ($this->request->is('post')) {
            $breedType = $this->BreedTypes->patchEntity($breedType, $this->request->getData());
            if ($this->BreedTypes->save($breedType)) {
                $this->Flash->success(__('The breed type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The breed type could not be saved. Please, try again.'));
        }
        $this->set(compact('breedType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Breed Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $breedType = $this->BreedTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $breedType = $this->BreedTypes->patchEntity($breedType, $this->request->getData());
            if ($this->BreedTypes->save($breedType)) {
                $this->Flash->success(__('The breed type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The breed type could not be saved. Please, try again.'));
        }
        $this->set(compact('breedType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Breed Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $breedType = $this->BreedTypes->get($id);
        if ($this->BreedTypes->delete($breedType)) {
            $this->Flash->success(__('The breed type has been deleted.'));
        } else {
            $this->Flash->error(__('The breed type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
