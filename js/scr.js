
  function clear()
  {
    document.getElementById('msg').innerHTML = "";
  }
     function sendEnquiryform()
   {
     
        document.getElementById('msg').innerHTML = "";

    if( document.myForm.log_txt.value == "" )
    {
        document.getElementById('msg').innerHTML = "Please provide your email id!";    
     
            document.myForm.log_txt.focus() ;
            return false;
        }
         if( document.myForm.log_pass.value == '' ) 
         {
                 document.getElementById('msg').innerHTML = "Please provide your password!";  
            document.myForm.log_pass.focus() ;
            return false;
         }
         

  return true;

      }