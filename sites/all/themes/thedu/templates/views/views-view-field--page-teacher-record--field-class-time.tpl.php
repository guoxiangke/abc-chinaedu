<?php

/**
 * @file
 * This template is used to print a single field in a view.
 * 老师课程倒计时！
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
 $field_class_time = strtotime($row->field_field_class_time[0]['raw']['value'])+8*3600;
 // dpm($row->field_field_class_time);
?>
<?php print $output; ?>
<?php if(!$row->flagging_flagged):?>
<div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
    <span class="clock" data-countdown="<?php echo date('Y-m-d H:i:s',$field_class_time);?>">Coming...</span>
  </div>
</div>
<?php endif;?>