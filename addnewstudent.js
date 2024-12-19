function data()
    {
        var a=document.getElementById("sid").value;
        var b=document.getElementById("name").value;
        var c=document.getElementById("fname").value;
        var d=document.getElementById("mname").value;
        var e=document.getElementById("dob").value;
        var f=document.getElementById("gender").value;
        var g=document.getElementById("email").value;
        var h=document.getElementById("pincode").value;
        var i=document.getElementById("mobileno").value;
        var j=document.getElementById("address").value;

        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
     

        if(a=="" || b=="" || c==""  || d=="" || e=="" || f=="" || g=="" || h=="" || i=="" || j=="" )
        {
            alert("All fields are mendatory");
            return false;
        }

        else if (!emailRegex.test(email)) {
            setErrorMsg('Enter a valid Email Address.');
            return false;
        }

    
      
        else if(h==i)
        {
            alert("Please  check your pincode");
            return false;
        }


        else
        {
            true;
        }
    }
