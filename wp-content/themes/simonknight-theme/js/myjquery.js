    $(document).ready(function(){  
        //To switch directions up/down and left/right just place a "-" in front of the top/left attribute  
        //Vertical Sliding   
        //Full Caption Sliding (Hidden to Visible - this is lower caption)  
        $('.boxgrid.captionfull').hover(function(){  
            $(".cover", this).stop().animate({top:'150px'},{queue:false,duration:160});  
        }, function() {  
            $(".cover", this).stop().animate({top:'251px'},{queue:false,duration:160});  
        });  
    });  