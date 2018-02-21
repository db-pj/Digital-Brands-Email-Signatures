<?php
$sites = array(
	'bc' => array(
		'site_rgb' => '66,144,0',
		'site_image' => 'https://ci4.googleusercontent.com/proxy/ZKnK0crfFVBAnILTYrTBMiXOu8P74hOSliZw-gKIJtVNAKrutjL6_HyK_szIfJmuD1ORdqCz32FZ_Mzpee2YubcxCqvt3LR8XOD-DIsXoZL2aATXCdYTUX_ATuH2yT_virF2V4MflXf_k9YtHIWSR6RlEw=s0-d-e1-ft#http://www.badcredit.org/wp-content/themes/tdr-framework-child/images/signature/signature.png',
		'site_link' => 'www.badcredit.org',
		//'default_twitter' => 'BadCreditOrg',
		'default_twitter' => '',
	),
	'cr' => array(
		'site_rgb' => '102,167,219',
		'site_image' => 'https://ci3.googleusercontent.com/proxy/1NzLa-slj_yIGf0-IU_4o_Ano07oFZOTRAeW3-OKqTzxunz55da2SlpAvET6qJulacpgBzCBk5J6SnXLtR811pxlj2jx7sNCl3QildueaJm38_WI9KArfyVJZC2NZRHKq9eXuE0LYF7grac=s0-d-e1-ft#http://www.cardrates.com/wp-content/themes/cardreviews/images/signature/signature.png',
		'site_link' => 'www.cardrates.com',
		//'default_twitter' => 'CardRates',
		'default_twitter' => '',
	),
	'da' => array(
		'site_rgb' => '197,117,175',
		'site_image' => 'http://www.datingadvice.com/wp-content/themes/da-desktop/images/signature/signature.png',
		'site_link' => 'www.datingadvice.com',
		//'default_twitter' => 'DatingAdviceCom',
		'default_twitter' => '',
	),
	'db' => array(
		'site_rgb' => '236,68,36',
		'site_image' => 'http://digitalbrands.com/images/dbsig_right2.png',
		'site_link' => 'www.digitalbrands.com',
		'default_twitter' => '',
	),
	'dc' => array(
		'site_rgb' => '216,127,39',
		'site_image' => 'http://www.dealcrunch.com/wp-content/themes/dealcrunch/images/signature/signature.png',
		'site_link' => 'www.dealcrunch.com',
		//'default_twitter' => 'DealCrunchCom',
		'default_twitter' => '',
	),
	'ha' => array(
		'site_rgb' => '241,106,40',
		'site_image' => 'http://www.hostingadvice.com/wp-content/themes/hostingadvice/images/signature/signature.png',
		'site_link' => 'www.hostingadvice.com',
		//'default_twitter' => 'Hosting_Advice',
		'default_twitter' => '',
	),
);
echo "\nSite: ";
$site = trim( fgets( STDIN ) );
$site_rgb = $sites[$site]['site_rgb'];
$site_image = $sites[$site]['site_image'];
$site_link = $sites[$site]['site_link'];
echo "Name: ";
$name = trim( fgets( STDIN ) );
echo "Position: ";
$position = trim( fgets( STDIN ) );
echo "Company Name: ";
$company = trim( fgets( STDIN ) );
if ( empty( $company ) ) :
	$company = "Digital Brands Inc.";
endif;
echo "Phone: ";
$phone = trim( fgets( STDIN ) );
if ( !empty( $phone ) ) :
	$phone = "<br>Call:&nbsp;<a href='tel:8882175962' style='color:rgb(80,80,80);text-decoration:none' target='_blank'>{$phone}</a>";
endif;
echo "Twitter Handle: ";
$twitter = trim( fgets( STDIN ) );
if ( empty( $twitter ) ) :
	$twitter = $sites[$site]['default_twitter'];
endif;
if ( !empty( $twitter ) ) :
	$twitter = "<br>Follow:&nbsp;<a href='https://twitter.com/{$twitter}' style='color:rgb(80,80,80);text-decoration:none' target='_blank'>@{$twitter}</a>";
endif;
echo "LinkedIn: ";
$linkedin = trim( fgets( STDIN ) );
if ( !empty( $linkedin ) ) :
	$linkedin = "<br>LinkedIn:&nbsp;<a href='http://www.linkedin.com/in/{$linkedin}' style='color:rgb(80,80,80);text-decoration:none' target='_blank'>www.linkedin.com/in/{$linkedin}</a>";
endif;
echo "Extra: ";
$extra = trim( fgets( STDIN ) );

$signature_format = <<<'EOD'
<a href='#' id='copylink'>Click to Copy Signature to Clipboard</a>
<table id='emailsig' border="0px" style="font-family:Verdana,Arial,Helvetica,sans-serif;width:456px"><colgroup><col width="250px"><col width="200px"></colgroup><thead><tr><th colspan="2" height="25px" width="450px"><hr style="min-height:8px;background-color:rgb(%1$s);border:0px"></th></tr></thead><tbody><tr><td><p style="margin:0px;font-family:Arial,Helvetica,sans-serif;color:rgb(80,80,80);font-size:16px"><strong>%3$s</strong><br>%4$s</p><p style="margin:0px;font-family:Arial,Helvetica,sans-serif;color:rgb(80,80,80);font-size:12px">&nbsp;</p><p style="margin:0px;font-family:Arial,Helvetica,sans-serif;color:rgb(80,80,80);font-size:12px"><a href="https://www.google.com/maps/preview#!q=15+SE+1st+Ave%2C+2nd+Floor+Gainesville%2C+FL+32601&amp;data=!1m4!1m3!1d3788!2d-82.324388!3d29.650803!4m11!1m10!4m8!1m3!1d110917!2d-82.319746!3d29.6862705!3m2!1i1024!2i768!4f13.1!17b1" style="color:rgb(80,80,80);text-decoration:none" target="_blank">%10$s<br>15 SE 1st Ave, 2nd Floor<br>Gainesville, FL 32601</a><br>%5$s<br>Visit:&nbsp;<a href="http://%9$s" style="color:rgb(%1$s);font-weight:bold;text-decoration:none" target="_blank">%9$s</a>%6$s%7$s%8$s</p></td><td valign="top"><img src="%2$s" alt="" style="float:right"></td></tr></tbody></table>
<script type="text/javascript">
document.getElementById('copylink').addEventListener('click', function() {
	var text = document.getElementById('emailsig');
	var range, selection;
	if ( document.body.createTextRange ) {
		range = document.body.createTextRange();
		range.moveToElementText(text);
		range.select();
		document.execCommand('copy');
		alert("Signature copied to clipboard. Please paste into your gmail email signature.");
	} else if ( window.getSelection ) {
		selection = window.getSelection();
		range = document.createRange();
		range.selectNodeContents(text);
		selection.removeAllRanges();
		selection.addRange(range);
		document.execCommand('copy');
		alert("Signature copied to clipboard. Please paste into your gmail email signature.");
	}
});
</script>
EOD;
$signature = sprintf( $signature_format, $site_rgb, $site_image, $name, $position, $phone, $twitter, $linkedin, $extra, $site_link, $company );
$name_parts = explode( ' ', $name );
$first_name = strtolower( $name_parts[0] );
$file_name = "sig_{$first_name}_{$site}.html";
file_put_contents( $file_name, $signature );
echo "Wrote to $file_name\n\n";
?>
