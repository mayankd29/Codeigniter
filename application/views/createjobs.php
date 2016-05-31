Create Jobs
<div id="createjob">
<?php

  echo form_open('createjob/job_insert');
  echo "<div class='classinput'><label>Job Title : </label>".form_input('title',set_value('title'))."</div>";
  echo "<div class='classinput'><label>Company Name : </label>".form_input('company',set_value('company'))."</div>";
  echo "<div class='classinput'><label>Job Details : </label>".form_input('details',set_value('details'))."</div>";

  echo "<div class='classinput'><label>Country : </label><select>";
  foreach($country as $row):
  echo "<option value='".$row->location_id."'>".$row->name."</option>";
  endforeach;
  echo "</select></div>";




  echo "<div class='classinput'><label>State : </label>".form_input('state',set_value('state'))."</div>";
  echo "<div class='classinput'><label>City : </label>".form_input('city',set_value('city'))."</div>";
  echo "<div class='classinput'><label>Expirence : </label>".form_input('e1',set_value('e1'));
  echo  form_input('e2',set_value('e2'))."</div>";
  echo "<div class='classinput'><label>Salary : </label>".form_input('s1',set_value('s1'));
  echo  form_input('s2',set_value('s2'))."</div>";

  echo "<div class='classinput'><label>Vacancies : </label>".form_input('vacancies',set_value('vacancies'))."</div>";
  echo "<div class='classinput'><label>Last Date to Apply : </label>".form_input('lastdt',set_value('lastdt'))."</div>";
  echo "<div class='classinput'><label>Skills : </label>".form_input('skill',set_value('skill'))."</div>";
  echo "<div class='classinput'><label>Links : </label>".form_input('link',set_value('link'))."</div>";
  echo "<div class='classinput'><label>Upload File : </label><input type='file' name='file'></div>";
  echo "<div class='classinput'><label>Email : </label>".form_input('email',set_value('email'))."</div>";
  echo "<div class='classinput'><label>Contact : </label>".form_input('contact',set_value('contact'))."</div>";
  
 
  echo form_submit('submit','Create Job');
  echo validation_errors('<p class="error"');


?>
</div>