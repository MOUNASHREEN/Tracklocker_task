<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>TrackClock HR - Salary Payment</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial, Helvetica, sans-serif;
}

body{
background:linear-gradient(135deg,#1d2671,#c33764);
min-height:100vh;
display:flex;
justify-content:center;
align-items:center;
padding:20px;
}

.container{
background:white;
padding:30px;
border-radius:10px;
width:100%;
max-width:450px;
box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

h2{
text-align:center;
margin-bottom:20px;
color:#1d2671;
}

label{
font-weight:bold;
}

select,input{
width:100%;
padding:10px;
margin-top:8px;
margin-bottom:15px;
border-radius:6px;
border:1px solid #ccc;
}

button{
width:100%;
padding:12px;
background:#1d2671;
color:white;
font-size:16px;
border:none;
border-radius:6px;
cursor:pointer;
transition:0.3s;
}

button:hover{
background:#c33764;
}

.employee-option{
padding:5px;
}

@media(max-width:500px){

.container{
padding:20px;
}

h2{
font-size:20px;
}

}

</style>
</head>

<body>

<div class="container">

<h1>TrackClock HR - Salary Payment</h2>

<form action="pay.php" method="POST">

<label>Select Employees (Ctrl for Multiple):</label>

<select name="employees[]" multiple required size="5">

<option value="EMP101">
EMP101 - Rahul Sharma (9876543210)
</option>

<option value="EMP102">
EMP102 - Priya Verma (9123456780)
</option>

<option value="EMP103">
EMP103 - Arjun Patel (9987785565)
</option>

<option value="EMP104">
EMP104 - Sneha Reddy (7645391002)
</option>

<option value="EMP105">
EMP105 - Kiran Kumar (9011223344)
</option>

</select>

<label>Salary Amount Per Employee (₹):</label>

<input type="number" name="amount" required placeholder="Enter salary amount">

<button type="submit">Pay Salaries</button>

</form>

</div>

</body>
</html>