@include('partials._header')

<main>
  <div class="container">
      <a class="student" href="">
        <div class="main-info">
          <img src="{{$student["img"]}}" alt="">
          <div class="titolo">
            <h2>{{$student["name"]}} ({{$student["age"]}})</h2>
            <h3>Lavora presso: {{$student["company"]}} come {{$student["role"]}}</h3>
          </div>
        </div>
        <p>{{$student["information"]}}</p>
      </a>
  </div>
</main>

<footer>

</footer>
@include('partials._footer')
