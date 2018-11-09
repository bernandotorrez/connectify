	$('#form-login').submit(function(){
            
            var username = $('#username').val();
            var password = $('#password').val();


            function tampil(tampil, form, alert){
            	 var tampil = '<div class="alert alert-'+alert+'">'+tampil+'</div>';

            	 $('#'+form).focus();

            	 return tampil;
            }

            if(username.trim() == ''){
              	$('#message').html(tampil('Isi <strong>Username</strong> Kamu', 'username', 'danger'));
            } else if(username.length <= '5'){
            	$('#message').html(tampil('<strong>Username</strong> minimal 5 Karakter','username', 'danger'));
            } else if(password.trim() == ''){
              	$('#message').html(tampil('Isi <strong>Password</strong> Kamu','password', 'danger'));
            } else if(password.length <= '5'){
            	$('#message').html(tampil('<strong>Password</strong> minimal 5 Karakter','password', 'danger'));
            } else {
            	ajax();
            }

            return false;

            
            // ajax

            function ajax()
		     {    
		      
		        
		      $.ajax({
		        
		      type : 'POST',
		      url  : $('#url').val()+'auth/do_login',
		      data : {username : username, password : password},
		      dataType: 'json',
		      beforeSend: function()
		      { 
		        
		        $("#btn-login").html('Processing...').prop('disabled', true);
		      },
		      statusCode: {
			    403: function() {
			       
			   $("#btn-login").prop('disabled', true);
			    }
			  },
		      success :  function(response)
		         { 
		         //console.log(response.message);           
		          if(response.message=="ok"){
		               
		        	$("#btn-login").html('SUCCESS').prop('disabled', true);
		        	$('#message').html(tampil('Login Success','', 'success'));
		        	setTimeout('location.reload()', 1000);
		          } else {
		             $("#btn-login").html('LOGIN').prop('disabled', false);
		             $('#message').html(tampil('<strong>Username</strong> atau <strong>Password</strong> anda salah','', 'danger'));
		          }

		        }
		      });
		        return false;
		    }

            // ajax

          });