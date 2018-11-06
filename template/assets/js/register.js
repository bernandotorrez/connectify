	$('#form-register').submit(function(){
            
            var username = $('#newusername').val();
            var password = $('#newpassword').val();
            var confirm_password = $('#repeat-password').val();

            function tampil(tampil, form, alert){
            	 var tampil = '<div class="alert alert-'+alert+'">'+tampil+'</div>';

            	 $('#'+form).focus();

            	 return tampil;
            }

            if(username.trim() == ''){
              	$('#message1').html(tampil('Isi <strong>Username</strong> Kamu', 'newusername', 'info'));
            } else if(username.length <= '5'){
            	$('#message1').html(tampil('<strong>Username</strong> minimal 5 Karakter','newusername', 'info'));
            } else if(password.trim() == ''){
              	$('#message1').html(tampil('Isi <strong>Password</strong> Kamu','newpassword', 'info'));
            } else if(password.length <= '5'){
            	$('#message1').html(tampil('<strong>Password</strong> minimal 5 Karakter','newpassword', 'info'));
            } else if(password.trim() != confirm_password.trim()){
            	$('#message1').html(tampil('<strong>Password</strong> tidak sesuai','newpassword', 'info'));
            }  else {
            	ajax();
            }

            return false;

            
            // ajax

            function ajax()
		     {    
		      
		        
		      $.ajax({
		        
		      type : 'POST',
		      url  : 'http://localhost/connectify/auth/do_register',
		      data : {username : username, password : password},
		      dataType: 'json',
		      beforeSend: function()
		      { 
		        
		        $("#btn-register").html('Processing...').prop('disabled', true);
		      },
		      statusCode: {
			    403: function() {
			       
			   $("#btn-register").prop('disabled', true);
			    }
			  },
		      success :  function(response)
		         { 
		         //console.log(response.message);           
		          if(response.message=="ok"){
		               
		        	$("#btn-register").html('SUCCESS').prop('disabled', true);
		        	$('#message1').html(tampil('Login Success','', 'success'));
		        	setTimeout('location.reload()', 1000);
		          } else {
		             $("#btn-register").html('LOGIN').prop('disabled', false);
		             $('#message1').html(tampil('<strong>Username</strong> atau <strong>Password</strong> anda salah','', 'info'));
		          }

		        }
		      });
		        return false;
		    }

            // ajax

          });