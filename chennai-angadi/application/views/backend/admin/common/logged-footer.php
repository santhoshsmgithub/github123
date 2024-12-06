<?php  $backend_theme_url=$this->config->item('backend_theme_url'); $base_url=$this->config->item('base_url');   $site_url=$this->config->item('site_url');  ?>

<!-- END CHAT -->
<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->
<script src="<?php echo   $backend_theme_url ?>plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="<?php echo   $backend_theme_url ?>plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="<?php echo   $backend_theme_url ?>plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo   $backend_theme_url ?>plugins/breakpoints.js" type="text/javascript"></script>
<script src="<?php echo   $backend_theme_url ?>plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<!-- END CORE JS FRAMEWORK -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="<?php echo   $backend_theme_url ?>plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="<?php echo   $backend_theme_url ?>plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="<?php echo   $backend_theme_url ?>plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="<?php echo   $backend_theme_url ?>plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="<?php echo   $backend_theme_url ?>plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="<?php echo   $backend_theme_url ?>plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="<?php echo   $backend_theme_url ?>plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo   $backend_theme_url ?>plugins/boostrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
<script src="<?php echo   $backend_theme_url ?>plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="<?php echo   $backend_theme_url ?>js/form_validations.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->

<script src="<?php echo   $backend_theme_url ?>js/core.js" type="text/javascript"></script>
<script src="<?php echo   $backend_theme_url ?>js/demo.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS -->
<!-- END JAVASCRIPTS -->

<script type="text/javascript" src="<?php echo $backend_theme_url ;?>valitation/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="<?php echo $backend_theme_url ;?>valitation/jquery.validationEngine.js"></script>
<script src="<?php echo $backend_theme_url ;?>/plugins/bootstrap-tag/bootstrap-tagsinput.min.js" type="text/javascript"></script>

<script>
var site='<?php echo $base_url?>';
</script>	
<script>
	$(document).ready(function() {
		$(".icon-custom-left").click(function() {
			history.go(-1);
		});		
		$("button[type='button']").click(function() {
			history.go(-1);
		});
	});
</script>
<script type="text/javascript">

$(document).ready(function() {

    $("#domain").keyup(function() {
	
        //remove all the class add the messagebox classes and start fading
        $("#msgbox").removeClass().addClass('messagebox').text('Checking...').fadeIn("slow");
        //check the username exists or not from ajax

        var domain_name    = $('#domain').val();
		//alert(domain_name);
        $.ajax({
            url     : "<?php echo $this->config->item('base_url');?>admin/check_user_availability",
            data    : { domain_name : domain_name },
            type    : 'POST',
            success : function(data){
		
               if( data == '0' ){
                    $("#msgbox").fadeTo(200,0.1,function() {  //start fading the messagebox

                        //add message and change the class of the box and start fading
						$("#add-btn").attr('disabled','disabled');
                        $(this).html('This Sub domian Already exists').removeClass('domin-ok').addClass('domin-err').fadeTo(900,1);
                    });
                }else if( data == '1' ){
                    $("#msgbox").fadeTo(200,0.1,function() {  //start fading the messagebox
                        $("#add-btn").removeAttr('disabled');
                        //add message and change the class of the box and start fading
                        $(this).html('Sub domain available to register').removeClass('domin-err').addClass('domin-ok').fadeTo(900,1); 
						
                    });
                }else{
                    alert("Some error occured! Check Console");
                } 
            }
        });
    });
}); 
</script>
<script>
$(function(){
$('#cat_id1').change(function(){
$(".cat_id1").val($("#cat_id1 option:selected").text());
});

$('#user_role').change(function(){
$(".user_role").val($("#user_role option:selected").attr('attr-code'));
});


$('#city_id').change(function(){
$(".city_id").val($("#city_id option:selected").text());
});

$('#head_id').change(function(){
$(".head_id").val($("#head_id option:selected").text());
});


$('#state_id').change(function(){
$(".state_id").val($("#state_id option:selected").text());
});



$('#cat_id2').live('change',function(){
	
$(".cat_id2").val($("#cat_id2 option:selected").text());
});
$('#cat_id1').live('change',function(){
var cat_id1=$(this).val();

   $.ajax({
		type:'POST',
		url:site+"ajax/subcat2/",
		data:{cat_id1:cat_id1}
	   }).done(function(msg){
	   	console.log(msg);
	   	
	   	$(".cat_id2").html(msg);
			if(msg==1) {
			
				
			}
	   });



});


$('#state_id').live('change',function(){
//var head_code=$(this).attr('attr-code');

var user_role=$('#user_role').val();

var state_code=$("#state_id option:selected").attr('attr-code');
if(state_code==''){
	return false;
}
   $.ajax({
		type:'POST',
		url:site+"ajax/city/",
		data:{state_code:state_code,user_role:user_role}
	   }).done(function(msg){
	   	console.log(msg);
	   	
	   	$(".city_code").html(msg);
			if(msg==1) {
			
				
			}
	   });



});


$('#head_id').live('change',function(){
//var state_code=$(this).attr('attr-code');
var state_code=$("#head_id option:selected").attr('attr-code');
   $.ajax({
		type:'POST',
		url:site+"ajax/states/",
		data:{state_code:state_code}
	   }).done(function(msg){
	   	//console.log(msg);
	   	
	   	$(".state_code").html(msg);
			if(msg==1) {
			
				
			}
	   });



});
$('#user_role').live('change',function(){

	$('#state_id option').eq('0').prop('selected', true);
	$('#city_id').remove();
	$('.city_code').text('---please select state--')
	
});
$('#city_id').live('change',function(){
	
	var state_code=$("#city_id option:selected").attr('attr-code');
	var city_code=$("#city_id option:selected").val();
//var state_code=$(this).attr('attr-code');

if(state_code==''){
	return false;
}
$(".city_id").val($("#city_id option:selected").text())
   $.ajax({
		type:'POST',
		url:site+"ajax/statesuser/",
		data:{state_code:state_code,city_code:city_code}
	   }).done(function(msg){
	   	//console.log(msg);
	   	
	   	$(".user_name").html(msg);
			if(msg==1) {
			
				
			}
	   });



});

});

</script>
 <script>
			   	$(function(){


$('.admin_panel').click(function(){



	if($(this).val()==1){ $('.adminpanel').show();}else{$('.adminpanel').hide();}
});

				<?php   $search = $this->uri->segment(1);  if( $search=="search") { ?>
		            $("#map").googleMap().load();
				<?php } ?>
						$("#add-btn").click(function(){
												
												var valit= $("#addform").validationEngine('validate');
									
											  if(valit) { $("#addform").submit();   return true; }else{  return false;  }
								});
					});
			
	// Developer Designed of Sures 
	/*$('.Acc_Type').change(function(){ if($(this).val()==2) {  $('.Next-Btn').attr('value','Next'); $('.Next-Btn').attr('type','button');   } else {   $('.Next-Btn').attr('value','Submit'); $('.Next-Btn').attr('type','submit'); }   });*/
	
$('#Update-Btn').click(function(){ 

		var valit=$("#updateuser").validationEngine('validate');
		if(valit){
			$("#updateuser").submit();
		}

	});
	$('#Sign-Btn').click(function(){ 


   var valit= $("#signup").validationEngine('validate');;
											if(valit) {   var Email=$('#user_email').val();  var Name=$('#user_name').val(); 
											$.post('<?php echo $site_url; ?>check/signup/',{email:Email,name:Name},function(data,status){
											if(data=='4') {  
                                             var form=$("#signup");

                                             	$.post(site+'ajax/register/ad-panel/',{meta:form.serializeArray()},function(data){
//alert("data"+data);
console.log("record"+data);

                                             		if(data==1) {
                                                    
                                                    window.location.href=site+'user/listuser/';

                                             		}

												  });



												 return true;   } 
											else if(data=='1'){ 
											     $('#user_email').validationEngine('showPrompt', 'Email Already Exists', 'load','true'); 
												 $('#user_name').validationEngine('showPrompt', 'UserName Already Exists', 'load','true'); 
											    $("html, body").animate({ scrollTop: 0 }, 600); return false;  
											}
											else if(data=='2'){ 
											    $('#user_email').validationEngine('showPrompt', 'Email Already Exists', 'load','true'); 
										       $("html, body").animate({ scrollTop: 0 }, 600); return false;  
											}
										 else if(data=='3'){ 
											    $('#user_name').validationEngine('showPrompt', 'UserName Already Exists', 'load','true'); 
										        $("html, body").animate({ scrollTop: 0 }, 600); return false;  
											}
											});   return false; }else{  return false;  }
	
	
var tableElement = $('#roletables');

    tableElement.dataTable( {
		"sDom": "<'row-fluid'<'span6'l T><'span6'f>r>t<'row-fluid'<'span12'p i>>",
			"oTableTools": {
			"aButtons": [
				{
					"sExtends":    "collection",
					"sButtonText": "<i class='icon-cloud-download'></i>",
					"aButtons":    [ "csv", "xls", "pdf", "copy"]
				}
			]
		},
		"sPaginationType": "bootstrap",
		 "aoColumnDefs": [
          { 'bSortable': false, 'aTargets': [ 0 ] }
		],
		"aaSorting": [[ 1, "asc" ]],
		"oLanguage": {
			"sLengthMenu": "_MENU_ ",
			"sInfo": "Showing <b>_START_ to _END_</b> of _TOTAL_ entries"
		},
		 bAutoWidth     : false,
        fnPreDrawCallback: function () {
            // Initialize the responsive datatables helper once.
            if (!responsiveHelper) {
                responsiveHelper = new ResponsiveDatatablesHelper(tableElement, breakpointDefinition);
            }
        },
        fnRowCallback  : function (nRow) {
            responsiveHelper.createExpandIcon(nRow);
        },
        fnDrawCallback : function (oSettings) {
            responsiveHelper.respond();
        }
	});
	
	$('#example_wrapper .dataTables_filter input').addClass("input-medium "); // modify table search input
    $('#example_wrapper .dataTables_length select').addClass("select2-wrapper span12"); // modify table per page dropdown

	
	
	$('#example input').click( function() {
        $(this).parent().parent().parent().toggleClass('row_selected');
    });
	


	
	/*$('.Prev-Btn').click(function(){  $('.Sign-Form1').show();   $('.Sign-Form2').hide(); });*/
});
			 </script>

			<!--<p class="copyright" style="text-align: center; ">
				<strong> &copy; Copyright <?php echo date(Y);?>. <a href="https://bytepics.com/">"BytePics"</a>. All rights reserved.</strong>
			</p>-->

</body>

