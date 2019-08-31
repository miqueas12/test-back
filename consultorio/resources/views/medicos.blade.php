@extends('layout.base')

@section('content')
    <section id="about" class="about-section">
        <!-- about start -->
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <?php
                    foreach ($medicos as $medico) {
                        echo $medico->name;
                    }
                    ?>
                    
                </div>
            </div>
        </div>
    </section>
@stop