<body id="pages" class="full-layout no-nav-left no-nav-right  nav-top-fixed background-login     responsive remove-navbar login-layout   clearfix" data-active="pages "  data-smooth-scrolling="1"> 
<div class="vd_body">
<!-- Header Start -->

<!-- Header Ends --> 
<div class="content">
  <div class="container"> 
    
    <!-- Middle Content Start -->
    
    <div class="vd_content-wrapper" >
      <div class="vd_container">
        <div class="vd_content clearfix">
          <div class="vd_content-section clearfix">
            <div class="vd_register-page">
              <div class="heading clearfix">
                <div class="logo">
                  <a href="http://localhost:8085/startowl/"><h2 class="mgbt-xs-5">StartOwl</h2></a>
                </div>
                <h4 class="text-center font-semibold vd_grey">REGISTRO DE USUARIO</h4>
              </div>
              <div class="panel widget">
                <div class="panel-body">
<!--                  <div id="register-success" class="alert alert-success" style="display:none;"><i class="fa fa-exclamation-circle fa-fw"></i> Registration confirmation has been sent to your email </div>
                  <div id="register-passerror" class="alert alert-danger" style="display:none;"><i class="fa fa-exclamation-circle fa-fw"></i> Your password and Confirm password are not same </div>-->
                  <form class="form-horizontal"  action="functions/register-form.php" role="form" id="register-form">
                  <div class="alert alert-danger vd_hidden">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                    <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Oh snap!</strong> Verifica los datos y vuelve a intentarlo. </div>
                  <div class="alert alert-warning vd_hidden">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                    <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span>Verifique confirmacion de contraseña </div>                    
                  <div class="alert alert-success vd_hidden">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                    <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span>Hemos enviado una confirmacion de registro a tu correo </div>                  
                    <div class="form-group">
                      <div class="col-md-6">
                        <div class="label-wrapper">
                          <label class="control-label">Nombre <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper" id="first-name-input-wrapper"> <span class="menu-icon"> <i class="fa fa-user"></i> </span>
                          <input type="text" placeholder="Nombre" class="required" required name="firstname" id="firstname">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="label-wrapper">
                          <label class="control-label">Apellido <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper" id="last-name-input-wrapper"> <span class="menu-icon"> <i class="fa fa-user"></i> </span>
                          <input type="text" placeholder="Apellido" class="required" required name="lastname" id="lastname">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <div class="label-wrapper">
                          <label class="control-label">Compañia <span class="vd_red"></span></label>
                        </div>
                        <div class="vd_input-wrapper" id="company-input-wrapper"> <span class="menu-icon"> <i class="fa fa-briefcase"></i> </span>
                          <input type="text" placeholder="Compañia (Opcional)" name="company" id="company">
                        </div>
                      </div>
                    </div>
                    <div class="form-group ">
                      <div class="col-md-3">
                        <div class="label-wrapper">
                          <label class="control-label">Telefono <span class="vd_red"></span></label>
                        </div>
                        <div class="vd_input-wrapper" id="country-code-input-wrapper"> <span class="menu-icon"> <i class="fa fa-plus"></i> </span>
                          <input type="text" placeholder="Codigo" name="country" id="country">
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="label-wrapper">
                          <label class="control-label">&nbsp;</label>
                        </div>
                        <div class="vd_input-wrapper no-icon" id="phone-input-wrapper">
                          <input type="text" placeholder="Numero Telefónico" name="phone" id="phone">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <div class="label-wrapper">
                          <label class="control-label">Web</label>
                        </div>
                        <div class="vd_input-wrapper" id="website-input-wrapper"> <span class="menu-icon"> <i class="fa fa-globe"></i> </span>
                          <input type="text" placeholder="Página Web, Blog." name="website" id="website">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <div class="label-wrapper">
                          <label class="control-label">Correo <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper" id="email-input-wrapper"> <span class="menu-icon"> <i class="fa fa-envelope"></i> </span>
                          <input type="email" placeholder="correo" class="required" required  name="email" id="email">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <div class="label-wrapper">
                          <label class="control-label">Nombre de Usuario <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper" id="email-input-wrapper"> <span class="menu-icon"> <i class="fa icon-github2"></i> </span>
                          <input type="text" placeholder="Nombre de Usuario" class="required" required  name="nombre_usuario" id="nombre_usuario">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-6">
                        <div class="label-wrapper">
                          <label class="control-label">Contraseña <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper" id="password-input-wrapper"> <span class="menu-icon"> <i class="fa fa-lock"></i> </span>
                          <input type="password" placeholder="Contraseña" class="required" required  name="password" id="password">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="label-wrapper">
                          <label class="control-label">Confirma Contraseña <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper" id="confirm-password-input-wrapper"> <span class="menu-icon"> <i class="fa fa-lock"></i> </span>
                          <input type="password" placeholder="Contraseña" class="required" required  name="confirmpass" id="confirmpass">
                        </div>
                      </div>
                    </div>
                    <div id="vd_login-error" class="alert alert-danger hidden"><i class="fa fa-exclamation-circle fa-fw"></i> Este Campo es necesario. </div>
                    <div class="form-group">
                      <div class="col-md-12 mgbt-xs-10 mgtp-20">
                        <div class="vd_checkbox">
                          <input type="checkbox" id="checkbox-1" value="1">
                          <label for="checkbox-1"> Enviarme notificaciones de actualizaciones</label>
                        </div>
                        <div class="vd_checkbox">
                          <input type="checkbox" id="checkbox-2" value="1" required name="checkbox-2">
                          <label for="checkbox-2"> Estoy de acuerdo con los <a href="#">terminos de servicio</a></label>
                        </div>
                      </div>
                      <div class="col-md-12 text-center mgbt-xs-5">
                        <button class="btn vd_bg-green vd_white width-100" type="submit" id="submit-register" name="submit-register">Registrar Cuenta</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- Panel Widget -->
              <div class="register-panel text-center font-semibold"> Ya tienes una cuenta? <br/>
                <a href="<?php echo base_url(); ?>cloreg/login">INGRESA<span class="menu-icon"><i class="fa fa-angle-double-right fa-fw"></i></span></a> </div>
            </div>
            <!-- vd_login-page --> 
            
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