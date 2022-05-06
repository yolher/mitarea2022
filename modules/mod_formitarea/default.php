<?php 
	
	function displayFormitarea(){
	?>
		<form action="" id="formmitarea">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Nombre:" aria-label="First name">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Correo:" aria-label="Last name">
                                </div>

                                <div class="input-group mb-3">
                                    <select class="input-group-text " aria-label="Default select example">
                                        <option selected>USA</option>
                                        <option value="1">Colombia</option>
                                        <option value="2">Peru</option>
                                        <option value="3">Chile</option>
                                    </select>
                                    <input type="text" class="form-control" placeholder="Whatsapp:" aria-label="Username" aria-describedby="basic-addon1">
                                </div>   
                                <div class="col-6">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="date" class="form-control" placeholder="Correo" aria-label="Last name">
                                </div>
                                <div class="col-6">
                                    <label for="exampleFormControlInput1" class="form-label">Hora de entrega</label>
                                    <input type="text" class="form-control" placeholder="Ejm:10:00pm" aria-label="Last name">
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="Carrera" aria-label="Last name">
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="Materia" aria-label="Last name">
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="Tema" aria-label="Last name">
                                </div>
                                <div class="col-6">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Tipo de trabajo</option>
                                        <option value="1">Corrección de trabajos de grado</option>
                                        <option value="2">Corrección de normas</option>
                                        <option value="3">Analisis de lectura</option>
                                    </select>
                                </div>
                                <span class="spanaviso">Llenar estos dos campos solo si aplican.</span>
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="¿ Alguna Norma ?" aria-label="Last name">
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="Num. de Páginas" aria-label="Last name">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">Descripción*</span>
                                    <textarea class="form-control" aria-label="With textarea" placeholder="Cuéntanos en qué consiste tu trabajo, sé lo más específico posible, incluye normas, extensión o numero de hojas, si es a mano o a computador, de que carrera es. Si nos das más información más rápido podemos cotizar."></textarea>
                                </div>
                                <span class="spanaviso">*Adjunta los archivos que necesitemos para realizar de tu Trabajo.</span>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="inputGroupFile02">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Ingresa aquí tu cupón de descuento" aria-label="Last name">
                                    <span>*Este campo es opcional, no es requerido.</span>
                                </div>
                                <div class="col-12">
                                    <button type="button" class="btn btn-light enviartarea">Enviar Tarea</button>
                                </div>
                            </div>
                    </form>
	<?php
	}

?>