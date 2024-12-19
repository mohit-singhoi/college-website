function data()
    {
        var a=document.getElementById("name").value;
        var b=document.getElementById("email").value;
        var c=document.getElementById("password").value;
        var d=document.getElementById("conpassword").value;

        if(a=="" || b=="" || c==""  ||d=="")
        {
            alert("All fields are mendatory");
            return false;
        }

        // else if(b.length<10 || b.length>10)
        // {
        //     alert("Number Should be of 10 digits ! Please enter valid number");
        //     return false;
        // }

        // else if(isNaN(b))
        //     {
        //         alert("Only Numbers are allowwed ! Please enter valid number");
        //         return false;
        //     }

            else if(c!=d)
            {
                alert("Please Enter same password");
                return false;
            }


        else
        {
            true;
        }
    }
