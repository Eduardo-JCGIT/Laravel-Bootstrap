@extends('header')


@section('form')

<div class="container form-margin">
    <div class="borsolid">
        <section class="row">
            <div class="col-6 solright">
                <div id="backg">
                    <div class="container">
                        <h2 id="negtext">Solicitud de empleo</h2>
                    </div>
                </div>
                <div>
                    <p>Puesto que solicita</p>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Position">
                    </div>
                </div>
                <div>
                    <br>
                    <p id="centj">Sea tan amable de llenar esta solicitud en forma manuscrita
                        NOTA: Toda información aquí proporcionada será tratada
                        confidencialmente</p>
                </div>
            </div>

            <div class="col-4>

<div class=" row">
                <div class="col-12">
                    <p class="solbutton">Fecha</p>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Date">
                    </div>
                </div>
                <div class="col-12">
                    <p class="solbutton">Sueldo mensual deseado</p>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Date">
                    </div>
                </div>
                <div class="col-12">
                    <p class="solbutton">Sueldo mensual aprobado</p>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Date">
                    </div>
                </div>
                <div class="col-12">
                    <p class="solbutton">Fecha de contratacion</p>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Date">
                    </div>
                </div>
            </div>



            <div class="col-2 solleft">

            </div>
    </div>


    
    </section>

    <div class="borsolid topem">
        <section class="row">
            <div class="col-12">
                <p class="datosba">Datos</p>
            </div>
            <div class="col-3">
                <p>Apellido Paterno</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="First name">
                </div>
            </div>
            <div class="col-3">
                <p>Apellido Materno</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Next name">
                </div>
            </div>
            <div class="col-3">
                <p>Nombre(s)</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="First name">
                </div>
            </div>
            <div class="col-3">
                <p>Edad</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Age">
                </div>
            </div>

            <div class="col-3">
                <p>Domicilio</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Age">
                </div>
            </div>
            <div class="col-3">
                <p>Colonia</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Age">
                </div>
            </div>
            <div class="col-2">
                <p>Codigo postal</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="CP">
                </div>
            </div>
            <div class="col-2">
                <p>Telefono</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Tel">
                </div>
            </div>
            <div class="col-2">
                <p>Sexo</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                        value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Masculino
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                        value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Femenino
                    </label>
                </div>
            </div>

            <div class="col-3">
                <p>Ciudad-Estado</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="C.E">
                </div>
            </div>

            <div class="col-5">
                <p>Lugar de nacimiento</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nac">
                </div>
            </div>
            <div class="col-2">
                <p>Fecha de Nacimiento</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>
            <div class="col-2">
                <p>Ciudad-Estado</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Tel">
                </div>
            </div>

            <div class="col-8">
                <p>Vive con</p>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline1" name="customRadioInline"
                        class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline1">Sus padres</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline2" name="customRadioInline"
                        class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline2">Su familia</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline3" name="customRadioInline"
                        class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline3">Parientes</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline4" name="customRadioInline"
                        class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline4">Solo</label>
                </div>
            </div>

            <div class="col-2">
                <p>Estatura</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Est">
                </div>
            </div>
            <div class="col-2">
                <p>Peso</p>
                <div class="col"><input type="text" class="form-control" placeholder="Weight">
                </div>
            </div>

            <div class="col-8">
                <p>Personas que dependen de usted</p>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline5" name="customRadioInline"
                        class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline5">Hijos</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline6" name="customRadioInline"
                        class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline6">Conyuge</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline7" name="customRadioInline"
                        class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline7">Padres</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline8" name="customRadioInline"
                        class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline8">Otros</label>
                </div>
            </div>

            <div class="col-4">
                <p>Estado civil</p>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline9" name="customRadioInline"
                        class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline9">Soltero</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline10" name="customRadioInline"
                        class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline10">Casado</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline11" name="customRadioInline"
                        class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline11">Otros</label>
                </div>
            </div>
    </div>

    </section>


    <div class="borsolid topem">
        <section class="row">
            <div class="col-12">
                <p class="datosba">Documentacion</p>
            </div>

            <div class="col-6">
                <p>Clave Única de Registro de Población</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="CURP">
                </div>
            </div>

            <div class="col-6">
                <p>Afore</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Afore">
                </div>
            </div>

            <div class="col-3">
                <p>Reg. Fed. De Contribuyentes</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-3">
                <p>Numero de Seguridad Social</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-3">
                <p>Cartilla de Servicio Militar No.</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-3">
                <p>Pasaporte No.</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="No">
                </div>
            </div>

            <div class="col-3">
                <p>Tiene licencia de manejo</p>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline12" name="customRadioInline"
                        class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline12">No</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline13" name="customRadioInline"
                        class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline13">Si</label>
                </div>
            </div>

            <div class="col-3">
                <p>Clase y Número de Licencia.</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Num">
                </div>
            </div>

            <div class="col-6">
                <p>Siendo extranjero que documentos le permiten trabajar en el país</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>
        </section>

    </div>

    <div class="borsolid topem">
        <section class="row">
            <div class="col-12">
                <p class="datosba">Estado de Salud y Hábitos Personales</p>
            </div>

            <div class="col-6">
                <p>¿Como considera su estado de salud actual?</p>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline14" name="customRadioInline"
                        class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline14">Bueno</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline15" name="customRadioInline"
                        class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline15">Regular</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline16" name="customRadioInline"
                        class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline16">Malo</label>
                </div>
            </div>

            <div class="col-6">
                <p>¿Padece alguna enfermedad crónica?</p>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline17" name="customRadioInline"
                        class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline17">No</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline18" name="customRadioInline"
                        class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline17">Si</label>
                </div>
                <p>(Explique)</p>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                </div>
            </div>

            <div class="col-4">
                <p>¿Práctica Ud. Algún Deporte?</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-4">
                <p>¿Permanece a algún Club Social o Deportivo?</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-4">
                <p>¿Cuál es su pasatiempo favorito?</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-12">
                <p>¿Cuál es su meta en la vida?</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

        </section>
    </div>

    <div class="borsolid topem">
        <section class="row">
            <div class="col-12">
                <p class="datosba">Datos Familiares</p>
            </div>

            <div class="col-3">
                <p>Nombre</p>
            </div>

            <div class="col-1">
                <p>Vive</p>
            </div>

            <div class="col-1">
                <p>Fin</p>
            </div>

            <div class="col-4">
                <p>Domicilio</p>
            </div>

            <div class="col-3">
                <p>Ocupacion</p>
            </div>

            <div class="col-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Padre">
                </div>
            </div>

            <div class="col-1">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1"></label>
                </div>
            </div>

            <div class="col-1">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2"></label>
                </div>
            </div>

            <div class="col-4">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-3 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Madre">
                </div>
            </div>

            <div class="col-1 sepdafa">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1"></label>
                </div>
            </div>

            <div class="col-1 sepdafa">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2"></label>
                </div>
            </div>

            <div class="col-4 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-3 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-3 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Esposa(o)">
                </div>
            </div>

            <div class="col-1 sepdafa">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1"></label>
                </div>
            </div>

            <div class="col-1 sepdafa">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2"></label>
                </div>
            </div>

            <div class="col-4 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-3 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-12 sepdafa sepdabu">
                <p>Nombre y edades de los hijos</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>


        </section>
    </div>


    <div class="borsolid topem">
        <section class="row">
            <div class="col-12">
                <p class="datosba">Escolaridad</p>
            </div>

            <div class="col-2">
                <p>Nombre</p>
            </div>

            <div class="col-2">
                <p>Direccion</p>
            </div>

            <div class="col-2">
                <p>De</p>
            </div>

            <div class="col-2">
                <p>A</p>
            </div>

            <div class="col-2">
                <p>Años</p>
            </div>

            <div class="col-2">
                <p>Titulo Recibido</p>
            </div>

            <div class="col-2">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Primaria">
                </div>
            </div>

            <div class="col-2">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-2">
                <div class="col">
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>

            <div class="col-2">
                <div class="col">
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>

            <div class="col-2">
                <div class="col">
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>

            <div class="col-2">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>


            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Secundaria o Prevocaciona">
                </div>
            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Preparatoria o Vocacional">
                </div>
            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>
            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Profesional">
                </div>
            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>



            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Comercial u Otras">
                </div>
            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-12">
                <p>Estudios que esta efectuando en la actualidad:</p>
            </div>
            <div class="col-4">
                <p>Escuela</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-3">
                <p>Horario</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-3">
                <p>Curso o Carrera</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-2 sepdabu">
                <p>Grado</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

        </section>
    </div>
</div>
</div>
</div>
</div>


<div class="container">
    <div class="borsolid separ2">
        <section class="row">
            <div class="col-12">
                <p class="datosba">Conocimientos Generales</p>
            </div>

            <div class="col-6">
                <p>Que idiomas hablas (Nivel 50%, 75%, 100%)</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-6">
                <p> Funciones de oficina que domina</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-6">
                <p>Maquina de Oficina o taller que sepa manejar</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-6">
                <p>Software que conoce</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-12">
                <p>Otros trabajos o funciones que domina</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>
        </section>

    </div>
    <div class="borsolid topem">
        <section class="row">
            <div class="col-12">
                <p class="datosba">Empleo Actual y Anteriores</p>
            </div>
            <div class="col-3">
                <p>Concepto</p>
            </div>

            <div class="col-3">
                <p>Actual o ultimo</p>
            </div>

            <div class="col-2">
                <p>Anterior</p>
            </div>

            <div class="col-2">
                <p>Anterior</p>
            </div>

            <div class="col-2">
                <p>Anterior</p>
            </div>

            <div class="col-3">
                <p>Tiempo que presto sus servicios</p>
            </div>

            <div class="col-3">
                <p>de</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
                <p>a</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-2">
                <p>de</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
                <p>a</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-2">
                <p>de</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
                <p>a</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-2">
                <p>de</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
                <p>a</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-3 sepdafa">
                <p>Nombre de la compañia</p>
            </div>
            <div class="col-3 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-3 sepdafa">
                <p>Telefono</p>
            </div>
            <div class="col-3 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-3 sepdafa">
                <p>Direccion</p>
            </div>
            <div class="col-3 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-3 sepdafa">
                <p>Tiempo que presto sus servicios</p>
            </div>

            <div class="col-3 sepdafa">
                <p>Inicial</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
                <p>Final</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-2 sepdafa">
                <p>Inicial</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
                <p>Final</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-2 sepdafa">
                <p>Inicial</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
                <p>Final</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-2 sepdafa">
                <p>Inicial</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
                <p>Final</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-3 sepdafa">
                <p>Motivo de separacion</p>
            </div>
            <div class="col-3 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-3 sepdafa">
                <p>Nombre de su jefe directo</p>
            </div>
            <div class="col-3 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-3 sepdafa">
                <p>Puesto de jefe directo</p>
            </div>
            <div class="col-3 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-3 sepdafa">
                <p>Podemos solicitar informes de usted</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Si
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        No (Razones)
                    </label>
                </div>
            </div>

            <div class="col-9 sepdafa">
                <p>Comentarios por sus jefes</p>
                <form>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                    </div>
        </section>
    </div>

    <div class="borsolid topem">
        <section class="row">
            <div class="col-12">
                <p class="datosba">Referencias Personales (Favor de no incluir a jefes anteriores)</p>
            </div>

            <div class="col-3">
                <p>Nombre</p>
            </div>

            <div class="col-3">
                <p>Domicilio</p>
            </div>

            <div class="col-2">
                <p>Telefono</p>
            </div>

            <div class="col-2">
                <p>Ocupacion</p>
            </div>

            <div class="col-2">
                <p>Tiempo de conocerlos</p>
            </div>

            <!-- Inicial -->

            <div class="col-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-2">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-2">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-2">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <!-- Primera parte -->

            <div class="col-3 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-3 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <!--Tercera parte-->

            <div class="col-3 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-3 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-2 sepdafa">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <!--Cuarta parte-->

            <div class="col-3 sepdafa sepdabu">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-3 sepdafa sepdabu">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-2 sepdafa sepdabu">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-2 sepdafa sepdabu">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>

            </div>

            <div class="col-2 sepdafa sepdabu">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>
        </section>
    </div>

    <div class="borsolid topem">
        <section class="row">
            <div class="col-6">
                <p class="datosba">Datos Generales</p>
            </div>
            <div class="col-6">
                <p class="datosba">Datos Económicos</p>
            </div>

            <div class="col-6">
                <p>¿Como supo de este empleo?</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Anuncio</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Otro medio(Anotelo)</label>
                </div>
                <div class=" mardg">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-6">
                <p>¿Tiene usted otros ingresos?</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">No</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Si (Describelo)</label>
                </div>
                <div class=" mardg">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-6 sepdafa">
                <p>¿Tiene parientes trabajando en esta Empresa?</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">No</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Si (Nombrelos)</label>
                </div>
                <div class=" mardg">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-6 sepdafa">
                <p> ¿Su cónyuge trabaja?</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">No</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Si (¿Donde?)</label>
                </div>
                <div class=" mardg">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-6 sepdafa">
                <p>¿Ha estado afianzado?</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">No</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Si (nombre de la Cía.)</label>
                </div>
                <div class=" mardg">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-6 sepdafa">
                <p> ¿Vive en casa propia?</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">No</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Si</label>
                </div>
                <div class=" mardg">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-6 sepdafa">
                <p>¿Ha estado afiliado a algún sindicato?</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">No</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Si ¿A cual?</label>
                </div>
                <div class=" mardg">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-6 sepdafa">
                <p>¿Paga renta?</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">No</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Si</label>
                </div>
                <div class=" mardg">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-6 sepdafa">
                <p>¿Tiene seguro de vida?</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">No</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Si (nombre de la Cía.)</label>
                </div>
                <div class=" mardg">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-6 sepdafa">
                <p>¿Tiene automóvil propio?</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">No</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Si</label>
                </div>
                <div class=" mardg">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-6 sepdafa">
                <p>¿Puede viajar?</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">No (razones)</label>
                </div>
                <div class=" mardg">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-6 sepdafa">
                <p>¿Tiene deudas?</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">No</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Si (¿Con quien?)</label>
                </div>
                <div class=" mardg">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-6 sepdafa">
                <p>¿Esta dispuesto a cambiar de residenia?</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">No (razones)</label>
                </div>
                <div class=" mardg">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-6 sepdafa">
                <p>¿Cuanto abona mensualmente?</p>
                <div class=" mardg">
                    <input type="text" class="form-control" placeholder="$">
                </div>
            </div>

            <div class="col-6 sepdafa">
                <p>Fecha en que podría presentarse a trabajar</p>
                <div class=" mardg">
                    <input type="text" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-6 sepdafa">
                <p>¿A cuánto ascienden sus gastos mensuales?</p>
                <div class=" mardg">
                    <input type="text" class="form-control" placeholder="$">
                </div>
            </div>
        </section>
    </div>

    <div class="borsolid topem">
        <section class="row">
            <div class="col-8">
                <p class="datosba">Comentarios del Entrevistador y Firma</p>
            </div>

            <div class="col-4 centj2 solleft">
                <p>Hago constar que mis respuestas son verdaderas</p>
                <br>
                <p>Firma de solicitante</p>
            </div>
        </section>
    </div>
</div>




@endsection