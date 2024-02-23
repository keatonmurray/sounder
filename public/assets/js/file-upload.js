$(document).ready(function() {
    var readURL = function(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('.avatar').attr('src', e.target.result);  
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
    $(".file-upload").on('change', function(){
      readURL(this);
    });
  });

  $(document).ready(function() {
    var readURL = function(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('.merch_first').attr('src', e.target.result);  
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
    $(".merch_first_upload").on('change', function(){
      readURL(this);
    });
  });

  $(document).ready(function() {
    var readURL = function(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('.merch_second').attr('src', e.target.result);  
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
    $(".merch_second_upload").on('change', function(){
      readURL(this);
    });
  });

  $(document).ready(function() {
    var readURL = function(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('.merch_third').attr('src', e.target.result);  
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
    $(".merch_third_upload").on('change', function(){
      readURL(this);
    });
  });

  $(document).ready(function() {
    var readURL = function(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('.merch_fourth').attr('src', e.target.result);  
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
    $(".merch_fourth_upload").on('change', function(){
      readURL(this);
    });
  });

  $(document).ready(function() {
    var readURL = function(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('.profile-pic').attr('src', e.target.result);  
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
    $(".profile-pic-upload").on('change', function(){
      readURL(this);
    });
  });

  $(document).ready(function() {
    var readURL = function(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('.cover-photo').attr('src', e.target.result);  
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
    $(".cover-photo-upload").on('change', function(){
      readURL(this);
    });
  });