    <!-- Middle Content Start -->
    
    <div class="vd_content-wrapper">
      <div class="vd_container">
        <div class="vd_content clearfix">
          <div class="vd_head-section clearfix">
            <div class="vd_panel-header">
              <ul class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>cloreg/profile">Perfil de Usuario</a> </li>
                <li class="active">Agregar Idea de Nogocio</li>
              </ul>
              <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step=5  data-position="left">
    <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
      <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
      <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>
      
</div>
            </div>
          </div>
          <div class="vd_title-section clearfix">
            <div class="vd_panel-header">
              <h1>Nueva Idea de Negocio</h1>
              <small class="subtitle">Publica tus ideas de emprendimientos y recibe colaroracion de tus sócios.</small>
              <div class="vd_panel-menu hidden-xs">
                <div class="menu">
                  <div> <span class="menu-icon mgr-10"><i class="fa fa-search"></i></span>Búsqueda </div>
                </div>
                
              </div>
              <div class="vd_panel-menu visible-xs">
                <div class="menu">
                  <div data-action="click-trigger"> <span class="menu-icon mgr-10"><i class="fa fa-bars"></i></span>Menu <i class="fa fa-angle-down"></i> </div>
                  <div data-action="click-target" class="vd_mega-menu-content width-xs-2 left-xs" style="display: none;">
                    <div class="child-menu">
                      <div class="content-list content-menu">
                        <ul class="list-wrapper pd-lr-10">
                          <li> <a href="#">
                            <div class="menu-icon"><i class="fa fa-search"></i></div>
                            <div class="menu-text">Búsqueda</div>
                            </a> </li>
                          
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- menu --> 
              </div>
            </div>
          </div>
          

          <div class="vd_content-section clearfix" id="ecommerce-product-add">
            <div class="row">
              <div class="col-sm-3 col-md-4 col-lg-3">
                <div class="form-wizard condensed mgbt-xs-20">
                  <ul class="nav nav-tabs nav-stacked">
                    <li class="active"><a href="#tabinfo" data-toggle="tab"> <i class="fa fa-info-circle append-icon"></i> Información </a></li>
                    <li><a href="#tabprice" data-toggle="tab"> <i class="fa fa-money append-icon"></i> Inversión </a></li>
                    <li><a href="#tabseo" data-toggle="tab"> <i class="fa fa-book append-icon"></i> Key Words </a></li>
                    
                    <!-- <li><a href="#tabasso" data-toggle="tab"> <i class="fa fa-link append-icon"></i> Categoría </a></li> -->
                    <li><a href="#tabimage" data-toggle="tab"> <i class="fa fa-picture-o append-icon"></i> Fotos </a></li>
                    <!-- <li><a href="#tabquantities" data-toggle="tab"> <i class="fa fa-folder-open append-icon"></i> Quantities</a></li> -->
                    <li><a href="#tabattach" data-toggle="tab"> <i class="fa fa-paperclip append-icon"></i> Adjuntos</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-9 col-md-8 col-lg-9 tab-right">
                <div class="panel widget panel-bd-left light-widget">
                  <div class="panel-heading no-title"> </div>
                  <div  class="panel-body">
                    <div class="tab-content no-bd mgbt-xs-20">
                      <div id="tabinfo" class="tab-pane active">
                        <form class="form-horizontal">
                          <div class="vd_panel-menu">
                            <div> <a class="btn vd_btn vd_bg-blue btn-sm save-btn"><i class="fa fa-save append-icon"></i> Guardar Cambios</a> <a  data-toggle="modal" data-target="#myModal" class="btn btn-default btn-sm"><i class="fa fa-times append-icon"></i> Cancelar</a> </div>
                          </div>
                          <h3 class="mgtp-15 mgbt-xs-20"> Información del Negocio</h3>
                          <div class="form-group">
                            <label  class="control-label col-lg-3" ><span data-toggle="tooltip" class="label-tooltip" data-original-title="Product type"> Privacidad </span></label>
                            <div class="col-lg-9">
                              <div class="vd_radio radio-success">
                                <input type="radio" checked=""  value="0" name="type_product" id="simple_product">
                                <label for="simple_product">Público</label>
                              </div>
                              <div class="vd_radio radio-success">
                                <input type="radio"  value="0" name="type_product" id="pack_product">
                                <label for="pack_product">Mis Sócios</label>
                              </div>
                              <div class="vd_radio radio-success">
                                <input type="radio"  value="2" name="type_product" id="virtual_product">
                                <label for="virtual_product">Solo Yo</label>
                              </div>
                            </div>
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label for="name_1" class="control-label col-lg-3 required"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Por favor evite el uso de caracteres especiales. &lt;&gt;;=#{}"> Nombre </span> </label>
                            <div class="col-lg-5">
                              <div class="row mgbt-xs-0">
                                <div class="col-sm-9">
                                  <input type="text" required placeholder="posible nombre" name="name_1" class="  updateCurrentText " id="name_1" >
                                </div>
                                <div class="col-sm-2">
                                  <button tabindex="-1" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle" type="button"> es <span class="caret"></span> </button>
                                  <ul class="dropdown-menu">
                                    <li> <a href="#">Español (Spanish)</a> </li>
                                    <li> <a href="#">English (English)</a> </li>
                                    <li> <a href="#">Français (French)</a> </li>
                                    <li> <a href="#">Italiano (Italian)</a> </li>
                                    <li> <a href="#">Deutsch (German)</a> </li>
                                    <li> <a href="#">Dutch</a> </li>
                                    <li> <a href="#">Polish</a> </li>
                                    <li> <a href="#">Russian</a> </li>
                                    <li> <a href="#">Portuguese</a> </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- form-group -->
                          
                          
                          <!-- form-group -->
                          
                          
                          <!-- form-group -->
                          
                                                   
                          <div class="form-group">
                            <label for="description_1" class="control-label col-lg-3"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Appears in the body of product detail."> Descripción </span> </label>
                            <div class="col-lg-8 mgbt-xs-10 mgbt-lg-0">
                              <textarea style="height: 150px;" name="description_1" id="description_1" rows="1" ></textarea>
                            </div>
                            <div class="col-lg-1">
                              <button tabindex="-1" data-toggle="dropdown" class="btn btn-xs btn-default dropdown-toggle" type="button"> es <span class="caret"></span> </button>
                              <ul class="dropdown-menu pull-right">
                                <li> <a href="#">Español (Spanish)</a> </li>
                                <li> <a href="#">English (English)</a> </li>
                                <li> <a href="#">Français (French)</a> </li>
                                <li> <a href="#">Italiano (Italian)</a> </li>
                                <li> <a href="#">Deutsch (German)</a> </li>
                                <li> <a href="#">Dutch</a> </li>
                                <li> <a href="#">Polish</a> </li>
                                <li> <a href="#">Russian</a> </li>
                                <li> <a href="#">Portuguese</a> </li>
                              </ul>
                            </div>
                          </div>
                          <!-- form-group -->

                          
                          <div class="form-group">
                            <label for="tags_1" class="control-label col-lg-3"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Each tag has to be followed by a comma. The following characters are forbidden: !&lt;;&gt;;?=+#&quot;°{}_$%"> Tags </span> </label>
                            <div class="col-lg-8 mgbt-xs-10 mgbt-lg-0">
                              <div class="row">
                                <div class="col-lg-9 mgbt-xs-10 mgbt-lg-0">
                                  <input type="text" value="" name="tags_1"  id="tags_1" data-rel="tags-input">
                                </div>
                                <div class="col-lg-2">
                                  <button data-toggle="dropdown" class="btn btn-xs btn-default dropdown-toggle" type="button"> en <span class="caret"></span> </button>
                                  <ul class="dropdown-menu">
                                    <li> <a href="#">English (English)</a> </li>
                                    <li> <a href="#">Español (Spanish)</a> </li>
                                    <li> <a href="#">Français (French)</a> </li>
                                    <li> <a href="#">Italiano (Italian)</a> </li>
                                    <li> <a href="#">Deutsch (German)</a> </li>
                                    <li> <a href="#">Dutch</a> </li>
                                    <li> <a href="#">Polish</a> </li>
                                    <li> <a href="#">Russian</a> </li>
                                    <li> <a href="#">Portuguese</a> </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label for="tags_1" class="control-label col-lg-3"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Each tag has to be followed by a comma. The following characters are forbidden: !&lt;;&gt;;?=+#&quot;°{}_$%"> Categorias </span> </label>
                            <div class="col-lg- mgbt-xs-10 mgbt-lg-0">
                              <div class="row">
                                <div class="col-lg-9 mgbt-xs-10 mgbt-lg-0">
                                  <input type="text" value="" name="tags_1"  id="tags_1" data-rel="tags-input">
                                </div>
                                <div class="col-lg-2">
                                  <button data-toggle="dropdown" class="btn btn-xs btn-default dropdown-toggle" type="button"> es <span class="caret"></span> </button>
                                  <ul class="dropdown-menu">
                                    <li> <a href="#">Español (Spanish)</a> </li>
                                    <li> <a href="#">English (English)</a> </li>
                                    <li> <a href="#">Français (French)</a> </li>
                                    <li> <a href="#">Italiano (Italian)</a> </li>
                                    <li> <a href="#">Deutsch (German)</a> </li>
                                    <li> <a href="#">Dutch</a> </li>
                                    <li> <a href="#">Polish</a> </li>
                                    <li> <a href="#">Russian</a> </li>
                                    <li> <a href="#">Portuguese</a> </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- form-group -->
                          
                        </form>
                      </div>
                      <!-- #tabinfo -->
                      
                          
                    </div>
                    <!-- tab-content --> 
                    
                  </div>
                  <!-- panel-body --> 
                  
                  <!-- form-horizontal --> 
                </div>
                <!-- Panel Widget --> 
              </div>
              <!-- col-sm-12--> 
            </div>
            <!-- row --> 
            
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header vd_bg-blue vd_white">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
        <h4 class="modal-title" id="myModalLabel">Cancelar</h4>
      </div>
      <div class="modal-body">
        <h5>Estas seguro que quieres cancelar los cambios realizados?</h5>
      </div>
      <div class="modal-footer background-login">
        <button type="button" class="btn vd_btn vd_bg-grey" data-dismiss="modal">Si</button>
        <button type="button" class="btn vd_btn vd_bg-green"  data-dismiss="modal">No</button>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal -->

<div class="modal fade" id="addPriceModal" tabindex="-1" role="dialog" aria-labelledby="priceModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header vd_bg-blue vd_white">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
        <h4 class="modal-title" id="priceModalLabel">Add Price for Combination</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label class="col-sm-4 control-label">Combination</label>
            <div class="col-sm-7 controls">
              <select class="width-40" id="option-combination">
                            <option value="S - Grey">S - Grey</option>
                            <option value="S - Blue">S - Blue</option>
                            <option value="M - Grey">M - Grey</option>
              </select>
              
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Price</label>
            <div class="col-sm-7 controls">
              <input class="input-border-btm width-40" type="number" id="price-combination">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Enabled</label>
            <div class="col-sm-7 controls">
              <input  type="checkbox" data-rel="switch" data-wrapper-class="inverse" data-size="small" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" id="enable-combination">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer background-login">
        <button type="button" class="btn vd_btn vd_bg-grey" data-dismiss="modal">Close</button>
        <button type="button" class="btn vd_btn vd_bg-green" id="add-price-btn"><i class="fa fa-plus append-icon"></i> Add Price</button>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal -->
