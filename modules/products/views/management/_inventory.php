<?php $this->widget($this->getModule()->getClass('gridview'), array(
        'id'=>'product_inventory_grid',
        'dataProvider'=>$dataProvider,
        'columns'=>array(
            array(
                'class'=>'CLinkColumn',
                'header'=>Sii::t('sii','SKU'),
                'labelExpression'=>'$data->sku',
                'urlExpression'=>'$data->viewUrl',
                'htmlOptions'=>array('style'=>'text-align:center;'),
            ),
            array(
               'name'=>'quantity',
               'htmlOptions'=>array('style'=>'text-align:center;width:15%'),
               'type'=>'html',
             ),
            array(
               'name'=>'available',
               'htmlOptions'=>array('style'=>'text-align:center;width:15%'),
               'type'=>'html',
             ),
            array(
               'name'=>'hold',
               'htmlOptions'=>array('style'=>'text-align:center;width:15%'),
               'type'=>'html',
             ),
            array(
               'name'=>'sold',
               'htmlOptions'=>array('style'=>'text-align:center;width:15%'),
               'type'=>'html',
             ),
            array(
               'name'=>'bad',
               'htmlOptions'=>array('style'=>'text-align:center;width:15%'),
               'type'=>'html',
            ),
        ),
)); 