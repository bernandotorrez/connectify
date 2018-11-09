	$('#form-register').submit(function(){
            
            var newusername = $('#newusername').val();
            var newpassword = $('#newpassword').val();
            //var confirm_password = $('#repeat-password').val();
            var level = $('#level').val();

            function tampil(tampil, form, alert){
            	 var tampil = '<div class="alert alert-'+alert+'">'+tampil+'</div>';

            	 $('#'+form).focus();

            	 return tampil;
            }

            if(newusername.trim() == ''){
              	$('#message1').html(tampil('Isi <strong>Username</strong> Kamu', 'newusername', 'info'));
            } else if(newusername.length <= '5'){
            	$('#message1').html(tampil('<strong>Username</strong> minimal 5 Karakter','newusername', 'info'));
            } else if(newpassword.trim() == ''){
              	$('#message1').html(tampil('Isi <strong>Password</strong> Kamu','newpassword', 'info'));
            } else if(newpassword.length <= '5'){
            	$('#message1').html(tampil('<strong>Password</strong> minimal 5 Karakter','newpassword', 'info'));
            } else if(level == '-'){
            	$('#message1').html(tampil('<strong>Daftar Sebagai</strong> harus dipilih','level', 'info'));
            } else {
            	ajax();
            	return false;
            }

            return false;

            
            // ajax

            function ajax()
		     {    
		      
		        
		      $.ajax({
		        
		      type : 'POST',
		      url  : $('#url').val()+'auth/do_register',
		      data : {newusername : newusername, newpassword : newpassword, level : level},
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

		         	
		         	          
		          if(response=="ok"){
		               
		        	$("#btn-register").html('SUCCESS').prop('disabled', true);
		        	$('#message1').html(tampil('Register Success','', 'success'));
		        	//setTimeout('location.reload()', 1000);
		          } else if(response=="exists"){
               
		        	$("#btn-register").html('LOGIN').prop('disabled', false);
		        	$('#message1').html(tampil('Akun sudah terdaftar','', 'info'));
		          } else {
		             $("#btn-register").html('LOGIN').prop('disabled', false);
		             $('#message1').html(tampil('Register Fail','', 'info'));
		          }

		        }
		      });
		        return false;
		    }

            // ajax

          });