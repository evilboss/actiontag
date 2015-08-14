<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
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
App::uses('CakeEmail', 'Network/Email');
/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {


/**
 * This controller does not use a model
 *
 * @var array
 */
    public $uses = array();
    
    /**
     * index
     *
     * display info about the ActionTag.io.
     */
    public function devcamp(){
        $this->layout = 'landing';
        if ($this->request->is('post')) {
            //debug($_POST);
            $Email = new CakeEmail();
            $Email->from('DevCamp@actiontag.io')
                ->to('joinus@cloudstaff.com')
                ->bcc('jetherg@cloudstaff.com')
                ->subject('Message from DevCamp Contact Us :'.$this->request->data['name'])
                ->sender('admin@actiontag.io', 'Actiontag.io')
                ->send($this->request->data['name']."\n".$this->request->data['email']."\n\n".$this->request->data['message']."\n\n\n--\nActiontag.io powered by Cloudstaff");
            
              
//            $Email = new CakeEmail('gmail');
//            $Email->subject('ActionTag Message from '.$this->request->data['name'].', '.$this->request->data['email']);
//            $Email->send('');
//            
            
            
            $this->Session->setFlash(
                'Message Sent',
                'default',
                array('class' => 'pull-right alert-box')
            );
        }
    }
    
    /**
     * index
     *
     * display info about the ActionTag.io.
     */
    public function index(){
        $this->layout = 'landing';
        if ($this->request->is('post')) {
            //debug($_POST);
            $Email = new CakeEmail();
            $Email->from(array($this->request->data['email']))
                ->to('jetherg@sonarlogic.biz')
                ->subject('Message From actiontag.io Contact Us :'.$this->request->data['name'])
                ->sender('admin@actiontag.io', 'Actiontag.io')
                ->send($this->request->data['message']);
            
              
//            $Email = new CakeEmail('gmail');
//            $Email->subject('ActionTag Message from '.$this->request->data['name'].', '.$this->request->data['email']);
//            $Email->send('');
//            
            
            
            $this->Session->setFlash(
                'Message Sent',
                'default',
                array('class' => 'alert-box')
            );
        }
    }
    
    /**
     * loadGUID
     *
     * function for Loading GUID and Redirecting to other function.
     */
    public function loadGUID(){
        $this->autoRender = false;
        $this->autoLayout = false;
        if (isset($this->request->pass[0]) && $this->request->pass[0] != "error" && $this->request->pass[0] != "success") {
            $GUID = $this->request->pass[0];
            
            $log_ip_address = $_SERVER['REMOTE_ADDR'];
            
            $tagArray = $this->Redirect->checkGUID($GUID);
            
            //check log
            $logRes = $this->Redirect->checkLog($log_ip_address,$tagArray['status']);
           
            if ($logRes['status']){
                $this->redirect(array(
                    'action' => '', 'error',
                    '?' => array(
                        'status' => $logRes['code']
                    )
                ));
            }
            $status = $tagArray['status'];
            $tag_id = isset($tagArray['tag_id'])?$tagArray['tag_id']:0;
            $this->Page->useTable = 'logs';
            $this->Page->query("INSERT INTO `logs`(`tag_id`, `ip_address`, `request_status`) VALUES ('$tag_id','$log_ip_address','$status')");
            
            
            
            if ($tagArray['status'] == 'valid'){
            
            //email
            if (in_array('send_email', $tagArray['type'])){
                $Email = new CakeEmail();
                $Email->from($tagArray['email']['from'])
                    ->to($tagArray['email']['to'])
                    ->subject($tagArray['email']['subj'])
                    ->sender('admin@actiontag.io', 'Actiontag.io')
                    ->send($tagArray['email']['body']);
            }
            //send sms
            if (in_array('send_sms', $tagArray['type'])){
                $smsRes = $this->Redirect->sendSMS($tagArray['sms']['to'],$tagArray['sms']['msg']);
            }else{
                if (in_array('send_email', $tagArray['type'])){
                    $smsRes['status'] = 'success';
                }else{
                    $smsRes['status'] = 'error';
                }
            }
            //redirect
            if (in_array('redir_to_url', $tagArray['type'])){
                return $this->redirect($tagArray['redirect']);
            }
            //show message
            $this->redirect(array(
                    'action' => '', $smsRes['status'],
                    '?' => array(
                        'id' => $tagArray['tag_id']
                    )
                ));
            }else{
                
                if (isset($tagArray['tag_id'])){
                    $this->redirect(array(
                        'action' => '', 'error',
                        '?' => array(
                            'id' => $tagArray['tag_id']
                        )
                    ));
                }else{
                    $this->redirect(array(
                        'action' => '', 'error'
                    ));
                }
            }
           
        }
    }
    
    /**
     * redirectToUrl
     *
     * function for redirecting GUID to the proper Url.
     */
    public function redirectToUrl(){
        $this->autoRender = false;
        $this->autoLayout = false;
        if (isset($this->request->pass[0]) && $this->request->pass[0] != "error") {
            $GUID = $this->request->pass[0];
            
            $log_ip_address = $_SERVER['REMOTE_ADDR'];
            
            $resultArr = $this->Redirect->check($GUID);
            $redirUrl  = $resultArr['redirUrl'];
            $isRedir   = $resultArr['isRedir'];
            $tag_id   = $resultArr['tag_id'];
            $status   = $resultArr['status'];
            
            $logRes = $this->Redirect->checkLog($log_ip_address,$status);
            if ($logRes['status']){
                $this->redirect(array(
                    'action' => '', 'error',
                    '?' => array(
                        'status' => $logRes['code']
                    )
                ));
            }
            
            $this->Page->useTable = 'logs';
            $this->Page->query("INSERT INTO `logs`(`tag_id`, `ip_address`, `request_status`) VALUES ('$tag_id','$log_ip_address','$status')");
        
            
            if ($isRedir) {
                return $this->redirect($redirUrl);
            } else {
                $result = $this->Redirect->checkSMS($redirUrl,$tag_id);
                $this->redirect(array(
                    'action' => '', $result['status'],
                    '?' => array(
                        'id' => $result['tag_id']
                    )
                ));
            }
        } else if (isset($this->request->pass[0]) && $this->request->pass[0] == "error") {
            echo "error";
        } else if (isset($this->request->pass[0]) && $this->request->pass[0] == "success") {
            echo "success";
        } else {
            echo "home";
        }
    }

    /**
     * displayError
     *
     * Display the error message
     */

    public function displayError() {
        $this->set('msg1', null);
        $this->set('msg2', null);
        $this->set('msg3', null);
        
        if(count($this->request->query) === 1 && array_key_exists('id', $this->request->query)){
            $tag_id = $this->request->query['id'] ? $this->request->query['id'] : 0;
            $this->Page->useTable = 'actiontags';
            $tag = $this->Page->query("SELECT * FROM actiontags WHERE id = $tag_id;");
            if ($tag[0]['actiontags']['active'] == false){
                $this->set('msg2', "Your Actiontag has not been activated yet.");
                $this->set('msg3', "Logon to the Actiontag Portal <br/> Select the Actiontag ID number and activate it.");
            } else if($tag[0]['actiontags']['status'] == false){
                $this->set('msg2', "This Actiontag is disabled.");
                $this->set('msg3', "Logon to the Actiontag Portal to enable it.");
            } else{
                $this->set('msg3', $tag[0]['actiontags']['msg_error']);
            }
        } else if(count($this->request->query) === 1 && array_key_exists('status', $this->request->query) && $this->request->query['status'] == 1){
           $this->set('msg1', "Whoa there cowboy!");
            $this->set('msg2', "You seem to be making lots of ActionTag Requests.");
            $this->set('msg3', "Please contact support@Actiontag.io to upgrade your level to mega-user.");
        } else if(count($this->request->query) === 1 && array_key_exists('status', $this->request->query) && $this->request->query['status'] == 2){
           $this->set('msg1', "Sorry");
            $this->set('msg2', "You seem to be having problems.<br><small>(too many invalid request)<small>");
            $this->set('msg3', "Please contact support@Actiontag.io they will be able to assist.");
        } else {
            $this->set('msg3', "This Actiontag is not valid.");
        }
     }

    /**
     * displaySuccess
     *
     * Display the success message
     */

    public function displaySuccess() {
        if(count($this->request->query) === 1 && array_key_exists('id', $this->request->query)){
            $tag_id = $this->request->query['id'] ? $this->request->query['id'] : 0;
            $this->Page->useTable = 'actiontags';
            $tag = $this->Page->query("SELECT * FROM actiontags WHERE id = $tag_id;");
            $this->set('msg', $tag[0]['actiontags']['msg_success']);
        } else {
            $this->set('msg', null);
        }
    }
}
