<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a href="" class="navbar-brand">TODO_LIST</a>
        </div>
    </nav>
   <div class="container">
       <div class="row">
           <div class="col-6 mx-auto">
               <h3 class="text-center">ToDo App</h3>
               <div class="card">
                   <div class="card-header">
                       <form action="{{route('store')}}" method="post" class="d-flex">
                           @csrf
                           <input type="text" name="title" class="form-control">
                           <input type="submit" class="btn btn-success">
                       </form>
                   </div>
                        <div class="card-body">
                            <div class="list-group">
                                @foreach($work as $w)
                                <div class="list-group-item list-group-item-action">
                                    @if($w->status == false)
                                    <del>{{$w->title}}</del>
                                    @else
                                    {{$w->title}}
                                    @endif

                                    @if($w->status)
                                    <a href="{{route('done',['id'=>$w->id])}}"class="badge bg-success text-white text-decoration-none float-end">Done</a>
                                    @endif 
                                    <a href="{{route('remove',['id'=>$w->id])}}"class="badge bg-danger text-white text-decoration-none float-end mx-2">x</a> 
                                </div>
                                    @endforeach
                            </div>
                        </div>
                        <div class="card-footer">
                            <span class="badge bg-danger">Design by cws Team</span>
                        </div>
               </div>
           </div>
       </div>
   </div> 
   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>