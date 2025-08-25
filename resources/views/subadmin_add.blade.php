
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SubAdminAdd</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>

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
  @if (session('success'))
      <div id="success-message" class="alert alert-success text-center">
          {{ session('success') }}
      </div>
  @endif
  @if (session('error'))
      <div id="error-message" class="alert alert-danger text-center">
          {{ session('error') }}
      </div>
  @endif
<div class="container">
  <div class="row">

    <div class="col-lg-5 col-md-12 mt-4">
      <div class="card shadow-sm">
        <div class="mt-4 text-center bg-white text-success">
          <h2>Add Users Information</h2>
        </div>
        <div class="card-body">
          <form action="{{ url('/users/store') }}" method="POST">
            @csrf
            <div class="col-md-6 mb-3">
              <select name="db_choice" id="db_choice" required class="form-select w-auto">
                <option value="Select Database" >Select Database</option>
                <option value="authDB" {{ old('db_choice') == 'authDB' ? 'selected' : '' }}>AuthDB</option>
                <option value="authDB2" {{ old('db_choice') == 'authDB2' ? 'selected' : '' }}>AuthDB2</option>
              </select>
            </div>

            <!-- Row for Full Name and Email -->
            <div class="row col-mb-3">
              <div class="col-lg-12 col-md-6">
                <div class="input-group">
                  <input class="input" type="text" id="name" name="name" placeholder=" " value="{{old('name')}}" required>
                  <label class="label" for="name">Full Name</label>
                </div>
              </div>
              <div class="col-lg-12 col-md-6">
                <div class="input-group">
                  <input class="input" type="email" id="email" name="email" placeholder=" " value="{{old('email')}}" required>
                  <label class="label" for="email">Email</label>
                </div>
              </div>
            </div>

            <!-- Row for Phone Number and Location -->
            <div class="row col-mb-3">
              <div class="col-lg-12 col-md-6">
                <div class="input-group">
                  <input class="input" type="text" id="phone" name="phone" placeholder=" " value="{{old('phone')}}" 
                        required pattern="\d{10}" title="Phone number must be exactly 10 digits.">
                  <label class="label" for="phone">Contact Number</label>
                  <small id="phoneError" class="text-danger d-none">Phone number must be exactly 10 digits.</small>
                </div>
              </div>
              <div class="col-lg-12 col-md-6">
                <div class="input-group">
                  <input class="input" type="text" id="address" name="address" placeholder=" " value="{{old('address')}}"  required>
                  <label class="label" for="address">Location</label>
                </div>
              </div>
            </div>

            <!-- Row for Password and Confirm Password -->
            <div class="row col-mb-3">
              <div class="col-lg-12 col-md-6">
                <div class="input-group password-wrapper">
                  <input class="input" type="password" id="password" name="password" placeholder=" " value="{{old('password')}}" required>
                  <label class="label" for="password">Password</label>
                  <i class="bi bi-eye-slash toggle-password" onclick="togglePassword('password', this)"></i>
                </div>
              </div>
              <div class="col-lg-12 col-md-6">
                <div class="input-group password-wrapper">
                  <input class="input" type="password" id="confirmPassword" name="password_confirmation" placeholder=" " value="{{old('password_confirmation')}}" required>
                  <label class="label" for="confirmPassword">Confirm Password</label>
                  <i class="bi bi-eye-slash toggle-password" onclick="togglePassword('confirmPassword', this)"></i>
                </div>
              </div>
            </div>

            <input type="hidden" name="role_type" value="subadmin">

            <small id="passwordError" class="text-danger d-none">Passwords do not match.</small>

            <!-- Row for Submit and Cancel Buttons -->
            <div class="row d-flex justify-content-between">
              <div class="col-6 my-3 text-md-start text-center">
                <button class="btn btn-outline-success w-100" type="submit">Submit</button>
              </div>
              <div class="col-6 my-3 text-md-start text-center">
                <button class="btn btn-outline-success w-100" type="button" onclick="window.history.back();">Cancel</button>
              </div> 
            </div>

          </form>
        </div>
      </div>
    </div>

    <div class="col-lg-7 col-md-12 mt-4">        
          <!-- Active Users Table -->
        <form method="GET" class="mb-3">
          <select name="db_choice" onchange="this.form.submit()" class="form-select w-auto">
            <option value="Select Database" >Select Database</option>
            <option value="authDB" {{ request('db_choice') == 'authDB' ? 'selected' : '' }}>AuthDB</option>
            <option value="authDB2" {{ request('db_choice') == 'authDB2' ? 'selected' : '' }}>AuthDB2</option>
          </select>
        </form>

        <div>
            <table class="table table-bordered table-hover align-middle bg-white">
                <thead class="table-success text-center">
                    <tr>
                        <th>S.No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile No.</th>
                        <th>Location</th>
                        <th colspan="2">Operation</th>
                    </tr>
                </thead>
                <tbody id="adminTable">
                    @foreach ($subAdmins as $id => $subadmin)
                    <tr class="text-center">
                        <td>{{ $id + 1 }}</td>
                        <td class="subadmin-name">{{ $subadmin->name }}</td>
                        <td>{{ $subadmin->email }}</td>
                        <td>{{ $subadmin->userinfo->phone ?? 'N/A' }}</td>
                        <td>{{ $subadmin->userinfo->address ?? 'N/A' }}</td>

                        <td>
                          @can('update', $subadmin)
                            <a href="{{ url('mainusers/edit/' . $subadmin->id) }}?db_choice={{ request('db_choice') }}"
                                class="btn btn-outline-success btn-sm" title="Update">
                                <i class="fas fa-edit"></i>
                            </a>
                          @endcan
                          {{-- @can('subadmin', $subadmin)
                            <a href="{{ route('mainusers.edit', ['mainuser' => $subadmin->id, 'db_choice' => request('db_choice')]) }}"
                                class="btn btn-outline-success btn-sm" title="Update">
                                <i class="fas fa-edit"></i>
                            </a>
                          @endcan --}}
                        </td>
                        <td>
                          @can('delete', $subadmin)
                            <form action="{{ url('mainusers/delete', $subadmin->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger btn-sm" type="submit">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                          @endcan
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

 </div>
</div>
  <div class="d-flex justify-content-end m-4">
      <form method="POST" action="{{ url('logout') }}">
          @csrf
          <button class="btn btn-outline-success w-20" type="submit">Logout</button>
      </form>
  </div>


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


    setTimeout(function () {
        let message = document.getElementById('success-message');
        if (message) {
            message.style.display = 'none';
        }

        let error = document.getElementById('error-message');
        if (error) {
            error.style.display = 'none';
        }
    }, 5000); // 5000 milliseconds = 5 seconds

  </script>

</body>
</html>

