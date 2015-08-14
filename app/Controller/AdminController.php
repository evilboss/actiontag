<?php
/**
 * Static content controller.
 *
 * This file will render views from views/user/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');
App::uses('HttpSocket', 'Network/Http');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/users-controller.html
 */
class AdminController extends AppController {

     public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->deny();
    }
    
    
    public function index(){
        $this->layout = 'admin';
        $this->Admin->useTable = 'actiontags';
        $this->set('actiontags', $this->Admin->query("SELECT * FROM actiontags ORDER BY active DESC,status DESC, site_id ASC, id ASC;"));
    }
    public function logs(){
        $this->layout = 'admin';
        $this->Admin->useTable = 'logs';
        $this->set('logs', $this->Admin->query("SELECT * FROM logs ORDER BY created DESC;"));
    }
    public function AddUser(){
        $this->layout = 'admin';
        $this->Admin->useTable = 'users';
        if ($this->request->is('post')) {
                 
            $this->Admin->create();
            if ($this->Admin->save($this->request->data)) {
                $this->Session->setFlash(
                'The user has been created',
                'default',
                array('class' => 'pull-right alert-box')
            );
            } else {
                $this->Session->setFlash(__('The user could not be created. Please, try again.'));
                $this->Session->setFlash(
                'The user could not be created. Please, try again.',
                'default',
                array('class' => 'pull-right alert-box')
            );
            }   
        }

    }
    public function AssignActiontag(){
        $this->layout = 'admin';
        $this->Admin->useTable = 'actiontags';
    }
    public function addactiontag() {
        $this->layout = 'admin';
        $this->Admin->useTable = 'users';
        
        
        if ($this->request->is('post')) {
            echo "<br><br><br><br><br>";
            debug($this->request->data);
        }
        
        $this->set('users', $this->Admin->query("SELECT * FROM users WHERE type <> 'admin' ORDER BY email ASC;"));
        $this->set('sites', $this->Admin->query("SELECT * FROM sites ;"));
    }
    public function viewUser(){
        $this->layout = 'admin';
        $this->Admin->useTable = 'users';
        $this->set('users', $this->Admin->query("SELECT * FROM users WHERE type <> 'admin' ORDER BY email ASC;"));
        $this->set('title', "Users");
        $this->set('viewType', "User");
        
        if (isset($this->request->query['admin'])){
            $this->set('users', $this->Admin->query("SELECT * FROM users WHERE type = 'admin' ORDER BY email ASC;"));
            $this->set('title', "Administrators");
        $this->set('viewType', "Admin");
        }
    }
}