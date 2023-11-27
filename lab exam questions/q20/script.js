function addStudent() {
    // Validation
    var name = document.getElementById('name').value.trim();
    var rollNumber = document.getElementById('rollNumber').value.trim();

    if (name === '' || rollNumber === '') {
        alert('Please fill out all fields.');
        return;
    }

    // Add student to the list
    var studentList = document.getElementById('studentList');
    var listItem = document.createElement('li');
    listItem.innerHTML = `<span>${name}</span><span>${rollNumber}</span><button onclick="deleteStudent(this)">Delete</button>`;
    studentList.appendChild(listItem);

    // Clear the form
    document.getElementById('addForm').reset();
}

function deleteStudent(button) {
    // Delete the student record
    var listItem = button.parentNode;
    listItem.parentNode.removeChild(listItem);
}
