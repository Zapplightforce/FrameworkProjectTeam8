@extends('common.master')

@section('content')
    <html>
    <body>
    <div id="app">
        <section class="main-content columns is-fullheight">
            <div class="container columns is-10">
                <div class="section column is-three-fifths">

                        <div class="card" id="div_Chart_refresh"></div>

                    <section class="main-content columns is-fullheight">
                        <div class="container">
                            <div class="section">
                                <div class="card" id="div_Shifts_refresh">
                                </div>
                                <br/>
                            </div>
                        </div>
                    </section>
                    <br/>
                </div>
                <div class="container column is-two-fifths is-10">
                    <div class="section">
                        <div class="card">
                            <div class="card-header"><p class="card-header-title">TOP 10 Stoppers</p></div>
                            <div>
                                <table class="table is-narrow is-hoverable is-bordered">
                                    <thead>
                                    <tr>
                                        <th>Description</th>
                                        <th>Duration</th>
                                        <th>Frequency</th>
                                        <th>Average</th>
                                        <th>Comments</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($stoppers as $stopper)
                                        <tr>
                                            <td>{{$stopper->description}}</td>
                                            <td>{{$stopper->duration}}</td>
                                            <td>{{$stopper->frequency}}</td>
                                            <td>{{$stopper->average}}</td>
                                            <td>
                                                <div class="field has-addons">
                                                    <button id="{{$stopper->id}}" class="js-modal-trigger button is-primary" data-target="modal-stopper-comments">

                                                 <span class="icon is-small">
                                                        <i class="fa-solid fa-comment"></i>
                                                 </span>
                                                    </button>
                                                    <!-- Bulma Modal -->
                                                    <div id="modal-stopper-comments" class="modal">
                                                        <div class="modal-background"></div>

                                                        <div class="modal-content">
                                                            <div class="box">
                                                                <p>{{$stopper->comments}}</p>
                                                            </div>
                                                        </div>

                                                        <button class="modal-close is-large" aria-label="close"></button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Bulma Modal -->
                                        <div id="modal-stopper-comments" class="modal">
                                            <div class="modal-background"></div>

                                            <div class="modal-content">
                                                <div class="box">
                                                    <p>{{$stopper->comments}}</p>
                                                </div>
                                            </div>

                                            <button class="modal-close is-large" aria-label="close"></button>
                                        </div>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <br/>
                    </div>
                </div>
            </div>
        </section>
    </div>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0/chartjs-plugin-datalabels.min.js" integrity="sha512-R/QOHLpV1Ggq22vfDAWYOaMd5RopHrJNMxi8/lJu8Oihwi4Ho4BRFeiMiCefn9rasajKjnx9/fTQ/xkWnkDACg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script>
        $(document).ready(function(){
            $("#div_Chart_refresh").load("graph");
            console.log('lol');
            $("#div_Shifts_refresh").load("shifts");
            setInterval(function() {
                $("#div_Chart_refresh").load("graph");
                $("#div_Shifts_refresh").load("shifts");
            }, 3000);
        });
    </script>
    </html>
@endsection
