<?php  
	$backend_theme_url=$this->config->item('backend_theme_url');
	$frontend_theme_url=$this->config->item('frontend_theme_url');
	$base_url=$this->config->item('base_url'); 
	// $shipping=$shipping[0];
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <title>chennaiangadi.com</title>
        <meta name="viewport" content="width=device-width" /> 
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
			@import  url(//fonts.googleapis.com/css?family=Lato:700);
			body {
				font-family:'Lato', sans-serif;
				color: #000;
				font-size:12px;
			}
			.table
			{
				width: 100%;
				margin-bottom: 20px;
				border-color: gray;
				border-collapse: collapse;
				border-spacing: 0;
			}
			.table  tr > td 
			{
				padding: 8px;
				line-height: 1.428571429;
				vertical-align: top;
				border-top: 1px solid #dddddd;  
			}
			table.listoutproducts tbody tr:hover 
			{
				cursor:pointer;
				background-color:#EE5757;
			}	 
        </style>
    </head>
    <body style="margin: 0; padding: 0;" yahoo="fix"> 
        <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; width: 100%; max-width: 600px; border:1px solid #cccccc;"> 
            <tr>
                <td align="center" bgcolor="#fca800" style="padding: 10px 10px 10px 10px; color: #ffffff; font-family: Arial, sans-serif; font-size: 36px; font-weight: bold;">
                    <img src="<?php echo $frontend_theme_url;?>img/logo/logo.png" alt="chennaiangadi.com" style="display:block;" />
                </td>
            </tr> 
            <tr>
                <td bgcolor="#ffffff" style="padding: 10px 10px 10px 10px; border-bottom: 1px solid #f6f6f6; color: #000000; font-family: 'Lato'; font-size: 15px; line-height: 24px;">                    
				<div class="welcome"><strong>Hi! <?php echo ucfirst($shipping->billing_name); ?>, </strong><br/><br/>					
					Thank you for shopping with ChennaiAngadi.com!<br/> This email contains important information about your order. Please save it for future reference.
					<br/><br/>
					<table style="font-family: 'Lato'; margin-bottom:15px;" class="table" width="100%">
						<tbody>
						   <tr>
							  <?php ?>
							  <td width="50%" align="left">
								 Order ID&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php  echo $shipping->order_id;?><br/>
								 Order Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  : <?php echo date('d-M-Y'); ?><br/>
								 Order Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo date('H:i:s'); ?><br/>
								 Payment Method&nbsp;&nbsp;:
								 <?php if($shipping->order_status=='1'){ ?>
								 Cash on Delivery
								 <?php }else{ ?>
								 Online
								 <?php } ?>
								 <br>                         
							  </td>
							  <td width="50%" style="text-align:right">
								 <?php echo $shipping->billing_name; ?>,
								 <br><?php if($shipping->billing_address!=" ") echo $shipping->billing_address;?>,
								 <br><?php  if($shipping->billing_city!="0") echo $shipping->billing_city;?>,                                                
								 <br>Ph: <?php  echo $shipping->billing_phone;?>                                            
							  </td>
						   </tr>
						</tbody>
					</table>
					<table border="1" id="t01" style="font-family: 'Lato'; border:1px solid rgba(153, 153, 153, 0.19); border-collapse:collapse;" width="100%">
						<thead>
							<tr style="background-color:#cccccc;color: #000;">
							  <th>S#</th>
							  <th style="text-align:left; padding-left:10px;">Product name</th>
							  <th style="text-align:left; padding-left:10px;">Price</th>
							  <th style="text-align:left; padding-left:10px;">Qty</th>
							  <th style="text-align:left; padding-left:10px;">Subtotal</th>
							</tr>
						</thead>
						<?php	
							$l=0;			$total_price=0;	$total_quantity=0;$total_mrp=0;			 
							foreach($orderedproduct as $product) {
							$l++;
						?>
							<tr>
							   <td><?php echo $l; ?></td>
							   <td><span style="font-weight: bold;"><?php echo ucfirst($product->prod_name); ?>
							         <?php 
									        $product_id = $product->prod_id;
                							$this->db->where('product_id',$product_id);
                							$product_info=$this->db->get('product')->row();	
                							echo $product_info->prod_weight;
									 ?>
							   </span></td>
							   <td>Rs. <?php echo number_format($product->amount,2,'.',','); $total_price +=$product->amount; ?></td>
							   <td><?php echo $product->prod_qty;  $total_quantity +=$product->prod_qty; ?></td>
							   <td>Rs. <?php echo number_format($product->subtotal,2,'.',','); $total_mrp +=$product->subtotal; ?></td>
							</tr>
						<?php } ?>
						<tr>
						   <td colspan="2" align="right"><strong>Total :</strong></td>
						   <td>Rs. <?php echo number_format($total_price,2,'.',',');; ?></td>
						   <td><?php echo $total_quantity; ?> </td>
						   <td>Rs. <?php echo number_format($total_mrp,2,'.',',');; ?></td>
						</tr>   
											
						<tr>
							<td colspan="4" align="right"><strong>Delivery :</strong></td>
							<td>Rs.	<?php  if($shipping->delivery_amt >0){  echo $shipping->delivery_amt; } else { echo "Free"; } ?></td>
						</tr>
						<?php $disc_amt=0; if($shipping->dis_amount >0){ ?>						
						<tr>
							<td colspan="4" align="right"><strong>Discount(<?php echo $shipping->dis_amount;?>%) :</strong></td>
							<td> Rs. <?php $disc_amt=0;
										$disc=$total_mrp * $shipping->dis_amount;	
										$disc_amt=$disc/100;
							echo number_format($disc_amt,2,'.',',');; ?></td>
						</tr>
						 <?php } ?>
						<tr>
							<td colspan="4" align="right"><strong>Net Payable Amount :</strong></td>
							<td> Rs. <?php echo $shipping->amount; ?></td>
						</tr>
					</table>
					 <br/><br/>
					 
					 <br/><br/>
					 <br/><br/>
					 <strong>Got Questions?</strong><br>
					 <strong>Call Us:</strong> 09094676665<br>
					 <strong>Email:</strong> care@chennaiangadi.com
					 <br/><br/>
					 <strong>Thank You,</strong><br/>
					 <strong>Team Chennai Angadi</strong>
				  </div>
					
				</td>
            </tr>  
            <tr>
                <td align="center" bgcolor="#fca800" style="padding: 15px 10px 15px 10px; color: #fff; font-family: 'Lato'; font-size: 12px; line-height: 18px;">
                    <b>Chennai Angadi,</b><br/> New # 15, Old # 8, Muthu Street, Mylapore, Chennai - 600004
                </td>
            </tr> 
        </table> 
    </body>
</html>