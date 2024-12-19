function data()
    {
        var a=document.getElementById("name").value;
        var b=document.getElementById("designation").value;
        var c=document.getElementById("email").value;
        var d=document.getElementById("mobileno").value;
        var e=document.getElementById("address").value;

        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        
        
        if(a=="" || b=="" || c==""  || d==""|| e=="" )
        {
            alert("All fields are mendatory");
            return false;
        }

        
        
           else if (!emailRegex.test(email)) {
                setErrorMsg('Enter a valid Email Address.');
                return false;
           }
        

            else if(c==d)
            {
                alert("Please  check your pincode");
                return false;
            }


        else
        {
            true;
        }
    }
