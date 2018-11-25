<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employees
 */
?>
<div id="editModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
				<h5 class="modal-title">Edit Employee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                
				<div class="employees form">
					<?= $this->Form->create($employee,['onsubmit' => 'return validateForm()']) ?>
					<fieldset>
						<?php
							echo $this->Form->control('emp_name');
							echo $this->Form->control('employee_id', ['label' => __('Employee No'), 'id' => 'empId', 'type'=>'text','onkeyup'=>'EmpIdLen()']); ?>
							<div style="font-size: 10px;color: green;" id="errEmpId">**Employee ID cannot be more than 7 digits**</div>
							<?php echo $this->Form->control('email');
							echo $this->Form->control('phone', ['label' => __('Phone'), 'id' => 'phonenum','onkeyup'=>'phoneNumLen()']); ?>
							<div style="font-size: 10px;color: green;" id="errphone">**Phone number should be 10 digits**</div>
							<?php echo $this->Form->control('dob', ['label' => __('DOB'),  'dateFormat' => 'Y-m-d', 'type'=>'text','id' => 'datepicker', 'autocomplete'=>'off']);
							//echo $this->Form->input('datetime', ['label' => __('Datum'), 'type'=>'text','id' => 'datetimepicker','selected' => '0000-00-00 00:00:00']);
						?>
					</fieldset>
					<?= $this->Form->button(__('Submit'), ['class'=>'btn btn-primary']) ?>
					<?= $this->Form->end() ?>
				</div>
            </div>
        </div>
    </div>
</div>