<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rosas Activity #1</title>
  
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
    <form method="post" action="{{ url('/send_email') }}">
            @csrf

      <h2>Send Email</h2>
      
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your name" name='name'>
        </div>
        <div class="form-group">
          <label for="email">Email Address:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email address" name='email'>
        </div>
        <div class="form-group">
          <label for="remarks">Remarks:</label>
          <textarea class="form-control" id="remarks" rows="3" placeholder="Enter your remarks" name="remarks"></textarea>
        </div>
        <div class="form-group">
          <label for="attachment">Attachments:</label>
          <input type="file" class="form-control" id="attachment" rows="3"  name="attachment">
        </div>
        <button type="submit" class="btn btn-primary">Send</button>

      </form>

    </div>
  </div>
</div>


</body>
</html>