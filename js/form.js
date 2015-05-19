$(document).ready(function() {
  $.ajax({
    type: 'GET',
    url: 'http://student.cs.appstate.edu/andrewszw/nfl/form_pull.php',
    dataType: 'json',
    success: function(data) {
      var div = document.getElementById("form");
      div.innerHTML += '<strong>* Please make sure to only enter the last name of the team spelled correctly & DO NOT use abbreviations (ex: cowboys)</strong><br><br>';
      
      var table = document.createElement("table");
      table.innerHTML += '<tr><td><label for="one">' + data.one + '</label>:</td><td> <input type="text" name="one" required></td></tr><br><br>';
      table.innerHTML += '<tr><td><label for="two">' + data.two + '</label>:</td><td> <input type="text" name="two" required></td></tr><br><br>';
      table.innerHTML += '<tr><td><label for="three">' + data.three + '</label>:</td><td> <input type="text" name="three" required></td></tr><br><br>';
      table.innerHTML += '<tr><td><label for="four">' + data.four + '</label>:</td><td> <input type="text" name="four" required></td></tr><br><br>';
      table.innerHTML += '<tr><td><label for="five">' + data.five + '</label>:</td><td> <input type="text" name="five" required></td></tr><br><br>';
      table.innerHTML += '<tr><td><label for="six">' + data.six + '</label>:</td><td> <input type="text" name="six" required></td></tr><br><br>';
      table.innerHTML += '<tr><td><label for="seven">' + data.seven + '</label>:</td><td> <input type="text" name="seven" required></td></tr><br><br>';
      table.innerHTML += '<tr><td><label for="eight">' + data.eight + '</label>:</td><td> <input type="text" name="eight" required></td></tr><br><br>';
      table.innerHTML += '<tr><td><label for="nine">' + data.nine + '</label>:</td><td> <input type="text" name="nine" required></td></tr><br><br>';
      table.innerHTML += '<tr><td><label for="ten">' + data.ten + '</label>:</td><td> <input type="text" name="ten" required></td></tr><br><br>';
      table.innerHTML += '<tr><td><label for="eleven">' + data.eleven + '</label>:</td><td> <input type="text" name="eleven" required></td></tr><br><br>';
      table.innerHTML += '<tr><td><label for="twelve">' + data.twelve + '</label>:</td><td> <input type="text" name="twelve" required></td></tr><br><br>';
      table.innerHTML += '<tr><td><label for="thirteen">' + data.thirteen + '</label>:</td><td> <input type="text" name="thirteen" required></td></tr><br><br>';
      table.innerHTML += '<tr><td><label for="fourteen">' + data.fourteen + '</label>:</td><td> <input type="text" name="fourteen" required></td></tr><br><br>';
      table.innerHTML += '<tr><td><label for="fifteen">' + data.fifteen + '</label>:</td><td> <input type="text" name="fifteen" required></td></tr><br><br>';
      table.innerHTML += '<tr><td><label for="sixteen">' + data.sixteen + '</label>:</td><td> <input type="text" name="sixteen" required></td></tr><br><br>';

      table.innerHTML += '<tr><td><input type="submit" name="submit" value="Submit Picks"></td><td></td></tr>';

      div.appendChild(table);
    }
  })
});
