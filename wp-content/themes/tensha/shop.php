<section class="info">
    <?php //the_content(); 
    ?>
    <p class="info_txt">
        <?php the_field('shop_info'); ?>
    </p>
    <div class="genre">
        <div class="genre_in">
            <img src="http://localhost:8888/wordpress/wp-content/themes/tensha/img/drink_list_white.png" alt=""><span>飲む</span>
        </div>
        <div class="genre_in">
            <img src="http://localhost:8888/wordpress/wp-content/themes/tensha/img/food_list_white.png" alt=""><span>食べる</span>
        </div>
        <div class="genre_in">
            <img src="http://localhost:8888/wordpress/wp-content/themes/tensha/img/play.png" alt=""><span>遊ぶ</span>
        </div>
    </div>
    <p class="info_times">
        <?php the_field('shop_date'); ?>
    </p>
</section>
<section class="shop_menu sec_padding">
    <h1 class="subtitle">メニュー<br /><span>MENU</span></h1>
    <div class="pickup_menu">
        <?php
        $group = get_field('menu_img_group');
        $use_group = $group['menu_img_group1']; ?>
        <?php if ($group['menu_img_group1']) :; ?>

            <div class="pickup_one">
                <div class="pickup_img">
                    <img src="<?php echo $use_group['shop_img'] ?>" alt="" />
                </div>
                <p><?php echo $use_group['shop_img_menu'] ?><span><?php echo $use_group['shop_img_price']; ?></span></p>
            </div>
        <?php endif; ?>
        <?php if ($group['menu_img_group2']) :; ?>
            <div class="pickup_one">
                <div class="pickup_img">
                    <img src="<?php $use_group = $group['menu_img_group2'];
                                echo $use_group['shop_img'] ?>" alt="" />
                </div>
                <p><?php echo $use_group['shop_img_menu'] ?><span><?php echo $use_group['shop_img_price']; ?></span></p>
            </div>
        <?php endif; ?>
        <?php if ($group['menu_img_group3']) :; ?>

            <div class="pickup_one">
                <div class="pickup_img">
                    <img src="<?php $use_group = $group['menu_img_group2'];
                                echo $use_group['shop_img'] ?>" alt="" />
                </div>
                <p><?php echo $use_group['shop_img_menu'] ?><span><?php echo $use_group['shop_img_price']; ?></span></p>
            </div>
        <?php endif; ?>
    </div>
    <?php if (get_field('menu_list_food') || get_field('menu_list_food')) :; ?>
        <div class="other_menu">
            <?php if (get_field('menu_list_food')) :; ?>
                <dl class="other_menu_list food">
                    <dl>食べ物</dl>
                    <?php $menu_list = get_field('menu_list_food');
                    if ($menu_list) :
                        $i = 1; ?>
                        <?php while ($menu_list['name' . $i] && $menu_list['price' . $i]) : ?>
                            <dl>
                                <dt><?php echo $menu_list['name' . $i] ?></dt>
                                <dd><?php echo $menu_list["price" . $i]; ?></dd>
                            </dl>
                    <?php $i++;
                        endwhile;
                    endif; ?>
                </dl>
            <?php endif; ?>
            <?php if (get_field('menu_list_drink')) :; ?>
                <dl class="other_menu_list drink">
                    <dl>飲み物</dl>
                    <?php $menu_list = get_field('menu_list_drink');
                    if ($menu_list) :
                        $i = 1; ?>
                        <?php while ($menu_list['name' . $i] && $menu_list['price' . $i]) : ?>
                            <dl>
                                <dt><?php echo $menu_list['name' . $i] ?></dt>
                                <dd><?php echo $menu_list["price" . $i]; ?></dd>
                            </dl>
                    <?php $i++;
                        endwhile;
                    endif; ?>
                </dl>
            <?php endif; ?>

        </div>
    <?php endif; ?>
</section>

<?php get_template_part('access'); ?>