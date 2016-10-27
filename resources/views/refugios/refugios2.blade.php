<section id="refugios" class="wrapper style2 spotlights">
@if(isset($refugios))
  @foreach ($refugios as $refugio)
  <section>
    <a href="#" class="image"><img src="storage/refugios/{{ $refugio->logo }}" alt="" data-position="center center"/></a>
    <div class="content">
      <div class="inner">
        <h2>{{ $refugio->nombre }}</h2>
        <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies
          erat malesuada quis. Aliquam dapibus.</p>
          <ul class="actions">
            <li><a href="#" class="button">Learn more</a></li>
          </ul>
        </div>
      </div>
    </section>
    @endforeach
@endif
</section>
