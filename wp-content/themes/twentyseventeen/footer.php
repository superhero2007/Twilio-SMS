<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

		</div><!-- #content -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>
<?php
if( isset( $_POST['phoneto'] ) ) {
	if(is_numeric($_POST['phoneto']))
	{
		$response = twl_send_sms( stripslashes_deep(['number_to'=>'+1'.$_POST['phoneto'],'message'=>'https://www.showfer.com/']) );
                if( is_wp_error( $response ) ) {
				echo '<script> alert("'.$response->get_error_message().'");</script>';
				extract( $_POST );
			} else {
				echo '<script> alert("Success Sent Message");</script>';
			}
	} 
	else
	{
			echo '<script>alert("Please Input Correct Number.");</script>';
	}
}

?>
</body>
<script src="https://use.typekit.net/ady0nng.js"></script>
<script>
try {
Typekit.load({
async: true
});
}
catch (e) {}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>

$(document).ready(function() {
$sub=1;
$("#subbtn").click(
function(){
if($sub==1)
{
$("#menu").css("float","right");
$("#menu").css("margin-top","-7%");
$("#menu").css("display","inline");
$("#menu").css("margin-right","10%");
}
else
$("#menu").css("display","none");
$sub=1-$sub;
});

});
function myFunc()
{
	location.href="mailto:contact@showfer.com?subject=Feedback";
}
</script>
</html>