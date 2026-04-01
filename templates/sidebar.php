<?php
    $offer_link = get_field('offer_link', 'option');
?>
<div class="sidebar">
    <div class="sidebar__content">
        <div class="sidebar__content-item">
            <span class="sidebar__content-title">İDMAN BONUS<br> qədər <span>125%</span></span>
            <?php if (is_amp()): ?>
                <button class="btn sidebar_button" on="tap:AMP.navigateTo(url='<?php echo $offer_link; ?>')" >
            <?php else: ?>
                <button class="btn sidebar_button"  onclick="location.href='<?php echo $offer_link; ?>'">
            <?php endif; ?>
                Bonus əldə edin
            </button>
        </div>
    </div>
</div>