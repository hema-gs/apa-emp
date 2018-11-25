<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee[]|\Cake\Collection\CollectionInterface $employees
 */
?>
<div class="employees index content col-md-12">
<div class="box-footer">
		<h3 class=""><?= __('Employees') ?>
		<?php echo $this->Html->link(__('Add', true), array("controller"=>"employees", "action"=>"add"), array("class"=>"btn btn-info btn-sm pull-right btn-info", "id"=> "modellink", "title"=>"Add", "data-toggle"=>"modal", "data-target"=>"#exampleModal" ));?>
		</h3>
		
<div class="container ">

<div class="modal-container"></div>
</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('emp_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('emp_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dob') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $employee): ?>
            <tr>
                <td><?= h($employee->employee_id) ?></td>
                <td><?= h($employee->emp_name) ?></td>
                <td><?= h($employee->email) ?></td>
                <td><?= $employee->phone ?></td>
                <td><?= h(date('Y-m-d',strtotime($employee->dob))) ?></td>
                <td class="actions">
                    <span class="glyphicon glyphicon-edit"></span><?= $this->Html->link(__('Edit'), ['action' => 'edit', $employee->emp_id], ["class"=> "editmodellink", "data-toggle"=>"modal"]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employee->emp_id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->emp_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>