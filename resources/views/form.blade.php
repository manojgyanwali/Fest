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
                
                    <div class="mb-3">
                        <label for="firstname" class="form-label">Child First Name</label>
                        <input type="text" name ="firstname" value ="{{old('firstname')}}"  class="form-control" id="firstname" aria-describedby="firstnamehelp">
                        @error('firstname')
                             <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="middlename" class="form-label">Child Middle Name</label>
                        <input type="text" name ="middlename" value ="{{old('middlename')}}" class="form-control" id="middlename">
                        @error('middlename')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Child Last Name</label>
                        <input type="text" name = "lastname" value ="{{old('lastname')}}" class="form-control" id="lastname">
                        @error('lastname')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Child Age</label>
                        <input type="text" name ="age" value ="{{old('age')}}" class="form-control" id="age">
                        @error('age')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                    <label for="gender">Select gender:</label>
                        <select name="gender" value = "{{old('gender')}}" id="gender" required>
                            <option value="">Select gender...</option>
                            <option value="male" @if(old('gender') === 'male') selected @endif>Male</option>
                            <option value="female" @if(old('gender') === 'female') selected @endif>Female</option>
                        </select>
                        @error('gender')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="checkbox">
                        <label  class="form-check-label" for="exampleCheck1">Different Address</label>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Child Address</label>
                        <input type="text"  name ="address" value ="{{old('address')}}" class="form-control" id="address" disabled>
                        @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>

                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="State" class="form-label">Child State</label>
                        <input type="text"  name = "state" value ="{{old('state')}}" class="form-control" id="state" disabled>
                        @error('state')
                             <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">Child City</label>
                        <input type="text " name ="city" value ="{{old('city')}}" class="form-control" id="city" disabled>
                        @error('city')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                    <label for="country">Select country:</label>
                        <select name="country" value = "{{old('country')}}" id="country" disabled>
                            <option value="">Select country...</option>
                            <option value="nepal" @if(old('country') === 'nepal') selected @endif>Nepal</option>
                            <option value="india" @if(old('country') === 'india') selected @endif>India</option>
                            <option value ="bangladesh" @if(old('country') === 'bangladesh') selected @endif>Bangladesh</option>
                        </select>
                        @error('country')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                    <div class="mb-3">
                        <label for="zipcode" class="form-label">Child Zip Code</label>
                        <input type="text" name ="zipcode" value ="{{old('zipcode')}}" class="form-control" id="zipcode" disabled>
                        @error('zipcode')
                             <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get references to the checkbox and the fields
        const enableFieldsCheckbox = document.getElementById('checkbox');
        const address = document.getElementById('address');
        const city = document.getElementById('city');
        const state = document.getElementById('state');
        const zipcode = document.getElementById('zipcode');
        const country = document.getElementById('country');

        // Set initial state based on checkbox status
        updateFieldState();

        // Add event listener to the checkbox
        enableFieldsCheckbox.addEventListener('change', function() {
            updateFieldState();
        });

        function updateFieldState() {
            // Enable/disable the fields based on the checkbox status
            if (enableFieldsCheckbox.checked) {
                country.disabled = false;
                city.disabled = false;
                state.disabled = false;
                zipcode.disabled = false;
                address.disabled = false;
            } else {
                country.disabled = true;
                city.disabled = true;
                state.disabled = true;
                zipcode.disabled = true;
                address.disabled = true;
            }
        }
    });
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>