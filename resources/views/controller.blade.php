<h1>coltroller</h1>
<?php ?>

<form action="{{route('inputdata')}}" method="post">
@csrf

<input type="text" name="name" placeholder="Enter your name">
<input type="email" name="email" placeholder="Enter your email">
<button type="submit">Submit</button>



</form>
