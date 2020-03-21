@include('partials._header')

<main>
  <div class="container">
      <a class="student" href="">
        <div class="main-info">
          <img src="{{$mystudent["img"]}}" alt="{{$mystudent["name"]}}">
          <div class="titolo">
            <h2>{{$mystudent["name"]}} ({{$mystudent["age"]}})</h2>
            <h3>Lavora presso: {{$mystudent["company"]}} come {{$mystudent["role"]}}</h3>
          </div>
        </div>
        <p>{{$mystudent["information"]}}</p>
      </a>
  </div>
</main>

<footer>

</footer>
@include('partials._footer')
