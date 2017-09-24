            <section class="banner">
                <img src="<?php echo CARPETA; ?>img/imgPrueba/Banner-Perfil-del-Contador.jpg" alt="Banner Perfil"/>
				<div class="contBanner">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <h2>Participa</h2>
                                <p>tu opinión es muy importante.</p>
							</div>
						</div>
					</div>
				</div>
            </section>
            <section class="breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <p><a href="">INICIO</a> > Perfil del Contador</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="encuesta">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Encuestas de El Poder de los Números</h2>
                            <p>Esta encuesta nos ayuda a mejorar, selecciona si eres estudiante de universidad o bachillerato.</p>
                        </div>
                        <div class="col-md-12">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#bachillerato" role="tab" aria-controls="home">ENCUESTA PARA BACHILLERATO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#uni" role="tab" aria-controls="profile">ENCUESTA PARA UNIVERSITARIOS</a>
                                </li>
                               
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="bachillerato" role="tabpanel">
                                    <div class="row">
                                        <form action="">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">SEXO*:</label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio"><img src="<?php echo CARPETA; ?>img/imgPrueba/ico_mujer.png" alt="Femenino"/>
                                                </label>
                                                <label class="radio-inline">
                                                     <input type="radio" name="optradio"><img src="<?php echo CARPETA; ?>img/imgPrueba/ico_mujer.png" alt="Masculino"/>
                                                </label>
                                            </div>
                                            <div class="form-group row">
                                                <label for="escuela" class="col-sm-2 col-form-label">ESCUELA*:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="escuela" name="escuela">
                                                </div>
                                            </div>
                                            <div class="col-auto">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Preference</label>
      <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
                                            <div class="form-group">
                                                <label for="email">Email address:</label>
                                                <input type="email" class="form-control" id="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="pwd">Password:</label>
                                                <input type="password" class="form-control" id="pwd">
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Remember me</label>
                                            </div>
                                            <button type="submit" class="btn btn-default">Submit</button>
                                            
                                        </div>
                                        <div class="col-md-6">


                                        </div>
                                        </form>
                                    </div>

                                </div>
                                <div class="tab-pane" id="uni" role="tabpanel">2pred</div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </section>