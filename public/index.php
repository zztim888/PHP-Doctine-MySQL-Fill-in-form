<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fill in form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<h1>Storing Form data in Database</h1>
		<form action="insert.php" method="post">
		<div class="mb-3 mt-3">
    <label for="Names" class="form-label">Names</label>
    <input type="text" name="names" class="form-control" id="firstName"">   
  </div>

 <div class="mb-3">
    <label for="profession" class="form-label">Profession:</label>
    <input type="text" name="profession" class="form-control" id="profession"">   
  </div>

 <div class="mb-3">
    <label for="Age" class="form-label">Age</label>
    <input type="text" name="age" class="form-control" id="Age"">   
  </div>


 <div class="mb-3">
    <label for="number" class="form-label">Phone Number: </label>
    <input type="text" name="number" class="form-control" id="number"">   
  </div> 

  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
		</div>
</body>
</html>
