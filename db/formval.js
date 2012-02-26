//FUNCTION FOR VALIDATING SCHOOL FORM FIELD
 function ValidateSForm()
 {
    
    // School Registration form Validation variables
    var name = document.SForm.sch_name;
    var code = document.SForm.om_id;
    var type = document.SForm.type;
    var contact = document.SForm.cont_c_name;
    var status = document.SForm.status_c_name;
    var street= document.SForm.street;
    var city = document.SForm.city;
    var county = document.SForm.county;
    var zip = document.SForm.zip;
    var phone = document.SForm.phone;
    var email = document.SForm.email;
    var legalchar=/[A-z]/;
    var legalChar2= /\w/;
    var legalNum=/[0-9]/;
    
    // Name Field 
    
    if (name.value == "")
    {
        window.alert('Please Enter the School Name');
        name.focus();
        return false;
    }
        else if (!legalchar.test(name.value))
    {
        window.alert('Please Enter a Valid School Name');
        name.style.background='red';
        name.focus();
        return false;
    }
    
    //END OF NAME FIELD
    
  // OM ID Field 
   
    if (code.value == "")
    {
        window.alert('Please fill in your OM ID');
        code.focus();
        return false;
    }
            else if (!legalChar2.test(code.value))
    {
        window.alert('Please Enter a Vaild OM ID');
        code.style.background='red';
        code.focus();
        return false;
    }
    
    //END OF OM ID FIELD
    
     //CONTACT FIELD
    if (contact.value == "")
    {
        window.alert('Please Fill in The School Contact');
        contact.focus();
        return false;
    }
              else if (!legalChar2.test(contact.value))
    {
        window.alert('Please Enter a Vaild Character');
        contact.style.background='red';
        contact.focus();
        return false;
    }
    
    //end of CONTACT FIELD
    
         //TYPE FIELD
    if (type.value == "")
    {
        window.alert('Please Fill in The Type of School');
        type.focus();
        return false;
    }
              else if (!legalChar2.test(type.value))
    {
        window.alert('Please Enter a Vaild Character');
        type.style.background='red';
        type.focus();
        return false;
    }
    
    //end of TYPE FIELD
      
    if (status.selectedIndex < 1)
    {
        window.alert('Please Select The School Status');
        status.focus();
        return false;
    }
    
    // STREET FIELD
    if (street.value == "")
    {
        window.alert('Please fill in the street');
        street.focus();
        return false;
    }
    else if (!legalChar2.test(street.value))
    {
        window.alert('Please Enter a Vaild Street Address');
        street.style.background='red';
        street.focus();
        return false;
    }
    
    //END OF STREET FIELD
    
    //CITY FIELD
    if (city.value == ""){
        window.alert('Please fill in the city');
        city.focus();
        return false;
    }
    else if (!legalChar2.test(city.value))
    {
        window.alert('Please Enter a Vaild City');
        city.style.background='red';
        city.focus();
        return false;
    }
    //END OF CITY FIELD
     
     // COUNTY FIELD   
    if (county.value == ""){
        
        window.alert('Please fill in your County');
        county.focus();
        return false;
    }
    
        else if (!legalChar2.test(county.value))
    {
        window.alert('Please Enter a Vaild County');
        county.style.background='red';
        county.focus();
        return false;
    }
    //END OF COUNTY FIELD
    
    // ZIP CODE FIELD
    if (zip.value == ""){
        
        window.alert('Please fill in the Zip code');
        zip.focus();
        return false;
    }
    else if (!legalChar2.test(zip.value))
    {
        window.alert('Please Enter a Vaild ZIP Code');
        zip.style.background='red';
        zip.focus();
        return false;
    }
    //END OF zip FIELD
     
     //PHONE FIELD   
    if (phone.value == ""){
        
        window.alert('Please fill in the Phone Number');
        phone.focus();
        return false;
    }
    else if (!legalNum.test(phone.value))
    {
        window.alert('Please Enter a Vaild Phone Number');
        phone.style.background='red';
        phone.focus();
        return false;
    }
    //END OF PHONE FIELD 
   
    var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
      
    if (email.value == ""){
        
        window.alert('Please fill in the Email Address');
        email.focus();
        return false;
    }
    else if (!emailFilter.test(email.value))
    {
        window.alert('Please Enter a Vaild Email');
        email.style.background='red';
        email.focus();
        return false;
    }
     
    
    
    return true;
    
 }
 
 
 
  function ValidateForm()
 {
 
     // Teachers Registration form Validation variables
    var t_name=document.SForm.name
    var t_status=document.SForm.status
    var t_other=document.SForm.other
    var t_school=document.SForm.sch_name_id
    var t_address=document.SForm.address
    var t_phone=document.SForm.phone
    var t_email=document.SForm.email
    var t_exam=document.SForm.exam
    var t_grad=document.SForm.grad
    var s_subject=document.SForm.subject
    var s_type=document.SForm.type
    var s_year=document.SForm.year
    var s_exper=document.SForm.exper
    
    
   if (t_name.value == "")
    {
        window.alert('Please Enter the Your Name');
        name.focus();
        return false;
    } 
    
       if (t_status.value == "")
    {
        window.alert('Please Enter the Your Status');
        t_status.focus();
        return false;
    } 
    
       if (t_school.selectedIndex < 1)
    {
        window.alert('Please Select Your School');
        t_school.focus();
        return false;
    } 
    
         if (t_address.value == "")
    {
        window.alert('Please Enter the Your Address');
        t_address.focus();
        return false;
    }
    
        if (t_phone.value == ""){
        
        window.alert('Please fill in the Phone Number');
        t_phone.focus();
        return false;
    }
    
    if (t_email.value == ""){
        
        window.alert('Please fill in the Email Address');
        t_email.focus();
        return false;
    }
         if (t_exam.selectedIndex < 1)
    {
        window.alert('Please Select Yes or No');
        t_exam.focus();
        return false;
    } 
     
              if (t_grad.selectedIndex < 1)
    {
        window.alert('Please Select Yes or No');
        t_grad.focus();
        return false;
    } 

    if (s_subject.value == ""){
        
        window.alert('Please fill in Your Subject');
        s_subject.focus();
        return false;
    }     
     
    if (s_type.value == ""){
        
        window.alert('Please fill in Your Type of Certification');
        s_type.focus();
        return false;
    }

    if (s_year.value == ""){
        
        window.alert('Please fill in The Year of Certification');
        s_year.focus();
        return false;
    }     
  
        if (s_exper.selectedIndex < 1)
    {
        window.alert('Please Select Yes or No');
        s_exper.focus();
        return false;
    }  
     
     return true;
     
    }