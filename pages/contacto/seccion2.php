<section class="contacto-seecion2">
    <div class="contacto-seecion2-fondo"></div>
    <div class="container">
        <h2 class="contacto-seecion2-titulo">CONTÁCTENOS</h2>
        <div class="row">
            
            <div class="col-md-6 form-contacto">
                <form action="enviarcorreo.php" name="contacto" method="post" class="needs-validation form-contacto">
                    
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <input type="text" name="nombre" class="form-control" id="validationCustom01" placeholder="NOMBRE" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <input type="email" name="email" class="form-control" id="validationCustom02" placeholder="CORREO ELECTRÓNICO" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <input type="tel" name="telefono" class="form-control" id="validationCustom02" placeholder="TELÉFONO" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <textarea required type="text" class="col-md-12 mb-3 form-control" name="mensaje" id="mensaje" placeholder="MENSAJE"></textarea>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="form-check d-flex align-items-center">
                        <input class="form-check-input" type="checkbox" value="" id="terminos" required>
                        <label class="form-check-label" for="terminos">
                            He leido y acepto los <a href="terminos.php" target="_blank">terminos y condiciones</a>
                        </label>
                        
                        </div>
                    </div>
                    <button class="btn btn-enviar" type="submit">ENVIAR</button>
                </form>
            </div>
            <div class="col-md-6 correos-contactos">
                <div class="correo-contacto d-flex align-items-center">
                    <span class="far fa-envelope correo-contacto-icono"></span>
                    <a href="mailto:cesarjerez@yahoo.com" target="_blank">cesarjerez<wbr>@yahoo.com</a>
                </div>
                <div class="correo-contacto">
                    <span>Gerencia:</span>
                    <a href="mailto:gerencia@cesarjerezsic.com" target="_blank">gerencia<wbr>@cesarjerezsic.com</a>
                </div>
                <div class="correo-contacto">
                    <span>Dep. de Proyectos:</span>
                    <a href="mailto:proyectos@cesarjerezsic.com" target="_blank">proyectos<wbr>@cesarjerezsic.com</a>
                </div>
                <div class="correo-contacto">
                    <span>Dep. de HSE:</span>
                    <a href="mailto:hsecoordinacion@cesarjerezsic.com" target="_blank">hsecoordinacion<wbr>@cesarjerezsic.com</a>
                </div>
                <div class="correo-contacto">
                    <span>Dep. De Calidad:</span>
                    <a href="mailto:calidad@cesarjerezsic.com" target="_blank">calidad<wbr>@cesarjerezsic.com</a>
                </div>
                <div class="correo-contacto">
                    <span>Dep. De RR.HH:</span>
                    <a href="mailto:recursohumano@cesarjerezsic.com" target="_blank">recursohumano<wbr>@cesarjerezsic.com</a>
                </div>
                <div class="correo-contacto">
                    <span>Dep. De Compras:</span>
                    <a href="mailto:compras@cesarjerezsic.com" target="_blank">compras<wbr>@cesarjerezsic.com</a>
                </div>
                <div class="correo-contacto d-flex align-items-center mt-4">
                    <span class="fab fa-whatsapp correo-contacto-icono"></span>
                    <div>
                        <a href="tel:+573112029138">311 202 91 38 - </a>
                        <a href="tel:+573115210004">311 521 00 04</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mapa embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7947.141637625854!2d-72.55909782871885!3d5.172516120993449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6b18449fa2fcd9%3A0xac3b7aea65bcdb0e!2sCra.%2022%20%237-39%2C%20Aguazul%2C%20Casanare!5e0!3m2!1ses!2sco!4v1602782355138!5m2!1ses!2sco" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <?php include('footer.php')?>
</section>