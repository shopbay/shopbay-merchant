<?php
$this->breadcrumbs = [
    Sii::t('sii','Shipping Orders'),
];
//Moved to page filter quick menu
//$this->menu = [
//    ['id'=>'process','title'=>Sii::t('sii','View Purchase Orders'),'subscript'=>Sii::t('sii','PO'), 'url'=>url('purchase-orders')],
//    ['id'=>'process','title'=>Sii::t('sii','View Shipping Orders'),'subscript'=>Sii::t('sii','SO'), 'url'=>url('orders'),'linkOptions'=>['class'=>'active']],
//    ['id'=>'process','title'=>Sii::t('sii','View Items'),'subscript'=>Sii::t('sii','items'), 'url'=>url('items')],
//];
    
$this->spageindexWidget(array_merge(
    ['breadcrumbs'=>$this->breadcrumbs],
    ['flash' => $this->modelType],
    //['menu'  => $this->menu],
    ['sidebars'=>$this->getPageFilterSidebarData()],
    $config)
);