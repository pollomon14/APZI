<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="table-responsive">
                                       
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Direccion </th>
                                <th>Ubicacion</th>
                                <th>Horario</th>
                                <th>Contador</th>
                                <th>Whatsapp</th>
                                <th>Facebook</th>
                                <th>Instagram</th>
                                <th>Linkedin</th>
                                <th>Pagina</th>
                                <th>Correo</th>
                                <th>Telefono</th>
                                <th>Brochure</th>
                                <th>Imagen1</th>
                                <th>Imagen2</th>
                                <th>Imagen3</th>
                                <th>Imagen4</th>
                                <th>Imagen5</th>
                                <th>Imagen6</th>
                                <th>Imagen7</th>
                                <th>Imagen8</th>
                                <th>Imagen9</th>
                                <th>Imagen10</th>
                                <th>HTML</th>
                                <th>Domicilios</th>
                                <th>Categoria</th>
                                <th>Fecha_creacion</th>
                                <th>Logo</th>
                                <th>Habilitado</th>
                                 <th>Numero_Contador</th>
                                <th>Palabras_Clave</th>
                                <th>Banner</th>
                                <th>Ciudad</th>
                                <td>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Destacados as $var)
                            <tr>
                            
                                <td>{{ $var->id}}</th>
                                <td>{{ $var->Nombre}}</th>
                                <td>{{ $var->Descripcion}}</th>
                                <td>{{ $var->Direccion}}</th>
                                <td>{{ $var->Ubicacion}}</th>
                                <td>{{ $var->Horario}}</th>
                                <td>{{ $var->Contador}}</th>
                                <td>{{ $var->Whatsapp}}</th>
                                <td>{{ $var->Facebook}}</th>
                                <td>{{ $var->Instagram}}</th>
                                <td>{{ $var->Linkedin}}</th>
                                <td>{{ $var->Pagina}}</th>
                                <td>{{ $var->Correo }}</th>
                                <td>{{ $var->Telefono }}</th>
                                <td>{{ $var->Brochure }}</th>
                                <td>{{ $var->Imagen1 }}</th>
                                <td>{{ $var->Imagen2 }}</th>
                                <td>{{ $var->Imagen3 }}</th>
                                <td>{{ $var->Imagen4}}</th>
                                <td>{{ $var->Imagen5}}</th>
                                <td>{{ $var->Imagen6}}</th>
                                <td>{{ $var->Imagen7}}</th>
                                <td>{{ $var->Imagen8}}</th>
                                <td>{{ $var->Imagen9}}</th>
                                <td>{{ $var->Imagen10}}</th>
                                <td>{{ $var->HTML}}</th>
                                <td>{{ $var->Domicilios}}</th>
                                <td>{{ $var->Categoria}}</th>
                                <td>{{ $var->Fecha_creacion}}</th>
                                <td>{{ $var->Logo}}</th>
                                <td>{{ $var->Habilitado}}</th>
                                 <td>{{ $var->Numero_Contador}}</th>
                                <td>{{ $var->Palabras_Clave}}</th>
                                <td>{{ $var->Banner}}</th>
                                <td>{{ $var->Ciudad}}</th>
                                <td>{{ $var->Monday}}</th>
                                <td>{{ $var->Tuesday}}</th>
                                <td>{{ $var->Wednesday}}</th>
                                <td>{{ $var->Thursday}}</th>
                                <td>{{ $var->Friday}}</th>
                                <td>{{ $var->Saturday}}</th>
                                <td>{{ $var->Sunday}}</th>
                      



                                
                                
                                
                            </tr>
                            @endforeach
                        </tbody>
                      
                    </table>
                    <div class="d-flex justify-content-center">
                        {!! $Destacados->links() !!}
                    </div>    
                </div>
            </div>
        </div>
    </body>
</html>

