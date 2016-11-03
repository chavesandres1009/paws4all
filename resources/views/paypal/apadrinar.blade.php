@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Login</div>
          <div class="panel-body">

            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
              <input type="hidden" name="cmd" value="_xclick">
              <input type="hidden" name="business" value="jvillalobosvega-facilitator@hotmail.com">
              <input type="hidden" name="item_name" value="Donacion">
              <input type="hidden" name="currency_code" value="USD">
              <div class="form-group">
                <label for="titulo" class="col-md-4 control-label">Monto para apadrinar</label>
                <div class="col-md-6">
                  <input type="number" name="amount" value="" required autofocus>
                </div>
              </div>
              <input type="hidden" name="no_shipping" value="1">
              <input type="hidden" name="return" value="{{ url('/exito')}}">
              <input type="hidden" name="cancel_return" value="{{ url('/error')}}">

              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection


