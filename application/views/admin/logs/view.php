    <div class="row bg-title">
                   <h3>Logs</h3>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                          <div class="panel-heading">
                          <?php echo $log; ?>
                          <a id="pauseResume" class="btn btn-xs btn-primary pull-right" href="#">Pause</a>
                          </div>
                          <div class="panel-body">
                            <div class="data">
                                <p>Loading...</p>
                            </div>
                          </div> 
                        </div>
                    </div>
                </div>        

<script>
  var pause = false;
  $(document).ready(function(){
    $("#pauseResume").click(function(e){
      e.preventDefault();
      var el = $(this);
      if(el.text() == "Pause")
      {
        pause = true;
        return el.text("Resume");
      }
      pause = false;
      return el.text("Pause");
    });

    // Comment this code in order to remove mouse events to pause logging.
    // --->
    // $('.data').mouseover(function(){
    //   pause = true;
    // }).mouseout(function(){
    //   pause = false;
    // }); 
    // <---

  });
  var url = '<?php echo url('admin/logs/read/' . $log) ?>';
  setInterval(function(){
    console.log(pause, 'isPaused');
    if(pause === false)
    {
      $.get(url, function(res, status){
        $(".data").empty();
        data = '<pre>';
        data += res;
        data += '</pre>';
        $(".data").html(data);
      });
    }
  }, 2000);
</script>
