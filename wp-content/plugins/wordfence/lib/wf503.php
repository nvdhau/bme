<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>Your access to this site has been limited</title>
</head><body>
<h1>Your access to this site has been limited</h1>
<p>Your access to this service has been temporarily limited. Please try again in a few minutes. (HTTP response code 503)</p>
<p>Reason: <span style="color: #F00;"><?php echo $reason; ?></span></p>
<p style="width: 600px;"><b>Important note for site admins: </b>If you are the administrator of this website note that your access has been limited because you broke one of the Wordfence blocking rules.
The reason your access was limited is: <b>"<?php echo $reason; ?>"</b>.
<br /><br />
If this is a false positive, meaning that your access to your own site has been limited incorrectly, then you
will need to regain access to your site, go to the Wordfence "options" page, go to the section for Rate Limiting Rules and disable the rule that caused you to be blocked. For example,
if you were blocked because it was detected that you are a fake Google crawler, then disable the rule that blocks fake google crawlers. Or if you were blocked because you 
were accessing your site too quickly, then increase the number of accesses allowed per minute.
<br /><br />
If you're still having trouble, then simply disable the Wordfence advanced blocking and you will 
still benefit from the other security features that Wordfence provides.

<br /><br />
<?php require('wfUnlockMsg.php'); ?>

</p>
<address>This response was generated by Wordfence.</address>
</body></html>
