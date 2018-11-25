<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
				<h5 class="modal-title">Add Employee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                
				<div class="employees form">
					<?= $this->Form->create($employee) ?>
					<fieldset>
						<?php
							echo $this->Form->control('emp_name');
							echo $this->Form->control('employee_id', ['label' => __('Employee No'), 'type'=>'text']);
							echo $this->Form->control('email');
							echo $this->Form->control('phone');
							echo $this->Form->control('dob', ['label' => __('DOB'), 'type'=>'text','id' => 'datepicker','class' => 'input-group date sdatepicker', 'autocomplete'=>'off']);
							//echo $this->Form->input('datetime', ['label' => __('Datum'), 'type'=>'text','id' => 'datetimepicker','selected' => '0000-00-00 00:00:00']);
						?>
					</fieldset>
					<?= $this->Form->button(__('Submit'), ['class'=>'btn btn-primary']) ?>
					<?= $this->Form->end() ?>
				</div>
            </div>
            <div class="modal-footer">
                
            </div>
        </div>
    </div>
</div>