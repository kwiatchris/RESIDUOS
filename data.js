

var jsonData;
jsonData = [
      {
        username: "user",
        password: "pass"
      }
    ];

$.ajax({
  type: "POST",
  url: "http://localhost/Aitor/Residuos/RESIDUOS/datos/auth",
  data: JSON.stringify({user: jsonData}), // gotta strinigfy the entire hash
  processData: false,
  contentType: "application/json; charset=utf-8",
  dataType: "json",
  success: function(data) {
    alert("You are good!");
  },
  error: function(xhr, type) {
    alert("Y U NO WORK?");
  }
});
