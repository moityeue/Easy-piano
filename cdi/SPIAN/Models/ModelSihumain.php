<?php
class ModelSihumain extends Model {
  public function humain_login(){
    $db = $this->getDb();
    $req = $db->query("SELECT `score_id`, `score_valeur`, `score_outil_id`, `score_humain_id`, `score_param1`, `score_param2`, `score_param3`, `score_param4`, `score_est_actif`, `score_date`, `scores_spian`.`humain_id`, `si_humain`.`humain_id`,`scores_spian`.`humain_login` , `si_humain`.`humain_login` FROM `scores_spian` INNER JOIN `si_humain` ON `scores_spian`.`humain_id` = `si_humain`.`humain_id`");


 
    $humains = [];
    $scores = [];
    while ($hum = $req->fetch(PDO::FETCH_ASSOC)){
      $humains[] = new Sihumain($hum);
      
    }
    return array($humains, $scores);
  }
  function submit(){
    if(isset($_POST['submit'])){
      if(isset($_POST['humain_login'])){
        $humain = $_POST['humain_login'];
        $password = $_POST['humain_pssword'];
          var_dump($_POST['humain_login']);
          
      }
    }
  }
  
}