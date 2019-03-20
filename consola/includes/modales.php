<!-- Usuarios -->
<div id="agregar-usuario" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><b>Agregar nuevo usuario</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <from class="form-horizontal form-material">
                    <div class="form-group">
                        <div class="col-md-12 m-b-20">
                            <input type="text" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="col-md-12 m-b-20">
                            <input type="text" class="form-control" placeholder="Teléfono">
                        </div>
                        <div class="col-md-12 m-b-20">
                            <input type="text" class="form-control" placeholder="Correo">
                        </div>
                        <div class="col-md-12 m-b-20">
                            <input type="text" class="form-control" placeholder="Contraseña">
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control">
                                    <option>Activo</option>
                                    <option>Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </from>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Guardar</button>
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Vinos -->
<div id="agregar-vino" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width:  1200px;">
        <div class="modal-content" style="padding: 30px;">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><b>Agregar vino</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">


                <div class="row" style="padding:  20px; border:#ced4da solid 1px; margin-bottom: 20px;">
                    <div class="col-md-12" style="color: #962832"><b>Paso 1. Información general</b></div>

                    <div class="col-md-12">
                        <h4 class="card-title">Subir etiqueta</h4>
                        <div class="dropify-wrapper">
                            <div class="dropify-message">
                                <span class="file-icon"></span>
                                <p>Drag and drop a file here or click</p>
                                <p class="dropify-error">Ooops, something wrong appended.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="firstName1">Vino:</label>
                            <input type="text" class="form-control" id="firstName1">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="lastName1">Color:</label>
                            <select class="select2 select2-hidden-accessible" style="width: 100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="3">Select</option>
                                <optgroup data-select2-id="16">
                                    <option value="Tinto" data-select2-id="17">&#8226; Tinto</option>
                                    <option value="Tinto dulce" data-select2-id="17">&#8226; Tinto dulce</option>
                                    <option value="Rosado" data-select2-id="17">&#8226; Rosado</option>
                                    <option value="Champ" data-select2-id="17">&#8226; Champ</option>
                                    <option value="Blanco" data-select2-id="17">&#8226; Blanco</option>
                                    <option value="Blanco dulce" data-select2-id="17">&#8226; Blanco dulce</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="lastName1">Región:</label>
                            <input type="text" class="form-control" id="lastName1">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="lastName1">Viñedo:</label>
                            <input type="text" class="form-control" id="lastName1">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="lastName1">Casa:</label>
                            <input type="text" class="form-control" id="lastName1">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="date1">Year:</label>
                        <input type="date" class="form-control" id="date1"></div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="lastName1">Grade:</label>
                            <input type="text" class="form-control" id="lastName1">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="lastName1">Best:</label>
                            <div class="example">
                                <div class="input-daterange input-group" id="date-range">
                                    <input type="text" class="form-control" name="start">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-info b-0 text-white">A</span>
                                    </div>
                                    <input type="text" class="form-control" name="end">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastName1">Origen:</label>
                            <select class="select2 select2-hidden-accessible" style="width: 100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="3">Select</option>
                                <optgroup data-select2-id="16">


                                    <option value="AL">Albania</option>
                                    <option value="DE">Alemania</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antártida</option>
                                    <option value="AG">Antigua y Barbuda</option>
                                    <option value="AN">Antillas Holandesas</option>
                                    <option value="SA">Arabia Saudí</option>
                                    <option value="DZ">Argelia</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaiyán</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrein</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BE">Bélgica</option>
                                    <option value="BZ">Belice</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermudas</option>
                                    <option value="BY">Bielorrusia</option>
                                    <option value="MM">Birmania</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BA">Bosnia y Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BR">Brasil</option>
                                    <option value="BN">Brunei</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="BT">Bután</option>
                                    <option value="CV">Cabo Verde</option>
                                    <option value="KH">Camboya</option>
                                    <option value="CM">Camerún</option>
                                    <option value="CA">Canadá</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CY">Chipre</option>
                                    <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comores</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">Congo, República Democrática del</option>
                                    <option value="KR">Corea</option>
                                    <option value="KP">Corea del Norte</option>
                                    <option value="CI">Costa de Marfíl</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="HR">Croacia (Hrvatska)</option>
                                    <option value="CU">Cuba</option>
                                    <option value="DK">Dinamarca</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egipto</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="AE">Emiratos Árabes Unidos</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="SI">Eslovenia</option>
                                    <option value="ES" selected>España</option>
                                    <option value="US">Estados Unidos</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Etiopía</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="PH">Filipinas</option>
                                    <option value="FI">Finlandia</option>
                                    <option value="FR">Francia</option>
                                    <option value="GA">Gabón</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GD">Granada</option>
                                    <option value="GR">Grecia</option>
                                    <option value="GL">Groenlandia</option>
                                    <option value="GP">Guadalupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GY">Guayana</option>
                                    <option value="GF">Guayana Francesa</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GQ">Guinea Ecuatorial</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="HT">Haití</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HU">Hungría</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IQ">Irak</option>
                                    <option value="IR">Irán</option>
                                    <option value="IE">Irlanda</option>
                                    <option value="BV">Isla Bouvet</option>
                                    <option value="CX">Isla de Christmas</option>
                                    <option value="IS">Islandia</option>
                                    <option value="KY">Islas Caimán</option>
                                    <option value="CK">Islas Cook</option>
                                    <option value="CC">Islas de Cocos o Keeling</option>
                                    <option value="FO">Islas Faroe</option>
                                    <option value="HM">Islas Heard y McDonald</option>
                                    <option value="FK">Islas Malvinas</option>
                                    <option value="MP">Islas Marianas del Norte</option>
                                    <option value="MH">Islas Marshall</option>
                                    <option value="UM">Islas menores de Estados Unidos</option>
                                    <option value="PW">Islas Palau</option>
                                    <option value="SB">Islas Salomón</option>
                                    <option value="SJ">Islas Svalbard y Jan Mayen</option>
                                    <option value="TK">Islas Tokelau</option>
                                    <option value="TC">Islas Turks y Caicos</option>
                                    <option value="VI">Islas Vírgenes (EEUU)</option>
                                    <option value="VG">Islas Vírgenes (Reino Unido)</option>
                                    <option value="WF">Islas Wallis y Futuna</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italia</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japón</option>
                                    <option value="JO">Jordania</option>
                                    <option value="KZ">Kazajistán</option>
                                    <option value="KE">Kenia</option>
                                    <option value="KG">Kirguizistán</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="LA">Laos</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LV">Letonia</option>
                                    <option value="LB">Líbano</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libia</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lituania</option>
                                    <option value="LU">Luxemburgo</option>
                                    <option value="MK">Macedonia, Ex-República Yugoslava de</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MY">Malasia</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MV">Maldivas</option>
                                    <option value="ML">Malí</option>
                                    <option value="MT">Malta</option>
                                    <option value="MA">Marruecos</option>
                                    <option value="MQ">Martinica</option>
                                    <option value="MU">Mauricio</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">México</option>
                                    <option value="FM">Micronesia</option>
                                    <option value="MD">Moldavia</option>
                                    <option value="MC">Mónaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Níger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk</option>
                                    <option value="NO">Noruega</option>
                                    <option value="NC">Nueva Caledonia</option>
                                    <option value="NZ">Nueva Zelanda</option>
                                    <option value="OM">Omán</option>
                                    <option value="NL">Países Bajos</option>
                                    <option value="PA">Panamá</option>
                                    <option value="PG">Papúa Nueva Guinea</option>
                                    <option value="PK">Paquistán</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Perú</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PF">Polinesia Francesa</option>
                                    <option value="PL">Polonia</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="UK">Reino Unido</option>
                                    <option value="CF">República Centroafricana</option>
                                    <option value="CZ">República Checa</option>
                                    <option value="ZA">República de Sudáfrica</option>
                                    <option value="DO">República Dominicana</option>
                                    <option value="SK">República Eslovaca</option>
                                    <option value="RE">Reunión</option>
                                    <option value="RW">Ruanda</option>
                                    <option value="RO">Rumania</option>
                                    <option value="RU">Rusia</option>
                                    <option value="EH">Sahara Occidental</option>
                                    <option value="KN">Saint Kitts y Nevis</option>
                                    <option value="WS">Samoa</option>
                                    <option value="AS">Samoa Americana</option>
                                    <option value="SM">San Marino</option>
                                    <option value="VC">San Vicente y Granadinas</option>
                                    <option value="SH">Santa Helena</option>
                                    <option value="LC">Santa Lucía</option>
                                    <option value="ST">Santo Tomé y Príncipe</option>
                                    <option value="SN">Senegal</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leona</option>
                                    <option value="SG">Singapur</option>
                                    <option value="SY">Siria</option>
                                    <option value="SO">Somalia</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="PM">St Pierre y Miquelon</option>
                                    <option value="SZ">Suazilandia</option>
                                    <option value="SD">Sudán</option>
                                    <option value="SE">Suecia</option>
                                    <option value="CH">Suiza</option>
                                    <option value="SR">Surinam</option>
                                    <option value="TH">Tailandia</option>
                                    <option value="TW">Taiwán</option>
                                    <option value="TZ">Tanzania</option>
                                    <option value="TJ">Tayikistán</option>
                                    <option value="TF">Territorios franceses del Sur</option>
                                    <option value="TP">Timor Oriental</option>
                                    <option value="TG">Togo</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad y Tobago</option>
                                    <option value="TN">Túnez</option>
                                    <option value="TM">Turkmenistán</option>
                                    <option value="TR">Turquía</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UA">Ucrania</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistán</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Vietnam</option>
                                    <option value="YE">Yemen</option>
                                    <option value="YU">Yugoslavia</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabue</option>




                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastName1">Ubicación actual:</label>
                            <select class="select2 select2-hidden-accessible" style="width: 100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="3">Select</option>
                                <optgroup data-select2-id="16">
                                    <option value="Tinto" data-select2-id="17">SB</option>
                                    <option value="Tinto dulce" data-select2-id="17">PP</option>
                                    <option value="Rosado" data-select2-id="17">PHLA</option>
                                    <option value="Champ" data-select2-id="17">F 5141</option>
                                    <option value="Blanco" data-select2-id="17">45 Forest</option>
                                    <option value="Blanco dulce" data-select2-id="17">Lavrentia</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="lastName1">Notas:</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="lastName1">Notas de consumo:</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="lastName1">Notas de transferencia:</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>

                </div>

                <div class="row" style="padding:  20px; border:#ced4da solid 1px; margin-bottom: 20px;">
                    <div class="col-md-12" style="color: #962832"><b>Paso 2. Datos de compra</b></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstName1">Precio:</label>
                            <input type="text" class="form-control" name="currency-field" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="$1,000,000.00">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastName1">Tamaño:</label>
                            <select class="select2 select2-hidden-accessible" style="width: 100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="3">Select</option>
                                <optgroup data-select2-id="16">
                                    <option value="Tinto" data-select2-id="17">750 ml</option>
                                    <option value="Tinto dulce" data-select2-id="17">Magnum</option>
                                    <option value="Rosado" data-select2-id="17">Doble Magnum</option>
                                    <option value="Rosado" data-select2-id="17">Premium</option>
                                    <option value="Rosado" data-select2-id="17">Chicas</option>
                                    <option value="Rosado" data-select2-id="17">450 cl</option>
                                    <option value="Rosado" data-select2-id="17">600 cl</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row" style="padding:  20px; border:#ced4da solid 1px; margin-bottom: 20px;">
                    <div class="col-md-12" style="color: #962832"><b>Paso 3. Ubicación (es)</b></div>
                    <div class="card col-sm-12" style="margin-bottom: 30px;">
                        <div class="card-body">
                            <div id="education_fields"></div>
                            <div class="row">
                                <div class="col-sm-6 nopadding">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="Degree" name="Degree[]" value="" placeholder="Cantidad">
                                    </div>
                                </div>
                                <div class="col-sm-6 nopadding">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="Degree" name="Degree[]" value="" placeholder="Cellar">
                                            <div class="input-group-append">
                                                <button class="btn btn-success" type="button" onclick="education_fields();"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Guardar vino</button>
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Eliminar Vinos -->
<div id="eliminar-vino" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="padding: 30px;">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><b>¿Eliminar vino?</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <div class="row" style="padding:  20px; border:#ced4da solid 1px; margin-bottom: 20px;">
                    <div class="col-md-12">
                        <img src="https://picsum.photos/300/150" alt="Etiqueta">
                    </div>

                    <div class="col-md-6">
                        <p>
                            <span style="font-size: 10px; color: #962832;">Etiqueta:</span><br>
                            <b>Nombre del vino</b><br>
                            <span style="font-size: 10px; color: #962832;">Vino:</span><br>
                            <b>Tipo de vino</b><br>
                            <span style="font-size: 10px; color: #962832;">Color:</span><br>
                            <b>Color</b><br>
                            <span style="font-size: 10px; color: #962832;">Tamaño:</span><br>
                            <b>Tamaño</b><br>
                            <span style="font-size: 10px; color: #962832;">Precio:</span><br>
                            <b>Precio</b><br>
                            <span style="font-size: 10px; color: #962832;">Región:</span><br>
                            <b>Región</b><br>
                            <span style="font-size: 10px; color: #962832;">Ubicación actual:</span><br>
                            <b>Ubicación</b>
                        </p>
                    </div>

                    <div class="col-md-6">
                        <p>
                            <span style="font-size: 10px; color: #962832;">Viñedo:</span><br>
                            <b>Viñedo</b><br>
                            <span style="font-size: 10px; color: #962832;">Casa:</span><br>
                            <b>Casa</b><br>
                            <span style="font-size: 10px; color: #962832;">Year:</span><br>
                            <b>Year</b><br>
                            <span style="font-size: 10px; color: #962832;">Cantidad:</span><br>
                            <b>Cantidad</b><br>
                            <span style="font-size: 10px; color: #962832;">Cellar:</span><br>
                            <b>Cellar</b><br>
                            <span style="font-size: 10px; color: #962832;">Grade:</span><br>
                            <b>Calificación</b><br>
                            <span style="font-size: 10px; color: #962832;">Origen:</span><br>
                            <b>País</b>
                        </p>
                    </div>

                    <div class="col-md-12">
                        <p>
                            <span style="font-size: 10px; color: #962832;">Notas:</span><br>
                            <b>Texto de notas</b><br>
                            <span style="font-size: 10px; color: #962832;">Notas de consumo:</span><br>
                            <b>Texto de notas</b><br>
                            <span style="font-size: 10px; color: #962832;">Notas de transferencia:</span><br>
                            <b>Texto de notas</b><br>
                            <span style="font-size: 10px; color: #962832;">Best:</span><br>
                            <b>00/00/0000 - 00/00/0000</b>
                        </p>
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Eliminar</button>
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Editar Vinos -->
<div id="editar-vino" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width:  1200px;">
        <div class="modal-content" style="padding: 30px;">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><b>Editar vino</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <from class="form-horizontal form-material">


                    <div class="row" style="padding:  20px; border:#ced4da solid 1px; margin-bottom: 20px;">
                    <div class="col-md-12" style="color: #962832"><b>Paso 1. Información general</b></div>

                    <div class="col-md-12">
                        <h4 class="card-title">Subir etiqueta</h4>
                        <div class="dropify-wrapper">
                            <div class="dropify-message">
                                <span class="file-icon"></span>
                                <p>Drag and drop a file here or click</p>
                                <p class="dropify-error">Ooops, something wrong appended.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="firstName1">Vino:</label>
                            <input type="text" class="form-control" id="firstName1">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="lastName1">Color:</label>
                            <select class="select2 select2-hidden-accessible" style="width: 100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="3">Select</option>
                                <optgroup data-select2-id="16">
                                    <option value="Tinto" data-select2-id="17">&#8226; Tinto</option>
                                    <option value="Tinto dulce" data-select2-id="17">&#8226; Tinto dulce</option>
                                    <option value="Rosado" data-select2-id="17">&#8226; Rosado</option>
                                    <option value="Champ" data-select2-id="17">&#8226; Champ</option>
                                    <option value="Blanco" data-select2-id="17">&#8226; Blanco</option>
                                    <option value="Blanco dulce" data-select2-id="17">&#8226; Blanco dulce</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="lastName1">Región:</label>
                            <input type="text" class="form-control" id="lastName1">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="lastName1">Viñedo:</label>
                            <input type="text" class="form-control" id="lastName1">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="lastName1">Casa:</label>
                            <input type="text" class="form-control" id="lastName1">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="date1">Year:</label>
                        <input type="date" class="form-control" id="date1"></div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="lastName1">Grade:</label>
                            <input type="text" class="form-control" id="lastName1">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="lastName1">Best:</label>
                            <div class="example">
                                <div class="input-daterange input-group" id="date-range">
                                    <input type="text" class="form-control" name="start">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-info b-0 text-white">A</span>
                                    </div>
                                    <input type="text" class="form-control" name="end">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastName1">Origen:</label>
                            <select class="select2 select2-hidden-accessible" style="width: 100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="3">Select</option>
                                <optgroup data-select2-id="16">


                                    <option value="AL">Albania</option>
                                    <option value="DE">Alemania</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antártida</option>
                                    <option value="AG">Antigua y Barbuda</option>
                                    <option value="AN">Antillas Holandesas</option>
                                    <option value="SA">Arabia Saudí</option>
                                    <option value="DZ">Argelia</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaiyán</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrein</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BE">Bélgica</option>
                                    <option value="BZ">Belice</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermudas</option>
                                    <option value="BY">Bielorrusia</option>
                                    <option value="MM">Birmania</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BA">Bosnia y Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BR">Brasil</option>
                                    <option value="BN">Brunei</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="BT">Bután</option>
                                    <option value="CV">Cabo Verde</option>
                                    <option value="KH">Camboya</option>
                                    <option value="CM">Camerún</option>
                                    <option value="CA">Canadá</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CY">Chipre</option>
                                    <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comores</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">Congo, República Democrática del</option>
                                    <option value="KR">Corea</option>
                                    <option value="KP">Corea del Norte</option>
                                    <option value="CI">Costa de Marfíl</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="HR">Croacia (Hrvatska)</option>
                                    <option value="CU">Cuba</option>
                                    <option value="DK">Dinamarca</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egipto</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="AE">Emiratos Árabes Unidos</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="SI">Eslovenia</option>
                                    <option value="ES" selected>España</option>
                                    <option value="US">Estados Unidos</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Etiopía</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="PH">Filipinas</option>
                                    <option value="FI">Finlandia</option>
                                    <option value="FR">Francia</option>
                                    <option value="GA">Gabón</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GD">Granada</option>
                                    <option value="GR">Grecia</option>
                                    <option value="GL">Groenlandia</option>
                                    <option value="GP">Guadalupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GY">Guayana</option>
                                    <option value="GF">Guayana Francesa</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GQ">Guinea Ecuatorial</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="HT">Haití</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HU">Hungría</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IQ">Irak</option>
                                    <option value="IR">Irán</option>
                                    <option value="IE">Irlanda</option>
                                    <option value="BV">Isla Bouvet</option>
                                    <option value="CX">Isla de Christmas</option>
                                    <option value="IS">Islandia</option>
                                    <option value="KY">Islas Caimán</option>
                                    <option value="CK">Islas Cook</option>
                                    <option value="CC">Islas de Cocos o Keeling</option>
                                    <option value="FO">Islas Faroe</option>
                                    <option value="HM">Islas Heard y McDonald</option>
                                    <option value="FK">Islas Malvinas</option>
                                    <option value="MP">Islas Marianas del Norte</option>
                                    <option value="MH">Islas Marshall</option>
                                    <option value="UM">Islas menores de Estados Unidos</option>
                                    <option value="PW">Islas Palau</option>
                                    <option value="SB">Islas Salomón</option>
                                    <option value="SJ">Islas Svalbard y Jan Mayen</option>
                                    <option value="TK">Islas Tokelau</option>
                                    <option value="TC">Islas Turks y Caicos</option>
                                    <option value="VI">Islas Vírgenes (EEUU)</option>
                                    <option value="VG">Islas Vírgenes (Reino Unido)</option>
                                    <option value="WF">Islas Wallis y Futuna</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italia</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japón</option>
                                    <option value="JO">Jordania</option>
                                    <option value="KZ">Kazajistán</option>
                                    <option value="KE">Kenia</option>
                                    <option value="KG">Kirguizistán</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="LA">Laos</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LV">Letonia</option>
                                    <option value="LB">Líbano</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libia</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lituania</option>
                                    <option value="LU">Luxemburgo</option>
                                    <option value="MK">Macedonia, Ex-República Yugoslava de</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MY">Malasia</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MV">Maldivas</option>
                                    <option value="ML">Malí</option>
                                    <option value="MT">Malta</option>
                                    <option value="MA">Marruecos</option>
                                    <option value="MQ">Martinica</option>
                                    <option value="MU">Mauricio</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">México</option>
                                    <option value="FM">Micronesia</option>
                                    <option value="MD">Moldavia</option>
                                    <option value="MC">Mónaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Níger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk</option>
                                    <option value="NO">Noruega</option>
                                    <option value="NC">Nueva Caledonia</option>
                                    <option value="NZ">Nueva Zelanda</option>
                                    <option value="OM">Omán</option>
                                    <option value="NL">Países Bajos</option>
                                    <option value="PA">Panamá</option>
                                    <option value="PG">Papúa Nueva Guinea</option>
                                    <option value="PK">Paquistán</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Perú</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PF">Polinesia Francesa</option>
                                    <option value="PL">Polonia</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="UK">Reino Unido</option>
                                    <option value="CF">República Centroafricana</option>
                                    <option value="CZ">República Checa</option>
                                    <option value="ZA">República de Sudáfrica</option>
                                    <option value="DO">República Dominicana</option>
                                    <option value="SK">República Eslovaca</option>
                                    <option value="RE">Reunión</option>
                                    <option value="RW">Ruanda</option>
                                    <option value="RO">Rumania</option>
                                    <option value="RU">Rusia</option>
                                    <option value="EH">Sahara Occidental</option>
                                    <option value="KN">Saint Kitts y Nevis</option>
                                    <option value="WS">Samoa</option>
                                    <option value="AS">Samoa Americana</option>
                                    <option value="SM">San Marino</option>
                                    <option value="VC">San Vicente y Granadinas</option>
                                    <option value="SH">Santa Helena</option>
                                    <option value="LC">Santa Lucía</option>
                                    <option value="ST">Santo Tomé y Príncipe</option>
                                    <option value="SN">Senegal</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leona</option>
                                    <option value="SG">Singapur</option>
                                    <option value="SY">Siria</option>
                                    <option value="SO">Somalia</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="PM">St Pierre y Miquelon</option>
                                    <option value="SZ">Suazilandia</option>
                                    <option value="SD">Sudán</option>
                                    <option value="SE">Suecia</option>
                                    <option value="CH">Suiza</option>
                                    <option value="SR">Surinam</option>
                                    <option value="TH">Tailandia</option>
                                    <option value="TW">Taiwán</option>
                                    <option value="TZ">Tanzania</option>
                                    <option value="TJ">Tayikistán</option>
                                    <option value="TF">Territorios franceses del Sur</option>
                                    <option value="TP">Timor Oriental</option>
                                    <option value="TG">Togo</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad y Tobago</option>
                                    <option value="TN">Túnez</option>
                                    <option value="TM">Turkmenistán</option>
                                    <option value="TR">Turquía</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UA">Ucrania</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistán</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Vietnam</option>
                                    <option value="YE">Yemen</option>
                                    <option value="YU">Yugoslavia</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabue</option>




                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastName1">Ubicación actual:</label>
                            <select class="select2 select2-hidden-accessible" style="width: 100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="3">Select</option>
                                <optgroup data-select2-id="16">
                                    <option value="Tinto" data-select2-id="17">SB</option>
                                    <option value="Tinto dulce" data-select2-id="17">PP</option>
                                    <option value="Rosado" data-select2-id="17">PHLA</option>
                                    <option value="Champ" data-select2-id="17">F 5141</option>
                                    <option value="Blanco" data-select2-id="17">45 Forest</option>
                                    <option value="Blanco dulce" data-select2-id="17">Lavrentia</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="lastName1">Notas:</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="lastName1">Notas de consumo:</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="lastName1">Notas de transferencia:</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>

                </div>


                <div class="row" style="padding:  20px; border:#ced4da solid 1px; margin-bottom: 20px;">
                    <div class="col-md-12" style="color: #962832"><b>Paso 2. Datos de compra</b></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstName1">Precio:</label>
                            <input type="text" class="form-control" name="currency-field" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="$1,000,000.00">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastName1">Tamaño:</label>
                            <select class="select2 select2-hidden-accessible" style="width: 100%" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="3">Select</option>
                                <optgroup data-select2-id="16">
                                    <option value="Tinto" data-select2-id="17">750 ml</option>
                                    <option value="Tinto dulce" data-select2-id="17">Magnum</option>
                                    <option value="Rosado" data-select2-id="17">Doble Magnum</option>
                                    <option value="Rosado" data-select2-id="17">Premium</option>
                                    <option value="Rosado" data-select2-id="17">Chicas</option>
                                    <option value="Rosado" data-select2-id="17">450 cl</option>
                                    <option value="Rosado" data-select2-id="17">600 cl</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row" style="padding:  20px; border:#ced4da solid 1px; margin-bottom: 20px;">
                    <div class="col-md-12" style="color: #962832"><b>Paso 3. Ubicación (es)</b></div>
                    <div class="card col-md-12" style="margin-bottom: 30px;">
                        <div class="card-body">
                            <div id="education_fields"></div>
                            <div class="row">
                                <div class="col-sm-6 nopadding">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="Degree" name="Degree[]" value="" placeholder="Cantidad">
                                    </div>
                                </div>
                                <div class="col-sm-6 nopadding">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="Degree" name="Degree[]" value="" placeholder="Cellar">
                                            <div class="input-group-append">
                                                <button class="btn btn-success" type="button" onclick="education_fields();"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                </from>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Guardar cambios</button>
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<!-- Vino inventario -->
<div id="inventario-vino" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><b>Transferencia</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <img src="https://picsum.photos/300/150" alt="Etiqueta">

                <div class="row">
                    <div class="col-md-12">
                        <p>
                            <span style="font-size: 10px; color: #962832;">Transferencia:</span><br>
                            <b>Nombre de la transferencia</b>
                        </p>
                    </div>

                    <div class="col-md-6">
                        <p>
                            <span style="font-size: 10px; color: #962832;">Fecha de Solicitud:</span><br>
                            <b>00/00/0000</b><br>
                            <span style="font-size: 10px; color: #962832;">Ubicación inicial:</span><br>
                            <b>Ubicación</b>
                        </p>
                    </div>

                    <div class="col-md-6">
                        <p>
                            <span style="font-size: 10px; color: #962832;">Fecha de entrega:</span><br>
                            <b>00/00/0000</b><br>
                            <span style="font-size: 10px; color: #962832;">Ubicación final:</span><br>
                            <b>Ubicación</b>
                        </p>
                    </div>

                    <div class="col-md-12">
                        <p>
                            <span style="font-size: 10px; color: #962832;">Cantidad de vinos:</span><br>
                            <b>Cantidad</b>
                        </p>
                    </div>

                    <div class="col-md-12">
                        <p>
                            <span style="font-size: 10px; color: #962832;">Notas:</span><br>
                            <b>Notas</b>
                        </p>
                    </div>

                    <div class="col-md-12">
                        <p>
                            <span style="font-size: 10px; color: #962832;">Status:</span><br>
                            <span class="label label-danger">Pausa</span>
                        </p>
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Guardar</button>
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Notificación -->
<div id="notificaciones" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><b>Notificaciones</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <b>Título de la notificación</b><br><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac sapien risus. Vestibulum arcu enim, elementum eu lobortis ut, pretium id arcu. Maecenas sit amet scelerisque diam. Aliquam malesuada dolor lacinia dolor aliquam viverra. Vestibulum suscipit lorem mi, sed malesuada metus posuere ac. Praesent vestibulum in sapien at faucibus. Quisque facilisis, lacus vitae pulvinar lobortis, est augue eleifend diam, eu volutpat magna orci eu purus. Nulla dapibus quis erat euismod aliquet. Aliquam vitae efficitur ipsum, in bibendum nunc. Nullam consectetur eros sit amet velit sodales, eget vulputate odio volutpat. Fusce volutpat ornare porta. Nam semper enim eu rutrum lacinia. Nam placerat dolor eu purus pellentesque posuere. </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<!-- Input currency -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
// Jquery Dependency
$("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() {
      formatCurrency($(this), "blur");
    }
});


function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}


function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.

  // get input value
  var input_val = input.val();

  // don't validate empty input
  if (input_val === "") { return; }

  // original length
  var original_len = input_val.length;

  // initial caret position
  var caret_pos = input.prop("selectionStart");

  // check for decimal
  if (input_val.indexOf(".") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);

    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }

    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val = "$" + left_side + "." + right_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = "$" + input_val;

    // final formatting
    if (blur === "blur") {
      input_val += ".00";
    }
  }

  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}
</script>
