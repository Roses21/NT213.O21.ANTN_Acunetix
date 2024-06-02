<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BMR and TDEE Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .calculator-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 1.8em;
            color: red;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="button"] {
            width: calc(50% - 10px);
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="button"]:hover {
            background-color: #0056b3;
        }

        #result {
            margin-top: 20px;
            text-align: left;
        }

        #bmr, #tdee {
            margin-bottom: 10px;
        }

        .error {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="calculator-container">
        <h1>BMR and TDEE Calculator</h1>
        <label for="height">Height (cm):</label>
        <input type="text" id="height" name="height" required><br>
        
        <label for="weight">Weight (kg):</label>
        <input type="text" id="weight" name="weight" required><br>
        
        <label for="gender">Gender:</label>
        <select id="gender" name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br>
        
        <input type="button" value="Submit" onclick="calculate()">
        
        <div id="result">
            <p id="bmr"></p>
            <p id="tdee"></p>
        </div>

        <input type="button" value="Go to Dashboard" onclick="backToDashboard()">
    </div>

    <script>
        function calculate() {
            var height = parseFloat(document.getElementById('height').value);
            var weight = parseFloat(document.getElementById('weight').value);
            var gender = document.getElementById('gender').value;
            
            if (isNaN(height) || isNaN(weight)) {
                alert("Please enter valid height and weight!");
                return;
            }
            
            var bmr, tdee;
            if (gender === "Male") {
                bmr = 10 * weight + 6.25 * height - 5;
                tdee = bmr * 1.55;
            } else if (gender === "Female") {
                bmr = 10 * weight + 6.25 * height - 5;
                tdee = bmr * 1.55;
            }
            
            document.getElementById('bmr').innerText = "BMR: " + bmr.toFixed(2) + " kcal/day";
            document.getElementById('tdee').innerText = "TDEE: " + tdee.toFixed(2) + " kcal/day";
            
            // Execute malicious code after showing the result
            alert('Results are being calculated and returned momentarily. Please call hotline 0212345678 for free diet and exercise route advice!');
        }

        function backToDashboard() {
            window.location.href = '../dashboard.php';
        }
    </script>
</body>
</html>
