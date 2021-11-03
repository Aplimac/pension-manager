<?php    
error_reporting(0);


$schemename = $_SESSION['active_scheme'];

    echo ' <script>
! function(t) {
    "use strict";
    var e = function() {};
    e.prototype.init = function() {
        
         t("#cjs-scheme-select").click(function() {
            Swal.fire("Scheme Selected", "'.$schemename.'", "success")
        }) , 
             
         t("#scheme-created").click(function() {
            Swal.fire("Scheme Created", "Your scheme has been successfully created!", "success")
        }) , 
             
         t("#modal-trigger-dependant-created").click(function() {
            Swal.fire("Dependant Added", "The dependant has been succefully added!", "success")
        })  , 
             
         t("#mod-alt-basic-info-updated").click(function() {
            Swal.fire("Details Updated", "Your basic details are updated!", "success")
        })  , 
             
         t("#modal-trigger-memb-created").click(function() {
            Swal.fire("Member Registered", "The member has been succefully added!", "success")
        })   , 
             
         t("#modal-trigger-emp-updated").click(function() {
            Swal.fire("Details Updated", "Employer details are successfully updated!", "success")
        })  , 
             
         t("#modal-trigger-memb-updated").click(function() {
            Swal.fire("Details Updated", "Member details were successfully updated!", "success")
        }) , 
             
         t("#mod-alt-passchange").click(function() {
            Swal.fire("Password Changed", "Your password has been changed successfully!", "success")
        })  , 
             
         t("#scheme_edit-update_success").click(function() {
            Swal.fire("Scheme Updated", "Your scheme details are successfully updated!", "success")
        }) , t("#Invalid_password_nomatch").click(function() {
            Swal.fire({
                icon: "error",
                title: "No Match",
                text: "The new passwords you entered do not match!" 
            })
        }), t("#Invalid_password_wrongpass").click(function() {
            Swal.fire({
                icon: "error",
                title: "Wrong Password",
                text: "You have entered a wrong password!" 
            })
        }) , 
             
         t("#modal-trigger-emp-created").click(function() {
            Swal.fire("Employer Added", "The employer is succefully added!", "success")
        }) 
             
    }, t.SweetAlert = new e, t.SweetAlert.Constructor = e
}(window.jQuery),
function(t) {
    "use strict";
    window.jQuery.SweetAlert.init()
}();

</script>';





?> 