<?php if(isset($node->field_image_header['und'][0]['uri']) ): ?>
<div id="content_header">
    <div id="image_header"><?php 
              print theme_image_style(array('style_name' =>'image_header',
              'path' =>$node->field_image_header['und'][0]['uri'],
              'width' => NULL, 
              'height' => NULL,
              'alt' => $node->field_image_header['und'][0]['alt'],
              'title' => $node->field_image_header['und'][0]['title'],
              'attributes' => array('class'=>'img-responsive')
              )); ?></div>
    <div id="title_header"><?php print $node->title ?></div>
</div>
<?php else: ?>
    <div class="title_blue_one"><?php print $node->title ?></div>
<?php endif; ?>