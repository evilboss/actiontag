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
class UsersController extends AppController {

     public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->deny();
        $this->Auth->allow('signup');
    }
    
 public function logout() {
        $this->autoRender = false;
        $this->autoLayout = false;
     
        $this->redirect($this->Auth->logout());
    }

    public function signup(){
        $this->layout = 'user';
        $this->User->useTable = 'users';
        if ($this->request->is('post')) {
                 
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(
                    'The user has been created',
                    'default',
                    array('class' => 'pull-right alert-box')
                );
                $id = $this->User->id;
                $this->request->data['User'] = array_merge(
                    $this->request->data['User'],
                    array('id' => $id)
                );
                unset($this->request->data['User']['password']);
                $this->Auth->login($this->request->data['User']);
                return $this->redirect($this->Auth->redirectUrl());
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
    
    public function login() {
        
        $this->layout = 'user';
        
        
        //if already logged-in, redirect
        if($this->Session->check('Auth.User')){
            $this->redirect(array('controller' => 'users','action' => 'index'));
        }
         
        if($this->request->is('post')) {
            
            if ($this->Auth->login($this->request->data)) {
               $this->redirect(array('controller' => 'users','action' => 'index'));
            } else {
                echo "<br><br><br><br><br><br><br><br><br><br><br><br><br>";
                debug($this->Auth);
                $this->Session->setFlash(__('Invalid username or password'));
            }
        }
    }
    
//    public function login() {
//         
//        //if already logged-in, redirect
//        if($this->Session->check('Auth.User')){
//            $this->redirect(array('action' => 'index'));      
//        }
//         
//        // if we get the post information, try to authenticate
//        if ($this->request->is('post')) {
//            if ($this->Auth->login()) {
//                $this->Session->setFlash(__('Welcome, '. $this->Auth->user('username')));
//                $this->redirect($this->Auth->redirectUrl());
//            } else {
//                $this->Session->setFlash(__('Invalid username or password'));
//            }
//        } 
//    }
//    
    /**
     * index
     *
     * display user interface
     */
    
    public function index() {
        $this->layout = 'user';
        $this->set('users', $this->User->find('all'));
        $this->set('actiontags', $this->User->query("SELECT * FROM actiontags GROUP BY id ORDER BY active DESC, status DESC, created ASC;"));
        $this->set('sites', $this->User->query("SELECT * FROM sites;"));        
    }
    
    public function getTagInfo(){
        $this->autoRender = false;
        $this->autoLayout = false;
        $request = $this->request->pass[0];
        
        $query = $this->User->query("SELECT a.*,s.name FROM actiontags AS a JOIN sites AS s ON a.site_id = s.id WHERE a.id =".$request.";");
        $queryLogCount = $this->User->query("SELECT count(id) AS count  FROM logs WHERE tag_id =".$request."; ");
        $queryLog = $this->User->query("SELECT created as lastUsed  FROM logs WHERE tag_id =".$request." ORDER BY created DESC LIMIT 1; ");
        
//            debug($query[0]);
//            debug($queryLogCount[0][0]);
//            debug($queryLog);
//            debug($queryLog[0]['logs']);
            
        if (isset($queryLog[0]['logs'])){
            $query[0]['l'] = $queryLogCount[0][0]+$queryLog[0]['logs'];
        }else{
            $queryLog[0]['logs']['lastUsed'] = "0";
            $query[0]['l'] = $queryLogCount[0][0]+$queryLog[0]['logs'];
        }
            
//            debug($query[0]);
        if ($query != null){
            
            $result = json_encode($query[0]);
            echo ($result);
        }
    }
    
    public function getAllTagInfo(){
        $this->autoRender = false;
        $this->autoLayout = false;
        
        $query = $this->User->query("SELECT * FROM actiontags GROUP BY id ORDER BY active DESC, status DESC, created ASC;");
        if ($query != null){
            //debug($query);
            $result = json_encode($query);
            echo ($result);
        }
    }
    
    public function getTagSearchInfo(){
        $this->autoRender = false;
        $this->autoLayout = false;
        
        $string = $this->request->query['query'];
        //debug($string);
        $query = $this->User->query("SELECT * FROM actiontags WHERE id like '%$string%' OR name like '%$string%' GROUP BY id ORDER BY active  DESC, status DESC;");
        if ($query != null){
            //debug($query);
            $result = json_encode($query);
            echo ($result);
        }else{
            $query = $this->User->query("SELECT * FROM actiontags GROUP BY id ORDER BY active  DESC, status DESC;");
            $result = json_encode($query);
            echo ($result);
        }
    }
    
    public function gteqrcode() {
        $this->autoRender = false;
        $this->autoLayout = false;
        require_once 'Cake/phpqrcode/qrlib.php'; 
        $param = $this->request->pass[0];
            
        $codeText = $_SERVER['HTTP_HOST']."/".$param; 

        QRcode::png($codeText);

        $raw = join("<br/>", $text); 
    }
    
    public function tagEdit() {
        $this->autoRender = false;
        $this->autoLayout = false;
        $json = $this->request->query;
        
        $redirect = "";
        $sms = "";
        $email = "";
        $message = "";
        
        
            $json['active'] = 'true';
        if($json['type'] == "" ){
            $json['active'] = 'false';
           $json['status'] = 'false';
        }
        
        if(isset($json['redirect'])){
            $redirect =  "redirect = '".$json['redirect']."', ";
        }
        if(isset($json['sms_to'])){
            $sms = "sms_to = '" .$json['sms_to']."', "
                 . "sms_msg = '".$json['sms_msg']."', ";
        }
        if(isset($json['email_to'])){
            $email = "email_to = '"  .$json['email_to']."', "
                   . "email_from = '".$json['email_from']."', "
                   . "email_subj = '".$json['email_subj']."', "
                   . "email_body = '".$json['email_body']."', ";
        }
        if(isset($json['msg_success'])){
            $message .= "msg_success = '".$json['msg_success']." ', ";
        }
        if(isset($json['msg_error'])){
            $message .= "msg_error = '".$json['msg_error']." '  ";
        }
            
        $query = "UPDATE "
                . "actiontags "
                . "SET "
                    . "status = ".$json['status'].", "
                    . "type = '".$json['type']."', "
                    . "name = '".$json['name']."', "
                    . "active = ".$json['active'].", "
                    . "is_redir = '".$json['is_redir']."', "
                    . $redirect
                    . $sms
                    . $email
                    . $message
                . "WHERE "
                    . "id = ".$json['id'];
//        echo $query;
//        debug($json);
//       exit;
        $this->User->query($query);

        echo "true";
        
    }
    
    public function tagActivate() {
        $this->autoRender = false;
        $this->autoLayout = false;
        $id = $this->request->query['id'];
        
        $query = "UPDATE actiontags SET active = 1, status = 1,type = 'redir_to_url', redirect = 'http://www.actiontag.io'  WHERE id = $id";

        $this->User->query($query);

        return true;
        
    }
}