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
                    <form>
                      <div class="input-container">
                        <input type="text" id="username" required="required" autocomplete="off" />
                        <label for="username">Username</label>
                        <div class="bar"></div>
                      </div>
                      <div class="input-container">
                        <input type="password" id="password" required="required" autocomplete="off" />
                        <label for="password">Password</label>
                        <div class="bar"></div>
                      </div>
                      <div class="button-container">
                        <a href="#." class="btn btn-lg btn-block waves-effect waves-light">Login</a>
                      </div>
                      <div class="footer"><a href="#">Forgot your password?</a></div>
                    </form>
                  </div>
                  <div class="card-wrapper alt">
                    <div class="toggle"></div>
                    <h1 class="title">Register
                      <div class="close"></div>
                    </h1>
                    <form>
                      <div class="input-container">
                        <input type="text" id="newusername" required="required" autocomplete="off" />
                        <label for="newusername">Username</label>
                        <div class="bar"></div>
                      </div>
                      <div class="input-container">
                        <input type="password" id="newpassword" required="required" autocomplete="off" />
                        <label for="newpassword">Password</label>
                        <div class="bar"></div>
                      </div>
                      <div class="input-container">
                        <input type="password" id="repeat-password" required="required" autocomplete="off" />
                        <label for="repeat-password">Repeat Password</label>
                        <div class="bar"></div>
                      </div>
                      <div class="button-container">
                        <a href="#." class="btn btn-lg btn-block white waves-effect waves-red">Registar</a>
                      </div>
                    </form>
                  </div>
                </div>

            </div>
        </section>
