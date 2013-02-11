<?php

class selectRoleWidget extends CWidget {

       var $choose;

       public function init() {
              
       }

       public function run() {
              $models = Role::model()->findAll();
              $this->render('listRole', array(
                  'models' => $models,
                  'choose' => $this->choose
              ));
       }

}

?>