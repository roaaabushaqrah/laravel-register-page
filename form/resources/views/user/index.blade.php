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
                    background:green;
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
                
                /* .btn1 {
                    background: black;
                    color: white;
                } */
                
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

  
  




  <table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">Delete</th>
      <th scope="col">edit</th>
      
    
    </tr>
  </thead>
  <tbody>

  @foreach($x as $value) 
    <tr>
    <td>{{$value->id}}</td>
      <th scope="row">{{$value->name}}</th>
      <td>{{$value->email}}</td>
      <td>{{$value->phone}}</td>
      <form action='delete/{{$value->id}}'method="post">
   
                  @method('DELETE')
                  @csrf
      
     <td> <button type="submit" class="btn btn-danger">Danger</button></td>
     </form>
     
   
      
     <td>
    
     <a href="edit/{{$value->id}}" class="btn btn-primary" >Primary</a></td>
  
    </tr>
    @endforeach
  </tbody>
</table>



  
</body>
</html>