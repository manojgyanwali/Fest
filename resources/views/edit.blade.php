<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fest</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
    <div class ="container mt-5">
        <div class ="row">
            <div col-lg-12 >
                 <form action = "" method = "POST">
                    @CSRF
                     @method('PUT')
                    <div class="mb-3">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" value = "{{old('firstname', $child->firstname)}}" name ="firstname" class="form-control" id="firstname" aria-describedby="firstnamehelp">
                        @error('firstname')
                             <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="middlename" class="form-label">Middle Name</label>
                        <input type="text" value = "{{$child->middlename}}" name ="middlename" class="form-control" id="middlename">
                        @error('middlename')
                             <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" value = "{{$child->lastname}}" name = "lastname" class="form-control" id="lastname">
                        @error('lastname')
                             <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">age</label>
                        <input type="text" value = "{{$child->age}}" name ="age" class="form-control" id="age">
                        @error('age')
                             <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
            
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="checkbox">
                        <label  class="form-check-label" for="exampleCheck1">Different Address</label>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" value = "{{$child->address}}"  name ="address" class="form-control" id="address">
                        @error('address')
                             <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="State" class="form-label">State</label>
                        <input type="text" value = "{{$child->state}}" name = "state" class="form-control" id="State">
                        @error('state')
                             <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" value = "{{$child->city}}" name ="city" class="form-control" id="city">
                        @error('city')
                             <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Country</label>
                        <input type="text" value = "{{$child->country}}" name= "country" class="form-control" id="country">
                        @error('country')
                             <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="zipcode" class="form-label">Zip Code</label>
                        <input type="text" value = "{{$child->zipcode}}" name ="zipcode" class="form-control" id="zipcode">
                        @error('zipcode')
                             <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <button type="submit"  class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>