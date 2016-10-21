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
          </div>
          <div class="field ">
            <label for="name">Apellidos</label>
            <input type="text" name="name" id="lastName"/>
          </div>
          <div class="field">
            <label for="email">Correo</label>
            <input type="text" name="email" id="email"/>
          </div>
          <div class="field half first">
            <label for="email">Contraseña</label>
            <input type="text" name="password" id="password"/>
          </div>
          <div class="field half">
            <label for="email">Repetir Contraseña</label>
            <input type="text" name="password" id="password2"/>
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
                <input type="text" name="email" id="emailUp"/>
              </div>
              <div class="field">
                <label for="email">Contraseña</label>
                <input type="text" name="password" id="passwordUp"/>
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
