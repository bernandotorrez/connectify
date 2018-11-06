<?php
$csrf_name  = $this->security->get_csrf_token_name();
$csrf_hash  = $this->security->get_csrf_hash();
?>

   <section class="section-padding gray-bg">
            <div class="container">

                <div class="login-wrapper">
                  <div class="card-wrapper"></div>
                  <div class="card-wrapper">
                    <h1 class="title">Login</h1>
                    <form method="post" id="form-login">
                      <div class="input-container">
                        <input type="text" id="username" name="username" autocomplete="off" />
                        <label for="username">Username</label>
                        <div class="bar"></div>
                      </div>
                      <div class="input-container">
                        <input type="password" id="password" name="password" />
                        <label for="password">Password</label>
                        <div class="bar"></div>
                      </div>
                      <div class="button-container">
                        <button class="btn btn-lg btn-block waves-effect waves-light" type="submit" id="btn-login">Login
                        </button>
                        <div class="footer" id="message"></div>
                      </div>
                      
                      <div class="footer"><a href="#">Forgot your password?</a></div>
                    </form>
                  </div>
                  <div class="card-wrapper alt">
                    
                    <div class="toggle"></div>

                    <h1 class="title">Register
                      <div class="close"></div>
                      <div class="footer" id="message1"></div>
                    </h1>

                    <form method="post" id="form-register">

                      <div class="input-container">
                        <input type="text" id="newusername" name="newusername" autocomplete="off" />
                        <label for="newusername">Username</label>
                        <div class="bar"></div>
                      </div>
                      <div class="input-container">
                        <input type="password" id="newpassword" name="newpassword"/>
                        <label for="newpassword">Password</label>
                        <div class="bar"></div>
                      </div>
                      <div class="input-container">
                        <input type="password" id="repeat-password" />
                        <label for="repeat-password">Repeat Password</label>
                        <div class="bar"></div>
                      </div>

                      <div class="button-container">
                        
                         <button class="btn btn-lg btn-block white waves-effect waves-red" type="submit" id="btn-register">Register
                        </button>
                        
                      </div>
                     
                      
                     
                    </form>
                  </div>
                </div>

            </div>
        </section>

