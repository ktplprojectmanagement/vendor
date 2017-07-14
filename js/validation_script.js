$(function(){
    $(".name_validate").keyup(function(){
        var id = $(this).attr('id');
        var data = $.trim($(this).val());
        //alert($("#"+id).val().length);
        if (id=='name1_edit') 
        {
            if($("#"+id).val().length==0)
            {
                $("#"+id).css('border-color','red');
                $("#err").fadeOut(1000);
                $("#error_value").text("Name field is required.");
            }
            else if($("#"+id).val().length>80)
            {
                $("#"+id).css('border-color','red'); 
                $("#err").fadeOut(1000);
                $("#error_value").text("Maximum 80 characters are allowed for name field.");          
            }
            else
            {
                $("#"+id).css('border-color','');   
                $("#err").hide();
                $("#error_value").text("");        
            }
        }
        else
        {
            if($("#"+id).val().length>80)
            {
                $("#"+id).css('border-color','red'); 
                $("#err").fadeOut(1000);
                $("#error_value").text("Maximum 80 characters are allowed for name field.");                 
            }
            else
            {
                $("#"+id).css('border-color','');  
                $("#err").hide();
                $("#error_value").text("");            
            }
        }         
     });
    $(".street_validate").keyup(function(){
        var id = $(this).attr('name');
        var data = $.trim($(this).val());
        if (id=='street1_edit') 
        {
            if($(this).val().length==0)
            {
                $(this).css('border-color','red');
                $(this).attr('title','Not Correct');
                $("#err").fadeOut(1000);
                $("#error_value").text("Ateast one street field details are required.");
            }
            else if($(this).val().length>60)
            {
                $(this).css('border-color','red'); 
                $(this).attr('title','Not Correct');
                $("#err").fadeOut(1000);
                $("#error_value").text("Maximum 60 characters are allowed for street1 field.");          
            }
            else
            {
                $(this).css('border-color','');   
                $(this).attr('title','');
                $("#err").hide();
                $("#error_value").text("");        
            }
        }
        else
        {
            if($(this).val().length>40)
            {
                $(this).css('border-color','red'); 
                $(this).attr('title','Not Correct');
                $("#err").fadeOut(1000);
                $("#error_value").text("Maximum 40 characters are allowed for street field.");                 
            }
            else
            {
                $(this).css('border-color','');  
                $(this).attr('title','');
                $("#err").hide();
                $("#error_value").text("");            
            }
        }
         
     });
    $(".house_validation").keyup(function(){
        var id = $(this).attr('name');
        var data = $.trim($(this).val());
        if($(this).val().length>10)
        {
            $(this).css('border-color','red'); 
            $("#err").fadeOut(1000);
            $(this).attr('title','Not Correct');
            $("#error_value").text("Maximum 10 characters are allowed for House Number field.");          
        }
        else
        {
            $(this).css('border-color','');   
            $("#err").hide();
            $(this).attr('title','');
            $("#error_value").text("");        
        }
         
     });

    $(".ex_validate").keyup(function(){
        var id = $(this).attr('name');
        var data = $.trim($(this).val());
        var str = /^(([A-Z]){5}([0-9]){4}([A-Z]){1}([a-zA-Z0-9]){0,30})$/; 
        if($(this).val().length>10)
        {
            $(this).css('border-color','red'); 
            $("#err").fadeOut(1000);
            $(this).attr('title','Not Correct');
            $("#error_value").text("Maximum 10 characters are allowed for House Number field.");          
        }
        if(!str.test($(this).val()))
        {
            $(this).css('border-color','red'); 
            $("#err").fadeOut(1000);
            $(this).attr('title','Not Correct');
            $("#error_value").text("Does not match with provided PAN numner"); 
        }
        else
        {
            $(this).css('border-color','');   
            $("#err").hide();
            $(this).attr('title','');
            $("#error_value").text("");        
        }
         
     });

    $("#gst_addrs").keyup(function(){
        var id = $(this).attr('name');
        var data = $.trim($(this).val());
        if($(this).val().length>100)
        {
            $(this).css('border-color','red'); 
            $("#err").fadeOut(1000);
            $("#error_value").text("Maximum 100 characters are allowed for GST address field.");          
        }
        else
        {
            $(this).css('border-color','');   
            $("#err").hide();
            $("#error_value").text("");        
        }
         
     });


    $(".city_validation").keyup(function(){
        var id = $(this).attr('name');
        var data = $.trim($(this).val());
        if($(this).val().length>30)
        {
            $(this).css('border-color','red'); 
            $("#err").fadeOut(1000);
            $(this).attr('title','Not Correct');
            $("#error_value").text("Maximum 30 characters are allowed for city field.");          
        }
        else
        {
            $(this).css('border-color','');   
            $("#err").hide();
            $(this).attr('title','');
            $("#error_value").text("");        
        }
         
     });

     $(".district_validation").keyup(function(){
        var id = $(this).attr('name');
        var data = $.trim($(this).val());
        if($(this).val().length>40)
        {
            $(this).css('border-color','red'); 
            $("#err").fadeOut(1000);
            $(this).attr('title','Not Correct');
            $("#error_value").text("Maximum 40 characters are allowed for district field.");          
        }
        else
        {
            $(this).css('border-color','');   
            $("#err").hide();
            $(this).attr('title','');
            $("#error_value").text("");        
        }
         
     });

      $(".gst_mobile_number").keyup(function(){
        var id = $(this).attr('name');
        var data = $.trim($(this).val());
        var str = /^([7-9]{1})([0-9]{9})$/;
        
        if(!str.test($(this).val()))
        {
            $(this).css('border-color','red'); 
            $("#err").fadeOut(1000);
            $(this).attr('title','Not Correct');
            $("#error_value").text("Please enter valid mobile number"); 
        }
        else if($(this).val().length>10)
        {
            $(this).css('border-color','red'); 
            $("#err").fadeOut(1000);
            $(this).attr('title','Not Correct');
            $("#error_value").text("Please enter valid mobile number");          
        }
        else
        {
            $(this).css('border-color','');   
            $("#err").hide();
            $(this).attr('title','');
            $("#error_value").text("");        
        }
         
     });

      $(".transportasionzone_edit").keyup(function(){
        var id = $(this).attr('name');
        var data = $.trim($(this).val());
        var str = /^([7-9]{1})([0-9]{9})$/;
        if($(this).val().length>10)
        {
            $(this).css('border-color','red'); 
            $("#err").fadeOut(1000);
            $("#error_value").text("Please enter valid transportation zone number");          
        }
        else
        {
            $(this).css('border-color','');   
            $("#err").hide();
            $("#error_value").text("");        
        }
         
     });

        $(".ex_validate1").keyup(function(){
        var id = $(this).attr('name');
        var data = $.trim($(this).val());
        var str = /^([a-zA-Z0-9]{1,40})$/;
        if($(this).val().length>10)
        {
            $(this).css('border-color','red'); 
            $("#err").fadeOut(1000);
            $("#error_value").text("Please enter valid number");          
        }
        else
        {
            $(this).css('border-color','');   
            $("#err").hide();
            $("#error_value").text("");        
        }
         
     });

     $(".postal_code_validate").keyup(function(){
        var id = $(this).attr('name');
        var data = $.trim($(this).val());
        var str = /^([0-9])*$/;
        if(!str.test($(this).val()))
        {
            $(this).css('border-color','red'); 
            $("#err").fadeOut(1000);
            $(this).attr('title','Not Correct');
            $("#error_value").text("Only digits are allowed for Postal Code."); 
        }
        else if($(this).val().length>6)
        {
            $(this).css('border-color','red'); 
            $("#err").fadeOut(1000);
            $(this).attr('title','Not Correct');
            $("#error_value").text("Maximum 6 digits are allowed for Postal Code field.");          
        }
        else
        {
            $(this).css('border-color','');   
            $("#err").hide();
            $(this).attr('title','');
            $("#error_value").text("");        
        }
         
     });

     $(".tele_number").keyup(function(){
        var id = $(this).attr('name');
        var data = $.trim($(this).val());
        var str = /^([0-9]{10,12})$/;
        if (!str.test(data))
        {
            $(this).css('border-color','red'); 
            $("#err").fadeOut(1000);   
            $(this).attr('title','Not Correct');  
            $("#error_value").text("Please Enter valid Telephone number");
        }
        else
        {
            $(this).css('border-color','');   
            $("#err").hide();
            $(this).attr('title','');
            $("#error_value").text(""); 
        }    
     });

     $(".fax_validate").keyup(function(){
        var id = $(this).attr('name');
        var data = $.trim($(this).val());
        var str = /^[0-9]{10}$/;
        if (data != '' && !str.test(data))
        {
            $(this).css('border-color','red'); 
            $("#err").fadeOut(1000);    
            $(this).attr('title','Not Correct');   
            $("#error_value").text("Please Enter valid Fax number");
        }
        else
        {
            $(this).css('border-color','');   
            $("#err").hide();
            $(this).attr('title','');  
            $("#error_value").text(""); 
        }    
     });

     $(".email_validate").keyup(function(){
        var id = $(this).attr('name');
        var data = $.trim($(this).val());
        var str = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
        if (data != '' && !str.test(data))
        {
            $(this).css('border-color','red'); 
            $("#err").fadeOut(1000); 
            $(this).attr('title','Not Correct');    
            $("#error_value").text("Please Enter valid email id");
        }
        else
        {
            $(this).css('border-color','');   
            $("#err").hide();
            $(this).attr('title','');
            $("#error_value").text(""); 
        }    
     });

    $(".pan_validate").keyup(function(){
    var id = $(this).attr('name');
    var data = $.trim($(this).val());
    var str = /^([A-Z]){5}([0-9]){4}([A-Z]){1}?$/; 
    if(data.length>0)
    {
            $("#error_lable").hide();
            if (data.length<10)
            {
                $("#err").fadeOut(1000);
                $(this).attr('title','Not Correct');   
                $("#error_value").html("Please Enter correct PAN card details").show();
            }
            else if (!str.test(data))
            {
                $("#err").fadeOut(1000);
                $(this).attr('title','Not Correct');   
                $("#error_value").html("Enter Valid PAN card Number").show();               
            }
            else if (data.length>10)
            {
                $("#err").fadeOut(1000);
                $(this).attr('title','Not Correct');   
                $("#error_value").html("Please Enter correct PAN card details").show();                
            }
            else
            {
                $(this).css('border-color','');   
                $("#err").hide();
                $(this).attr('title','');   
                $("#error_value").text(""); 
            }
           
    }
});

    $(".gst_validate").keyup(function(){
    var id = $(this).attr('name');
    var data = $.trim($(this).val());
    var pan_data = $(".pannumber_edit").val();
    var pan_match = data.substring(2, 12);
    //alert("GHJGHJ");
    var code = '';
    var variable2 = '';
    var str = /^([0-9]){2}([A-Z]){5}([0-9]){4}([A-Z]){1}([a-zA-Z0-9]){3}?$/; 
    if ($(".statename_edit").attr('title') == 'active') 
    {
        code = $("#state_name_code_edit").attr('value');
        variable2 = data.substring(0, 2);
    }
    else
    {
        code = $("#state_name_code").attr('value');
        variable2 = data.substring(0, 2);
    }
    //alert(code);alert(variable2);
        if(data.length>0)
        {
            $("#error_lable").hide();
            if (data.length<15)
            {
                $("#err").fadeOut(1000);
                $(this).attr('title','Not Correct');
                $("#error_value").html("Please Enter correct GST number").show();
            }
            else if(code != variable2)
            {
                $("#err").fadeOut(1000);
                $(this).attr('title','Not Correct');
                $("#error_value").html("This GST number does not belong to this state.").show(); 
            }
            else if(pan_data != pan_match)
            {
               // alert(pan_data);alert(pan_match);
                $("#err").fadeOut(1000);
                $(this).attr('title','Not Correct');
                $("#error_value").html("This GST number does not validate with pan you have entered.").show(); 
            }
            else if (!str.test(data))
            {
                $("#err").fadeOut(1000);
                $(this).attr('title','Not Correct');
                $("#error_value").html("Enter Valid GST card number").show();               
            }
            else if (data.length>15)
            {
                $("#err").fadeOut(1000);
                $(this).attr('title','Not Correct');
                $("#error_value").html("Please Enter correct GST number").show();                
            }
            else
            {
                $(this).css('border-color','');   
                $("#err").hide();
                $(this).attr('title','');
                $("#error_value").text(""); 
            }
               
        }
});
});