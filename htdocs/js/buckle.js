/**
 * Contains functions to make table of related buckles work with form submission
 *
 */

function addBuckle()
{
    // Get index of selected drug
    var select = document.getElementById('buckleSelector');
    var selectedIndex = select.selectedIndex;
    var selectedType = select.options[selectedIndex].text;
    
    // Get reference to table
    var table = document.getElementById('buckleTable');
    
    // Index of next row is equal to number of rows
    var nextRowIndex = table.tBodies[0].rows.length;
    
    // Add new row
    var newRow = table.tBodies[0].insertRow(nextRowIndex);
    
    // Description
    var cell0 = newRow.insertCell(0);
    var textNode = document.createTextNode(selectedType);
    cell0.setAttribute('width', '60%');
    cell0.appendChild(textNode);
    
    // Hidden input for id put in same cell
    var hi = document.createElement("input");
    hi.setAttribute('name', 'buckleArray[]');
    hi.setAttribute('type', 'hidden');
    hi.setAttribute('value', selectedType);
    cell0.appendChild(hi);
        
    // Create a Delete aref element
    var cell1 = newRow.insertCell(1);
    var deleteButton = document.createElement('a');
    deleteButton.setAttribute('onClick','deleteBuckle(this);');
    deleteButton.innerText = "Delete";
    cell1.appendChild(deleteButton);
}

// Delete buckle
function deleteBuckle(obj)
{
    // Get index of row
    var rowIndex = obj.parentNode.parentNode.sectionRowIndex + 1;
    
    // Delete it
    document.getElementById('buckleTable').deleteRow(rowIndex);
}
