<html>
    <head>
      <meta charset="utf-8">
        <link rel="stylesheet" href="../css/styleform.css">
    </head>
        <body>

            <form class="form" action="./" method="POST">
                <div class="form__title">FORMATO DE COMPROMISO A LA CÁTEDRA DE EMPRENDIMIENTO</div>

                <div class="form__item">
                  <label for="givennames" class="form__label">Dirección de correo electrónico</label>
                  <input type="email" class="form__input" name="" id="" autocomplete="off" placeholder="Tu respuesta">
                  <span class="form__error">A sample error message</span>
                </div>
                <div class="form__item">
                  <label for="" class="form__label">FECHA DE DILIGENCIAMIENTO </label>
                  <input type="date" class="form__input form__input--small" name="" id="" placeholder="Tu respuesta" autocomplete="off">
                  <span class="form__error">A sample error message</span>
                </div>

                <!--Inicio texto-->
                <div class="form__item">
                  <label for="givennames" class="form__label">POR FAVOR LEA ATENTAMENTE...</label>
                  <input name="button2" type="button" class="form__btn__red"
                  onclick='alert("De antemano le damos la bienvenida a la CÁTEDRA DE EMPRENDIMIENTO ofrecida por la Universidad Libre sede Bosque Popular (Bogotá D.C.). Usted ha decidido participar en la presente cátedra y si bien el curso no tiene costo para usted, y aunque no esté inscrito oficialmente por ser externo, sin motivación por una calificación académica, deseamos destacar el compromiso que usted asume \n \n" +
                  "> Cumplir mínimo con el 90% de la asistencia. \n"+
                  "> Respetar los horarios establecidos y definidos para la Cátedra.\n"+
                  "> Realizar las actividades propuestas de forma individual y/o con su equipo de trabajo.\n"+
                  "> Completarlo en su totalidad (Asistir a la totalidad de las reuniones hasta la culminación del Elevator Pitch).\n"+
                  "> Respetar a todos los asistentes de la Cátedra y al personal de la institución.\n"+
                  "> Cumplir con los plazos que se establezcan para cada una de las actividades y con la entrega permanente de tareas diversas, de acuerdo con los cronogramas establecidos \n"+
                  "> Respetar todos los espacios e instalaciones de la Universidad Libre sede Bosque Popular.\n"+
                  "> Ser susceptible de que monitoreen su desempeño en la Cátedra .\n \n"+
                  "Al concluir el curso, si Usted finaliza el mismo y cumple con todos los requisitos exigidos, el Centro de Emprendimiento, Innovación y Desarrollo Empresarial de la Universidad Libre –CEIDEUL le expedirá un Certificado de Aprobación.\n"+
                  "El incumplimiento de las actividades del curso, la poca participación y las ausencias injustificadas, conllevará a la cancelación de su participación.\n \n"+
                  "A continuación, si usted ha leído y entendido la información precedente, y se compromete a cumplir con los requisitos de la Cátedra de Emprendimiento le solicitamos firmar el presente documento.")' value="Condiciones y parámetros" />
                </div><br>
                <!--termina texto-->
                <div class="form__item">
                  <label for="givennames" class="form__label">¿ACEPTA LAS CONDICIONES Y PARÁMETROS DE LA CÁTEDRA?</label>
                  <label for="paymentCC">
                    <input type="radio" id="contactChoice1"
                    name="condicion" value="email" autocomplete="off">Si
                    <hr style="height:0px; visibility:hidden;" />
                    <input type="radio"  id="contactChoice1"
                    name="condicion" value="email" autocomplete="off" >No
                    <br>
                    <span class="form__error">A sample error message</span>
               <!--<input type="radio" id="contactChoice2"
                    name="contact" value="phone">
                   <label for="contactChoice2">Phone</label>

                   <input type="radio" id="contactChoice3"
                    name="contact" value="mail">
                   <label for="contactChoice3">Mail</label>-->
                </div>
                <hr style="width:50%; margin:0">
                <div class="form__item">
                  <label for="givennames" class="form__label2">PARÁMETROS DE LA CÁTEDRA</label>
                  <label for="givennames" class="form__label3">Diligencie según la información que recibió del CEIDEUL</label>
                </div><br>
                <div class="form__item">
                  <label for="expirydate" class="form__label">FECHA DE INICIO </label>
                  <input type="date" class="form__input form__input--small" name="expirydate" id="expirydate" placeholder="Tu respuesta">
                  <span class="form__error">A sample error message</span>
                </div>
                <div class="form__item">
                  <label for="expirydate" class="form__label">FECHA DE FINALIZACIÓN </label>
                  <input type="date" class="form__input form__input--small" name="expirydate" id="expirydate" placeholder="Tu respuesta">
                  <span class="form__error">A sample error message</span>
                </div>
                <div class="form__item">
                  <label for="givennames" class="form__label">LUGAR DE ASISTENCIA</label>
                  <label for="paymentCC">
                    <input type="radio" id="contactChoice1"
                    name="lugar" value="email" >universidad libre (sede bosque popular)
                    <hr style="height:0px; visibility:hidden;" />
                    <input type="radio" id="contactChoice1"
                    name="lugar" value="email">no lo tiene claro
                    <br><br>
                  </div>
                    <div class="form__item">
                      <label for="givennames" class="form__label">HORARIOS</label>
                      <label for="paymentCC">
                        <input type="radio" id="contactChoice1"
                        name="horario" value="email">sábados – diurno
                        <hr style="height:0px; visibility:hidden;" />
                        <input type="radio" id="contactChoice1"
                        name="horario" value="email">no lo tiene claro
                        <br><br>
                      </div>
                      <hr>
                        <div class="form__item">
                          <label for="givennames" class="form__label2">INFORMACIÓN DEL PARTICIPANTE</label>
                        </div><br>
                <div class="form__item">
                  <label for="givennames" class="form__label">NOMBRE COMPLETO</label>
                  <input type="text" class="form__input" name="givennames" id="givennames" placeholder="Tu respuesta" autocomplete="off">
                  <span class="form__error">A sample error message</span>
                </div>
                <div class="form__item">
                  <label for="numusers" class="form__label">TIPO DE IDENTIFICACIÓN</label>
                  <select name="select" id="numusers" class="form__label" autocomplete="off">
                    <option value="value1" selected>Elige</option>
                    <option value="value2">Cédula de Ciudadanía</option>
                    <option value="value3">Cédula de extranjería</option>
                    <option value="value4">Tarjeta de identidad</option>
                    <option value="value4">NIT</option>
                    <option value="value6">Pasaporte</option>
                    <option value="value7">PEP</option>
                  </select>
                  <span class="form__error">A sample error message</span>
                </div>
                <div class="form__item">
                  <label for="givennames" class="form__label">No. IDENTIFICACIÓN</label>
                  <input type="text" class="form__input" name="givennames" id="givennames" placeholder="Tu respuesta" autocomplete="off">
                  <span class="form__error">A sample error message</span>
                </div>
                <div>
                  <label for="givennames" class="form__label">TIPO DE PERSONA</label>
                    <hr style="height:0px; visibility:hidden;" />
                    <input type="radio" autocomplete="off"
                    name="persona" value="">ESTUDIANTE
                    <hr style="height:0px; visibility:hidden;" />
                    <input type="radio" autocomplete="off"
                    name="persona" value="">DOCENTE
                    <hr style="height:0px; visibility:hidden;" />
                    <input type="radio" autocomplete="off"
                    name="persona" value="">ADMINISTRATIVO
                    <hr style="height:0px; visibility:hidden;" />
                    <input type="radio" autocomplete="off"
                    name="persona" value="">EXTERNO
                    <hr style="height:0px; visibility:hidden;" />
                    <input type="radio" autocomplete="off"
                    name="persona" value="">OTRO:
                    <hr style="height:0px; visibility:hidden;" />
                    <input type="text" class="form__input" name="givennames" id="givennames" placeholder="Tu respuesta" autocomplete="off">
                    <br><br>
                  </div>
                  <div class="form__item">
                    <label for="givennames" class="form__label">PROGRAMA / PROFESIÓN / EMPRESA </label>
                    <input type="text" class="form__input" name="" id="" placeholder="Tu respuesta" autocomplete="off">
                    <span class="form__error">A sample error message</span>
                    <br>
                  </div>
                  <div class="form__item">
                    <label for="givennames" class="form__label">No. CELULAR </label>
                    <input type="text" class="form__input" name="" id="" placeholder="Tu respuesta" autocomplete="off">
                    <span class="form__error">A sample error message</span>
                    <br>
                  </div>
                  <div class="form__item">
                    <label for="givennames" class="form__label">¿TIENE ALGUNA DUDA, PETICIÓN, QUEJA O SUGERENCIA A CERCA DE LA CÁTEDRA? </label>
                    <input type="text" class="form__input" name="" id="" placeholder="Tu respuesta" autocomplete="off">
                    <span class="form__error">A sample error message</span>
                  </div>
                <div class="form__item">
                  <button class="form__btn__green" type="submit">Enviar</button>
                </div>
              </form>
        </body>
</html>
