$(function(){       

       

       $('#tambah-master').click(function(ev){
              ev.preventDefault();
              $.get(this.href,function(html){
                     $('.table-wrap').html(html);
              });
      
       }
       );
       
       

       
})





