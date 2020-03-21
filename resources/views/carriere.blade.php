@include('partials._header')

<main>
  <form class="submit" action="index.html" method="post">
    <input type="text" id="name" name="name" value="" placeholder="name">
    <input type="number" id="age" name="age" value="" placeholder="age">
    <select id="gender" class="" name="submit">
      <option value="">All</option>
      <option value="m">Uomo</option>
      <option value="f">Donna</option>
    </select>
    <input id="submit" type="button" name="submit" value="SUBMIT">
  </form>
  <div class="container">
    @foreach ($data as $key => $student)
      <a class="student" href="{{route("ShowStudent", ["slug" => $student["slug"]])}}">
        <div class="main-info">
          <img src="{{$student["img"]}}" alt="">
          <div class="titolo">
            <h2>{{$student["name"]}} ({{$student["age"]}})</h2>
            <h3>Lavora presso: {{$student["company"]}} come {{$student["role"]}}</h3>
          </div>
        </div>
        <p>{{$student["information"]}}</p>
      </a>
    @endforeach
  </div>
</main>

<footer>
</footer>
<script id="entry-template" type="text/x-handlebars-template">
  <a class="student" href="{{route("ShowStudent", ["slug" => $student["slug"]])}}">
    <div class="main-info">
      <img src="@{{img}}" alt="@{{name}}">
      <div class="titolo">
        <h2>@{{name}} (@{{age}})</h2>
        <h3>Lavora presso: @{{company}} come @{{role}}</h3>
      </div>
    </div>
    <p>@{{information}}</p>
  </a>
</script>
@include('partials._footer')
