$(document).ready(function() {
    $.ajax({
        type: 'GET',
        url: 'http://student.cs.appstate.edu/andrewszw/nfl_bets/form_pull.php',
        dataType: 'json',
        success: function(data) {
            var div = document.getElementById("form");
            div.innerHTML += '<p style="font-size:16px"><strong>* Please make sure to only enter the last name of the team spelled correctly & DO NOT use abbreviations (ex: cowboys)</strong></p>';
      
            nums = ['one', 'two', 'three', 'four', 'five', 'six', 'seven',
                    'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen',
                    'fourteen', 'fifteen', 'sixteen'];

            for(i = 1; i < 17; i++) {  
                var form_div = document.createElement('div');
                form_div.className = "form-group";
                form_div.innerHTML += "<label for='" + nums[i] + "'>" + data[i] + "</label>";
                form_div.innerHTML += "<input type='text' class='form-control' name='" + nums[i] + "'>";
                div.appendChild(form_div);
            }
          }
    })
});
