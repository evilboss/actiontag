<?php

App::uses('AuthComponent', 'Controller/Component');
 
class Admin extends AppModel {
     
     
    public $validate = array(
        
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => '* A password is required'
            ),
            'min_length' => array(
                'rule' => array('minLength', '6'),  
                'message' => '* Password must have a mimimum of 6 characters'
            )
        ),
        'company' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => '* Company name is required'
            )
        ),
         
        'password_confirm' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => '* Please confirm your password'
            ),
             'equaltofield' => array(
                'rule' => array('equaltofield','password'),
                'message' => '* Both passwords must match.'
            )
        ),
         
        'email' => array(
            'required' => array(
                'rule' => array('email', true),    
                'message' => '* Please provide a valid email address.'   
            ),
             'unique' => array(
                'rule'    => array('isUniqueEmail'),
                'message' => '* This email is already in use',
            )
        ),
        'type' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'user')),
                'message' => '* Please select a valid user type',
                'allowEmpty' => false
            )
        ),
         
//         
//        'password_update' => array(
//            'min_length' => array(
//                'rule' => array('minLength', '6'),   
//                'message' => 'Password must have a mimimum of 6 characters',
//                'allowEmpty' => true,
//                'required' => false
//            )
//        ),
//        'password_confirm_update' => array(
//             'equaltofield' => array(
//                'rule' => array('equaltofield','password_update'),
//                'message' => 'Both passwords must match.',
//                'required' => false,
//            )
//        )
// 
         
    );
     
    function isUniqueEmail($check) {
 
        $email = $this->find(
            'first',
            array(
                'fields' => array(
                    'Admin.id'
                ),
                'conditions' => array(
                    'Admin.email' => $check['email']
                )
            )
        );
 
        if(!empty($email)){
            if($this->data[$this->alias]['id'] == $email['Admin']['id']){
                return true; 
            }else{
                return false; 
            }
        }else{
            return true; 
        }
    }
     
    public function alphaNumericDashUnderscore($check) {
        // $data array is passed using the form field name as the key
        // have to extract the value to make the function generic
        $value = array_values($check);
        $value = $value[0];
 
        return preg_match('/^[a-zA-Z0-9_ \-]*$/', $value);
    }
     
    public function equaltofield($check,$otherfield) 
    { 
        //get name of field 
        $fname = ''; 
        foreach ($check as $key => $value){ 
            $fname = $key; 
            break; 
        } 
        return $this->data[$this->name][$otherfield] === $this->data[$this->name][$fname]; 
    } 
 
    /**
     * Before Save
     * @param array $options
     * @return boolean
     */
     public function beforeSave($options = array()) {
//        // hash our password
//        if (isset($this->data[$this->alias]['password'])) {
//            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
//        }
//         
//        // if we get a new password, hash it
//        if (isset($this->data[$this->alias]['password_update']) && !empty($this->data[$this->alias]['password_update'])) {
//            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password_update']);
//        }
//     
        // fallback to our parent
        return parent::beforeSave($options);
    }
 
}
