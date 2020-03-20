require('./bootstrap');
const $ = require("jquery");

$(document).ready(function() {

  $("#submit").click(function() {
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
        console.log(response);
      },
      "error" : function() {
        console.log("error");
      }
    });
  });
});
