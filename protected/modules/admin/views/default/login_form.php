<div class="container">
	<div class="row">
		<div class="well span4 offset4">
			<legend>Авторизация</legend>
				<?php $form=$this->beginWidget('CActiveForm'); ?>

                <?php if($model->hasErrors()): ?>
				<div class="alert alert-error">
					<a class="close" href="#" data-dismiss="alert">x</a>
					<?php echo $form->errorSummary($model); ?>
				</div>
                <?php endif; ?>

				<div class="input-prepend">
					<!--<span class="add-on"><i class="icon-user"></i></span>--.
					<!--<input type="text" class="span3" placeholder="Введите логин">-->

                    <span class="add-on"><i class="icon-user"></i></span>
					<?php echo $form->textField($model,'username',array('class'=>'span3','placeholder'=>'Введите логин')); ?>
				</div>
				<div class="input-prepend">
					<!--<span class="add-on"><i class="icon-eye-open"></i></span>
					<input type="password" class="span3" placeholder="Введите пароль">-->

					<span class="add-on"><i class="icon-lock"></i></span>
					<?php echo $form->passwordField($model,'password',array('class'=>'span3','placeholder'=>'Введите пароль')); ?>
				</div>
				<hr>
				<!--<button type="submit" name="submit" class="btn btn-primary">Войти</button>-->
				<?php echo CHtml::submitButton('Войти', array('class'=>'btn btn-primary')); ?>

				<?php $this->endWidget(); ?><!-- form -->
		</div>
	</div>
</div>