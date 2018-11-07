<?php
 
// this file must be stored in:
// protected/components/WebUser.php
 
class WebUser extends CWebUser {
 
  // Store model to not repeat query.
  private $_model;
 
  // Return first name.
  // access it by Yii::app()->user->first_name
//  function getFirst_Name(){
//    $user = $this->loadUser(Yii::app()->user->id);
//    return $user->username;
//  }
 
  // This is a function that checks the field 'role'
  // in the User model to be equal to 1, that means it's admin
  // access it by Yii::app()->user->isAdmin()
    function isAdmin(){
        $user = $this->loadUser(Yii::app()->user->id);
        if ($user)
           return $user->role=='Admin';
        return false;
    }
    
    function isEngineering(){
            $user = $this->loadUser(Yii::app()->user->id);
            if ($user)
               return $user->role=='Engineering';
            return false;
        }

        function isClient(){
            $user = $this->loadUser(Yii::app()->user->id);
            if ($user)
               return $user->role=='Client';
            return false;
        }

        function isPengadaan(){
            $user = $this->loadUser(Yii::app()->user->id);
            if ($user)
               return $user->role=='Pengadaan';
            return false;
        }

        function isVendor(){
            $user = $this->loadUser(Yii::app()->user->id);
            if ($user)
               return $user->role=='Vendor';
            return false;
        }

         function isExpediting(){
            $user = $this->loadUser(Yii::app()->user->id);
            if ($user)
               return $user->role=='Expedeting';
            return false;
        }
         function isQC(){
            $user = $this->loadUser(Yii::app()->user->id);
            if ($user)
               return $user->role=='QC';
            return false;
        }
         function isTraffic(){
            $user = $this->loadUser(Yii::app()->user->id);
            if ($user)
               return $user->role=='Traffic';
            return false;
        }
         function isWarehouse(){
            $user = $this->loadUser(Yii::app()->user->id);
            if ($user)
               return $user->role=='Warehouse';
            return false;
        }
         function isProyek(){
            $user = $this->loadUser(Yii::app()->user->id);
            if ($user)
               return $user->role=='Proyek';
            return false;
        }
 
  // Load user model.
  protected function loadUser($id=null)
    {
        if($this->_model===null)
        {
            if($id!==null)
                $this->_model= User::model()->findByPk($id);
        }
        return $this->_model;
    }
}
?>