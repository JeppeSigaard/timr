<?php 

$timr = strtotime(get_post_meta(get_the_ID(),'timr',true));
$pretext = get_post_meta(get_the_ID(),'pretext',true);
$posttext = get_post_meta(get_the_ID(),'posttext',true);
?>
<input type="hidden" name="timr" value="<?php echo esc_attr($timr); ?>">


<div class="time-container">
    <div class="time-pretext">
        <h1 ><?php echo esc_attr($pretext); ?></h1>
    </div>
    <div class="time-box">
        <div>
            <span class="time-t">00</span>
            <span class="time-w">dage</span>
        </div>
        <div>
            <span class="time-t">00</span>
            <span class="time-w">timer</span>
        </div>
        <div>
            <span class="time-t">00</span>
            <span class="time-w">minutter</span>
        </div>
        <div>
            <span class="time-t">00</span>
            <span class="time-w">sekunder</span>
        </div>    
    </div>
</div>