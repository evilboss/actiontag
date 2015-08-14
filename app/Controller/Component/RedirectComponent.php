<?php
App::uses('Component', 'Controller');

class RedirectComponent extends Component {


    /**
     * 
     * Numbers:
     * Boss Lloyd    ->  09175115229
     * JetherG       ->  09068835445
     * Myphone Rio2  ->  09390086155
     * 
     **/
     


    public function checkGUID($GUID) {
        $this->User = ClassRegistry::init('User');
        $result = [];

        $test = $this->User->query("SELECT * FROM actiontags WHERE guid = '$GUID'");

        if (count($test) === 1){
           
           $result['tag_id'] = $test[0]['actiontags']['id'];
           $tag_status = $test[0]['actiontags']['status'];
           $tag_active = $test[0]['actiontags']['active'];
           
           if ($tag_status && $tag_active){
               $result['status'] = 'valid';
           } else {
               $result['status'] = 'invalid';
               
               
           }
               
           if ($result['status'] == 'invalid'){
               return $result;
           }
               
           $result['type'] = explode(',',$test[0]['actiontags']['type']);
           
           if (in_array('redir_to_url', $result['type'])){
               $result['redirect'] = $test[0]['actiontags']['redirect'];
           }
           if (in_array('send_sms', $result['type'])){
               $result['sms']['to'] = $test[0]['actiontags']['sms_to'];
               $result['sms']['msg'] = $test[0]['actiontags']['sms_msg'];
           }
           if (in_array('send_email', $result['type'])){
               $result['email']['to'] = $test[0]['actiontags']['email_to'];
               $result['email']['from'] = $test[0]['actiontags']['email_from'];
               $result['email']['subj'] = $test[0]['actiontags']['email_subj'];
               $result['email']['body'] = $test[0]['actiontags']['email_body'];
           }
           
        } else {
            $result['status'] = 'invalid';
        }
       
        
        
        return $result;
    }    
    
    
    public function sendSMS($to,$msg){
        $HttpSocket = new HttpSocket();
        $smsUrl = "http://sms.cloudstaff.com:8080/index.php?app=ws&u=admin&h=b49e35435223d71511e85cc429c3a809&op=pv&to=".$to."&msg=".$msg." ";
        $results = json_decode($HttpSocket->get($smsUrl), true);
        if ($results['data'][0]['status'] === "OK") {
            $res['status'] = "success";
        } else {
            $res['status'] = "error";
        }
        return $res;
    }
    
    
    public function check($GUID) {
        $this->User = ClassRegistry::init('User');
        
        $redirUrl = Router::url(array('action' => '', 'error'));
        $isRedir = true;
        $tag_id = '';
        $status = "invalid";

        $test = $this->User->query("SELECT id,redirect, is_redir, status FROM actiontags WHERE guid = '$GUID'");

        if (count($test) === 1){
            if ($test[0]['actiontags']['status'] == true || $test[0]['actiontags']['status'] == "true" || $test[0]['actiontags']['status'] == 1){
                $redirUrl = $test[0]['actiontags']['redirect'];
                $isRedir = $test[0]['actiontags']['is_redir'];
                $tag_id = $test[0]['actiontags']['id'];
                $status = "valid";
            }else{
                $redirUrl = Router::url(array('action' => '', 'error'));
                $isRedir = false;
                $tag_id = $test[0]['actiontags']['id'];
            }
        }
        if ($redirUrl == "" || $redirUrl == null) {
            $redirUrl = Router::url(array('action' => '', 'error'));
            $isRedir = true;
            $tag_id = '';
        }
        
        
        $result['redirUrl'] = $redirUrl;
        $result['isRedir'] = $isRedir;
        $result['tag_id'] = $tag_id;
        $result['status'] = $status;

        return $result;
    }    
    
    public function checkSMS($redirUrl,$tag_id){
        $HttpSocket = new HttpSocket();
        $results = json_decode($HttpSocket->get($redirUrl), true);
        
        if ($results['data'][0]['status'] === "OK") {
            $res['status'] = "success";
            $res['tag_id'] = $tag_id;
            return $res;
        } else {
            $res['status'] = "error";
            $res['tag_id'] = $tag_id;
            return $res;
        }
    }
    
    public function checkLog($ip_address, $status){
        $this->User = ClassRegistry::init('User');
        
        $resArray['status'] = false;
        
        if ($status == "valid"){
            $Log = $this->User->query("SELECT * FROM logs WHERE ip_address = '$ip_address' AND request_status = 'valid' AND created > NOW() - INTERVAL 1 HOUR");
            if (count($Log) >= 50){
                $resArray['status'] = true;
                $resArray['code'] = 1;
            }
        } else {
            $Log = $this->User->query("SELECT * FROM logs WHERE ip_address = '$ip_address' AND request_status = 'invalid' AND created > NOW() - INTERVAL 1 HOUR");
            if (count($Log) >= 10){
                $resArray['status'] = true;
                $resArray['code'] = 2;
            }
        }
        
       
        return $resArray;
    }
    
   
    
    
}