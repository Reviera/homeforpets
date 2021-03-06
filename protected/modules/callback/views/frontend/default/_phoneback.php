<a href="#" class="form-close"></a>
<div class="s-form">
    <?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'phoneback-form',
		'action' => '/callback/default/phoneback'
	)); ?>
	
	<?php echo $form->errorSummary($model); ?>
	
	<div class="row wp">
		Введите ваши контактные данные и мы перезвоним
	</div>
	
	<div class="row wp">
		<?php echo $form->labelEx($model, 'name'); ?>:
		<?php echo $form->textField($model, 'name', array('maxlength' => 256)); ?>
	</div>
	
	<div class="row wp">
		<?php echo $form->labelEx($model, 'phone'); ?>:
		<?php echo $form->textField($model, 'phone', array('maxlength' => 256)); ?>
	</div>
	
	<div class="row wp buttons">
		<?php echo CHtml::submitButton('Заказать бесплатный звонок', array('class' => 's-btn')); ?>
	</div>
	
    <?php $this->endWidget(); ?>
</div>