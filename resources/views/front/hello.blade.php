    @extends('master')
    @section('content')
    <h1>HELLO I AM WILSON</h1>
    @for($i=1;$i<=10;$i++)
    {{  $i }} <br/> 
    @endfor


    <br/>
    <?php
    echo date('Y-m-d h:i:s');
    // {{ }} works as echo in blade engine. You can also use plain php like here.
    ?>

    @endsection

    @section('title')
    This is a title.
    @endsection

    @section('footer')
    <div class="col100">&copy; 2018, All Rights Reserved.</div>
    @endsection