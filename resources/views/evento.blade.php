@extends('layouts.senderism', ['eventoStyle' => true])

@section('content')
    <h1 id="event">Eventos</h1>
    <section class="contenedorSection">
        <div id="calendar">
            <div class="clasp-left"></div>
            <div class="clasp-right"></div>
            <div class="hole-left"></div>
            <div class="hole-right"></div>
            <div id="month">Marzo 2016</div>
            <div id="days">
                <table class="days">
                    <tr>
                        <td>SUN</td>
                        <td>MON</td>
                        <td>TUE</td>
                        <td>WED</td>
                        <td>THU</td>
                        <td>FRI</td>
                        <td>SAT</td>
                    </tr>
                </table>
            </div>
            <table class="day">
                <tr>
                    <td class="old-month">26</td>
                    <td class="old-month">27</td>
                    <td class="old-month">28</td>
                    <td class="old-month">29</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td class="appoint">5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                    <td>14</td>
                    <td>15</td>
                    <td>16</td>
                    <td class="selected">17</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>19</td>
                    <td>20</td>
                    <td>21</td>
                    <td class="appoint">22</td>
                    <td class="appoint">23</td>
                    <td>24</td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>26</td>
                    <td>27</td>
                    <td>28</td>
                    <td>29</td>
                    <td>30</td>
                    <td>31</td>
                </tr>
            </table>
        </div>
        <article class="container">
            <div class="div-img" >
                <img class="img" src="img/eventos/event1.jpg" alt="Evento1">
                <a href="#">Gran Canaria Walking Festival</a>
            </div>
        </article>

        <article class="container2">
            <div class="div-img2" >
                <img class="img2" src="img/eventos/event2.jpg" alt="Evento2">
                <a href="#">Charla sobre Senderismo en LPGC</a>
            </div>
        </article>
    </section>
@endsection