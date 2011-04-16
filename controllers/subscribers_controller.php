<?php
class SubscribersController extends AppController {

	var $name = 'Subscribers';

	function index() {
	
        $this->paginate['Subscriber'] = array(
        'limit' => 30, 'conditions' => array(), 
        'fields' => array('id,email,active,first_name,last_name,username'), 
        'joins' => array(array(
            'table' => 'subscribers_users', 
            'type' => 'INNER', 
            'alias' => 'SubscriberUser', 
            'conditions' => array('Subscriber.id = SubscriberUser.subscriber_id', 'SubscriberUser.user_id = '.$this->Auth->user('id'))))
        );

		$this->Subscriber->recursive = 0;
		$this->set('subscribers', $this->paginate('Subscriber'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid subscriber', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('subscriber', $this->Subscriber->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Subscriber->create();
			$this->data['User']['User'][] = $this->Auth->user('id');
			if ($this->Subscriber->save($this->data)) {
				$this->Session->setFlash(__('The subscriber has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subscriber could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid subscriber', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Subscriber->save($this->data)) {
				$this->Session->setFlash(__('The subscriber has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subscriber could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Subscriber->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for subscriber', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Subscriber->delete($id)) {
			$this->Session->setFlash(__('Subscriber deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Subscriber was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Subscriber->recursive = 0;
		$this->set('subscribers', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid subscriber', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('subscriber', $this->Subscriber->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Subscriber->create();
			if ($this->Subscriber->save($this->data)) {
				$this->Session->setFlash(__('The subscriber has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subscriber could not be saved. Please, try again.', true));
			}
		}
		$userlists = $this->Subscriber->Userlist->find('list');
		$this->set(compact('userlists'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid subscriber', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Subscriber->save($this->data)) {
				$this->Session->setFlash(__('The subscriber has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subscriber could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Subscriber->read(null, $id);
		}
		$userlists = $this->Subscriber->Userlist->find('list');
		$this->set(compact('userlists'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for subscriber', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Subscriber->delete($id)) {
			$this->Session->setFlash(__('Subscriber deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Subscriber was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function import() {
		if (!empty($this->data)) {
		ob_start();
	//$this->data['Subscriber']['activated'] = 1;
    //$this->data['UsersSubscriber']['UsersSubscriber'][] = $this->Auth->user('id');
	
	
            $row = 0;
            if (($handle = fopen($this->data['Subscriber']['csv_file']['tmp_name'], "r")) !== FALSE) {
                $this->data['User']['User'][] = $this->Auth->user('id');
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    $num = count($data);
                    $this->data['Subscriber']['email'] = $data[0];
                    $this->data['Subscriber']['active'] = 1;
	                
		            $this->Subscriber->create();
		            if($ret = $this->Subscriber->save($this->data))
                        $row++;
                     //pr($this->data); die();    
		           
                }
                fclose($handle);
			    $this->Session->setFlash(__($row .' subscriber(s) has been imported', true));
			    $this->redirect(array('action' => 'index'));
            }
	    }
	    $userlists = $this->Subscriber->Userlist->find('list');
		$this->set(compact('userlists'));
	    
	}
}
?>
