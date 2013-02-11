$('.kode_program').each(function(){
       $(this).editable();
});
$('.program').each(function(){
       $(this).editable();
});

$('.sasaran_program').each(function(){
       $(this).editable();
});

$('.iku').each(function(){
       $(this).editable();
});

$('.unit').each(function(){
       $(this).editable();
});
      
$('td').each(function(){
       $(this).contextmenu();
       
});      
       
$('.hapus-master').each(function(){
       $(this).click(function(ev){
              ev.preventDefault();
              $.get(this.href,function(html){
                     $('.table-wrap').html(html);
              });
  
       });
});

