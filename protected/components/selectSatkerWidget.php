<?php

class selectSatkerWidget extends CWidget {

       var $choose;

       public function init() {
              
       }

       public function run() {
              $models = SatuanKerja::model()->findAll();
              $this->render('listSatker', array(
                  'models' => $models,
                  'choose' => $this->choose
              ));
       }

}

?>