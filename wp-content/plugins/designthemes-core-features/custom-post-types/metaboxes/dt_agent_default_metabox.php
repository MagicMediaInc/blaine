<?php
global $post;
$agent_settings = get_post_meta ( $post->ID, '_agent_settings', TRUE );
$agent_settings = is_array ( $agent_settings ) ? $agent_settings : array (); ?>

<script type='text/javascript' src='http://localhost/magicmediaprojects/tuescape/wp-content/plugins/designthemes-core-features/page-builder/js/custom.js?ver=4.0.1'></script>
<script type='text/javascript' src='http://localhost/magicmediaprojects/tuescape/wp-content/plugins/buddypress/bp-activity/js/mentions.min.js?ver=2.1.1'></script>
<!-- Additional Fields -->
<div class="custom-box meta-fields">
    <div class="column one-seventh">  
        <label><?php _e('Organizer','dt_themes');?></label>
    </div>
    <div class="column one-fourth">  
        <?php $v = array_key_exists("client",$agent_settings) ?  $agent_settings['client'] : '';?>
        <input id="client" name="_client" class="large" type="text" value="<?php echo $v;?>" style="width:100%;" />
        <p class="note"> <?php _e("You can given your organizer name",'dt_themes');?> </p>
    </div>

    <div class="column one-seventh">  
        <label><?php _e('Location','dt_themes');?></label>
    </div>
    <div class="column one-fourth">  
        <?php $v = array_key_exists("location",$agent_settings) ?  $agent_settings['location'] : '';?>
        <input id="location" name="_location" class="large" type="text" value="<?php echo $v;?>" style="width:100%;" />
        <p class="note"> <?php _e("You can given your client location",'dt_themes');?> </p>
    </div>

    <div class="column one-seventh">  
        <label><?php _e('Website','dt_themes');?></label>
    </div>
    <div class="column one-fourth last">  
        <?php $v = array_key_exists("url",$agent_settings) ?  $agent_settings['url'] : '';?>
        <input id="url" name="_url" class="large" type="text" value="<?php echo $v;?>" style="width:100%;" />
        <p class="note"> <?php _e("You can given your client's project url",'dt_themes');?> </p>
    </div>
</div>
<!-- Additional Fields End -->

<div class="sub-title custom-box">
    <div class="column one-sixth"><?php _e( 'MercadoPago ClientID:','dt_themes');?></div>
    <div class="column five-sixth last">
        <div class="image-preview-container">
            <?php $mpclientid = array_key_exists ( "mp-client-id", $agent_settings ) ? $agent_settings ['mp-client-id'] : '';?>
            <input name="mp-client-id" type="text" class="uploadfield medium" value="<?php echo $mpclientid;?>"/>
            <p class="note"><?php _e("Introduzca el Client ID de MercadoPago",'dt_themes');?></p>
        </div>                    
    </div>
</div>

<div class="sub-title custom-box">
    <div class="column one-sixth"><?php _e( 'MercadoPago ClientSecret:','dt_themes');?></div>
    <div class="column five-sixth last">
        <div class="image-preview-container">
            <?php $mpclientsecret = array_key_exists ( "mp-client-secret", $agent_settings ) ? $agent_settings ['mp-client-secret'] : '';?>
            <input name="mp-client-secret" type="text" class="uploadfield medium" value="<?php echo $mpclientsecret;?>"/>
            <p class="note"><?php _e("Introduzca el Client Secret de MercadoPago",'dt_themes');?></p>
        </div>                    
    </div>
</div>

<div class="sub-title custom-box">
    <div class="column one-sixth"><?php _e( 'Title Background','dt_themes');?></div>
    <div class="column five-sixth last">
        <div class="image-preview-container">
            <?php $subtitlebg = array_key_exists ( "sub-title-bg", $agent_settings ) ? $agent_settings ['sub-title-bg'] : '';?>
            <input name="sub-title-bg" type="text" class="uploadfield medium" readonly="readonly" value="<?php echo $subtitlebg;?>"/>
            <input type="button" value="<?php _e('Upload','dt_themes');?>" class="upload_image_button show_preview" />
            <input type="button" value="<?php _e('Remove','dt_themes');?>" class="upload_image_reset" />
            <?php if( !empty($subtitlebg) ) dt_theme_adminpanel_image_preview($subtitlebg );?>
            <p class="note"><?php _e("Upload an image for the sub title background",'dt_themes');?></p>
        </div>                    
    </div>
</div>

<div class="sub-title custom-box">
    <div class="column one-sixth"></div>
    <div class="column five-sixth last">
        <div class="column one-third">
            <label><?php _e('Background Repeat','dt_themes');?></label>
            <?php $bgrepeat =  array_key_exists ( "sub-title-bg-repeat", $agent_settings ) ? $agent_settings ['sub-title-bg-repeat'] : ''; ?>
            <div class="clear"></div>
            <select name="sub-title-bg-repeat">
                <option value=""><?php _e("Select",'dt_themes');?></option>
                <?php foreach( array("repeat","repeat-x","repeat-y","no-repeat") as $option): ?>
                       <option value="<?php echo $option;?>" <?php selected($option,$bgrepeat);?>><?php echo $option;?></option>
                <?php endforeach;?>
            </select>
            <p class="note"><?php _e("Select how would you like to repeat the background image ",'dt_themes');?></p>
        </div>

        <div class="column one-third">
            <label><?php _e('Background Position','dt_themes');?></label>
            <?php $bgposition =  array_key_exists ( "sub-title-bg-position", $agent_settings ) ? $agent_settings ['sub-title-bg-position'] : ''; ?>
            <div class="clear"></div>
            <select name="sub-title-bg-position">
                <option value=""><?php _e("Select",'dt_themes');?></option>
                <?php foreach( array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right") as $option): ?>
                    <option value="<?php echo $option;?>" <?php selected($option,$bgposition);?>> <?php echo $option;?></option>
                <?php endforeach;?>
            </select>
            <p class="note"><?php _e("Select how would you like to position the background",'dt_themes');?></p>
        </div>

        <div class="column one-third last">
        <?php $label = 		__("Background Color",'dt_themes');
              $name  =		"sub-title-bg-color";
              $value =  	array_key_exists ( "sub-title-bg-color", $agent_settings ) ? $agent_settings ['sub-title-bg-color'] : "#";
              $tooltip = 	__("Select background color for sub title section e.g. #f2d607",'dt_themes'); ?>
              <label><?php echo $label;?></label>
              <div class="clear"></div>
              <?php dt_theme_admin_color_picker("",$name,$value,'');?>
              <p class="note"><?php echo $tooltip;?></p>
        </div>
    </div>
</div>
<!-- 0. Sub title End-->

<!-- Layout -->
<div class="custom-box ">
	<div class="column one-sixth">
		<label><?php _e('Layout','dt_themes');?> </label>
	</div>
	<div class="column five-sixth last">
		<ul class="dt-bpanel-layout-set"><?php
		
		$layouts = array (
				'single-agent-layout-one' => 'agent-fullwidth',
				'single-agent-layout-two' => 'agent-with-left-agent',
				'single-agent-layout-three' => 'agent-with-right-agent' 
		);
		
		$v = array_key_exists ( "layout", $agent_settings ) ? $agent_settings ['layout'] : 'single-agent-layout-one';
		foreach ( $layouts as $key => $value ) {
			$class = ($key == $v) ? " class='selected' " : "";
			echo "<li><a href='#' rel='{$key}' {$class}><img src='" . plugin_dir_url ( __FILE__ ) . "images/columns/{$value}.png' /></a></li>";
		}
		?></ul>
		<?php $v = array_key_exists("layout",$agent_settings) ? $agent_settings['layout'] : 'single-agent-layout-one';?>
		<input id="mytheme-agent-layout" name="layout" type="hidden"
			value="<?php echo $v;?>" />
		<p class="note"> <?php _e("You can choose between a left, right or full width.",'dt_themes');?> </p>
	</div>

</div>
<!-- Layout End-->

<!-- Show Related Posts -->
<div class="custom-box">
	<div class="column one-sixth">
		<label><?php _e('Show Related Projects','dt_themes');?></label>
	</div>
	<div class="column five-sixth last"><?php
	
	$switchclass = array_key_exists ( "show-related-items", $agent_settings ) ? 'checkbox-switch-on' : 'checkbox-switch-off';
	$checked = array_key_exists ( "show-related-items", $agent_settings ) ? ' checked="checked"' : '';
	?><div data-for="mytheme-related-item"
			class="dt-checkbox-switch <?php echo $switchclass;?>"></div>
		<input id="mytheme-related-item" class="hidden" type="checkbox"
			name="mytheme-related-item" value="true" <?php echo $checked;?> />
		<p class="note"> <?php _e('Would you like to show the related projects at the bottom','dt_themes');?> </p>
	</div>
</div>
<!-- Show Related Posts End-->

<!-- Show Social Share -->
<div class="custom-box">
	<div class="column one-sixth">
		<label><?php _e('Show Social Share','dt_themes');?></label>
	</div>
	<div class="column five-sixth last"><?php
	$switchclass = array_key_exists ( "show-social-share", $agent_settings ) ? 'checkbox-switch-on' : 'checkbox-switch-off';
	$checked = array_key_exists ( "show-social-share", $agent_settings ) ? ' checked="checked"' : '';
	?><div data-for="mytheme-social-share"
			class="dt-checkbox-switch <?php echo $switchclass;?>"></div>
		<input id="mytheme-social-share" class="hidden" type="checkbox"
			name="mytheme-social-share" value="true" <?php echo $checked;?> />
		<p class="note"> <?php _e('Would you like to show the social share at the bottom','dt_themes');?> </p>
	</div>
</div>
<!-- Show Social Share End -->

<!-- Allow Comments -->
<div class="custom-box">
	<div class="column one-sixth">
		<label><?php _e('Allow Comments','dt_themes');?></label>
	</div>
	<div class="column five-sixth last"><?php
	$switchclass = array_key_exists ( "comment", $agent_settings ) ? 'checkbox-switch-on' : 'checkbox-switch-off';
	$checked = array_key_exists ( "comment", $agent_settings ) ? ' checked="checked"' : '';
	
	?><div data-for="mytheme-agent-comment"
			class="dt-checkbox-switch <?php echo $switchclass;?>"></div>

		<input id="mytheme-agent-comment" class="hidden" type="checkbox"
			name="mytheme-agent-comment" value="true" <?php echo $checked;?> />

		<p class="note"> <?php _e('YES! to allow comments on this page.','dt_themes');?> </p>
	</div>
</div>
<!-- Allow Comments End -->

<!-- Medias -->
<div class="custom-box">
	<div class="column one-sixth">
		<label><?php _e('Images','dt_themes');?> </label>
	</div>
	<div class="column five-sixth last">
		<div class="dt-media-btns-container">
			<a href="#" class="dt-open-media button button-primary"><?php _e( 'Click Here to Add Images', 'dt_themes' );?> </a>
			<a href="#" class="dt-add-video button button-primary"><?php _e( 'Click Here to Add Video', 'dt_themes' );?> </a>
		</div>
		<div class="clear"></div>

		<div class="dt-media-container">
			<ul class="dt-items-holder"><?php
			if (array_key_exists ( "items", $agent_settings )) {
				foreach ( $agent_settings ["items_thumbnail"] as $key => $thumbnail ) {
					$item = $agent_settings ['items'] [$key];
					$out = "";
					$name = "";
					$foramts = array (
							'jpg',
							'jpeg',
							'gif',
							'png' 
					);
					$parts = explode ( '.', $item );
					$ext = strtolower ( $parts [count ( $parts ) - 1] );
					if (in_array ( $ext, $foramts )) {
						$name = $agent_settings ['items_name'] [$key];
						$out .= "<li>";
						$out .= "<img src='{$thumbnail}' alt='' />";
						$out .= "<span class='dt-image-name'>{$name}</span>";
						$out .= "<input type='hidden' name='items[]' value='{$item}' />";
					} else {
						$name = "video";
						$out .= "<li>";
						$out .= "<span class='dt-video'></span>";
						$out .= "<input type='text' name='items[]' value='{$item}' />";
					}
					
					$out .= "<input class='dt-image-name' type='hidden' name='items_name[]' value='{$name}' />";
					$out .= "<input type='hidden' name='items_thumbnail[]' value='{$thumbnail}' />";
					$out .= "<span class='my_delete'></span>";
					$out .= "</li>";
					echo $out;
				}
			}
			?></ul>
		</div>
	</div>
</div>
<!-- Medias End -->