<!DOCTYPE html>
    <html>
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('includes.menu')
        @yield('body')
<h3>Meldinger</h3>
<div class="container-fluid">
    <div class="row">


                <table class="table">
                    <tr>
                        <th class="field-label col-xs-2 col-sm-2 col-md-2 col-lg-1 ">
                            <label>Fra</label>
                        </th>

                        <th class="field-label col-xs-10 col-sm-10 col-md-10 col-lg-10 ">
                            <label>Melding</label>
                        </th>
                    </tr>

                    <tr>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2 ">
                            Administration
                        </td>
                        <td class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            Endringer i lunsj.
                        </td>
                    </tr>

                     <tr>
                         <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2 ">
                             Administration
                         </td>
                         <td class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             Gratulerer, du har vunnet konkurransen.
                         </td>
                     </tr>

                    <tr>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2 ">
                            Administration
                        </td>
                        <td class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            Gi feedback om din første dag!
                        </td>
                    </tr>

                    </table>

    </div>
    </div>
 @include('includes.bottom')















