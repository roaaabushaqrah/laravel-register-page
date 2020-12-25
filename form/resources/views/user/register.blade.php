<!DOCTYPE html>
<html lang="en">

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/7ae71a9832.js" crossorigin="anonymous"></script>
    <title>Document</title>

    <style>

* {
                    box-sizing: border-box;
                    padding: 0px;
                    margin: 0px;
                }
                
                .nav {
                    max-width: 100%;
                    padding: 15px;
                    background: green;
                }
                
                ul {
                    list-style-type: none;
                    /* margin-block-start: 1em;
                        margin-block-end: 1em;
                        margin-inline-start: 0px;
                        margin-inline-end: 0px;
                        padding-inline-start: 40px; */
                }
                
                li {
                    color: white;
                    left: 35%;
                    position: relative;
                    margin: 10px;
                    padding: 5px;
                    display: inline;
                }
                
                @media screen and( max-width:800px) {
                    li {
                        left: 10px;
                    }
                }
                
                @media screen and( max-width:600px) {
                    li {
                        left: 0px;
                    }
                }
                
                .container {
                    display: grid;
                    grid-template-columns: auto auto auto;
                    justify-content: center;
                }
                
                .item {
                    text-align: center;
                    /* border: 1px solid black; */
                    margin: 20px;
                }
                
                .aicon {
                    text-align: center;
                    font-size: 100px;
                    color: orange;
                }
                
                .end {
                    background: orange;
                }
                
                .cont {
                    display: grid;
                    grid-template-columns: auto auto auto;
                }
                
                .item1 {
                    color: white;
                    margin: 10px;
                }
                
                .foo {
                    color: white;
                    margin: 10px;
                }
                
                .sub {
                    height: 40px;
                    width: 300px;
                    margin: 5px;
                }
                
                .btn {
                    background: black;
                    color: white;
                }
                
                .mainpart {
                    display: grid;
                    grid-template-columns: auto auto auto;
                }
                
                .heading {
                    color: orange;
                    text-align: center;
                }
                
                .part {
                    margin: 5px;
                    /* border: 1px solid black; */
                }
                
                .par {
                    color: black;
                }



                input, select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
               
        </style>

</head>

<body>


    <nav class=" nav ">
        <ul>

        <a href="register"> <li>Home</li></a>
          <a href="index">  <li> student </li></a>
            <li> about </li>
            <li> Contact Us</li>
        </ul>
    </nav>

<body>

<h3>Register</h3>

<div>
  <form method="post" action="/user/store">
  @csrf
    <label for="fname">First Name</label>
    
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="email">email</label>
   
    <input type="text" id="email" name="email" placeholder="Your email.">
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <label for="phone">Phone</label>
   
    <input type="text" id="phone" name="phone" placeholder="Your phone..">
    @error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <label for="password">password</label>
   
    <input type="password" id="password" name="password" placeholder="Your password.">
    @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <label for="c.password">password</label>

    <input type="password" id="password" name="password_confirmation" placeholder="Your password.">
  
   <input type="submit" value="Submit">
  </form>
</div>



</body>
</html>
