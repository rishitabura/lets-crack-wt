function addOrUpdateEmployee() {
    // Validation
    var name = document.getElementById('name').value.trim();
    var position = document.getElementById('position').value.trim();

    if (name === '' || position === '') {
        alert('Please fill out all fields.');
        return;
    }

    // Check if modifying an existing employee
    var isModify = false;
    var employeeList = document.getElementById('employeeList');
    for (var i = 0; i < employeeList.children.length; i++) {
        var listItem = employeeList.children[i];
        var existingName = listItem.children[0].innerText;
        if (existingName === name) {
            // Modify existing employee
            listItem.children[1].innerText = position;
            isModify = true;
            break;
        }
    }

    if (!isModify) {
        // Add new employee
        var listItem = document.createElement('li');
        listItem.innerHTML = `<span>${name}</span><span>${position}</span><button onclick="deleteEmployee(this)">Delete</button>`;
        employeeList.appendChild(listItem);
    }

    // Clear the form
    document.getElementById('employeeForm').reset();
}

function deleteEmployee(button) {
    // Delete the employee record
    var listItem = button.parentNode;
    listItem.parentNode.removeChild(listItem);
}
