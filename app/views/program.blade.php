<!DOCTYPE html>
    <html>
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('includes.menu')
        @yield('body')
        <div class="col-xs-12 col-sm-9">
        <h2>Konferanseprogram</h2>
        <div class="well">
                 Velg dag <?php echo Form::select('size', array('Monday' => 'Mandag 27/10', 'T' => 'Tirsdag 28/10', 'W' => 'Onsdag 29/10'), array('class' => 'select-picker')); ?>
         </div>           





                {{{ print_r($items) }}}
           </body>
       </html>