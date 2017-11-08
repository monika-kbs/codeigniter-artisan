                <div class="row bg-title">
                   <h3>Logs</h3>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                                <table class="table table-striped table-hover ">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Log Name</th>
                                        <th></th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php if(count($logs) > 0):?>
                                          <?php foreach($logs as $key => $log):?>
                                            <tr>
                                              <td><?php echo $key + 1; ?></td>
                                              <td><?php echo $log; ?></td>
                                              <td><a href="<?php echo url('admin/logs/index/' . $log); ?>" class="btn btn-primary btn-xs">View</a></td>
                                            </tr>
                                          <?php endforeach;?>
                                      <?php else:?>
                                          <tr>
                                              <td style="text-align: center;">No Logs Found.</td>
                                            </tr>
                                      <?php endif;?>
                                    </tbody>
                                </table> 
                        </div>
                    </div>
                </div>

