require('./bootstrap');
const $ = require("jquery");
const Handlebars = require("handlebars");

$(document).ready(function() {

  $("#submit").click(function() {
    $(".container").html("");
    var name = $("#name").val();
    var age = $("#age").val();
    var gender = $("#gender").val();
    var data = {};

    if (name.length > 0) {
      data.name = name;
    }
    if (age.length > 0) {
      data.age = age;
    }
    if (gender.length > 0) {
      data.gender = gender;
    }

    $.ajax({
      "url" : "http://127.0.0.1:8000/api/students/filter",
      "method" : "POST",
      "data" : data,
      "success" : function(response) {
        print(response);
      },
      "error" : function() {
        console.log("error");
      }
    });
  });
});

function print(array) {
  var source = $("#entry-template").html();
  var template = Handlebars.compile(source);

  for (var index in array) {
    console.log(array);
    var context = array[index];
    var html = template(context);
    $(".container").append(html);
  }

}
