function validateForm() {
				var con = 0;
				var x = document.forms["myForm"]["uname"].value;
				
				if (x == "" || x == null) {
				alert("Name must be filled out");
		        return false;
		    }
			con++;
			x = document.forms["myForm"]["email"].value;
	
			if (x == ""){
 		       alert("Mail must be entered");
 		       return false;
		    }
			else{
				if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(x))
					{
						con++;
					}
				else{
					alert("You have entered an invalid email address!")
					return (false)
				}
			}
	
			x = document.forms["myForm"]["pass"].value;
			if (x == ""){
		        alert("password must be entered");
 		       return false;
 		   }
		   if(con >= 2)
		   {
			return (true);
		   }
			}