<?php
use WP_STATISTICS\Helper;
use WP_STATISTICS\Menus;
use WP_Statistics\Utils\Request;
use WP_Statistics\Service\Admin\LicenseManagement\LicenseHelper;
use WP_Statistics\Components\View;

?>
 <?php if (esc_html($is_license_valid)): ?>
    <a class="wps-author-tabs__item" href="<?php echo esc_url(Menus::admin_url('author-analytics', ['type' => 'single-author', 'author_id' => esc_html($author_id)]))?>">
        <div class="wps-author-tabs__item--image">
            <span># <?php echo esc_html($counter); ?></span>
            <img src="<?php echo esc_url(get_avatar_url($author_id)); ?>" alt="<?php echo esc_html($author_name); ?>"/>
        </div>
        <div class="wps-author-tabs__item--content">
            <h3><?php echo esc_html($author_name); ?></h3>
            <span><?php echo Helper::formatNumberWithUnit(esc_html($count)); ?> <?php echo $count_label ?></span>
        </div>
    </a>
<?php else: ?>
    <div class="disabled wps-tooltip-premium">
        <div class="wps-author-tabs__item">
            <div class="wps-author-tabs__item--image">
                <span><a href="<?php echo esc_url(Menus::admin_url('author-analytics', ['type' => 'single-author', 'author_id' => esc_html($author_id)]))?>"></a></span>
                <img src="<?php echo esc_url(get_avatar_url($author_id)); ?>" alt="<?php echo esc_html($author_name); ?>"/>
            </div>
            <div class="wps-author-tabs__item--content">
                <h3><?php echo esc_html($author_name); ?></h3>
                <span><?php echo Helper::formatNumberWithUnit(esc_html($count)); ?> <?php echo $count_label ?></span>
            </div>
        </div>
        <?php
        View::load("components/lock-sections/tooltip-premium", [
            'class' => 'tooltip-premium--side tooltip-premium--left' ,
            'addon_name' => 'wp-statistics-data-plus',
        ]);
        ?>
    </div>
<?php endif ?>