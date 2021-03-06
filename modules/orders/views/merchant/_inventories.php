<?php $this->widget($this->getModule()->getClass('gridview'), array(
    'id'=>'inventory_grid',
    'dataProvider' => $dataProvider,
    'template'=>'{items}',
    'columns'=>array(
            //'product_id',
            array(
                'class'=>'CLinkColumn',
                'header'=>Sii::t('sii','SKU'),
                'labelExpression'=>'$data->sku',
                'urlExpression'=>'$data->viewUrl',
                'htmlOptions'=>array('style'=>'text-align:center;'),
            ),
            array(
                'name'=>'quantity',
                'value'=>'$data->quantity',
                'htmlOptions'=>array('style'=>'text-align:center'),
                'type'=>'html',
            ),
            array(
                'name'=>'available',
                'value'=>'$data->available',
                'htmlOptions'=>array('style'=>'text-align:center'),
                'type'=>'html',
            ),
            array(
                'name'=>'hold',
                'value'=>'$data->hold',
                'htmlOptions'=>array('style'=>'text-align:center'),
                'type'=>'html',
            ),
            array(
                'name'=>'sold',
                'value'=>'$data->sold',
                'htmlOptions'=>array('style'=>'text-align:center'),
                'type'=>'html',
            ),
            array(
                'name'=>'bad',
                'value'=>'$data->bad',
                'htmlOptions'=>array('style'=>'text-align:center'),
                'type'=>'html',
            ),
            array(
                'name'=>Sii::t('sii','Last Update Date'),
                'value'=>'$data->formatDatetime($data->update_time,true)',
                'htmlOptions'=>array('style'=>'text-align:center'),
                'type'=>'html',
            ),
    ),
));