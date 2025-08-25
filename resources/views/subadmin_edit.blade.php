
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SubAdminAdd edit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  
  <style>
    .password-wrapper {
      position: relative;
    }

    .toggle-password {
      position: absolute;
      right: 12px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      color: #6c757d;
    }

    .input-group {
      position: relative;
      margin-bottom: 1rem;
    }

    .input {
      width: 100%;
      padding-right: 40px; /* make space for the icon */
      padding: 16px 12px 8px;
      font-size: 16px;
      border: 1px solid #dadce0;
      border-radius: 4px;
      background-color: transparent;
      outline: none;
      transition: border-color 0.2s;
    }

    .input:focus {
      border: 2px solid #45a049;
    }

    .label {
      position: absolute;
      left: 12px;
      top: 16px;
      background: white;
      padding: 0 4px;
      color: #5f6368;
      font-size: 16px;
      pointer-events: none;
      transition: all 0.2s ease;
    }

    .input:focus + .label,
    .input:not(:placeholder-shown) + .label {
      top: -8px;
      font-size: 12px;
      color: #45a049;
    }
  </style>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  @endif

  <div class="container mt-4">
    <div class="card shadow-sm">
      <div class="mt-4 text-center bg-white text-success">
        <h2>Edit Users Information</h2>
      </div>
      <div class="card-body">
        <form action="{{ url('/mainusers/update', $request->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to update this user?');">
        @csrf
        @method('PUT')

          <!-- Row for Full Name and Email -->
          <div class="row mb-3">
            <div class="col-md-6">
              <div class="input-group">
                <input class="input" type="text" id="name" name="name" value="{{$request->name}}" placeholder=" " required>
                <label class="label" for="name">Full Name</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-group">
                <input class="input" type="email" id="email" name="email" value="{{$request->email}}" placeholder=" " required>
                <label class="label" for="email">Email</label>
              </div>
            </div>
          </div>

          <!-- Row for Phone Number and Location -->
          <div class="row mb-3">
            <div class="col-md-6">
              <div class="input-group">
                <input class="input" type="text" id="phone" name="phone" value="{{$request->userinfo->phone}}" placeholder=" " 
                      required pattern="\d{10}" title="Phone number must be exactly 10 digits.">
                <label class="label" for="phone">Contact Number</label>
                <small id="phoneError" class="text-danger d-none">Phone number must be exactly 10 digits.</small>
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-group">
                <input class="input" type="text" id="address" name="address" value="{{$request->userinfo->address}}" placeholder=" " required>
                <label class="label" for="address">Location</label>
              </div>
            </div>
          </div>

          <!-- Row for Password and Confirm Password -->
          <div class="row mb-3">
            <div class="col-md-6">
              <div class="input-group password-wrapper">
                <input class="input" type="password" id="password" name="password" value="{{$request->password}}"  placeholder=" " required>
                <label class="label" for="password">Password</label>
                <i class="bi bi-eye-slash toggle-password" onclick="togglePassword('password', this)"></i>
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-group password-wrapper">
                <input class="input" type="password" id="confirmPassword" name="password_confirmation" placeholder=" " required>
                <label class="label" for="confirmPassword">Confirm Password</label>
                <i class="bi bi-eye-slash toggle-password" onclick="togglePassword('confirmPassword', this)"></i>
              </div>
            </div>
          </div>
          <input type="hidden" name="role_type" value="subadmin">
          <small id="passwordError" class="text-danger d-none">Passwords do not match.</small>
          
          <!-- Row for Submit and Cancel Buttons -->
          <div class="row d-flex justify-content-between">
            <div class="col-md-3 my-3 text-md-start text-center">
              <button class="btn btn-outline-success w-100" type="submit">Update</button>
            </div>
            <div class="col-md-3 my-3 text-md-start text-center">
               <button class="btn btn-outline-success w-100" type="button" onclick="window.history.back();">Cancel</button>
            </div> 
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
 <script>
    function togglePassword(id, el) {
      const input = document.getElementById(id);
      if (input.type === "password") {
        input.type = "text";
        el.classList.remove("bi-eye-slash");
        el.classList.add("bi-eye");
      } else {
        input.type = "password";
        el.classList.remove("bi-eye");
        el.classList.add("bi-eye-slash");
      }
    }
  </script>
</html>  
