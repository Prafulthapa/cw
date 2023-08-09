// ... (previous code) ...

const userTable = document.getElementById('userTable');
const addUserBtn = document.getElementById('addUserBtn');

// Sample user data
const users = [
    { username: 'admin', role: 'Admin' },
    { username: 'waiter1', role: 'Waiter' },
    // Add more users here
];

// Function to populate users in the table
function populateUsers() {
    userTable.innerHTML = ''; // Clear the table
    users.forEach(user => {
        const row = userTable.insertRow();
        row.innerHTML = `
            <td>${user.username}</td>
            <td>${user.role}</td>
            <td><button onclick="deleteUser('${user.username}')">Delete</button></td>
        `;
    });
}

// Function to handle adding a new user
function addUser() {
    const username = prompt('Enter username:');
    const role = prompt('Enter role:');
    if (username && role) {
        users.push({ username, role });
        populateUsers();
    }
}

// Function to delete a user
function deleteUser(username) {
    const userIndex = users.findIndex(user => user.username === username);
    if (userIndex !== -1) {
        users.splice(userIndex, 1);
        populateUsers();
    }
}

addUserBtn.addEventListener('click', addUser);

// Populate users when the page loads
populateUsers();
