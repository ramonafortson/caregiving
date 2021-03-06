<link rel="stylesheet" type="text/css" href="<?php echo EMAIL_PLUGIN_URL; ?>/inc/admin-css.css" />
<div class='wrap'>
<h2>Subscription form setting</h2>
<div class="emailn-left">
    <div class="emailn-left-widgets">

<?php
global $wpdb, $wp_version;

$eemail_title = get_option('eemail_title');
$eemail_on_homepage = get_option('eemail_on_homepage');
$eemail_on_posts = get_option('eemail_on_posts');
$eemail_on_pages = get_option('eemail_on_pages');
$eemail_on_search = get_option('eemail_on_search');
$eemail_on_archives = get_option('eemail_on_archives');
$eemail_widget_cap = get_option('eemail_widget_cap');
$eemail_widget_txt_cap = get_option('eemail_widget_txt_cap');
$eemail_widget_but_cap = get_option('eemail_widget_but_cap');

$eemail_from_name = get_option('eemail_from_name');
$eemail_from_email = get_option('eemail_from_email');

if (@$_POST['eemail_submit']) 
{
	$eemail_title = stripslashes($_POST['eemail_title']);
	$eemail_on_homepage = stripslashes($_POST['eemail_on_homepage']);
	$eemail_on_posts = stripslashes($_POST['eemail_on_posts']);
	$eemail_on_pages = stripslashes($_POST['eemail_on_pages']);
	$eemail_on_search = stripslashes($_POST['eemail_on_search']);
	$eemail_on_archives = stripslashes($_POST['eemail_on_archives']);
	$eemail_widget_cap = stripslashes($_POST['eemail_widget_cap']);
	$eemail_widget_txt_cap = stripslashes($_POST['eemail_widget_txt_cap']);
	$eemail_widget_but_cap = stripslashes($_POST['eemail_widget_but_cap']);
	
	$eemail_from_name = stripslashes($_POST['eemail_from_name']);
	$eemail_from_email = stripslashes($_POST['eemail_from_email']);
	
	update_option('eemail_title', $eemail_title );
	update_option('eemail_on_homepage', $eemail_on_homepage );
	update_option('eemail_on_posts', $eemail_on_posts );
	update_option('eemail_on_pages', $eemail_on_pages );
	update_option('eemail_on_search', $eemail_on_search );
	update_option('eemail_on_archives', $eemail_on_archives );
	update_option('eemail_widget_cap', $eemail_widget_cap );
	update_option('eemail_widget_txt_cap', $eemail_widget_txt_cap );
	update_option('eemail_widget_but_cap', $eemail_widget_but_cap );
	
	update_option('eemail_from_name', $eemail_from_name );
	update_option('eemail_from_email', $eemail_from_email );
}

echo '<table width="100%" border="0" cellspacing="5" cellpadding="0">';
echo '<tr>';
echo '<td align="left">';
echo '<form name="form_eemail" method="post" action="">';
echo '<p>Title:<br><input  style="width: 350px;" type="text" value="';
echo $eemail_title . '" name="eemail_title" id="eemail_title" /></p>';
echo '<p>Display Option: (YES/NO) </p>';
echo '<p>On Homepage:&nbsp;<input  style="width: 100px;" type="text" value="';
echo $eemail_on_homepage . '" name="eemail_on_homepage" id="eemail_on_homepage" maxlength="3" />';
echo '&nbsp;On Posts:&nbsp;&nbsp;&nbsp;<input  style="width: 100px;" type="text" value="';
echo $eemail_on_posts . '" name="eemail_on_posts" id="eemail_on_posts" maxlength="3" /></p>';
echo '<p>On Pages:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  style="width: 100px;" type="text" value="';
echo $eemail_on_pages . '" name="eemail_on_pages" id="eemail_on_pages" maxlength="3" />';
echo '&nbsp;On Search:&nbsp;<input  style="width: 100px;" type="text" value="';
echo $eemail_on_search . '" name="eemail_on_search" id="eemail_on_search" maxlength="3" /></p>';
echo '<p>On Archives:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  style="width: 100px;" type="text" value="';
echo $eemail_on_archives . '" name="eemail_on_archives" id="eemail_on_archives" maxlength="3" /></p>';
echo '<br><p>Short description:<br><input  style="width: 300px;" type="text" value="';
echo $eemail_widget_cap . '" name="eemail_widget_cap" id="eemail_widget_cap" maxlength="300" /></p>';
echo '<p>Text box caption:<br><input  style="width: 300px;" type="text" value="';
echo $eemail_widget_txt_cap . '" name="eemail_widget_txt_cap" id="eemail_widget_txt_cap" /></p>';
echo '<p>Button caption:<br><input  style="width: 300px;" type="text" value="';
echo $eemail_widget_but_cap . '" name="eemail_widget_but_cap" id="eemail_widget_but_cap" /></p>';

echo '<br><p>From name (Email):<br><input  style="width: 300px;" type="text" value="';
echo $eemail_from_name . '" name="eemail_from_name" id="eemail_from_name" /></p>';
echo '<p>From email address:<br><input  style="width: 300px;" type="text" value="';
echo $eemail_from_email . '" name="eemail_from_email" id="eemail_from_email" /></p>';

echo '<input type="submit" id="eemail_submit" name="eemail_submit" lang="publish" class="button-primary" value="Update Setting" value="1" />';
echo '</form>';
echo '</td>';
echo '<td align="center">';

echo '</td>';
echo '</tr>';
echo '</table>';
?>
</div>
  </div>
  <div class="emailn-right">
    <div class="emailn-widgets">
      <h3>About</h3>
      <div class="emailn-widgets-desc"> 
	  Email newsletter plugin have option to send HTML Mails/Newsletters to users. <a href="http://www.gopiplus.com/work/2010/09/25/email-newsletter/" target="_blank">click here</a> to view more information.	  </div>
    </div>
	<div class="emailn-widgets">
      <h3>Options</h3>
	  <div class="emailn-widgets-desc">
	  <ul>
	  	<li>Compose email</li>
		<li>Send mail to registered user</li>
		<li>Send mail to comment posted user</li>
		<li>Send mail to subscribed user</li>
		<li>Send mail to simple contact form emails</li>
		<li>Export CSV file</li>
		<li>Import emails</li>
	  </ul>
	  </div>
    </div>
  </div>
</div>