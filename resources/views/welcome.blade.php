<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fest Php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class ="container mt-5">
        <div class ="row">
            <div class ="col-lg-12">
              
                    
                <button class="btn btn-primary"><a href = "{{url('/form')}}">Add new Child</a></button>
               

                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Child First Name</th>
                        <th scope="col">Child Middle Name</th>
                        <th scope="col">Child Last Name</th>
                        <th scope="col">Child Age</th>
                        <th scope="col">Child Gender</th>
                        <th scope="col">Child City</th>
                        <th scope="col">Child Address</th>
                        <th scope="col">Child State</th>
                        <th scope="col">Child Country</th>
                        <th scope="col">Zip Code</th>
                        <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($childs as $child)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{$child->firstname}}</td>
                            <td>{{$child->middlename}}</td>
                            <td>{{$child->lastname}}</td>
                            <td>{{$child->age}}</td>
                            <td>{{$child->gender}}</td>
                            <td>{{$child->city}}</td>
                            <td>{{$child->address}}</td>
                            <td>{{$child->state}}</td>
                            <td>{{$child->country}}</td>
                            <td>{{$child->zipcode}}</td>
                            <td>
                                <a href = "{{url('/edit',$child->id)}}"  class = "btn btn-info-btn-sm">Edit</a>|
                                <a href = "{{url('/delete',$child->id)}}" class = "btn btn-danger-btn-sm">Delete</a>
                        
                            </td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>

            </div>

        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>