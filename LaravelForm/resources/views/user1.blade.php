<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }
        h2 {
            color: #555;
            margin-top: 25px;
            margin-bottom: 15px;
            font-size: 18px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            cursor: pointer;
            color: #666;
        }
        input[type="checkbox"],
        input[type="radio"] {
            margin-right: 10px;
            cursor: pointer;
            width: 18px;
            height: 18px;
        }
        input[type="checkbox"]:hover,
        input[type="radio"]:hover {
            accent-color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="post" action="/inputdata">
            @csrf
            <h1>Course</h1>
            <div class="form-group">
            <label>
                <input type="checkbox" name="skill[]" value="python">
                Python
            </label>
            <label>
                <input type="checkbox" name="skill[]" value="java">
                Java
            </label>
            <label>
                <input type="checkbox" name="skill[]" value="c++">
                C++
            </label>
            <label>
                <input type="checkbox" name="skill[]" value="javascript">
                JavaScript
            </label>
        </div>

        <h2>Gender</h2>
        <div class="form-group">
            <label>
                <input type="radio" name="gender" value="male">
                Male
            </label>
            <label>
                <input type="radio" name="gender" value="female">
                Female
            </label>
        </div>

        <h2>City</h2>
        <div class="form-group">
            <label for="city">Select City:</label>
            <select name="city" id="city" style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px;">
                <option value="">-- Choose a City --</option>
                <option value="newyork">New York</option>
                <option value="losangeles">Los Angeles</option>
                <option value="chicago">Chicago</option>
                <option value="houston">Houston</option>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" style="width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 4px; font-size: 16px; cursor: pointer;">Submit</button>
        </div>
        </form>
    </div>
</body>
</html>