$(document).ready(function() {
    $.ajax({
        type: 'GET',
        url: 'http://student.cs.appstate.edu/andrewszw/nfl_bets/table_pull.php',
        dataType: 'json',
        success: function(data) {
            
            // variables to hold the winners for each game
            var win_one = "patriots";
            var win_two = "packers";
            var win_three = "chiefs";
            var win_four = "jets";
            var win_five = "bills";
            var win_six = "dolphins";
            var win_seven = "panthers";
            var win_eight = "rams";
            var win_nine = "cardinals";
            var win_ten = "chargers";
            var win_eleven = "titans";
            var win_twelve = "bengals";
            var win_thirteen = "broncos";
            var win_fourteen = "";
            var win_fifteen = "";
            var win_sixteen = "";
            
            // get the div to place the table
            var div = document.getElementById("table");

            // check to see if there have been any picks made
            if(data.length == 0) {
                div.innerHTML += '<h1>There have been no picks made this week</h1>';
            }
            
            // create a table element, and give it the appropriate class
            var table = document.createElement("table");
            table.setAttribute("class", "table table-striped");
            
            // loop through user picks, dynamically creating the table
            for(var i = 0; i < data.length; i++) {
                var row = document.createElement("tr");
                row.innerHTML += '<td><strong>' + data[i].name + '</strong></td>';
                
                for(var j = 0; j < 16; j++) {
                    var cell = document.createElement("td");
                    
                    switch(j) {
                        case 0:
                            cell.innerHTML += '<img src="images/' + data[i].pick_one + '.png">';
                            
                            // check to see if the result is correct, if so, green border, red otherwise
                            if(win_one == data[i].pick_one) {
                                cell.setAttribute("class", "green");
                            } if(win_one != data[i].pick_one && win_one != "") {
                                cell.setAttribute("class", "red");
                            }
                            break;
                             
                        case 1:
                            cell.innerHTML += '<img src="images/' + data[i].pick_two + '.png">';
                            // check to see if the result is correct, if so, green border, red otherwise
                            if(win_two == data[i].pick_two) {
                                cell.setAttribute("class", "green");
                            } if(win_two != data[i].pick_two && win_two != "") {
                                cell.setAttribute("class", "red");
                            }
                            break;

                        case 2:
                            cell.innerHTML += '<img src="images/' + data[i].pick_three + '.png">';
                            // check to see if the result is correct, if so, green border, red otherwise
                            if(win_three == data[i].pick_three) {
                                cell.setAttribute("class", "green");
                            } if(win_three != data[i].pick_three && win_three != "") {
                                cell.setAttribute("class", "red");
                            }

                            break;

                        case 3:
                            cell.innerHTML += '<img src="images/' + data[i].pick_four + '.png">';
                            // check to see if the result is correct, if so, green border, red otherwise
                            if(win_four == data[i].pick_four) {
                                cell.setAttribute("class", "green");
                            } if(win_four != data[i].pick_four && win_four != "") {
                                cell.setAttribute("class", "red");
                            }
                            break;

                        case 4:
                            cell.innerHTML += '<img src="images/' + data[i].pick_five + '.png">';
                            // check to see if the result is correct, if so, green border, red otherwise
                            if(win_five == data[i].pick_five) {
                                cell.setAttribute("class", "green");
                            } if(win_five != data[i].pick_five && win_five != "") {
                                cell.setAttribute("class", "red");
                            }
                            break;

                        case 5:
                            cell.innerHTML += '<img src="images/' + data[i].pick_six + '.png">';
                            // check to see if the result is correct, if so, green border, red otherwise
                            if(win_six == data[i].pick_six) {
                                cell.setAttribute("class", "green");
                            } if(win_six != data[i].pick_six && win_six != "") {
                                cell.setAttribute("class", "red");
                            }
                            break;
        
                        case 6:
                            cell.innerHTML += '<img src="images/' + data[i].pick_seven + '.png">';
                            // check to see if the result is correct, if so, green border, red otherwise
                            if(win_seven == data[i].pick_seven) {
                                cell.setAttribute("class", "green");
                            } if(win_seven != data[i].pick_seven && win_seven != "") {
                                cell.setAttribute("class", "red");
                            }
                            break;
        
                        case 7:
                            cell.innerHTML += '<img src="images/' + data[i].pick_eight + '.png">';
                            // check to see if the result is correct, if so, green border, red otherwise
                            if(win_eight == data[i].pick_eight) {
                                cell.setAttribute("class", "green");
                            } if(win_eight != data[i].pick_eight && win_eight != "") {
                                cell.setAttribute("class", "red");
                            }
                            break;
        
                        case 8:
                            cell.innerHTML += '<img src="images/' + data[i].pick_nine + '.png">';
                            // check to see if the result is correct, if so, green border, red otherwise
                            if(win_nine == data[i].pick_nine) {
                                cell.setAttribute("class", "green");
                            } if(win_nine != data[i].pick_nine && win_nine != "") {
                                cell.setAttribute("class", "red");
                            }
                            break;

                        case 9:
                            cell.innerHTML += '<img src="images/' + data[i].pick_ten + '.png">';
                            // check to see if the result is correct, if so, green border, red otherwise
                            if(win_ten == data[i].pick_ten) {
                                cell.setAttribute("class", "green");
                            } if(win_ten != data[i].pick_ten && win_ten != "") {
                                cell.setAttribute("class", "red");
                            }
                            break;

                        case 10:
                            cell.innerHTML += '<img src="images/' + data[i].pick_eleven + '.png">';
                            // check to see if the result is correct, if so, green border, red otherwise
                            if(win_eleven == data[i].pick_eleven) {
                                cell.setAttribute("class", "green");
                            } if(win_eleven != data[i].pick_eleven && win_eleven != "") {
                                cell.setAttribute("class", "red");
                            }
                            break;

                        case 11:
                            cell.innerHTML += '<img src="images/' + data[i].pick_twelve + '.png">';
                            // check to see if the result is correct, if so, green border, red otherwise
                            if(win_twelve == data[i].pick_twelve) {
                                cell.setAttribute("class", "green");
                            } if(win_twelve != data[i].pick_twelve && win_twelve != "") {
                                cell.setAttribute("class", "red");
                            }
                            break;

                        case 12:
                            cell.innerHTML += '<img src="images/' + data[i].pick_thirteen + '.png">';
                            // check to see if the result is correct, if so, green border, red otherwise
                            if(win_thirteen == data[i].pick_thirteen) {
                                cell.setAttribute("class", "green");
                            } if(win_thirteen != data[i].pick_thirteen && win_thirteen != "") {
                                cell.setAttribute("class", "red");
                            }
                            break;

                        case 13:
                            cell.innerHTML += '<img src="images/' + data[i].pick_fourteen + '.png">';
                            // check to see if the result is correct, if so, green border, red otherwise
                            if(win_fourteen == data[i].pick_fourteen) {
                                cell.setAttribute("class", "green");
                            } if(win_fourteen != data[i].pick_fourteen && win_fourteen != "") {
                                cell.setAttribute("class", "red");
                            }
                            break;

                        case 14:
                            cell.innerHTML += '<img src="images/' + data[i].pick_fifteen + '.png">';
                            // check to see if the result is correct, if so, green border, red otherwise
                            if(win_fifteen == data[i].pick_fifteen) {
                                cell.setAttribute("class", "green");
                            } if(win_fifteen != data[i].pick_fifteen && win_fifteen != "") {
                                cell.setAttribute("class", "red");
                            }
                            break;

                        case 15:
                            cell.innerHTML += '<img src="images/' + data[i].pick_sixteen + '.png">';
                            // check to see if the result is correct, if so, green border, red otherwise
                            if(win_sixteen == data[i].pick_sixteen) {
                                cell.setAttribute("class", "green");
                            } if(win_sixteen != data[i].pick_sixteen && win_sixteen != "") {
                                cell.setAttribute("class", "red");
                            }
                            break;

                        default:
                            break;
                    }
                    row.appendChild(cell);
                }
                table.appendChild(row);
            }
            div.appendChild(table);
        }
    })
});
