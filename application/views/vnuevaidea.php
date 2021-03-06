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
                            <label for="tags_1" class="control-label col-lg-3"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Each tag has to be followed by a comma. The following characters are forbidden: !&lt;;&gt;;?=+#&quot;°{}_$%"> Categorias </span> </label>
                            <div class="col-lg-9 mgbt-xs-10 mgbt-lg-0">
                              <div class="row">
                                <div class="col-lg-11 mgbt-xs-10 mgbt-lg-0">
                                  <input type="text" value="" name="tags_1"  id="tags_1" data-rel="tags-input">
                                </div>
                                <div class="col-lg-1">
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
                          
                        </form>
                      </div>
                      
                      <!-- #tabinfo -->
                      <div id="tabprice" class="tab-pane">
                        <div class="vd_panel-menu">
                          <div> <a class="btn vd_btn vd_bg-blue btn-sm save-btn"><i class="fa fa-save append-icon"></i> Guardar Cambios</a> <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-times append-icon"></i> Cancelar</a></div>
                        </div>
                        
                          <br/>
                          <h3 class="mgtp-15 mgbt-xs-20"> Participaciones en la Idea </h3>
                          <a class="btn vd_btn btn-sm vd_bg-green" href="#" data-toggle="modal" data-target="#addPriceModal"><i class="fa fa-plus append-icon"></i> Agregar Inversion </a>
                          <table class="table table-condensed table-striped mgtp-10" id="specific_price_table">
                            <thead class="vd_bg-dark-blue vd_white">
                              <tr>
                                <th>Tipo</th>
                                <th>Valor</th>
                                <th>Disponible</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Acción</td>
                                <td>$20.000</td>
                                <td class="text-center"><i class='fa fa-check vd_green'></i></td>
                                <td class="menu-action"><a class="btn menu-icon vd_green" data-placement="top" data-toggle="tooltip" data-original-title="Disabled"> <i class="fa fa-power-off"></i> </a> <a class="btn menu-icon vd_yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit"> <i class="fa fa-pencil"></i> </a> <a class="btn menu-icon vd_red" data-placement="top" data-toggle="tooltip" data-original-title="delete"> <i class="fa fa-times"></i> </a></td>
                              </tr>
                              <tr>
                                <td>Inicial</td>
                                <td>$100.000</td>
                                <td class="text-center"><i class='fa fa-times vd_grey'></i></td>
                                <td class="menu-action"><a class="btn menu-icon vd_grey" data-placement="top" data-toggle="tooltip" data-original-title="Enabled"> <i class="fa fa-power-off"></i> </a> <a class="btn menu-icon vd_yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit"> <i class="fa fa-pencil"></i> </a> <a class="btn menu-icon vd_red" data-placement="top" data-toggle="tooltip" data-original-title="delete"> <i class="fa fa-times"></i> </a></td>
                              </tr>
                              <tr>
                                <td>Comprar Idea</td>
                                <td>$500.000</td>
                                <td class="text-center"><i class='fa fa-check vd_green'></i></td>
                                <td class="menu-action"><a class="btn menu-icon vd_green" data-placement="top" data-toggle="tooltip" data-original-title="Disabled"> <i class="fa fa-power-off"></i> </a> <a class="btn menu-icon vd_yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit"> <i class="fa fa-pencil"></i> </a> <a class="btn menu-icon vd_red" data-placement="top" data-toggle="tooltip" data-original-title="delete"> <i class="fa fa-times"></i> </a></td>
                              </tr>
                            </tbody>
                          </table>
                        </form>
                      </div>
                      <!-- #tab-price -->
                      <div id="tabseo" class="tab-pane">
                        <h3 class="mgtp-15 mgbt-xs-20"> Search Engine Optimization</h3>
                        <form class="form-horizontal">
                          <div class="vd_panel-menu">
                            <div> <a class="btn vd_btn vd_bg-blue btn-sm save-btn"><i class="fa fa-save append-icon"></i> Guardar Cambios</a> <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-times append-icon"></i> Cancelar </a></div>
                          </div>
                          <div class="form-group">
                            <label for="meta_title_1" class="control-label col-lg-3"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Public title for the product's page, and for search engines. Leave blank to use the product name."> Meta title </span> </label>
                            <div class="col-lg-8">
                              <div class="row mgbt-xs-0">
                                <div class="col-lg-9  mgbt-xs-10 mgbt-lg-0">
                                  <div class="input-group"> <span class="input-group-addon" id="meta_title_1_counter">70</span>
                                    <input type="text" data-maxchar="70"  value="" name="meta_title_1" class=" " id="meta_title_1">
                                  </div>
                                </div>
                                <div class="col-lg-2">
                                  <button tabindex="-1" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle" type="button"> en <span class="caret"></span> </button>
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
                          <div class="form-group">
                            <label for="meta_description_1" class="control-label col-lg-3"> <span title="This description will appear in search engines. You need a single sentence, shorter than 160 characters (including spaces)." data-toggle="tooltip" class="label-tooltip"> Meta description </span> </label>
                            <div class="col-lg-8">
                              <div class="row mgbt-xs-0" style="display: block;">
                                <div class="col-lg-9 mgbt-xs-10 mgbt-lg-0">
                                  <div class="input-group"> <span class="input-group-addon" id="meta_description_1_counter">160</span>
                                    <input type="text" data-maxchar="160" onblur="updateLinkRewrite();" onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();" value="" name="meta_description_1" class=" " id="meta_description_1">
                                  </div>
                                </div>
                                <div class="col-lg-2">
                                  <button tabindex="-1" data-toggle="dropdown" class="btn btn-xs btn-default dropdown-toggle" type="button"> en <span class="caret"></span> </button>
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
                          <div class="form-group">
                            <label for="link_rewrite_1" class="control-label col-lg-3"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="This is the human-readable URL, as generated from the product's name. You can change it if you want."> Friendly URL </span> </label>
                            <div class="col-lg-6  mgbt-xs-10 mgbt-lg-0">
                              <div class="row mgbt-xs-0" style="display: block;">
                                <div class="col-lg-9 mgbt-xs-10 mgbt-lg-0">
                                  <input type="text" onblur="updateLinkRewrite();" onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();" value="tight-jeans" name="link_rewrite_1" class=" " id="link_rewrite_1">
                                </div>
                                <div class="col-lg-2">
                                  <button tabindex="-1" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle" type="button"> en <span class="caret"></span> </button>
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
                            <div class="col-lg-2">
                              <button onmousedown="updateFriendlyURLByName();" id="generate-friendly-url" class="btn btn-default" type="button"><i class="icon-random"></i> Generate</button>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-9 col-lg-offset-3">
                              <div class="alert alert-warning translatable-field lang-1" style="display: block;"> <i class="fa fa-link"></i> The product link will look like this<br>
                                <strong>http://bo.demo.prestashop.com/lang/1-<span id="friendly-url_1">faded-short-sleeve-tshirts</span>.html</strong> </div>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- tabseo -->
                      
                      <div id="tabship" class="tab-pane">
                        <h3 class="mgtp-15 mgbt-xs-20"> Shipping</h3>
                        <form class="form-horizontal">
                          <div class="vd_panel-menu">
                            <div> <a class="btn vd_btn vd_bg-blue btn-sm save-btn"><i class="fa fa-save append-icon"></i> Guardar Cambios</a> <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-times append-icon"></i> Cancelar</a></div>
                          </div>
                          <div class="form-group">
                            <label for="width" class="control-label col-lg-3"> Package width</label>
                            <div class=" col-lg-2">
                              <div class="input-group"> <span class="input-group-addon">in</span>
                                <input type="text" onkeyup="if (isArrowKey(event)) return ;this.value = this.value.replace(/,/g, '.');" value="0.000000" name="width" id="width" maxlength="14">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="height" class="control-label col-lg-3"> Package height</label>
                            <div class="col-lg-2">
                              <div class="input-group"> <span class="input-group-addon">in</span>
                                <input type="text" onkeyup="if (isArrowKey(event)) return ;this.value = this.value.replace(/,/g, '.');" value="0.000000" name="height" id="height" maxlength="14">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="depth" class="control-label col-lg-3"> Package depth</label>
                            <div class="col-lg-2">
                              <div class="input-group"> <span class="input-group-addon">in</span>
                                <input type="text" onkeyup="if (isArrowKey(event)) return ;this.value = this.value.replace(/,/g, '.');" value="0.000000" name="depth" id="depth" maxlength="14">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="weight" class="control-label col-lg-3"> Package weight</label>
                            <div class="col-lg-2">
                              <div class="input-group"> <span class="input-group-addon">lb</span>
                                <input type="text" onkeyup="if (isArrowKey(event)) return ;this.value = this.value.replace(/,/g, '.');" value="0.000000" name="weight" id="weight" maxlength="14">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="weight" class="control-label col-lg-3">Carriers</label>
                            <div class="col-lg-9">
                              <div class="row">
                                <div class="col-sm-6">
                                  <div class="vd_checkbox checkbox-success">
                                    <input type="checkbox" id="checkbox-1" value="DHL">
                                    <label for="checkbox-1"> DHL </label>
                                  </div>
                                  <div class="vd_checkbox checkbox-success">
                                    <input type="checkbox" id="checkbox-2" value="Fedex">
                                    <label for="checkbox-2"> Fedex </label>
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="vd_checkbox checkbox-success">
                                    <input type="checkbox" id="checkbox-3" value="My Courier">
                                    <label for="checkbox-3"> My Courier </label>
                                  </div>
                                  <div class="vd_checkbox checkbox-success">
                                    <input type="checkbox" id="checkbox-4" value="Post">
                                    <label for="checkbox-4"> Post </label>
                                  </div>
                                </div>
                              </div>
                              <a href="#"> <i class="fa fa-plus append-icon"></i> Add Courier <i class="fa fa-external-link font-xs"></i></a> </div>
                          </div>
                        </form>
                      </div>
                      <div id="tabasso" class="tab-pane">
                        <h3 class="mgtp-15 mgbt-xs-20"> Associations</h3>
                        <form class="form-horizontal">
                          <div class="vd_panel-menu">
                            <div> <a class="btn vd_btn vd_bg-blue btn-sm save-btn"><i class="fa fa-save append-icon"></i> Guardar Cambios</a> <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-times append-icon"></i> Cancelar</a></div>
                          </div>
                          <div class="form-group">
                            <label for="manufactures_1" class="control-label col-lg-3"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Product Manufactures"> Manufactures </span> </label>
                            <div class="col-lg-8">
                              <div class="row mgbt-xs-0">
                                <div class="col-lg-5  mgbt-xs-10 mgbt-lg-0">
                                  <select id="manufactures_1" name="manufactures_1">
                                    <option value="Sony">Sony</option>
                                    <option value="Samsung"> Samsung </option>
                                    <option selected="selected" value="LG"> LG </option>
                                  </select>
                                </div>
                                <div  class="col-lg-5"> <a href="#"> <i class="fa fa-plus append-icon"></i> Add manufactures <i class="fa fa-external-link font-xs"></i></a> </div>
                                <!-- col-lg-9 --> 
                              </div>
                            </div>
                          </div>
                          <!-- form-group -->
                          <div class="form-group">
                            <label  class="control-label col-lg-3"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Product Categories"> Categories </span> </label>
                            <div class="col-lg-5">
                              <div class="categories" data-rel="scroll" data-scrollheight="200" style="border-bottom:1px solid #CCCCCC;">
                                <ul class="vd_li" style="margin-left:-15px;">
                                  <li>
                                    <div class="vd_checkbox checkbox-success">
                                      <input type="checkbox" id="checkbox-cat-1" value="My Courier">
                                      <label for="checkbox-cat-1"> Electronics </label>
                                    </div>
                                    <ul class="vd_li">
                                      <li>
                                        <div class="vd_checkbox checkbox-success">
                                          <input type="checkbox" id="checkbox-cat-2" value="My Courier">
                                          <label for="checkbox-cat-2"> Tablet </label>
                                        </div>
                                      </li>
                                      <li>
                                        <div class="vd_checkbox checkbox-success">
                                          <input type="checkbox" id="checkbox-cat-3" value="My Courier">
                                          <label for="checkbox-cat-3"> Smartphone </label>
                                        </div>
                                      </li>
                                    </ul>
                                  </li>
                                  <li>
                                    <div class="vd_checkbox checkbox-success">
                                      <input type="checkbox" id="checkbox-cat-4" value="My Courier">
                                      <label for="checkbox-cat-4"> Apparel </label>
                                    </div>
                                    <ul class="vd_li">
                                      <li>
                                        <div class="vd_checkbox checkbox-success">
                                          <input type="checkbox" id="checkbox-cat-5" value="My Courier">
                                          <label for="checkbox-cat-5"> Jeans </label>
                                        </div>
                                      </li>
                                      <li>
                                        <div class="vd_checkbox checkbox-success">
                                          <input type="checkbox" id="checkbox-cat-6" value="My Courier">
                                          <label for="checkbox-cat-6"> Clothes </label>
                                        </div>
                                      </li>
                                      <li>
                                        <div class="vd_checkbox checkbox-success">
                                          <input type="checkbox" id="checkbox-cat-7" value="My Courier">
                                          <label for="checkbox-cat-7"> Jacket </label>
                                        </div>
                                      </li>
                                      <li>
                                        <div class="vd_checkbox checkbox-success">
                                          <input type="checkbox" id="checkbox-cat-8" value="My Courier">
                                          <label for="checkbox-cat-8"> Dress </label>
                                        </div>
                                      </li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                              <div  class="mgtp-10"> <a href="#"><i class="fa fa-plus append-icon"></i> Add Categories <i class="fa fa-external-link font-xs"></i></a> </div>
                            </div>
                          </div>
                          <!-- form-group -->
                          <div class="form-group">
                            <label for="related_1" class="control-label col-lg-3"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Related products will be appeared on people also see this widget"> Related Products </span> </label>
                            <div class="col-lg-5">
                              <div class="input-group mgbt-xs-10">
                                <input id="related_1" name="related_1" type="text" placeholder="Search">
                                <div class="input-group-btn">
                                  <button class="btn vd_bg-blue vd_white" type="button"><i class="fa fa-search"></i></button>
                                </div>
                                <!-- /btn-group --> 
                              </div>
                              <div class="categories" data-rel="scroll" data-scrollheight="200" style="border-bottom:1px solid #CCCCCC;">
                                <ul class="vd_li" style="margin-left:-15px;">
                                  <li>
                                    <div class="vd_checkbox checkbox-success">
                                      <input type="checkbox" id="checkbox-rel-1" value="My Courier">
                                      <label for="checkbox-rel-1"> Samsung Galaxy Tab </label>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="vd_checkbox checkbox-success">
                                      <input type="checkbox" id="checkbox-rel-2" value="My Courier">
                                      <label for="checkbox-rel-2"> Skirt Short</label>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="vd_checkbox checkbox-success">
                                      <input type="checkbox" id="checkbox-rel-3" value="My Courier">
                                      <label for="checkbox-rel-3"> Short Pants</label>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="vd_checkbox checkbox-success">
                                      <input type="checkbox" id="checkbox-rel-4" value="My Courier">
                                      <label for="checkbox-rel-4"> Trousers Long with Tail</label>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="vd_checkbox checkbox-success">
                                      <input type="checkbox" id="checkbox-rel-5" value="My Courier">
                                      <label for="checkbox-rel-5"> Vooodo Doll</label>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="vd_checkbox checkbox-success">
                                      <input type="checkbox" id="checkbox-rel-6" value="My Courier">
                                      <label for="checkbox-rel-6"> Belt Gold with Mark</label>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="vd_checkbox checkbox-success">
                                      <input type="checkbox" id="checkbox-rel-7" value="My Courier">
                                      <label for="checkbox-rel-7"> Jacket Long Sleeves</label>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- tab-pane -->
                      <div id="tabimage" class="tab-pane">
                        <h3 class="mgtp-15 mgbt-xs-20"> Imagenes del proyecto</h3>
                        <form class="form-horizontal">
                          <div class="vd_panel-menu">
                            <div> <a class="btn vd_btn vd_bg-blue btn-sm save-btn"><i class="fa fa-save append-icon"></i> Guardar Cambios</a> <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-times append-icon"></i> Cancelar</a></div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-lg-3 file_upload_label"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Format JPG, GIF, PNG. Filesize 8.00 MB max."> Agregar Imagen </span> </label>
                            <div class="col-lg-9"> <span class="btn vd_btn vd_bg-green fileinput-button"> <i class="glyphicon glyphicon-plus"></i> <span>Adjuntar</span> 
                              <!-- The file input field used as target for the file upload widget -->
                              <input type="file" multiple name="files[]" id="fileupload">
                              </span> <br>
                              
                              <!-- The global progress bar -->
                              <div id="progress" class="progress">
                                <div class="progress-bar progress-bar-success"></div>
                              </div>
                              <!-- The container for the uploaded files -->
                              <div id="files" class="files"></div>
                              <br>
                            </div>
                          </div>
                          
                          <table id="imageTable" class="table table-dragable">
                            <thead>
                              <tr class="nodrag nodrop">
                                <th style="width:20px"></th>
                                <th class="fixed-width-lg" style="width:80px"><span class="title_box">Image</span></th>
                                <th class="fixed-width-lg"><span class="title_box">Caption</span></th>
                                <th class="fixed-width-xs" style="width:20px"><span class="title_box">Position</span></th>
                                <th class="fixed-width-xs"><span class="title_box">Cover</span></th>
                                <th></th>
                                <!-- action --> 
                              </tr>
                            </thead>
                            <tbody id="imageList">
                              <tr id="1">
                                <td><i class="fa fa-arrows vd_soft-grey"></i></td>
                                <td><a data-rel="prettyPhoto" href="../sources/img/products/01.jpg"> <img src="../sources/img/products/01.jpg" style="width:60px" alt="product image"> </a></td>
                                <td>Hard Disk</td>
                                <td class="pointer text-center" id="td_1"> 1 </td>
                                <td class="cover"><div class="vd_radio radio-success">
                                    <input type="radio" id="yes" name="optionyes" value="0" checked>
                                    <label for="yes">&nbsp;</label>
                                  </div></td>
                                <td><a class="delete_product_image pull-right btn vd_btn vd_bg-yellow btn-sm" href="#"> <i class="icon-trash append-icon"></i> Delete this image </a></td>
                              </tr>
                              <tr id="2">
                                <td><i class="fa fa-arrows vd_soft-grey"></i></td>
                                <td><a data-rel="prettyPhoto" href="../sources/img/products/02.jpg"> <img src="../sources/img/products/02.jpg" style="width:60px" alt="product image"> </a></td>
                                <td>iMac</td>
                                <td class="pointer text-center" id="td_2"> 2 </td>
                                <td class="cover"><div class="vd_radio radio-success">
                                    <input type="radio" id="yes2" name="optionyes" value="1">
                                    <label for="yes2">&nbsp;</label>
                                  </div></td>
                                <td><a class="delete_product_image pull-right btn vd_btn vd_bg-yellow btn-sm" href="#"> <i class="icon-trash append-icon"></i> Delete this image </a></td>
                              </tr>
                              <tr id="3">
                                <td><i class="fa fa-arrows vd_soft-grey"></i></td>
                                <td><a data-rel="prettyPhoto" href="../sources/img/products/03.jpg"> <img src="../sources/img/products/03.jpg" style="width:60px" alt="product image"> </a></td>
                                <td>iPad</td>
                                <td class="pointer text-center" id="td_3"> 3 </td>
                                <td class="cover"><div class="vd_radio radio-success">
                                    <input type="radio" id="yes3" name="optionyes" value="2">
                                    <label for="yes3">&nbsp;</label>
                                  </div></td>
                                <td><a class="delete_product_image pull-right btn vd_btn vd_bg-yellow btn-sm" href="#"> <i class="icon-trash append-icon"></i> Delete this image </a></td>
                              </tr>
                              <tr id="4">
                                <td><i class="fa fa-arrows vd_soft-grey"></i></td>
                                <td><a data-rel="prettyPhoto" href="../sources/img/products/04.jpg"> <img src="../sources/img/products/04.jpg" style="width:60px" alt="product image"> </a></td>
                                <td>Galaxy Note 8</td>
                                <td class="pointer text-center" id="td_4"> 4 </td>
                                <td class="cover"><div class="vd_radio radio-success">
                                    <input type="radio" id="yes4" name="optionyes" value="3">
                                    <label for="yes4">&nbsp;</label>
                                  </div></td>
                                <td><a class="delete_product_image pull-right btn vd_btn vd_bg-yellow btn-sm" href="#"> <i class="icon-trash append-icon"></i> Delete this image </a></td>
                              </tr>
                            </tbody>
                          </table>
                        </form>
                      </div>
                      <!-- tab-pane -->
                      
                      <div id="tabquantities" class="tab-pane">
                        <h3 class="mgtp-15 mgbt-xs-20"> Quantities</h3>
                        <form class="form-horizontal">
                          <div class="vd_panel-menu">
                            <div> <a class="btn vd_btn vd_bg-blue btn-sm save-btn"><i class="fa fa-save append-icon"></i> Guardar Cambios</a> <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-times append-icon"></i> Cancelar</a></div>
                          </div>
                          <div class="form-group">
                            <label for="number_1" class="control-label col-lg-5"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Public title for the product's page, and for search engines. Leave blank to use the product name."> Tight Jeans - Small - Black </span> </label>
                            <div class="col-lg-2">
                              <input type="number"  value="235" name="number_1" class=" " id="number_1">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="number_1" class="control-label col-lg-5"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Public title for the product's page, and for search engines. Leave blank to use the product name."> Tight Jeans - Small - Blue </span> </label>
                            <div class="col-lg-2">
                              <input type="number"   value="102" name="number_2" class=" " id="number_2">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="number_1" class="control-label col-lg-5"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Public title for the product's page, and for search engines. Leave blank to use the product name."> Tight Jeans - Medium - Black </span> </label>
                            <div class="col-lg-2">
                              <input type="number"  value="32" name="number_3" class=" " id="number_3">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="number_1" class="control-label col-lg-5"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Public title for the product's page, and for search engines. Leave blank to use the product name."> Tight Jeans - Medium - Blue </span> </label>
                            <div class="col-lg-2">
                              <input type="number"   value="45" name="number_4" class=" " id="number_4">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="number_1" class="control-label col-lg-5"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Public title for the product's page, and for search engines. Leave blank to use the product name."> Tight Jeans - Large - Black </span> </label>
                            <div class="col-lg-2">
                              <input type="number"  value="76" name="number_5" class=" " id="number_5">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="number_1" class="control-label col-lg-5"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Public title for the product's page, and for search engines. Leave blank to use the product name."> Tight Jeans - Large - Blue </span> </label>
                            <div class="col-lg-2">
                              <input type="number"   value="12" name="number_6" class=" " id="number_6">
                            </div>
                          </div>
                          <h3 class="mgtp-15 mgbt-xs-20"> Other Options</h3>
                          <div class="form-group" id="when_out_of_stock">
                            <label class="control-label col-lg-3">When out of stock</label>
                            <div class="col-lg-9">
                              <div class="vd_radio radio-success">
                                <input checked="" value="0" name="out_of_stock_options" id="out_of_stock_1" type="radio">
                                <label for="out_of_stock_1">Deny orders</label>
                              </div>
                              <div class="vd_radio radio-success">
                                <input value="0" name="out_of_stock_options" id="out_of_stock_2" type="radio">
                                <label for="out_of_stock_2">Allow orders</label>
                              </div>
                              <div class="vd_radio radio-success">
                                <input value="2" name="out_of_stock_options" id="out_of_stock_3" type="radio">
                                <label for="out_of_stock_3">Default:Deny orders - <a href="#">as set in the Products Preferences page</a></label>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div id="tabattach" class="tab-pane">
                        <h3 class="mgtp-15 mgbt-xs-20"> Attachment</h3>
                        <form class="form-horizontal">
                          <div class="vd_panel-menu">
                            <div> <a class="btn vd_btn vd_bg-blue btn-sm save-btn"><i class="fa fa-save append-icon"></i> Guardar Cambios</a> <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-times append-icon"></i> Cancelar</a></div>
                          </div>
                          <div class="form-group">
                            <label for="attachment_name_1" class="control-label col-lg-3 required"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Maximum 32 characters."> <span class="vd_red">*</span> Filename </span> </label>
                            <div class="col-lg-9">
                              <div class="translatable-field row mgbt-xs-0">
                                <div class="col-lg-9">
                                  <input type="text" onblur="updateLinkRewrite();" onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();" value="" name="attachment_name_1" class=" " id="attachment_name_1">
                                </div>
                                <div class="col-lg-2">
                                  <button tabindex="-1" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle" type="button"> en <span class="caret"></span> </button>
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
                            <label for="attachment_name_2" class="control-label col-lg-3 required"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="File Description"> Description </span> </label>
                            <div class="col-lg-9">
                              <div class="translatable-field row mgbt-xs-0">
                                <div class="col-lg-9">
                                  <input type="text" onblur="updateLinkRewrite();" onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();" value="" name="attachment_name_2" class=" " id="attachment_name_2">
                                </div>
                                <div class="col-lg-2">
                                  <button tabindex="-1" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle" type="button"> en <span class="caret"></span> </button>
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
                            <label class="control-label col-lg-3 file_upload_label"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Format JPG, GIF, PNG. Filesize 8.00 MB max."> File </span> </label>
                            <div class="col-lg-9"> <span class="btn vd_btn vd_bg-green fileinput-button"> <i class="glyphicon glyphicon-plus"></i> <span>Add files...</span> 
                              <!-- The file input field used as target for the file upload widget -->
                              <input type="file" multiple name="files[]" id="fileupload2">
                              </span> </div>
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="control-label col-lg-3 file_upload_label"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Check to use which uploaded files you want to use"> Uploaded Files </span> </label>
                            <div class="col-lg-9">
                              <div class="row">
                                <div class="col-sm-6">
                                  <div class="vd_checkbox checkbox-success">
                                    <input type="checkbox" id="attach-1" value="DHL" checked>
                                    <label for="attach-1"> My_Things.zip </label>
                                  </div>
                                  <div class="vd_checkbox checkbox-success">
                                    <input type="checkbox" id="attach-2" value="Fedex">
                                    <label for="attach-2"> Second.zip </label>
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="vd_checkbox checkbox-success">
                                    <input type="checkbox" id="attach-3" value="My Courier">
                                    <label for="attach-3"> Third.zip </label>
                                  </div>
                                  <div class="vd_checkbox checkbox-success">
                                    <input type="checkbox" id="attach-4" value="Post">
                                    <label for="attach-4"> Fourth.zip </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- form-group -->
                          
                        </form>
                      </div>
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
