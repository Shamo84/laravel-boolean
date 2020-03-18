@include('partials._header')

<main>
  <div class="container">
      <a class="student" href="">
        <div class="main-info">
          <img src="{{$student["foto"]}}" alt="">
          <div class="titolo">
            <h2>{{$student["nome"]}} ({{$student["eta"]}})</h2>
            <h3>Lavora presso: {{$student["azienda"]}} come {{$student["ruolo"]}}</h3>
          </div>
        </div>
        <p>{{$student["informazioni"]}}</p>
      </a>
  </div>
</main>

<footer>

</footer>
@include('partials._footer')
