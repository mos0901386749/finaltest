<!DOCTYPE html>
<html>

<head>
  <title>Codeigniter Crud tutorial on codesource.io</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style>

    .container {
      max-width: 500px;
    }

    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <form id="add_create" method="post" id="addname" name="addname" 
    action="<?= site_url('/submit-form') ?>">
      <div class="form-group">
        <label>ชื่อ-นามสกุล</label>
        <input type="text" name="name" class="form-control">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
      </div>

      <div class="form-group">
        <label>เวลาที่เข้า</label>
        <input type="text" name="time" class="form-control">
      </div>

      <div class="form-group">
        <label>เวลาที่ออก</label>
        <input type="text" name="gettime" class="form-control">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success">เพิ่มข้อมูล</button>
      </div>

      <a href="/namelist" class="btn btn-primary"> ย้อนกลับ </a>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          name: {
            required: true,
          },
          email: {
            required: true,
            maxlength: 60,
            email: true,
          },
        },
        messages: {
          name: {
            required: "Name is required.",
          },
          email: {
            required: "Email is required.",
            email: "It does not seem to be a valid email.",
            maxlength: "The email should be or equal to 60 chars.",
          },
        },
      })
    }
  </script>
</body>

</html>