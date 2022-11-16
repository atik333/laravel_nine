







<!-- @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif -->



<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>laravel</title>
      
      <!-- <link rel="stylesheet" href="../../css/bootstrap.min.css"> -->
      <!-- <script src="../../js/jquery-3.5.1.min.js"></script> -->
      <style>
      *{
      margin:0;
      padding:0;
}
.form_section{
      width:550px;
      height:auto;
      margin:auto;
      border: 1px solid #999;
      color:#333;
      padding: 15px;
      margin-top: 50px;
      
}
input{
      width: 100% !important;
      padding: 5px;
}
.text_input{
      margin: 20px 0px
}
button{
      padding: 8px;
      background: black;
      outline: 0;
      border: 0px;
      border-radius: 3px;
      color:white;
}
      
      
      
      
      </style>
</head>
<body>
<h1>coltroller</h1>
      <section>
            <div class="form_section">
                @if($errors->any())
                <div class="">
                    <ul>
                        @foreach($errors->all() as $errors)
                            <li>{{$errors}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            <form action="{{route('inputdata')}}" method="post">
@csrf
                  
                 
                        <div class="text_input">
                              <label for="fname">Name</label>
                              <input type="text" id="fname" name="name" class=" " value="{{old('name')}}">
                        </div>
                        <div class="text_input">
                              <label for="">Email</label>
                              <input type="email" name="email" class="" value="{{old('email')}}">
                        </div>
                        <div class="text_input">
                              <label for="">Phon</label>
                              <input type="number" name="phon" class="" value="{{old('phon')}}">
                        </div>
                        <div class="text_input">
                              <label for="">Password</label>
                              <input type="password" name="password" class="" value="{{old('password')}}">
                        </div>
                        <div class="text_input">
                              <button class="" type="submit">Submit</button>
                        </div>
                  
            </form>
            </div>
      </section>


      <!-- <script src="../../js/bootstrap.min.js"></script> -->
</body>
</html>
