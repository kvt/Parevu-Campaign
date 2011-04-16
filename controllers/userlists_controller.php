<?php
class UserlistsController extends AppController {

	var $name = 'Userlists';

	function index() {
		$this->Userlist->recursive = 0;
		$this->set('userlists', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid userlist', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('userlist', $this->Userlist->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
		    $this->data['Userlist']['user_id'] = $this->Auth->user('id');
			$this->Userlist->create();
			if ($this->Userlist->save($this->data)) {
				$this->Session->setFlash(__('The userlist has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The userlist could not be saved. Please, try again.', true));
			}
		}
		/*$users = $this->Userlist->User->find('list');
		$subscribers = $this->Userlist->Subscriber->find('list');
		$campaigns = $this->Userlist->Campaign->find('list');
		$this->set(compact('users', 'subscribers', 'campaigns')); */
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid userlist', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Userlist->save($this->data)) {
				$this->Session->setFlash(__('The userlist has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The userlist could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Userlist->read(null, $id);
		}
		/*$users = $this->Userlist->User->find('list');
		$subscribers = $this->Userlist->Subscriber->find('list');
		$campaigns = $this->Userlist->Campaign->find('list');
		$this->set(compact('users', 'subscribers', 'campaigns')); */
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for userlist', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Userlist->delete($id)) {
			$this->Session->setFlash(__('Userlist deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Userlist was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Userlist->recursive = 0;
		$this->set('userlists', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid userlist', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('userlist', $this->Userlist->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Userlist->create();
			if ($this->Userlist->save($this->data)) {
				$this->Session->setFlash(__('The userlist has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The userlist could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Userlist->User->find('list');
		$subscribers = $this->Userlist->Subscriber->find('list');
		$campaigns = $this->Userlist->Campaign->find('list');
		$this->set(compact('users', 'subscribers', 'campaigns'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid userlist', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Userlist->save($this->data)) {
				$this->Session->setFlash(__('The userlist has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The userlist could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Userlist->read(null, $id);
		}
		$users = $this->Userlist->User->find('list');
		$subscribers = $this->Userlist->Subscriber->find('list');
		$campaigns = $this->Userlist->Campaign->find('list');
		$this->set(compact('users', 'subscribers', 'campaigns'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for userlist', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Userlist->delete($id)) {
			$this->Session->setFlash(__('Userlist deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Userlist was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
