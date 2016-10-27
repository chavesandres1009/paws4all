<section id="entrar" class="wrapper style1 fade-up" style="height: auto">
  <div class="inner">
    <h2>Iniciar Sesión</h2>
    <p>Unete si amas los animales!</p>
    <div class="split style1">
      <section>
        <form method="post" action="{{ url('/register') }}">
          {{ csrf_field() }}

          <div class="field ">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name"/>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
          </div>
          <div class="field ">
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="lastName"/>
            @if ($errors->has('apellidos'))
                <span class="help-block">
                    <strong>{{ $errors->first('apellidos') }}</strong>
                </span>
            @endif
          </div>
          <div class="field">
            <label for="email">Correo</label>
            <input type="text" name="email" id="email"/>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          <div class="field half first">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password"/>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
          <div class="field half">
            <label for="password_confirmation">Repetir Contraseña</label>
            <input type="password" name="password_confirmation" id="password2"/>
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
          </div>

             <!--<div class="field">
                <label for="message">Message</label>
                <textarea name="message" id="message" rows="5"></textarea>
              </div>-->
              <ul class="actions">
                <li><a href="" class="button submit">Crear Cuenta</a></li>
              </ul>
            </form>
          </section>
          <section>
            <form method="post" action="{{ url('/login') }}">
              {{ csrf_field() }}
              <div class="field">
                <label for="email">Correo</label>
                <input type="text" name="email" id="emailUp" value="{{ old('email') }}"/>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div class="field">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="passwordUp"/>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <ul class="actions">
                <li><a href="" class="button submit">Iniciar</a></li>
              </ul>
            </form>
          <!--<ul class="contact">
             <li>
                <h3>Address</h3>
             <span>12345 Somewhere Road #654<br />
             Nashville, TN 00000-0000<br />
             USA</span>
             </li>
             <li>
                <h3>Email</h3>
                <a href="#">user@untitled.tld</a>
             </li>
             <li>
                <h3>Phone</h3>
                <span>(000) 000-0000</span>
             </li>
             <li>
                <h3>Social</h3>
                <ul class="icons">
                  <li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
                  <li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
                  <li><a href="#" class="fa-github"><span class="label">GitHub</span></a></li>
                  <li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
                  <li><a href="#" class="fa-linkedin"><span class="label">LinkedIn</span></a></li>
                </ul>
             </li>
            </ul>-->
          </section>
        </div>
      </div>
    </section>
