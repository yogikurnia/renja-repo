$('.tahun_awal').each(function(){
              $(this).editable();
       });
       $('.tahun_akhir').each(function(){
              $(this).editable();
       });
       
       
       $('.hapus-master').each(function(){
              $(this).click(function(ev){
              ev.preventDefault();
              $.get(this.href,function(html){
                     $('.table-wrap').html(html);
              });
  
       });
       });