<?php
/**
 * Module Message translations (this file must be saved in UTF-8 encoding).
 * It merges messages from below sources in sequence:
 * [1] application level messages 
 * [2] common module level messages (inclusive of kernel common messages)
 * [3] local module level messages
 */
$appMessages = require(Yii::app()->basePath.DIRECTORY_SEPARATOR.'messages/zh_cn/sii.php');//already inclusive kernel messages
$moduleName = basename(dirname(__DIR__, 2));//move two levels up and grep module name
$moduleMessages = Sii::findMessages(Yii::app()->basePath.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.KERNEL_NAME,$moduleName,'zh_cn');
return array_merge($appMessages,$moduleMessages,[
    //put local translation here e.g. 'translate'=>'翻译',
    '$'=>'¥',
    '"{name}" is activated successfully.' => '上线"{name}"成功。',
    '"{name}" is deactivated successfully.' => '下线"{name}"成功。',
    'Are you sure you want to activate this {object}?' => '您是否确定要上线{object}？',
    'Are you sure you want to deactivate this {object}?' => '您是否确定要下线{object}？',
    'Are you sure you want to delete' => '您是否确定要删除',
    'Are you sure you want to delete attribute' => '您是否确定要删除属性',
    'Are you sure you want to delete this {object}?' => '您是否确定要删除此{object}？',
    'attribute' => '产品属性',
    'Attribute Options' => '属性选项',
    'Attribute {field} not found' => '系统无法找到属性{field}',
    'Attributes' => '属性',
    'Above {url}'=>'以上{url}',
    'brand' => '品牌分类',
    'Brands Management' => '品牌分类管理',
    'category' => '通用分类',
    'Categories Management' => '通用分类管理',
    'create' => '创建',
    'Create' => '创建',
    'Create Attribute' => '创建属性',
    'Create Category' => '创建分类',
    'Create Product' => '创建产品',
    'Category URL'=>'分类网址',
    'Category URL "{slug}" is already taken.'=>'主分类网址“{slug}”已被使用。',
    'Category "{name}" is already taken.'=>'主分类名称“{name}”已被使用。',
    'This is the category\'s SEO url. If you leave this field blank, it will be auto-generated based on category name.'=>'这是分类搜索引擎优化网址。若您无填写, 系统将会根据以上的分类名称自动生成。',
    'Here you can add subcategories to the category. For each of their SEO urls, if you leave them blank, they will be auto-generated based on subcategory name.'=>'这里您可以添加子分类。若您无填写它们的搜索引擎优化网址, 系统将会根据子分类名称自动生成。',
    'Delete Attribute' => '删除属性',
    'Delete Category' => '删除分类',
    'Fields with <span class="required">*</span> are required.' => '所有 <span class="required">*</span> 的栏项必须填写。',
    'Go to product'=>'进入产品',
    'Import'=>'上载',
    'import'=>'上载',
    'Import Products'=>'上载产品',
    'Import {object}'=>'上载{object}',
    'inventory' => '库存',
    'Inventories' => '库存',
    'Inventory' => '库存',
    'Manage Attributes' => '属性管理',
    'Manage Inventories' => '库存管理',
    'Method' => '方式',
    'Missing Module' => '系统无法找到模组',
    'More information' => '查阅更多信息',
    'Name' => '名称',
    'No description' => '此商品无描述',
    'No specification' => '此商品无规格说明',
    'Not Associated' => '待设置',
    'Not specified' => '无说明',
    'Option' => '选项',
    'Option has inventories and cannot be deleted.' => '此选项已有库存无法删除。',
    'Option Delete Error'=>'选项删除错误',
    'Out of Stock'=>'无库存',
    'product' => '产品',
    'Product Attribute Creation' => '产品属性创建',
    'Product Attribute Management' => '产品属性管理',
    'Product Name' => '产品名称',
    'Product Management' => '产品管理',
    'Product not found' => '系统无法找到产品',
    'Products' => '产品',
    'Products Management' => '产品管理',
    'Rate per order' => '每单一订单收费',
    'per item' => '每单一商品',
    'Remove Option' => '删除选项',
    'SKU' => '库存单位',
    'save' => '储存',
    'Save' => '储存',
    'Save Attribute' => '储存属性',
    'Save Category' => '储存分类',
    'SEO URL' => 'SEO产品网址',
    'SEO Meta Description'=>'SEO Meta标签描述',
    'Select Field' => '选择字段',
    'Select Field has no options'=>'选择字段无内容',
    'Select Brand' => '选择品牌',
    'Select Category' => '选择分类',
    'Select Input Type' => '选择输入类型',
    'Select Shipping' => '选择货运方式',
    'Select Shop' => '选择店铺',
    'Share' => '共享',
    'Shipping' => '货运方式',
    'Shipping Method' => '货运方式',
    'Shippings' => '货运方式',
    'Subcategory URL'=>'子分类网址',
    'Subcategory URL "{slug}" is already taken.'=>'子分类网址“{slug}”已被使用。',
    'Subcategory "{name}" is already taken.'=>'子分类名称“{name}”已被使用。',
    'Subcategory Delete Error'=>'子分类删除错误',
    'Surcharge' => '附加费',
    'This {category} has no products.'=>'此{category}目前无产品。',
    'The requested product does not exist.' => '您所查找的网页不存在',
    'Text Field' => '文本框',
    'Unauthorized Access' => '您无权限使用',
    'update' => '更新',
    'Update' => '更新',
    'Update Attribute' => '更新属性',
    'Update Category' => '更新分类',
    'view' => '查阅',
    'View' => '查阅',
    'View Attribute' => '查阅属性',
    'View Category' => '查阅分类',
    '{object} Activation' => '上线{object}',
    '{object} Deactivation' => '下线{object}', 
    'Subcategory'=>'子分类',
    'Add Subcategory'=>'新增子分类',
    'n<=1#Subcategory|n>1#Subcategories'=>'n<=1#子分类|n>1#子分类',
    'n<=1#Product|n>1#Products'=>'n<=1#产品|n>1#产品',
    //product import translation
    '(English)'=>'（英文）',
    '(Chinese)'=>'（中文）',
    'Online Status'=>'上线状态',
    'Confirm'=>'确认',
    'Preview'=>'预览',
    'Instructions and Sample'=>'指示和范例',
    'File Template'=>'下载文件模板',
    'Product Upload Errors'=>'产品上载错误',
    'Product Import Errors'=>'产品上载错误',    
    'Product Import'=>'产品上载',
    'Import History'=>'上载纪录',
    'Uploaded File'=>'上载文档',
    'Total Uploaded'=>'上载产品总数',
    'Product Import Completed'=>'产品上载已完成',
    'Product URL "{slug}" is already taken.'=>'产品网址“{slug}”已被使用。',
    'Failed to import {object}.'=>'{object}载入储存错误。',
    'Product #{n}'=>'产品 #{n}',
    'Poduct Import ({count})'=>'产品上载 ({count})',
    'Total <span style="color:red;">{count}</span> products are uploaded successfully.'=>'你已成功上载共 <span style="color:red;">{count}</span> 件产品。',
    'Total <span style="color:red;">{count}</span> Products'=>'共 <span style="color:red;">{count}</span> 件产品',
    'Maximum {max} products per file.'=>'每次最多上载100件产品。',
    'Import file must be in Excel format.'=>'上载文档必须是Excel格式。',
    'Maximum {count} products only are allowed per file import.'=>'您的上载文档内的产品不能多于{count}件产品。',
    'Total products after import exceeds product limit: {limit}. Please try to reduce the number of products in file import.'=>'上载后的产品总数超过了产品数量上限：{limit}。请尝试减少上载文档内的产品。',
    '1#Upload Files|0#Upload File'=>'1#上载文档|0#上载文档',
    '{attribute} "{value}" not found.'=>'{attribute} "{value}" 无法找到。',
    'Product status must be either {Y} or {N}.'=>'产品上线状态必须是{Y}或{N}。',
    'Media "{value}" is not an image.'=>'媒体文件"{value}"不是图片的格式。',
    'Image "{value}" is not a valid url.'=>'图片"{value}"不是正确网址的格式。',
    'Product quantity (inventory) must be greater than zero to be brought online.'=>'产品要上线数量(库存)必须大于零。',
    'Product must have shipping to be brought online.'=>'产品要上线必须定义货运方式。',
    'Product must have at least one online shipping associated. Shipping "{value}" is offline.'=>'产品要上线必须要有至少一个在上线状态的货运方式。货运方式“{value}”目前是线下状态。',
    'Product #{m} Attribute #{n}'=>'产品 #{m} 属性 #{n}',
    '"{object_name}" has {association_object}. Please detach {association_object} if you wish to delete this {object_type}.'=>'"{object_name}"目前拥有{association_object}。如您想要删除此{object_type}，请先将{association_object}从{object_type}剔除。',
    '"{object_name}"\'s subcategory has {association_object}. Please detach {association_object} if you wish to delete this {object_type}.' => '"{object_name}"的子分类目前拥有{association_object}。如您想要删除此{object_type}，请先将{association_object}从{object_type}剔除。',
    '"{SKU}" Quantity "{value}" is not a number.'=>'"{SKU}"数量值不是整数。',
    '"{SKU}" Quantity "{value}" must be equal or greater than 1.'=>'"{SKU}"数量值必须等于或大于1。',
    '"{SKU}" Quantity cannot be blank.'=>'"{SKU}"数量不能空白。',
    //usability
    'Product with status {online} means everyone can access and make purchase your product.'=>'产品状态显示{online}代表任何人可访问并购买您的产品。',
    'Edit product setup. If product is shown with status {online} means everyone can access and make purchase your product.'=>'编辑产品设置。产品状态若显示{online}代表任何人可访问并购买您的产品。',
    'Add and manage all your products here. You can create many categories to group your products, and do bulk upload products by file.'=>'添加和管理您所有的产品。您可以创建多个类别来分类产品，亦可批量上传产品。',
    'Give your product a good name, and remember nice product pictures worth a thousand words of description.'=>'给你的产品取一个好名字，并谨记精致的产品图片胜过千言万语。',
    'Group your products into main categories and sub-categories. This make your customers find your products more easily.'=>'分组产品为主分类和子分类。这将让客户更容易地找到您的产品。',
    'You can customize category URL. Click [+] to add sub-category.'=>'您可定制分类网址。点击 [+] 可添加子分类。',
    'Meta tag description accepts only alphabet letters, digits or hypen.'=>'Meta标签描述只接受英文字母,数字和分号。',
    'Product Starter Guide'=>'产品设置基本指南',
    'Product need to have inventory to go online.'=>'产品必须设置库存才能上线。',
    'Add inventory now.'=>'立即添加产品库存',
    'If product has attributes, product inventory will be setup according to attributes. Hence attribute must be setup first before inventory.'=>'因库存将根据产品属性来定义。若产品有属性需求, 其设置必须先于库存。',
    'Add attribute now.'=>'立即添加产品属性',
]);
