<!DOCTYPE html>
    <html>
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('includes.menu')
        @yield('body')
<div class="container-fluid">
    <div class="row">
            <div class="well">
                <table class="table">
                    <tr>
                        <th class="field-label col-xs-2 col-sm-2 col-md-2 col-lg-1 ">
                            <label>From</label>
                        </th>

                        <th class="field-label col-xs-10 col-sm-10 col-md-10 col-lg-10 ">
                            <label>Message</label>
                        </th>
                    </tr>

                    <tr>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2 ">
                            Administration
                        </td>
                        <td class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            Changes in the lunch event
                        </td>
                    </tr>

                     <tr>
                         <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2 ">
                             Administration
                         </td>
                         <td class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                             Congratulations! You won..
                         </td>
                     </tr>

                    <tr>
                        <td class="col-xs-2 col-sm-2 col-md-2 col-lg-2 ">
                            Administration
                        </td>
                        <td class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            Survey about the first day at....
                        </td>
                    </tr>

                    </table>
            </div>
    </div>
</div>

    </body>
</html>















