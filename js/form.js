$(document).ready(function() {
    $.ajax({
        type: 'GET',
        url: 'http://student.cs.appstate.edu/andrewszw/nfl_bets/form_pull.php',
        dataType: 'json',
        success: function(data) {
            var div = document.getElementById("form");
            div.innerHTML += '<p style="font-size:16px"><strong>* Please make sure to only enter the last name of the team spelled correctly & DO NOT use abbreviations (ex: cowboys)</strong></p><br />';
      
            nums = ['one', 'two', 'three', 'four', 'five', 'six', 'seven',
                    'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen',
                    'fourteen', 'fifteen', 'sixteen'];
            num_counter = 0;
            
            for(i = 1; i < 17; i++) {  
                var form_div = document.createElement('div');
                form_div.className = "form-group";
                form_div.innerHTML += "<label for='" + nums[num_counter] + "'>" + data[i] + "</label>";
                form_div.innerHTML += "<input type='text' class='form-control' name='" + nums[num_counter] + "'>";
                div.appendChild(form_div);
                num_counter++;
            }
          }
    })
});
