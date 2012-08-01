<article<?php print $attributes; ?>>
    <?php print render($title_prefix); ?>    

    <div class="doit-box">
        <p>
            <?php print render($content['field_introduction']); ?>
        </p>
        <form method="get" action="<?php print $content['field_link']['#items']['0']['url']; ?>">
            <input type="submit" value="Get started"/>
        </form>
    </div>

    <!--
    <?php if (count($content['field_what_you_will_need']['#items']) > 0){ ?>
    <h2><?php print render($content['field_what_you_will_need']['#title'])?></h2>
    <ul>
    <?php for ($i=0; $i < count($content['field_what_you_will_need']['#items']); $i++) {  ?>
        <li>
            <?php print render($content['field_what_you_will_need']['#items'][$i]['safe_value']) ?>
        </li>
    <?php } ?>
    </ul>
    <?php } ?> 
    -->

    <?php print render($content['field_what_you_will_need']); ?>
    <?php print render($content['field_further_information']); ?>
    <?php print render($content['field_other_channels']); ?>  
</article>