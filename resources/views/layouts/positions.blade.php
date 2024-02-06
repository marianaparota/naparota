<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNSU Election Positions</title>
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

    <h2>SNSU Election Positions</h2>

    <table>
        <thead>
            <tr>
                <th>Position</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>President</td>
                <td>The President is responsible for leading the student body...</td>
                <td class="button-container">
                    <button class="edit-button" onclick="editPosition(1)">Edit</button>
                    <button class="delete-button" onclick="deletePosition(1)">Delete</button>
                </td>
            </tr>
            <tr>
                <td>Vice President</td>
                <td>The Vice President supports the President and assumes the role...</td>
                <td class="button-container">
                    <button class="edit-button" onclick="editPosition(2)">Edit</button>
                    <button class="delete-button" onclick="deletePosition(2)">Delete</button>
                </td>
            </tr>
            <tr>
                <td>Secretary</td>
                <td>The Secretary is responsible for keeping records of meetings...</td>
                <td class="button-container">
                    <button class="edit-button" onclick="editPosition(3)">Edit</button>
                    <button class="delete-button" onclick="deletePosition(3)">Delete</button>
                </td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>

    <script>
        function editPosition(positionId) {
            // Add your edit logic here, e.g., redirect to an edit page with positionId
            console.log('Editing position with ID:', positionId);
        }

        function deletePosition(positionId) {
            // Add your delete logic here, e.g., show a confirmation dialog and delete the position
            console.log('Deleting position with ID:', positionId);
        }
    </script>

</body>
</html>
