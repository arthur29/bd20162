$().ready(function (){
  $("#selectavg").change (function (){sqls_geradas();});
  $("#data").change (function (){sqls_geradas()});

  function sqls_geradas (){
      if ($("#selectavg").is(":checked") && $("#data").val() != ""){
        $.post ("controller/sqls-geradas.php",{
          funcao: "sql1",
          dado: $("#data").val() 
          },function (data,status){
            if (status=="success"){
              $("#response").html(data);
              console.log(data);
            }
          });
      }
    }
});
