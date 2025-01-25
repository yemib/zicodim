<style>

.txt-yellow{

   color: <?php echo e(config('app.color2')); ?> 
}

</style>

<header class="totalbusiness-header-wrapper header-style-6-wrapper totalbusiness-header-with-top-bar">
    <!-- top navigation -->
    <div class="top-navigation-wrapper-substitute"></div>
    <div class="top-navigation-wrapper">
        <div class="top-navigation-container container">
            <div class="top-navigation-left">
                <div class="top-navigation-left-text">
                </div>
            </div>
            <div class="top-navigation-right">


                <?php $contact = App\contact_detail::first(); ?>

                <div class="top-social-wrapper">
                  

                

                    <div class="social-icon">
                        <a href="https://api.whatsapp.com/send?phone=<?php echo e($contact->whatapp); ?>" target="_blank">
                            <i class="fa fa-whatsapp"></i></a>
                    </div>

                    <div class="social-icon">
                        <a href="tel:<?php echo e($contact->support); ?>" target="_blank">
                            <i class="fa fa-phone"></i></a>
                    </div>



                    <div class="clear"></div>
                </div>



            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div id="totalbusiness-header-substitute"></div>
    <div class="totalbusiness-header-inner header-inner-header-style-6">
        <div class="totalbusiness-header-container container">
            <div class="totalbusiness-header-inner-overlay"></div>


            <!-- logo -->
            <div class="totalbusiness-logo">
                <div class="totalbusiness-logo-inner">
                    <a href="/">
                        <img src="/slider/<?php echo e($logo->picture); ?>" alt="<?php echo e(config('app.name')); ?>" width="227"
                            height="227" /> </a>
                </div>


                <div class="totalbusiness-responsive-navigation dl-menuwrapper"
                    id="totalbusiness-responsive-navigation"><button class="dl-trigger">Open Menu</button>
                    <ul id="menu-menu-1" class="dl-menu totalbusiness-main-mobile-menu">

                        <li id="menu-item-15"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-15">
                            <a href="/" aria-current="page">Home</a></li>



                            <li id="menu-item-1020"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1020"><a
                                href="/porfolio">Porfolio</a></li>



                                <li id="menu-item-1020"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1020"><a
                                    href="/about_us">About Us</a></li>
    



                        <li id="menu-item-16"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-15">
                            <a href="/cart" aria-current="page">Cart<span class="">
                                    <?php if(isset($item_number)): ?>
                                        [
                                        <strong><?php echo e($item_number); ?></strong>]
                                    <?php endif; ?>
                                </span></a></li>



                        <li id="menu-item-472"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-472">
                            <a style="cursor: pointer">Category</a>
                            <ul class="dl-submenu">

                                <?php   foreach($cats as $cat){   ?>

                                <li id="menu-item-467"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-467"><a
                                        href="/category/<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></a></li>



                                <?php   } ?>

                                <li id="menu-item-467"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-467"><a
                                        href=""></a></li>


                            </ul>
                        </li>

                        <?php  if(!session('client')) {  ?>


                        <li id="menu-item-1020"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1020"><a
                                href="/login">Login</a></li>


                        <li id="menu-item-1020"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1020"><a
                                href="/signup">Signup</a></li>

                        <?php  }else{    ?>


                        <li id="menu-item-472"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-472">
                            <a style="cursor: pointer">Account</a>
                            <ul class="dl-submenu">



                                <li id="menu-item-467"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-467"><a
                                        href="/account_profile">My profile </a></li>


                                <li id="menu-item-467"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-467"><a
                                        href="/my_order">My Orders</a></li>

                                <li id="menu-item-467"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-467"><a
                                        href="/client_saved">My Saved Items</a></li>


                                <li id="menu-item-467"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-467"><a
                                        href="/logout_client">Logout</a></li>


                                <li id="menu-item-467"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-467"><a
                                        href=""></a> </li>








                            </ul>
                        </li>


                        <?php

} 
		
		?>





                        <li
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-56menu-item 
                            menu-item-type-custom menu-item-object-custom menu-item-56 totalbusiness-normal-menu">
                            <a target="_blank" href="/cart">
                                <div>CART<br><span    class="txt-yellow">
                                        <?php if(isset($item_number)): ?>
                                            [ <?php echo e($item_number); ?> ]
                                        <?php endif; ?>
                                    </span></div>
                            </a></li>


                    </ul>

                </div>
            </div>

            <!-- navigation -->

            <!---desktop menu  ---->

            <div class="totalbusiness-navigation-wrapper">


                <nav class="totalbusiness-navigation" id="totalbusiness-main-navigation">
                    <ul id="menu-menu-2" class="sf-menu totalbusiness-main-menu">
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-15menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-15 totalbusiness-normal-menu">
                            <a href="/">Home</a></li>


                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-472menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-472 totalbusiness-normal-menu">
                            <a href="" style="cursor: pointer" class="sf-with-ul-pre">Category</a>
                            <ul class="sub-menu">


                                <?php   $count = 467 ; foreach($cats as $cat){  ?>
                                <li class="menu-item menu-item-type-custom  menu-item-<?php echo e($count); ?>"><a
                                        href="/category/<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></a></li>


                                <?php  $count++; } ?>


                            </ul>
                        </li>



                        <li
                        class="menu-item menu-item-type-post_type menu-item-object-page 
                        menu-item-1020menu-item menu-item-type-post_type menu-item-object-page
                         menu-item-1020 totalbusiness-normal-menu">
                         <a href="/porfolio">Porfolio</a></li>



                         

                        <li
                        class="menu-item menu-item-type-post_type menu-item-object-page 
                        menu-item-1020menu-item menu-item-type-post_type menu-item-object-page
                         menu-item-1020 totalbusiness-normal-menu">
                         <a href="/about_us">About us</a></li>


                        <?php  if(!session('client')){  ?>

                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page 
                            menu-item-1020menu-item menu-item-type-post_type menu-item-object-page
                             menu-item-1020 totalbusiness-normal-menu">
                            <a href="/login">Login</a></li>

                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1020menu-item menu-item-type-post_type menu-item-object-page menu-item-1020 totalbusiness-normal-menu">
                            <a href="/signup">Sign Up</a></li>

                        <?php   }else{    ?>



                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-472menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-472 totalbusiness-normal-menu">
                            <a href="" style="cursor: pointer" class="sf-with-ul-pre">Account</a>
                            <ul class="sub-menu">


                                <li class="menu-item menu-item-type-custom  menu-item-<?php echo e($count); ?>"><a
                                        href="/account_profile">My Profile</a></li>


                                <li class="menu-item menu-item-type-custom  menu-item-<?php echo e($count); ?>"><a
                                        href="/my_order">My Orders</a></li>


                                <li class="menu-item menu-item-type-custom  menu-item-<?php echo e($count); ?>"><a
                                        href="/client_saved">My Saved Items</a></li>


                                <li class="menu-item menu-item-type-custom  menu-item-<?php echo e($count); ?>"><a
                                        href="/logout_client">Logout</a></li>



                            </ul>
                        </li>



                        <?php  
} ?>

                        <li
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-56menu-item 
                            menu-item-type-custom menu-item-object-custom menu-item-56 totalbusiness-normal-menu">
                            <a target="_blank" href="/cart">
                                <div>CART<br><span style=""  class="txt-yellow">
                                   
                                        <?php if(isset($item_number)): ?>
                                            [ <?php echo e($item_number); ?> ]
                                        <?php endif; ?>
                                    </span></div>
                            </a></li>


                    </ul><img id="totalbusiness-menu-search-button"
                        src="wp-content/themes/totalbusiness/images/magnifier-dark.png" alt="" width="58"
                        height="59" />
                    <div class="totalbusiness-menu-search" id="totalbusiness-menu-search">
                        <form method="get" id="searchform" action="https://www.-republic.com//">
                            <div class="search-text">
                                <input type="text" value="Type Keywords" name="s" autocomplete="off"
                                    data-default="Type Keywords" />
                            </div>
                            <input type="submit" value="" />
                            <div class="clear"></div>
                        </form>
                    </div>
                </nav>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</header>
<?php /**PATH G:\websites\Zicodim\resources\views/layouts/menu.blade.php ENDPATH**/ ?>