$(function(){       
	

       $('.username1').each(function(){
              $(this).editable();
       });
       $('.salt').each(function(){
              $(this).editable();
       });
                            
       $('.context').each(function(){
              $(this).contextmenu();
       });
                            
       $('.rolemenu').each(function(){
              $(this).contextmenu();
       });


       
})

