<?php  
	$backend_theme_url=$this->config->item('backend_theme_url');
	$frontend_theme_url=$this->config->item('frontend_theme_url');
	$base_url=$this->config->item('base_url'); 
	
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
         <title>Online Organic Grocery Shopping and Online Supermarket in Chennai/Tamilnadu - Chennai Angadi</title>    
		<meta name="keywords" content="online organic grocery, online organic grocery chennai, online organic grocery tamilnadu, online organic grocery shopping, online organic grocery store, online organic supermarket, organic grocery chennai, buy organic groceries online, food shopping online, original karupatti, best quality palm jaggery, certified organic producsts"/>
		<meta name="description" content="The best online organic grocery store in Chennai/Tamilnadu. Chennai Angadi is an online organic supermarket for all your daily & healthly needs. Online shopping now made easy with a wide range of organic groceries and home needs. Healthy organic food from Chennai angadi Organic"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<style type="text/css">
            @media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
                body[yahoo] .buttonwrapper { background-color: transparent !important; }
                body[yahoo] .button { padding: 0 !important; }
                body[yahoo] .button a { background-color: #9b59b6; padding: 15px 25px !important; }
            }

            @media only screen and (min-device-width: 601px) {
                .content { width: 600px !important; }
                .col387 { width: 387px !important; }
            }
        </style>
    </head>
    <body bgcolor="#34495E" style="margin: 0; padding: 0;" yahoo="fix"> 
        <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; width: 100%; max-width: 600px;" class="content"> 
            <tr>
                <td align="center" bgcolor="#fca800" style="padding: 20px 20px 20px 20px; color: #ffffff; font-family: Arial, sans-serif; font-size: 36px; font-weight: bold;">
                    <img src="<?php echo $frontend_theme_url;?>img/logo/logo.png" alt="chennaiangadi.com" style="display:block;" />
                </td>
            </tr>
            <tr>
                <td align="center" bgcolor="#ffffff" style="padding: 40px 20px 40px 20px; color: #555555; font-family: Arial, sans-serif; font-size: 20px; line-height: 30px; border-bottom: 1px solid #f6f6f6;">
                    <b>Welcome to Chennai Angadi</b> 
                </td>
            </tr>
            <tr>
                <td bgcolor="#ffffff" style="padding: 20px 20px 0 20px; border-bottom: 1px solid #f6f6f6; color: #555555; font-family: Arial, sans-serif; font-size: 15px; line-height: 24px;">                    
                     <?php echo "Dear ".$name.",<br>Thank you for ordering!.<br> 
                        Your order no is {$order_id}<br><br>
                        Status: {$order_status}<br><br>
                        Comments: {$deliver_comments}
                     <br><br>Thanks<br>Admin Team"; ?>
                </td>
            </tr>  
            <tr>
                <td align="center" bgcolor="#fca800" style="padding: 15px 10px 15px 10px; color: #fff; font-family: Arial, sans-serif; font-size: 12px; line-height: 18px;">
                    <b>Chennai Angadi,</b><br/> New # 15, Old # 8, Muthu Street, Mylapore, Chennai - 600004
                </td>
            </tr> 
        </table> 
    </body>
</html>