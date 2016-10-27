<section id="mascotas" class="wrapper style2 spotlights">
@if(isset($mascotas))
  @foreach ($mascotas as $mascota)

  <section>
    <a href="#" class="image"><img src="storage/mascotas/{{ $mascota->imagen }}" alt="" data-position="center center"/></a>
    <div class="content">
      <div class="inner">
        <h2>{{ $mascota->nombre }}</h2>
        <p>{{ $mascota->tipo }}</p>
        <p>Raza: {{ $mascota->raza }}</p>
        <p>Tamaño: {{ $mascota->tamano }}</p>
        <p>Estado: {{ $mascota->estado }}</p>
          <ul class="actions">
            <li><a href="#" class="button">Learn more</a></li>
          </ul>
        </div>
      </div>
    </section>
  @endforeach
@endif
</section>
