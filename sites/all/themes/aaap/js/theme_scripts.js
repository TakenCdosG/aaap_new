 jQuery(document).ready(function(){

   loggin_header();
   menu_dropdown();
   jQuery('.products a').removeAttr('href');
   jQuery('.page-cart-checkout-review #edit-back').val("Previous");
});

function loggin_header(){
     jQuery('#edit-name').attr('placeholder', 'Your email');
    jQuery('#edit-pass').attr('placeholder', 'Password');
    
    jQuery("#edit-name").focus(function(){
            jQuery(this).attr('placeholder', '');
    }); 
      jQuery("#edit-pass").focus(function(){
            jQuery('#edit-pass').attr('placeholder', '');
    }); 
    
jQuery("#edit-name")
  .focusout(function() {
      jQuery('#edit-name').attr('placeholder', 'Your email');
  })
 
jQuery("#edit-pass")
  .focusout(function() {
    jQuery('#edit-pass').attr('placeholder', 'Password');
  })
}

function menu_dropdown(){
    jQuery('#block-menu-menu-menu ul li').hover(function(){
        jQuery(this).find('ul').show('fast');
    },function(){
        jQuery(this).find('ul').hide('fast');
    });
}