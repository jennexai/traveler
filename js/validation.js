
$( document ).ready(function() {
//forgot pass stsrt
$('#forgotPass').validate({
ignore: null,
    	ignore: 'input[type="hidden"]',
        ignore: [],
 		rules: {
            email: {
				 required:true,
				 email:true,
                 remote:{
					url:'checkmail.php',
					type:'GET',
					data:
						{
							name:function()
							{
							return $('#email').val();
							}
						}
				}

			      },
		    },

		messages: {	

                email: {
				 required:'Please Enter Email',
				 email:'Please Enter valid Email',
				 remote:"Email Not Registered"
			      },
		}

});

//forgotpass end



$('#adminlogin').validate({
ignore: null,
    	ignore: 'input[type="hidden"]',
        ignore: [],
 		rules: {
            email: {
				 required:true,
				 email:true
			      },
			pass: {
				 required:true,
			      },
			  },
			
		messages: {	
			 email: {
				 required:'Please Enter Email',
				 email:'Please Enter valid Email'
			      },

              pass: {
				 required:'Please Enter Password',
			      },

		}

});



$('#profile').validate({

ignore: null,

    	ignore: 'input[type="hidden"]',
        ignore: [],

 		rules: {

            fname:{
				 required:true,

			      },
		    lname:{
				 required:true,

			      },
		    email: {
		    	required:true,
				 email:true
			      },
			phone: {
				 number:true
			      },

			  },
			
		messages: {	

			

			 fname: {
				 required:'Please Enter First Name',
			      },
			lname: {
				 required:'Please Enter Last Name',
			      },
			 email: {
				 required:"Please Enter Email",
				 email:'Please enter valid Email'
			      },

		    phone: {
                 required:'Please Enter Mobile No',
				 number:'Please Enter only Number',

			      },

		}

});



$('#changepassword').validate({
		ignore: null,
    	ignore: 'input[type="hidden"]',
		
		ignore: [],
 		rules: {
				
			opass: { 
				required: true,
				remote:{


					url:'check_pass.php',
					 type:'GET',
                  
		        	data:
						{
							name:function()
							{
							return $('#opass').val();
							}
						}
				}

			},
			npass: {
				required: true,
			
			},	
			cpass: {
				required: true,
			
			},			

			},

 		messages: {	
			opass: {
				required: "Please Enter Current Password ",
				remote:"Password Not Match"
				
			},
			npass: {
				required:"Please Enter New Password",
			
			},
			cpass: {
				required:"Please Enter Again ",
			
			},
			
 		},
	   
	});


$('#changepasswordadmin').validate({
		ignore: null,
    	ignore: 'input[type="hidden"]',
		
		ignore: [],
 		rules: {
				
			opass: { 
				required: true,
				remote:{


					url:'check_pass_admin.php',
					 type:'GET',
                  
		        	data:
						{
							name:function()
							{
							return $('#opass').val();
							}
						}
				}

			},
			npass: {
				required: true,
			
			},	
			cpass: {
				required: true,
			
			},			

			},

 		messages: {	
			opass: {
				required: "Please Enter Current Password ",
				remote:"Password Not Match"
				
			},
			npass: {
				required:"Please Enter New Password",
			
			},
			cpass: {
				required:"Please Enter Again ",
			
			},
			
 		},
	   
	});

$('#loginFrom').validate({
        ignore: null,
    	ignore: 'input[type="hidden"]',
        ignore: [],
 		rules: {
            email: {
				 required:true,
				 email:true
			      },
			pass: {
				 required:true,
			      },
			  },
			
		messages: {	
			 email: {
				 required:'Please Enter Email',
				 email:'Please Enter valid Email'
			      },
              pass: {
				 required:'Please Enter Password',
			      },
		}
});



});