/**
 *
File: 	     handleRequest.js
Purpose:     Create an Internship Management Portal for NSU's Gruduate Students
             to be able to submit an Internship Form for approval. 

Assignment:  Capstone Project
School:      Nova Southeastern University
Supervisor:  Dr. James Parrish

Author:      Nicky Alvarez
History:     Created 04/01/2016

(c) Copyright Nicky Alvarez 2016 All rights reserved.
 *
 */

function validateOtherReason($submit_id){
    var other = document.getElementById("other"+$submit_id).value;
    var isValidForm = true;
    if(other == ""){
        document.getElementById("other_err"+$submit_id).innerHTML = "This field is required";
        isValidForm = false;
    }
    else{
        document.getElementById("other_err"+$submit_id).innerHTML = "";
    }

   
    if(!isValidForm){
        return false;
    }
    return true;
}

 function RequestAJAX($id)
{
    var submit_id=$id;
    var choice = document.getElementById(submit_id).value;
    var deniedreason=document.getElementById("reason"+submit_id).value;
    var customreason=document.getElementById("other"+submit_id).value;
    if(choice=="APPROVED")
    {
        $.ajax({
            type:"POST",
            url:"../functions/approveRequest.php",
            data:{id:submit_id},
            cache:false,
            success: function(result){
                var res = trimResult(result);
                if(result == "updated"){
                   $("#tab_pending").load('pendingRequestList.php');
                   $("#tab_accepted").load('approvedRequestList.php');
                   $("#tab_rejected").load('deniedRequestList.php');
                }
                else
                {
                    alert('Error!');
                }
            }
            });
        
    }
    else
    {
        if(deniedreason=="Other")
        {
            if(!validateOtherReason(submit_id))
            {
                return false;
            }
            else
            {
                $.ajax({
                type:"POST",
                url:"../functions/denyRequest.php",
                data:{id:submit_id,reason:customreason},
                cache:false,
                success: function(result){
                    var res = trimResult(result);
                    if(result == "updated"){
                       $("#tab_pending").load('pendingRequestList.php');
                       $("#tab_accepted").load('approvedRequestList.php');
                       $("#tab_rejected").load('deniedRequestList.php');
                    }
                    else
                    {
                        alert('Error!');
                    }
                }
                });
            }

        }
        else
        {
            $.ajax({
            type:"POST",
            url:"../functions/denyRequest.php",
            data:{id:submit_id,reason:deniedreason},
            cache:false,
            success: function(result){
                var res = trimResult(result);
                if(result == "updated"){
                   $("#tab_pending").load('pendingRequestList.php');
                   $("#tab_accepted").load('approvedRequestList.php');
                   $("#tab_rejected").load('deniedRequestList.php');
                }
                else
                {
                    alert('Error!');
                }
            }
            });
            
        }
        
    }

}
     
function trimResult(res){
    var res=res.replace(/^\s+|\s+$/,'');
    return res;
}
