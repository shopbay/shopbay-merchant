<?php 
    $this->widget($this->getModule()->getClass('gridview'), array(
        'id'=>'attribute_option_grid',
        'dataProvider'=>$dataProvider,
        'columns'=>array(
            array(
               'name'=>'code',
               'value'=>'$data->code',
               'htmlOptions'=>array('style'=>'text-align:center;width:10%'),
               'type'=>'html',
             ),
            array(
               'name'=>'name',
               'value'=>'$data->getOptionText(user()->getLocale())',
               'htmlOptions'=>array('style'=>'text-align:center;width:33%'),
               'type'=>'html',
             ),
        ),
    )); 