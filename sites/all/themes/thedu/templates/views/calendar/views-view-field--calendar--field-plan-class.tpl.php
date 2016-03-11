<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
//该学生uid
// dpm($row);
if(!isset($row->field_field_student[0]['raw']['uid'])){
	echo $output;
	return;
}
$account = $row->field_field_student[0]['raw']['uid'];
// $account = $row->field_field_teacher[0]['raw']['uid'];
//从自动创建的节点中获取 理论上课时间：field_class_date_plan

$class_begin = strtotime($row->field_data_field_plan_class_field_plan_class_value.' UTC+8');//	
$temp_begin = $class_begin;
$class_end = strtotime($row->field_data_field_plan_class_field_plan_class_value2.' UTC+8');//2015-12-01 07:00:00
$tip = '';
// get 那日当天的记录节点！
//从上课记录中获取 实际上课时间：field_class_time_value
$records = edu_get_records($account,$field='field_student',$class_begin);
if($records){
	$nid = 1;
	foreach ($records as $key => $record) {
		$nid = $key;
		$temp_begin = strtotime($record->extraFields->field_class_time_begin.' UTC+8');
		$class_begin = date('H:i',$temp_begin);	
		$class_end = date('H:i',strtotime($record->extraFields->field_class_time_end.' UTC+8'));
		break;
	}
	$tip .= '<span data-pclass="cc-done"></span>'.t('Finished').'： <a href="'.url('node/'.$nid).'">'.$class_begin.'-'.$class_end.'</span></a><br/>';
	// echo $tip;
	// return;
}
date_default_timezone_set('Asia/Shanghai');
$now = time();
// dpm($now-$class_begin); return;

$t = date('Y-m-d');
$b = date('Y-m-d',$temp_begin);

if($now>$temp_begin && "$t" != "$b"){
	$tip .= '<span data-pclass="cc-done"></span>';
	echo $tip;
	print t('Plan time').'：'.preg_replace('/\d+\/\d+\/\d+ - /', '', $output); 
	return;
}else{
	$tip .= '<span data-pclass="cc-coming">'.t('Plan time').'：</span>';
}

if("$t" == "$b" ){
	if(!isset($nid)) {
		$nid = 1;
		$class_begin = date('H:i',$class_begin);
		$class_end = date('H:i',$class_end);
	}
	// get 当天的记录节点！
	//从上课记录中获取 实际上课时间
	$tip = '<a href="'.url('node/'.$nid).'"><span data-pclass="cc-today">'.t('Today Class').'：</span>'.$class_begin.'</a><br/>';
	if($now>=$temp_begin+25*60){
		$tip = '<a href="'.url('node/'.$nid).'"><span data-pclass="cc-done">'.t('Today Class').'：</span>'.$class_begin.'-'.$class_end .'</a><br/>';
	}
	echo $tip; return;
}else{
	echo $tip; 
}
?>
<?php print preg_replace('/\d+\/\d+\/\d+ - /', '', $output); ?>