<body id="pages" class="full-layout no-nav-left no-nav-right  nav-top-fixed background-login     responsive remove-navbar login-layout   clearfix" data-active="pages "  data-smooth-scrolling="1">      
<div class="vd_body">
<!-- Header Start -->

<!-- Header Ends --> 
<div class="content"><div class="container">





<!-- Middle Content Start -->

<div class="vd_content-wrapper">
    <div class="vd_container">
    
        <div class="vd_content clearfix">               
            <div class="vd_content-section clearfix">  

            <div class="vd_login-page">     
            	<div class="heading clearfix">

                  <a href="http://localhost:8085/startowl/"><h2 class="mgbt-xs-5">StartOwl</h2></a>

                    <h4 class="text-center font-semibold vd_grey">RESTAURAR CONTRASEÑA</h4>                     
                </div>
               
                <div class="panel widget">
                    <div class="panel-body">
                    
                          <div class="login-icon">
                                <i class="fa fa-lock"></i>
                          </div>      
                          <div id="password-success" class="alert alert-success vd_hidden"><i class="fa fa-exclamation-circle fa-fw"></i> La restauracion de contraseña será enviada a tu correo </div>              
                          <form class="form-horizontal"  role="form" id="forget-password-form" action="functions/forget-password-form.php">
                  <div class="alert alert-danger vd_hidden">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                    <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Oh snap!</strong> Verifica los datos y vuelve a intentarlo. </div>
                  <div class="alert alert-success vd_hidden">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                    <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span>La restauracion de tu contraseña fué enviada a tu correo. </div>                            
                             <div class="form-group mgbt-xs-20">
                                 <div class="col-md-12">
                                 	<p class="text-center"><strong>Ingresa tu correo registrado en StartOwl</strong> </p>
                                    <div class="vd_input-wrapper" id="email-input-wrapper">
                                        <span class="menu-icon">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        <input type="email" placeholder="Email" id="email" name="email" class="required">
                                    </div>   
                                
                                  </div>                            
                            </div>   
                            
                                                                                                        
                            <div class="form-group" id="submit-password-wrapper">
                              <div class="col-md-12 text-center mgbt-xs-5">
                                  <button class="btn vd_bg-green vd_white width-100" type="submit" id="submit-password" name="submit-password">Restaurar Contraseña</button>   
                              </div>

                            </div>
                          </form>

                          
                    </div>
                </div> <!-- Panel Widget --> 
                <div class="register-panel text-center font-semibold">	
                	<a href="<?php echo base_url(); ?>cloreg/login">Ingresar con mi cuenta</a> <span class="mgr-10 mgl-10">|</span>  	
                    <a href="<?php echo base_url(); ?>cloreg/register">CREAR CUENTA</a>  	
                </div>
                </div> <!-- vd_login-page -->

                
                                                           
            </div>   
          <!-- .vd_content-section --> 
          
        </div>
        <!-- .vd_content --> 
      </div>
      <!-- .vd_container --> 
    </div>
    <!-- .vd_content-wrapper --> 
    
    <!-- Middle Content End --> 
    
  </div>
  <!-- .container --> 
</div>
<!-- .content -->