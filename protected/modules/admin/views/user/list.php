<h1>Управление пользователями</h1>

<?php $this->widget(
    'bootstrap.widgets.TbButton',
    array(
        'label' => 'добавить пользователя',
        'type' => 'primary',
        'size' => 'small',
        'url'=>array('create'),
        'htmlOptions'=>array('style'=>'float:right;'),
    )
);
?>
<br><br>
<hr>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'dataProvider'=>$dataProvider,
    'type'=>'striped bordered condensed',
    'columns'=>array(
        'id',
        'username',
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{update}{delete}'
        ),
    ),
)); ?>