@extends('layouts.senderism', ['normativaStyle' => true])

@section('content')
    <section>
        <h1>Normativa</h1>
        <article id="textoNormativa">
            <div>
                <p>GR o sendero de Gran Recorrido (color rojo), cuyo recorrido dura más de una jornada. Estos son el GR 130 que recorre toda la isla de manera circular, discurriendo por las principales poblaciones, sin salvar grandes desniveles y el GR 131 que une dos grandes rutas: La Ruta de los Volcanes y La Ruta de la Crestería.
                </p>
                <p>
                PR o Sendero de Pequeño Recorrido (color amarillo), que puede realizarse integramente en un día. Existen 19 principales y 23 secundarios.
                </p>
                <p>
                SL o Sendero Local (color verde), inferior a 10 Km, une senderos de rango superior, o realiza pequeños bucles locales. En su numeración se refleja el municipio al que pertenece.
                </p>
            </div>
        </article>
        <article>

           <table>
                <tr>
                    <th>Señalización de senderos</th>
                    <th>GR</th>
                    <th>PR</th>
                    <th>SL</th>
                </tr>
                <tr>
                    <td>Tipo</td>
                    <td>Gran Recorrido</td>
                    <td>Pequeño Recorrido</td>
                    <td>Sendero Local</td>
                </tr>
                <tr>
                    <td>Longitud</td>
                    <td>Más de 50 Km</td>
                    <td>Entre 10 Km y 50 Km</td>
                    <td>Menos de 10 Km</td>
                </tr>
                <tr>
                    <td>Continuidad de sendero</td>
                    <td><img src="{{ asset('img/normativa/rojo1.png') }}" alt="Rojo1" id="rojo1" ></td>
                    <td><img src="{{ asset('img/normativa/amarillo1.png') }}" alt="Amarillo1" id="amarillo1" ></td>
                    <td><img src="{{ asset('img/normativa/verde1.png') }}" alt="Verde1" id="verde1" ></td>
                </tr>
                <tr>
                    <td>Mala dirección</td>
                    <td><img src="{{ asset('img/normativa/rojo2.png') }}" alt="Rojo2" id="rojo2" ></td>
                    <td><img src="{{ asset('img/normativa/amarillo2.png') }}" alt="Amarillo2" id="amarillo2" ></td>
                    <td><img src="{{ asset('img/normativa/verde2.png') }}" alt="Verde2" id="verde2" ></td>
                </tr>
                <tr>
                    <td>Cambio de dirección</td>
                    <td>
                        <img src="{{ asset('img/normativa/rojo3.png') }}" alt="Rojo3" id="rojo3" >
                        <img src="{{ asset('img/normativa/rojo4.png') }}" alt="Rojo4" id="rojo4" >
                    </td>
                    <td>
                        <img src="{{ asset('img/normativa/amarillo3.png') }}" alt="Amarillo3" id="amarillo3" >
                        <img src="{{ asset('img/normativa/amarillo4.png') }}" alt="Amarillo4" id="amarillo4" >

                    </td>
                    <td>
                        <img src="{{ asset('img/normativa/verde3.png') }}" alt="Verde3" id="verde3" >
                        <img src="{{ asset('img/normativa/verde4.png') }}" alt="Verde4" id="verde4" >

                    </td>
                </tr>
    
           </table>
        </article>
        <a href="{{ asset('docs/ManualSenderos.pdf') }}" id="infoPDF" >Para más información pulse aquí<img src="img/icons/flecha-derecha-norma.svg" alt="flechaDerecha" class="flechaDerecha" ></a>
    </section>
@endsection
