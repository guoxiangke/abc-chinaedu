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
$account = $row->field_field_student[0]['raw']['uid'];
// $account = $row->field_field_teacher[0]['raw']['uid'];
//从自动创建的节点中获取 理论上课时间：field_class_date_plan
$class_begin = strtotime($row->field_data_field_class_date_plan_field_class_date_plan_value.' UTC+8');//	
$class_end = strtotime($row->field_data_field_class_date_plan_field_class_date_plan_value_1.' UTC+8');//2015-12-01 07:00:00
$tip = '';
// get 那日当天的记录节点！
//从上课记录中获取 实际上课时间：field_class_time_value
$records = edu_get_records($account,$field='field_student',$class_begin);
if($records){
	$nid = 0;
	foreach ($records as $key => $record) {
		$nid = $key;
		$class_begin = date('H:i',strtotime($record->extraFields->field_class_time_begin.' UTC+8'));	
		$class_end = date('H:i',strtotime($record->extraFields->field_class_time_end.' UTC+8'));
		break;
	}
	$tip .= '已完成： <a href="'.url('node/'.$nid).'">'.$class_begin.'-'.$class_end.'</span></a><br/>';
}

$now = time();
if($now>$class_begin){
	$tip .= '<span data-pclass="cc-done"></span>';
	echo $tip;
	return;
}else{
	$tip = '<span data-pclass="cc-coming">计划时间：</span>';
}
if(date('Y-m-d') == date('Y-m-d',$class_begin)){
	// get 当天的记录节点！
	//从上课记录中获取 实际上课时间
	$tip = ' '.$class_begin.' <span data-pclass="cc-today">今日上课 nid！</span><br/>';
}
echo $tip;
?>
<?php print preg_replace('/\d+\/\d+\/\d+ - /', '', $output); ?>



