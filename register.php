<!DOCTYPE html>
<html lang="en">
<head>
<title>Travel Experts| Contacts</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="bk.js"></script>
</head>
<body>
    
    <style>
        div.scroll 
{
      width:500px;
      overflow-x:scroll;
      height:35px;
}

table
{
     height: 50px; 
    overflow: scroll;
        border-collapse:collapse; 
        border-radius: 5px;
} 

th
{
        font-family:segoe ui;
        color:black;
        font-size:11pt;
        border-bottom:1px solid #fff;
        border-right:1px solid #fff;
        border-left:1px solid #fff;
        color:#fff;padding:1px 1px 0;
        background-color:#0C88C1;
}

td
{
        font-family:Courier; 
        color:black; 
        font-size:11pt;
        align:'right';
        border-bottom:1px solid #fff;
        border-right:1px solid #fff;
        color:black;
        padding:1px 1px 0 
}
tr 
{
        background-color:#CEF6F5
}

</style>

   
    
<div class="sample">
    
    
   <fieldset>
      <legend style="color:blue;font-weight:bold;">Customer Registration</legend>
 <form id="form_id" name="Cform" method = "post" class="form-style-9" onsubmit="return validate()" >
      <table>
          
         <tr>
            <td><span style="text-decoration:underline">F</span>irst Name:</td>
            <td><input type="text" name = "txtfname"/></td>
         </tr>
         
         <tr>          
<td><span style="text-decoration:underline">L</span>ast Name:</td>
            <td><input type="text" name = "txtlname"  /></td>
         </tr>
            <tr>
            <td><span style="text-decoration:underline">A</span>ddress:</td>
            <td><textarea name="txtmessage" rows="6" cols="16"> Fill this...</textarea> </td>
         </tr>
                             <tr>
            <td><span style="text-decoration:underline">P</span>hone:</td>
            <td><input type="text" name = "txtphone" /></td>
         </tr>
                    <tr>
            <td><span style="text-decoration:underline">C</span>ity:</td>
             <td><input type="text" name = "txtcity" /></td>
         </tr>
                    <tr>
            <td><span style="text-decoration:underline">P</span>ostal code:</td>
            <td><input type="text" name = "txtpostal" /></td>
         </tr>
                    <tr>
            <td><span style="text-decoration:underline">C</span>ountry:</td>
           <td><input type="text" name = "txtcountry" /></td>
         </tr>
            </tr>
              <tr>
            <td><span style="text-decoration:underline">E</span>mail</td>
            <td><input type="text" name = "txtemail" /></td>
            </tr>
      
            <tr>     
                <td><span style="text-decoration:underline">C</span>Gender:</td>
<td>
      <input type="radio"  class="radio" name="answer[$item]" value="+" />
      <label>Male</label>
      <input type="radio"  class="radio" name="answer[$item]" value="M"  />
      <label>Female</label>
 </td>
              </tr>   
            
<tr>
<td><span style="text-decoration:underline">U</span>sername:</td>
       <td><input type="text" name = "txtusername" /></td>
</tr>
         
              <tr>
            <td><span style="text-decoration:underline">P</span>assword</td>
            <td><input type="password" name = "txtpass1" /></td>
            </tr>
                    
              <tr>
            <td><span style="text-decoration:underline">C</span>onfirm Password</td>
              <td><input type="password" name = "txtpass2" /></td>
            </tr>
            
   </fieldset>
 <input type="submit" name="submit" class="btn-submit" value="Submit" />
</form>

      

</div>
    
</body>
</html>