<div id="header">
    <div id="header_top" class="container">
        <div id="header_left">
            <?php if ($logo): ?>
             <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
               <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
             </a>
           <?php endif; ?>
        </div>
        <div id='header_right'>
            <?php //dsm($user); ?>
        <?php if(!$logged_in){
            print "<a href='/user/register' id='button_join'>JOIN AAAP</a>";
            print render($page['highlighted']);
            print "<a href='/user/password' class='text_login'>Forgot password?</a>";
           }else{
             print "<a class='user_name'>".$user->name."</a>"
            . "<div class='header_user_links'>"
            . "<a href='/user' id='link_profile'>View Profile</a><a>|</a>"
            . "<a href='/user/logout?destination=homepage' id='link_logout'>Logout</a>"
            . "</div>";
            }?>
            </div>
    </div>   
</div>

<?php print render($page['header']); ?>

