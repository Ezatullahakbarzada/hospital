// index.php 
<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content= 
      "width=device-width, initial-scale=1.0"> 
    <title>Hospital Management System</title> 
    <style> 
        body { 
            background-color: #606060FF; 
            color: #D6ED17FF; 
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 0; 
            text-align: center; 
        } 
  
        h1 { 
            background-color: #D6ED17FF; 
            color: black !important; 
            padding: 20px; 
            margin-bottom: 0; 
        } 
  
        ul { 
            list-style-type: none; 
            padding: 0; 
        } 
  
        li { 
            display: inline-block; 
            margin: 10px; 
        } 
  
        a { 
            text-decoration: none; 
            color: #606060FF; 
            background-color: #D6ED17FF; 
            padding: 10px 20px; 
            border-radius: 5px; 
        } 
  
        a:hover { 
            background-color: #606060FF; 
            color: #D6ED17FF; 
        } 
    </style> 
</head> 
  
<body> 
    <h1>Hospital Management System</h1> 
    <ul> 
        <li> 
           <a href="add_patient.php">Add Patient</a> 
          </li> 
        <li> 
           <a href="view_patients.php">View Patients</a> 
          </li> 
    </ul> 
</body> 
  
</html>