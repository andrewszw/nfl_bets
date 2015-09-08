$(document).ready(function() {
    $.ajax({
        type: 'GET',
        url: 'http://student.cs.appstate.edu/andrewszw/nfl_bets/table_pull.php',
        dataType: 'json',
        success: function(data) {
            var div = document.getElementById("table");

            // check to see if there have been any picks made
            if(data.length == 0) {
                div.innerHTML += '<h1>There have been no picks made this week</h1>';
            }
            
            // create a table element, and give it the appropriate class
            var table = document.createElement("table");
            table.className = 'table table-striped';
            
            // loop through user picks, dynamically creating the table
            for(var i = 0; i < data.length; i++) {
                var row = document.createElement("tr");
                row.innerHTML += '<td><strong>' + data[i].name + '</strong></td>';
                
                for(var j = 0; j < 16; j++) {
                    var cell = document.createElement("td");
                    
                    switch(j) {
                        case 0:
                            cell.innerHTML += '<img src="images/' + data[i].pick_one + '.png">';
                            break;
                             
                        case 1:
                            cell.innerHTML += '<img src="images/' + data[i].pick_two + '.png">';
                            break;

                        case 2:
                            cell.innerHTML += '<img src="images/' + data[i].pick_three + '.png">';
                            break;

                        case 3:
                            cell.innerHTML += '<img src="images/' + data[i].pick_four + '.png">';
                            break;

                        case 4:
                            cell.innerHTML += '<img src="images/' + data[i].pick_five + '.png">';
                            break;

                        case 5:
                            cell.innerHTML += '<img src="images/' + data[i].pick_six + '.png">';
                            break;
        
                        case 6:
                            cell.innerHTML += '<img src="images/' + data[i].pick_seven + '.png">';
                            break;
        
                        case 7:
                            cell.innerHTML += '<img src="images/' + data[i].pick_eight + '.png">';
                            break;
        
                        case 8:
                            cell.innerHTML += '<img src="images/' + data[i].pick_nine + '.png">';
                            break;

                        case 9:
                            cell.innerHTML += '<img src="images/' + data[i].pick_ten + '.png">';
                            break;

                        case 10:
                            cell.innerHTML += '<img src="images/' + data[i].pick_eleven + '.png">';
                            break;

                        case 11:
                            cell.innerHTML += '<img src="images/' + data[i].pick_twelve + '.png">';
                            break;

                        case 12:
                            cell.innerHTML += '<img src="images/' + data[i].pick_thirteen + '.png">';
                            break;

                        case 13:
                            cell.innerHTML += '<img src="images/' + data[i].pick_fourteen + '.png">';
                            break;

                        case 14:
                            cell.innerHTML += '<img src="images/' + data[i].pick_fifteen + '.png">';
                            break;

                        case 15:
                            cell.innerHTML += '<img src="images/' + data[i].pick_sixteen + '.png">';
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
