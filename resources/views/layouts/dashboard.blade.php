<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Voter Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, select {
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
    </style>
</head>
<body>
    <h2>College Voter Form</h2>

    <form>
        <table>
            <tr>
                <th colspan="2">Voter Information</th>
            </tr>
            <tr>
                <td><label for="voterName">Name:</label></td>
                <td><input type="text" id="voterName" name="voterName" required></td>
            </tr>
            <tr>
                <td><label for="voterID">ID:</label></td>
                <td><input type="text" id="voterID" name="voterID" required></td>
            </tr>
            <tr>
                <td><label for="voterDepartment">Department:</label></td>
                <td>
                    <select id="voterDepartment" name="voterDepartment" required>
                        <option value="" disabled selected>Select Department</option>
                        <option value="Computer Science">Computer Science</option>
                        <option value="Electrical Engineering">Electrical Engineering</option>
                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                        <!-- Add more departments as needed -->
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Submit Voter Information</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
