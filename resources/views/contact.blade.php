<h1> This is my Contact Page</h1>
<h3><a href="{{url('/')}}"> back</a></h3>


<form action="{{ route('student.store')}}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Write your name"><br>
    <input type="email" name="email" placeholder="Write your email"><br>
    <button type="submit">Submit</button>
</form>
