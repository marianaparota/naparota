<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Student Election Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .button-container {
            display: flex;
            justify-content: space-around;
        }

        .edit-button, .delete-button {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .delete-button {
            background-color: #f44336;
        }
    </style>
</head>
<body>

    <h2>College Student Election Results</h2>

    <table>
        <thead>
            <tr>
                <th>Candidate</th>
                <th>Votes</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Candidate 1</td>
                <td>120</td>
                <td class="button-container">
                    <button class="edit-button" onclick="editVote(1)">Edit</button>
                    <button class="delete-button" onclick="deleteVote(1)">Delete</button>
                </td>
            </tr>
            <tr>
                <td>Candidate 2</td>
                <td>90</td>
                <td class="button-container">
                    <button class="edit-button" onclick="editVote(2)">Edit</button>
                    <button class="delete-button" onclick="deleteVote(2)">Delete</button>
                </td>
            </tr>
            <tr>
                <td>Candidate 3</td>
                <td>75</td>
                <td class="button-container">
                    <button class="edit-button" onclick="editVote(3)">Edit</button>
                    <button class="delete-button" onclick="deleteVote(3)">Delete</button>
                </td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>

    <script>
        function editVote(voteId) {
            // Add your edit logic here, e.g., redirect to an edit page with voteId
            console.log('Editing vote with ID:', voteId);
        }

        function deleteVote(voteId) {
            // Add your delete logic here, e.g., show a confirmation dialog and delete the vote
            console.log('Deleting vote with ID:', voteId);
        }
    </script>

</body>
</html>
