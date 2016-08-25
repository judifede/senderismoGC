@extends('layouts.senderism', ['galeriaStyle' => true])

@section('content')
    <h1>Galería</h1>
    <!--contenedor slider = #c-slider-->
    <article id="c-slider">

        <div id="slider" onmouseover="stop()" onmouseout="autoplay()">
            <section>
                <img src="img/FotosGaleria/BARRANCO DE LOS CERNICALOS.jpg" alt="Barranco de los Cernícalos">
                
            </section>

            <section>
                <img src="img/FotosGaleria/CALDERA PINOS DE GALDAR.jpg" alt="Caldera Pinos de Gáldar">
                
            </section>

            <section>
                <img src="img/FotosGaleria/CRUZ DE TEJEDA2.jpg" alt="Cruz de Tejeda">
                
            </section>

            <section>
                <img src="img/FotosGaleria/TAMADABA.jpg" alt="Tamadaba">

            </section>
        </div>
        
        <div id="btn-prev">&#60;</div>
        <div id="btn-next">&#62;</div>
    </article>
    <!--Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="{{ asset('js/slider.js') }}"></script>
@endsection