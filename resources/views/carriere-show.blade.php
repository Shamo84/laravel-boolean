@include('partials._header')

<header>
  <div class="navbar">
    <span class="logo">
      <img src="https://www.boolean.careers/images/common/logo.png" alt="logo boolean">
    </span>
    <span>HOME</span>
    <span>CORSO</span>
    <span>DOPO IL CORSO</span>
    <span>LEZIONE GRATUITA</span>
  </div>
</header>
<main>
  <div class="container">
    @foreach ($data as $key => $student)
      <a class="student" href="{{route("ShowStudent", ["id" => $key])}}">
        <div class="main-info">
          <img src="{{$student["foto"]}}" alt="">
          <div class="titolo">
            <h2>{{$student["nome"]}} ({{$student["eta"]}})</h2>
            <h3>Lavora presso: {{$student["azienda"]}} come {{$student["ruolo"]}}</h3>
          </div>
        </div>
        <p>{{$student["informazioni"]}}</p>
      </a>
    @endforeach
  </div>
</main>

<footer>

</footer>
@include('partials._footer')
