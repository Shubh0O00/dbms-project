function myFunction() {
    for (let i = 0; i < 10; i++) {
        var table = document.getElementById("feedbackTable");
        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        var cell5 = row.insertCell(4);
        var cell6 = row.insertCell(5);
        var cell7 = row.insertCell(6);
        var cell8 = row.insertCell(7);

        cell1.innerHTML = i + ".";
        cell2.innerHTML = "Q" + i + " from mysql table";
        cell3.innerHTML = '<select id= i.concat("Q1") name=i.concat("Q1")><option value="Yes">Yes</option><option value="No">No</option></select>';
        cell4.innerHTML = '<select id= i.concat("Q2") name=i.concat("Q2")><option value="Yes">Yes</option><option value="No">No</option></select>';
        cell5.innerHTML = '<select id= i.concat("Q3") name=i.concat("Q3")><option value="Yes">Yes</option><option value="No">No</option></select>';
        cell6.innerHTML = '<select id= i.concat("Q4") name=i.concat("Q4")><option value="Yes">Yes</option><option value="No">No</option></select>';
        cell7.innerHTML = '<select id= i.concat("Q5") name=i.concat("Q5")><option value="Yes">Yes</option><option value="No">No</option></select>';
        cell8.innerHTML = '<select id= i.concat("Q6") name=i.concat("Q6")><option value="Yes">Yes</option><option value="No">No</option></select>';

    }
}