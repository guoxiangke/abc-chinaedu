<?php
if($output==0){
  echo l('<span class="glyphicon glyphicon-edit" style="color:red;"></span>','node/'.$row->nid.'/edit',array('html'=>true,'attributes'=>array('title'=>'Add Class note!')));
}else{
  echo l('<span class="glyphicon glyphicon-check"></span>','node/'.$row->nid,array('html'=>true,'attributes'=>array('title'=>'Review Class Notes!')));
}
?>
<?php //print $output; ?>

