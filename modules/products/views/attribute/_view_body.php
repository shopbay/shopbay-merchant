<?php 
$this->widget('common.widgets.SDetailView', array(
    'data'=>$model,
    'columns'=>array(
        array(
            array('name'=>'type','value'=>$model->getTypeText()),
            array('name'=>'code'),
        ),
        array(
            array('name'=>'create_time','value'=>$model->product->formatDatetime($model->create_time,true)),
            array('name'=>'update_time','value'=>$model->product->formatDatetime($model->update_time,true)),
        ),
    ),
));