<?php
namespace App\Controller;

use App\Controller\AppController;

use Cake\ORM\TableRegistry;

/**
 * Animals Controller
 *
 * @property \App\Model\Table\AnimalsTable $Animals
 *
 * @method \App\Model\Entity\Animal[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AnimalsController extends AppController
{

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
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Farms', 'BreedTypes', 'AnimalTypes', 'Statuses'],
			 'conditions' => ['Animals.farm_id'=>$this->user->farm_id]
        ];
        $animals = $this->paginate($this->Animals);

        $this->set(compact('animals'));
    }

    /**
     * View method
     *
     * @param string|null $id Animal id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $animal = $this->Animals->get($id, [
            'contain' => ['Farms', 'BreedTypes', 'AnimalTypes',  'Statuses', 'AnimalWeights', 'AnimalItems', 'MedicalHistories', 'MilkCollections']
        ]);

        $this->set('animal', $animal);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        if (!($this->Auth->user())) {
            return $this->redirect($this->Auth->logout());
        }
        $animal = $this->Animals->newEntity();
        $usersTable = TableRegistry::get('Users');

        $usersTable->newEntity();
        $user= $usersTable->get($this->Auth->user('id'));
       
        
        if ($this->request->is('post')) {
          //  var_dump($_POST);
            $animal = $this->Animals->patchEntity($animal, $this->request->getData());
            $animal->farm_id = $user->farm_id;
            $animal->femaleBreedType_id = $_POST['femaleBreedType_id'];
            $animal->maleBreedType_id = $_POST['maleBreedType_id'];
        //    var_dump( $animal->farm_id);
          //  var_dump($this->Animals->save($animal));
            if ($this->Animals->save($animal)) {
                $this->Flash->success(__('The animal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }

            /*if($animal->errors()){
                $error_msg = [];
                foreach( $animal->errors() as $errors){
                    if(is_array($errors)){
                        foreach($errors as $error){
                            $error_msg[]    =   $error;
                        }
                    }else{
                        $error_msg[]    =   $errors;
                    }
                }

                if(!empty($error_msg)){
                    $this->Flash->error(
                        __("Please fix the following error(s):".implode("\n \r", $error_msg))
                    );
                }
            }*/
            $this->Flash->error(__('The animal could not be saved. Please, try again.'));
        }
        
    //var_dump($user->farm_id);
            
      //  $farms = $this->Animals->Farms->find('list', ['limit' => 200]);
        $breedTypes = $this->Animals->BreedTypes->find('list', ['limit' => 200]);
        $animalTypes = $this->Animals->AnimalTypes->find('list', ['limit' => 200]);
        
        $statuses = $this->Animals->Statuses->find('list', ['limit' => 200]);
        $this->set(compact('animal',  'breedTypes', 'animalTypes', 'statuses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Animal id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $animal = $this->Animals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $animal = $this->Animals->patchEntity($animal, $this->request->getData());
            if ($this->Animals->save($animal)) {
                $this->Flash->success(__('The animal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The animal could not be saved. Please, try again.'));
        }
        $farms = $this->Animals->Farms->find('list', ['limit' => 200]);
        $breedTypes = $this->Animals->BreedTypes->find('list', ['limit' => 200]);
        $animalTypes = $this->Animals->AnimalTypes->find('list', ['limit' => 200]);
        $maleParentBreedTypes = $this->Animals->MaleParentBreedTypes->find('list', ['limit' => 200]);
        $femaleParentBreedTypes = $this->Animals->FemaleParentBreedTypes->find('list', ['limit' => 200]);
        $statuses = $this->Animals->Statuses->find('list', ['limit' => 200]);
        $this->set(compact('animal', 'farms', 'breedTypes', 'animalTypes', 'maleParentBreedTypes', 'femaleParentBreedTypes', 'statuses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Animal id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $animal = $this->Animals->get($id);
        if ($this->Animals->delete($animal)) {
            $this->Flash->success(__('The animal has been deleted.'));
        } else {
            $this->Flash->error(__('The animal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
