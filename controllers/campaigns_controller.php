<?php
class CampaignsController extends AppController {

	var $name = 'Campaigns';
	var $helpers = array('Ajax', 'Javascript', 'Time', 'Fck');
    function beforeFilter() { 
        $ckeditorClass = 'ckeditor'; 
        $this->set('ckeditorClass', $ckeditorClass); 
        $ckfinderPath = $this->webroot.'js/ckfinder/'; 
        $this->set('ckfinderPath', $ckfinderPath); 
    } 	
	function index() {
		$this->Campaign->recursive = 0;
		$this->set('campaigns', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid campaign', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('campaign', $this->Campaign->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Campaign->create();
			if ($this->Campaign->save($this->data)) {
				$this->Session->setFlash(__('The campaign has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The campaign could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Campaign->User->find('list');
		$userlists = $this->Campaign->Userlist->find('list');
		$this->set(compact('users', 'userlists'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid campaign', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Campaign->save($this->data)) {
				$this->Session->setFlash(__('The campaign has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The campaign could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Campaign->read(null, $id);
		}
		$users = $this->Campaign->User->find('list');
		$userlists = $this->Campaign->Userlist->find('list');
		$this->set(compact('users', 'userlists'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for campaign', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Campaign->delete($id)) {
			$this->Session->setFlash(__('Campaign deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Campaign was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Campaign->recursive = 0;
		$this->set('campaigns', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid campaign', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('campaign', $this->Campaign->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Campaign->create();
			if ($this->Campaign->save($this->data)) {
				$this->Session->setFlash(__('The campaign has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The campaign could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Campaign->User->find('list');
		$userlists = $this->Campaign->Userlist->find('list');
		$this->set(compact('users', 'userlists'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid campaign', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Campaign->save($this->data)) {
				$this->Session->setFlash(__('The campaign has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The campaign could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Campaign->read(null, $id);
		}
		$users = $this->Campaign->User->find('list');
		$userlists = $this->Campaign->Userlist->find('list');
		$this->set(compact('users', 'userlists'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for campaign', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Campaign->delete($id)) {
			$this->Session->setFlash(__('Campaign deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Campaign was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
