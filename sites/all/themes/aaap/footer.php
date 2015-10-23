<div id="footer">
    <div id="container_footer" class="container">
        <div id="footer_left">
            <div id="menu_footer">
                <?php print render($page['footer']); ?> 
                
                    
<!--                    <a href="--><?php //print node_load(7)->field_url_facebook['und'][0]['value'];?><!--" id="fb" class="social" target="_blank">-->
<!--                        <img src="--><?php //print $base_path.$directory."/image/fb.png" ?><!--">-->
<!--                    </a>-->
<!--                    <div id="line_social"></div>-->
<!--                    <a href="--><?php //print node_load(7)-> field_url_twiter['und'][0]['value'];?><!--" class="social" target="_blank">-->
<!--                        <img src="--><?php //print $base_path.$directory."/image/tw.png" ?><!--">-->
<!--                    </a>-->
                
            </div>
        </div>
        <div id="footer_rigth">
            <?php print render($page['sidebar_first']); ?>
        </div>
        <div id="footer_bottom">
            <?php print node_load(7)->field_text_footer['und'][0]['value'];?>
            
        </div>
    </div>
</div>