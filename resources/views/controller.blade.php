




<h1>coltroller</h1>
<?php ?>

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif



<form action="{{route('inputdata')}}" method="post">
@csrf

<input type="text" name="name" placeholder="Enter your name">
<input type="email" name="email" placeholder="Enter your email">
<input type="number" name="phon" placeholder="phon">
<button type="submit">Submit</button>



</form>
