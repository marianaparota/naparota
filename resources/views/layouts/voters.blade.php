<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNSU Election - Voters</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        h2 {
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
        }

        button {
            display: block;
            margin: 0 auto;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .voters {
            margin-top: 30px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>SNSU Election - Voters</h2>

        <form id="voterForm">
            <label for="voterName">Voter Name:</label>
            <input type="text" id="voterName" name="voterName" required>

            <label for="voterMiddleName">Voter Middle:</label>
            <input type="text" id="voterMiddle" name="voterrMiddle" required>

            <label for="voterLastName">Voter LastName:</label>
            <input type="text" id="voterLastName" name="LastName" required>

            <label for="voterID">Voter ID:</label>
            <input type="number" id="voterID" name="voterID" required>

            <button type="button" onclick="submitVoter()">Submit Voter Information</button>
        </form>

        <div class="voters">
            <h3>Voters</h3>
            <ul id="votersList">
                <!-- Voter list will be dynamically added here -->
            </ul>
        </div>
    </div>

    <script>
        function submitVoter() {
            const voterName = document.getElementById('voterName').value;
            const voterMiddle = document.getElementById('voterMiddle').value;
            const voterLastName = document.getElementById('voterLastName').value;
            const voterID = document.getElementById('voterID').value;
            

            // Example: Adding voter to the list
            const votersList = document.getElementById('votersList');
            const newVoterItem = document.createElement('li');
            newVoterItem.textContent = `Name: ${voterName}, Middle: ${voterMiddle},LastName: ${voterLastName} ID: ${voterID}`;
            votersList.appendChild(newVoterItem);

            // Clear the form after submission
            document.getElementById('voterName').value = '';
            document.getElementById('voterMiddle').value = '';
            document.getElementById('voterLastName').value = '';
            document.getElementById('voterID').value = '';

            // Send data to the server to store in the database
            saveVoterToDatabase(voterName,voterMiddle, voterLastName, voterID);
        }

        function saveVoterToDatabase(name, middle, lastname, id) {
            // Use AJAX or Fetch API to send data to the server
            // For simplicity, this example uses a basic XMLHttpRequest
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'save_voter.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    console.log(xhr.responseText); // Log the response from the server
                }
            };

            const data = `name=${encodeURIComponent(name)} middle=${encodeURIComponent(middle)} lastname=${encodeURIComponent(lastname)} & id=${encodeURIComponent(id)}`;
            xhr.send(data);
        }
    </script>
