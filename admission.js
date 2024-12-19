function validateForm() {
    var form = document.getElementById('admissionForm');
    var fullName = form.fullName.value.trim();
    var fatherName = form.fatherName.value.trim();
    var motherName = form.motherName.value.trim();
    var email = form.email.value.trim();
    var phone = form.phone.value.trim();
    var dob = form.dob.value.trim();
    var aadhar = form.aadhar.value.trim();
    var gender = form.gender.value;
    var address = form.address.value.trim();
    var nationality = form.nationality.value.trim();
    var religion = form.religion.value.trim();
    var category = form.category.value.trim();
    var qualification = form.qualification.value.trim();
    var marks = form.marks.value.trim();
    var course = form.course.value;
    var terms = form.terms.checked;
  
    // Basic validation
    if (fullName === '' || fatherName === '' || motherName === '' || email === '' || phone === '' || dob === '' ||
        aadhar === '' || gender === '' || address === '' || nationality === '' || religion === '' ||
        category === '' || qualification === '' || marks === '' || course === '' || !terms) {
      alert('Please fill in all fields and accept the terms and conditions.');
      return false;
    }
  
    // Additional validation for specific fields (e.g., email format, phone number format)
  
    // Example email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      alert('Please enter a valid email address.');
      return false;
    }
  
    // Example phone number validation
    var phoneRegex = /^\d{10}$/;
    if (!phoneRegex.test(phone)) {
      alert('Please enter a valid 10-digit phone number.');
      return false;
    }
  
    // Example Aadhar number validation
    var aadharRegex = /^\d{12}$/;
    if (!aadharRegex.test(aadhar)) {
      alert('Please enter a valid 12-digit Aadhar number.');
      return false;
    }
  
    // Example marks validation
    if (isNaN(marks) || marks < 0 || marks > 100) {
      alert('Please enter valid marks between 0 and 100.');
      return false;
    }
  
    // Form is valid
    return true;
  }