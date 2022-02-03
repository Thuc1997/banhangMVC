function formatNumber (num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
}

$('#country').click(function(){
                    
     $('#tienship').text(formatNumber($('#country').val()));

     $('#tienship2').text(formatNumber($('#country').val()));

      var y=$('#xnxx4').text();
      var str2=y.replace(/,/g,""); 
    
        var i=parseInt(str2);

        var m=$('#country').val();

        if(m==''){
            m=0;
        }
          var b = m.replace(/,/g,"");
        var p = parseInt(b);
      var ts=i + p;
    var t =formatNumber(ts);
    

     $('#xnxx4').text(t);
     if( $('#country').val() != 0){

     $('#country').attr('disabled','disabled');
 }
 $('#tongtienhang').val(ts);
    
 });

$('#buttonreset').click(function(){
 window.location.reload();
});


///check ma khuyen mai


 
