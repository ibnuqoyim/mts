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
   public function getisAdmin(){
        $user = $this->loadUser(Yii::app()->user->id);
        if ($user)
           return $user->role=='Admin';
        return false;
    }
    
    public function getisEngineering(){
            $user = $this->loadUser(Yii::app()->user->id);
            if ($user)
               return $user->role=='Engineering';
            return false;
        }

        public function getisClient(){
            $user = $this->loadUser(Yii::app()->user->id);
            if ($user)
               return $user->role=='Client';
            return false;
        }

        public function getisPengadaan(){
            $user = $this->loadUser(Yii::app()->user->id);
            if ($user)
               return $user->role=='Pengadaan';
            return false;
        }

        public function getisVendor(){
            $user = $this->loadUser(Yii::app()->user->id);
            if ($user)
               return $user->role=='Vendor';
            return false;
        }

         public function getisExpediting(){
            $user = $this->loadUser(Yii::app()->user->id);
            if ($user)
               return $user->role=='Expedeting';
            return false;
        }
         public function getisQC(){
            $user = $this->loadUser(Yii::app()->user->id);
            if ($user)
               return $user->role=='QC';
            return false;
        }
         public function getisTraffic(){
            $user = $this->loadUser(Yii::app()->user->id);
            if ($user)
               return $user->role=='Traffic';
            return false;
        }
         public function getisWarehouse(){
            $user = $this->loadUser(Yii::app()->user->id);
            if ($user)
               return $user->role=='Warehouse';
            return false;
        }
         public function getisProyek(){
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