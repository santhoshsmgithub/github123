$(document).ready(function() {

    var base_url = $("#base_url").val();


    

    $("#login_form").validate({
        rules: { 
          email:{
              required:true,
              email: true,
          },				
          password:"required",			
      },
      messages: { 
          email: "Please enter a valid email address",
          password:"Please enter your password"
      },
      submitHandler: loginSubmitForm	
 });  
      function loginSubmitForm()
 {		
      var url = base_url + "user/login";		  
      $.ajax({
          type: 'POST',
          url: url,
          data: $('#login_form').serialize(),
          success: function (data) { 
              if(data==0) {
                    $('.icon-close-menu').click();
                    $('.alert-text').text('Login is unsuccessfull!Please try again later.');
                    $('#alertModal').modal();	
                    window.setTimeout(function(){ location.reload(); },3000)					
              }else{
                    $('.icon-close-menu').click();
                    $('.alert-text').text('Login is successfull!');
                    $('#alertModal').modal();	
                    window.setTimeout(function(){ location.reload(); },3000)					 
              } 
          }  
      });
          return false;
  }  /* form submit */	

  
  $("#fwd_login_form").validate({
        rules: { 
          email:{
              required:true,
              email: true,
          } 		
      },
      messages: { 
          email: "Please enter a valid email address" 
      },
      submitHandler: fwdloginSubmitForm	
 });  
      function fwdloginSubmitForm()
 {		
      var url = base_url + "user/password-reset";		  
      $.ajax({
          type: 'POST',
          url: url,
          data: $('#fwd_login_form').serialize(),
          success: function (data) { 
          
               if(data==1) {							
                //   $('#fgtpwd').modal('hide');
                  $('.mfp-close').click();
                  $('.alert-text').text('Check your mail');
                  $('#alertModal').modal();	
                //  window.setTimeout(function(){  $('.mfp-close').click();  location.reload(); },3000)
              }else{
                //   $('#fgtpwd').modal('hide');
                  $('.mfp-close').click();
                  $('.alert-text').text('Invalid account! Please try again later.');
                  $('#alertModal').modal();	
                //   window.setTimeout(function(){  $('.mfp-close').click(); location.reload(); },3000)		 
              } 
          }  
      });
          return false;
  }  /* form submit */		
  
  $("#register-form").validate({
        rules: { 
          name:"required",				
          email:{
              required:true,
              email: true,
          },	
          phone: {
              required: true,
              number: true,					
              minlength: 10
          }, 				
          password:"required",			
      },
      messages: { 				
          name: "Please enter your name",				
          email: "Please enter a valid email address",
          phone: {
                  required: "Please enter your phone number",
                  number: "Please enter only numeric value",
                  
                  minlength: "Your comments must be at least 10 characters long"
          }, 
          password:"Please enter your password"
      },
      submitHandler: registerSubmitForm	
 });  
      function registerSubmitForm()
 {		
      var url = base_url + "user/register";		  
      $.ajax({
          type: 'POST',
          url: url,
          data: $('#register-form').serialize(),
          success: function (data) { 
              if(data==1) {
                $('.icon-close-menu').click();
                $('.alert-text').text('Registeration completed successfully.Please Verify your Mail account');					    
                $("#alertModal").modal();	
                window.setTimeout(function(){  location.reload(); }, 4000)		
              }else{			    
                $('.icon-close-menu').click();
                $('.alert-text').text('Registeration is unsuccesful.Please try again');
                $('#alertModal').modal();	
                window.setTimeout(function(){ location.reload(); },4000)
              }
          }  
      });
          return false;
  }  
  
  
  $(".cus_email").change(function(){		
       var email=$(this).val();
       $.ajax({
          type : 'POST',
          url  : base_url + 'user/check_email',
          data : { 'email': email },
          success :  function(data)
          {	
              if(data==1){
                //     $('#aemail-error').show();
                //    $('#aemail-error').text('already exit this mail id');
                   $('.alert-text').text('already exit this mail id');					    
                    $("#alertModal").modal();
                   $('#sign_up').attr('disabled',true);
              }else{
                $('.alert-text').text('');
                $("#alertModal").modal('hide');
                $('#sign_up').attr('disabled',false);
              }
          }
      });
  });	
  
  
/*  $("#subscribe").validate({
        rules: {  				
          enquiryemail:{
              required:true,
              email: true,
          } 		
      },
      messages: { 				 
          enquiryemail: "Please enter a valid email address"				 
      },
      submitHandler: subscribeForm	
 });  
      function subscribeForm()
 {		
      var url = base_url + "cart/subscribe";		  
      $.ajax({
          type: 'POST',
          url: url,
          data: $('#subscribe').serialize(),
          success: function (data) { 
                   $('#myModal1').modal('hide');	
                  $('.mfp-close').click();
                  $('.alert-text').text('Subscribed completed successfully.');					    
                  $("#alertModal").modal();	
                  
                  window.setTimeout(function(){  location.reload(); },3000)	
           }  
      });
          return false;
  }  
*/
  
  $("#contactform").validate({
        rules: { 
          name:"required",				
          email:{
              required:true,
              email: true,
          },	
          phone: {
              required: true,
              number: true,					
              minlength: 10
          }, 				
          message:"required",			
      },
      messages: { 				
          name: "Please enter your name",				
          email: "Please enter a valid email address",
          phone: {
                  required: "Please enter your phone number",
                  number: "Please enter only numeric value",
                  
                  minlength: "Your comments must be at least 10 characters long"
          }, 
          message:"Please enter your message"
      },
      submitHandler: contactSubmitForm	
 });  
      function contactSubmitForm()
 {		
      var url = base_url + "cart/contact_email";		  
      $.ajax({
          type: 'POST',
          url: url,
          data: $('#contactform').serialize(),
          success: function (data) { 
              if(data==1) { 
                  $('.alert-text').text('Thanks for enquiry. My team shortly contact to you.');					    
                  $("#alertModal").modal();	 						
                //   window.setTimeout(function(){  location.reload(); },3000)
              }else{			     
                  $('.alert-text').text('Try Again');
                  $('#alertModal').modal();	

                //   window.setTimeout(function(){  location.reload(); },3000)						
              }
          }  
      });
          return false;
  } 

    $('.atc').on('click',function(){
        //alert();
        var product_id = $(this).data('cardid');
        // var product_qty = $(this).data('qty');
        var product_qty = ($(".qty-" + product_id).length) ? $(".qty-" + product_id).val() : 1 ;
        // console.log(product_id);
        // console.log(product_qty);
        // return false;
        $.post(base_url + 'cart/addcart',{prod_id:product_id,  prod_qty:product_qty},function(data){
      if(data==1) {
        $('.alert-text').text('Added to cart');
        $('#alertModal').modal(); 
        window.setTimeout(function(){location.reload()},1000)
      }else if(data==2)
      {
       $('.alert-text').text('Please login to add your wish list');
       $('#alertModal').modal();
       window.setTimeout(function(){ $('.mfp-close').click(); $('#modal-login').modal()},1000)
     
        
      }else if(data==3)
      {
        $('.alert-text').html('<strong>Sorry,</strong> this product is unavailable. Please choose a different combination');
        $('#alertModal').modal();
      
      }else{
      
          $('.alert-text').text('Please try agains');
          $('#alertModal').modal();
         
      }
      });
      
    });
    
    // $("name[search]").autocomplete({
    //     source: base_url + 'cart/searchproducts',
    //     minLength: 1,
    //     select: function (event, ui) {
    //          window.location.href = "<?php echo $base_url;?>welcome/productdetailed/"+ui.item.id;
    //          return false;
    //     }				
    //     }).data('ui-autocomplete')._renderItem = function (ul, item) {
    //         var inner_html = '<a><div class="list_item_container"><div class="image"><img width="50px" height="50px"  src="<?php echo $base_url."product/"?>' + item.image + '"></div><div class="label">' + item.label + '<div>‎₹'+item.price+'</div><div>'+item.weight+'</div></div></div></a><hr/>';
    //         return $('<li></li>')
    //             .data('item.autocomplete', item)
    //             .append(inner_html)
    //             .appendTo(ul);
    // };

    // if (ui.content.length === 0) {
    //     if (!$(".search-list").hasClass("hidden")) {
    //         $(".search-list").addClass("hidden");
    //     }
    //     $(".search-list-prod").empty();
    // } else {
    //     $(".search-list").removeClass("hidden");
    // }

    $('#searchnew').autocomplete({
        // source: base_url + 'searchproducts',
        minLength: 0,
        source: function (request, response) {
            if (request && request.term) {
                $.ajax({
                    url:  base_url + 'searchproducts',
                    data: { term: request.term },
                    type: "GET",
                    success: function (data) {
                        if (data) {
                            let da = jQuery.parseJSON(data);
                            if (da.length > 0) {
                                $(".search-list").removeClass("hidden");
                                response($.map(da, function (item) {
                                    return item;
                                }))
                            }
                        } else {
                            if (!$(".search-list").hasClass("hidden")) {
                                $(".search-list").addClass("hidden");
                            }
                            $(".search-list-prod").empty();
                        }
                    }
                });
            } else {
                if (!$(".search-list").hasClass("hidden")) {
                    $(".search-list").addClass("hidden");
                }
                $(".search-list-prod").empty();
            }
        },
        // close: function( event, ui ) {
        //     if (!$(".search-list").hasClass("hidden")) {
        //         $(".search-list").addClass("hidden");
        //     }
        //     $(".search-list-prod").empty();
        // },
      }).autocomplete("instance")._renderItem = function(ul, item) {
        $(".search-list").removeClass("hidden");
        let imgUrl = base_url + "product/" + item.image;
        let prdname = (item.label).replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '-');
        let prodHref = base_url + "pd/" + prdname + "/" + item.id;
        var inner_html = '<a href="' + prodHref + '"><img src="' + imgUrl + '" /><p>' + item.label + '<br/><i class="fa fa-inr" aria-hidden="true"></i> '+item.price+' <br/> '+item.weight+'</p> </a>';
            return $('<li></li>')
                .data('item.autocomplete', item)
                .append(inner_html)
                .appendTo(".search-list-prod");
      };

      // related prod
      $('.select_weight').on('change',function(){

        var parent = $(this).find('option:selected').data('parent');
        var index = $(this).find('option:selected').data('index');
        var id = $(this).find('option:selected').data('weight');
        var value = $(this).find('option:selected').data('value');
        var mrpvalue = $(this).find('option:selected').data('mrpvalue');
        var product_sid = $(this).find('option:selected').data('pid');
        var product_cardid = $(this).find('option:selected').data('card');
        // $('.qty-'+product_sid).keyup(function(){var product_aty = $(this).val();
        //     //alert(product_aty);
        //     $('.cardid-'+product_sid).attr('data-qty',product_aty);
        // });
        // $('.cardid-'+product_sid).attr('data-cardid',product_cardid);
        // $('.price-amount-'+product_sid).html('<i class="fa fa-inr"></i> '+value);
        // $('.mrp-price-amount-'+product_sid).html('<i class="fa fa-inr"></i> '+mrpvalue);

        $('.' + parent + '-' + index + ' .atc').attr("data-cardid",product_cardid);
        $('.' + parent + '-' + index + ' .price-amount').html('<i class="fa fa-inr" aria-hidden="true"></i> ' + value);				
        $('.' + parent + '-' + index + ' .mrp-price-amount').html('<i class="fa fa-inr" aria-hidden="true"></i> ' + mrpvalue);
        $('.' + parent + '-' + index + ' input[name="qty-' + index + '"]').removeClass();
        $('.' + parent + '-' + index + ' input[name="qty-' + index + '"]').addClass("qty-"+product_cardid);
        				
    });
    
    $('.change-qty').on('keyup',function(){
        
        var id = $(this).val();
        var change_id = $(this).data('changeid');
        //alert(change_id);
        $('.cardid-'+change_id).attr('data-qty',id);
        
    });
    
    
    var singleProdId = $('.dcardid').attr('data-cardid');
    $('.detailselect_weight').on('change',function(){

        var id = $(this).find('option:selected').data('weight');
        var value = $(this).find('option:selected').data('value');
        var mrpvalue = $(this).find('option:selected').data('mrpvalue');
        var product_sid = $(this).find('option:selected').data('pid');
        var product_cardid = $(this).find('option:selected').data('card');

        $('.dcardid').attr('data-cardid',product_cardid);
        $('.product-attribute .price-amount').html('<i class="fa fa-inr" aria-hidden="true"></i> ' + value);				
        $('.product-attribute .mrp-price-amount').html('<i class="fa fa-inr" aria-hidden="true"></i> ' + mrpvalue);
        if ($('.qtynew').hasClass('qty-'+singleProdId)) {
            $('.qtynew').removeClass('qty-'+singleProdId);
            $('.qtynew').addClass('qty-'+product_cardid);
            singleProdId = product_cardid;
        }

        // $('.cardid-'+product_sid).attr('data-cardid',product_cardid);
        // $('.price-amount-'+product_sid).html(value);				
        // $('.mrp-price-amount-'+product_sid).html(mrpvalue);
        
    });
    $('.select_qty').on('change',function(){
        var value = $(this).find('option:selected').val();
        var product_sid = $(this).data('qty');
        $('.cardid-'+product_sid).attr('data-qty',value);

        
    });
    

    $('.dcardid').on('click',function(){
        var product_id = $(this).data('cardid');
        // var product_qty = $('.pdqty').val();
        var product_qty = $(".qty-" + product_id).val();
         //alert(product_id);
         //alert(product_qty);
        //console.log(product_id);
    //	console.log(product_qty);
        $.post(base_url + 'cart/addcart',{prod_id:product_id,  prod_qty:product_qty},function(data){
    //   alert(data);
    
    // console.log(data);
      if(data==1) {
        
        $('.alert-text').text('Added to cart');
       $('#alertModal').modal(); 
       window.setTimeout(function(){location.reload()},1000)
      }else if(data==2)
      {
         $('.alert-text').text('Please login to add your wish list');
       $('#alertModal').modal();
       window.setTimeout(function(){ $('.mfp-close').click(); $('#modal-login').modal()},1000)
     
        
      }else if(data==3)
      {
        $('.alert-text').html('<strong>Sorry,</strong> this product is unavailable. Please choose a different combination');
        $('#alertModal').modal();
      
      }else{
      
          $('.alert-text').text('Please try againss');
          $('#alertModal').modal();
         
      }
      });
      
    });

    $('.updatecart').on('click',function(){
        // alert();
        // e.preventDefault();
        // e.stopPropagation();
         var id=$(this).data('rowid');
         var i=$(this).data('id');
         var prd_id=$(this).data('prd_id');
         //console.log(i);
         var qty=$(".cardqty-"+i).val();
         //console.log(qty);
         $.post(base_url + 'cart/updatecart',{id:id,prd_id:prd_id,qty:qty},function(data){
        if(data==1) {
          $('.alert-text').text('Cart is updated');
          $('#alertModal').modal();
          window.setTimeout(function(){ window.location.href=base_url + 'cart';},3000)
        
        }else if(data==3)
        {
          $('.alert-text').html('<strong>Sorry,</strong> this product is unavailable. Please choose a different combination');
          $('#alertModal').modal();
        
        }else{			     
          $('.alert-text').text('Please try again!');
          $('#alertModal').modal();
        }
        });			  
        });

        $('#clogin').on('click',function(e){
            //alert("hdi");
        //    e.preventDefault();
        //   e.stopPropagation();
          var user_login,user_pass;					 
          $.post(base_url + 'user/login',{email:$('#cuseremail').val(),password:$('#cuserpassword').val()},function(data){
       // alert(data);
        if(data && data =="1") {
            $('.mfp-close').click();
            $('.alert-text').text('Login is successfull!');
            $('#alertModal').modal();
            
            window.setTimeout(function(){  $('.mfp-close').click();
                window.location.href=base_url + 'billingInformation'; 
            },3000)
        
        } else {
            $('.mfp-close').click();
            $('.alert-text').html('Login is unsuccessfull! Please try again later.');
            $('#alertModal').modal();	
            window.setTimeout(function(){  
                $('.mfp-close').click();  
                $('#alertModal').modal("hide"); 
            },3000)
        }
         
          });
        });

        if ($("#ae-billing-form").length) {
            $("#ae-billing-form").validate({
                rules: {
                  billing_name: "required",
                  billing_address:"required",
                  billing_landmark:"required",
                  billing_city:"required",
                //   billing_state:"required",
                  
                  billing_pincode:{
                      required:true,
                      number: true
                  },
                  billing_phone:{
                      required:true,
                      number: true,
                  },
                  
                //   email: "required",
              },
              messages: {
                  billing_name: "Please enter your name",
                  billing_address:"Please enter the billing address",
                  billing_pincode:"Please enter the pincode",
                  billing_phone:"Please enter the phone number",
                  billing_city: "Please enter the city",
                  billing_landmark: "Please Enter your landmark",
                  billing_state: "Please enter the state",
                //   email: "Please enter a valid email address",
              },
                //  submitHandler: submitForm	
            }); 
                 
            $("#ae-shipping-form").validate({
                    rules: {
                      shipping_name: "required",
                      shipping_address:"required",
                      shipping_landmark:"required",
                      shipping_city:"required",
                    //   shipping_state:"required",
                      shipping_pincode:{
                          required:true,
                          number: true
                      },
                      shipping_phone:{
                          required:true,
                          number: true,
                      },
                      
                  },
                  messages: {
                      shipping_name: "Please enter your name",
                      shipping_address:"Please enter the shipping address",
                      shipping_pincode:"Please enter the pincode",
                      shipping_phone:"Please enter the phone number",
                      shipping_city: "Please enter the city",
                    //   shipping_state: "Please enter the state",
                      shipping_landmark: "Please Enter your landmark",
                  },
                    //  submitHandler: submitForm	
            });
        }
        
        $('#ae-pro-chkout').on('click',function(e){
            let billingStateStatus = validateCheckoutState("billing_state");
            if ($("#ae-billing-form").valid() && billingStateStatus) {
                if ($("#mycheckbox1").prop('checked') == true) {
                    let shippingStateStatus = validateCheckoutState("shipping_state");
                    if ($("#ae-shipping-form").valid() && shippingStateStatus) {
                        submitForm();
                    } else {
                        if (!shippingStateStatus) {
                            $(".shipping_state_error").show();
                        }
                    }
                } else {
                    submitForm();
                }
            } else {
                if (!billingStateStatus) {
                    $(".billing_state_error").show();
                }
            }

        });

        $('#billing_state').on('change',function(e){
            let stateValid = validateCheckoutState("billing_state");
            if (stateValid) {
                $(".billing_state_error").hide();
            } else {
                $(".billing_state_error").show();
            }
        });

        $('#shipping_state').on('change',function(e){
            let stateValid = validateCheckoutState("shipping_state");
            if (stateValid) {
                $(".shipping_state_error").hide();
            } else {
                $(".shipping_state_error").show();
            }
        });

        function validateCheckoutState(stateFieldId) {
            let state = $("#"+stateFieldId).next().find("ul li.selected").text()
            state = (state) ? state.toLowerCase() : "" ;
            let status = false;
            if ( state != "select state") {
                status = true;
            } else {
                status = false;
            }
            return status;
        }

             /* validation */
             
             /* form submit */
             function submitForm()
             {		
               var url = base_url + "cart/shipping";
               var checkout = base_url + "order_review";
                
              //var url = location.protocol + "//" + document.domain  + "/cart/shipping";
               
              //var checkout = location.protocol + "//" + document.domain  + "/order_review";
           
           
                
              // alert($('#ae-shipstep-form').serialize());			
                  //alert(url);
                  $("#billing_state").val($("#billing_state").next().find("ul li.selected").text());
                  $("#shipping_state").val($("#shipping_state").next().find("ul li.selected").text());
                       $.ajax({
                          type: 'POST',
                          url: url,
                          data: $('#ae-billing-form, #ae-shipping-form').serialize(),
                          success: function (data) {
                        //   console.log(data);
                          if(data==1)
                          {
                          //  alert('form was submitted');
                            window.location.href=checkout;
                            
                          }else if(data==2)
                              {
                                  $('.alert-text').text('Please login to proceed to shipping or proceed by filling guest');
                                  $('#alertModal').modal();
              
                          }else{
                          //alert(data);
                             $('.alert-text').text('please try again later');
                             $('#alertModal').modal();
                            
                          }
                        } 
              //alert("Billing address submitted!");
          });
                      return false;
              }  /* form submit */

              
        $('.apply_coupon').on('click',function(e){ 
                var c_no=$('.c_no').val(); 	  
                $.post(base_url + 'cart/applycoupon',{c_no:c_no},function(data){
               //alert(data);
               var spli=data.split('-');
               if(data=='invalid') {
                 $('.alert-text').text('Invalid Coupon Code');
                 $('#alertModal').modal();			  
               }else if(spli[0]=='minimum') {
                 $('.alert-text').text('Minimum purchased amount is '+spli[1]);
                 $('#alertModal').modal();		  
               }else if(data=='success') {
                 $('.alert-text').text('Coupon applied success');
                 $('#alertModal').modal();
                 window.setTimeout(function(){ location.reload();},3000);
                //  window.setTimeout(function(){ window.location.href=base_url + 'cart';},3000)
               }
               });			  
        });

        if ($("#profile_form").length) {

            $("#profile-update").on('click', function() {
                if ($("#profile_form").valid()) {
                    submitProfileForm();
                }
             });

            // alert();
            $("#profile_form").validate({
                rules: {
                  name: {
                    required:true,
                },
                email:{
                    required:true,
                    email: true,
                },
                phone:{
                    required:true,
                    number: true,
                },
                  address:{
                    required:true,
                },
                  landmark:{
                    required:true,
                },
                  pincode:{
                      required:true,
                      number: true
                  },
                  city:{
                    required:true,
                },
                state:{
                    required:true,
                },
              
              },
              messages: {
                  name: "Please enter your name",
                  email: "Please enter a valid email address",
                  phone:"Please enter the phone number",
                  address:"Please enter the billing address",
                  landmark:"Please enter your landmark",
                  city:"Please enter the city",
                  state:"Please enter the state",
                  pincode:"Please enter the pincode",
              },
            //   submitHandler: submitProfileForm	
         });  
         /* validation */
         
         /* form submit */
              function submitProfileForm()
         {		
              var url = base_url + "user/profile-update";		  
              //var url = location.protocol + "//" + document.domain  + "/welcome/profileupdate";				  
              // alert($('#ae-shipstep-form').serialize());			
              //alert(url);
                   $.ajax({
                      type: 'POST',
                      url: url,
                      data: $('#profile_form').serialize(),
                      success: function (data) {
                      //alert(data);
                      if(data==1)
                      {
                          $('.mfp-close').click();
                          $('#ca-span').html('User Profile updated!');
                          $('#ca-alert').modal();	
                          window.setTimeout(function(){  location.reload(); },3000)
                        
                      }else{
                      //alert(data);
                         $('#ca-span').html('please try again later');
                         $('#ca-alert').modal();
                        
                      }
                    } 
                  //alert("Billing address submitted!");
              });
                  return false;
          }  /* form submit */
        }

        $(document).on('change', '#selectProductSort1', function() {
        // $('#selectProductSort1').on('change',function(){
        // $('#selectProductSort1').change(function(){ 
            var val= $('#selectProductSort1').val();
            // alert(val);
            if(val>0)
            {
            $('#filter-form').trigger('submit');
            }
        });

        $(document).on('click', '.orderview', function() {  
            var id = $(this).data('value');
            $.ajax({
                type: 'POST',
                url: base_url + "user/quickview", 
                data: {quickview_id : id},
                success:function(data){
                    if (data) {
                        let res = jQuery.parseJSON(data);
                        if (res["order_product"].length > 0) {
                            let html = '';
                            for (let i=0; i < res["order_product"].length; i++) {
                                // console.log("coming");
                                let orderProd = res["order_product"][i];
                                let prod = res["product"];
                                html += '<tr><th scope="row">1</th><td>' + prod.product_name + ' - ' + prod.prod_weight + '</td><td><i class="fa fa-inr" aria-hidden="true"></i> ' + orderProd.amount + '</td><td>' + orderProd.prod_qty + '</td><td><i class="fa fa-inr" aria-hidden="true"></i> ' + orderProd.subtotal + '</td></tr>';
                            }
                            $("#orderDetailModal tbody").html(html);
                            $('#orderDetailModal').modal();
                        }
                    }
                }
            });
        });
        

});