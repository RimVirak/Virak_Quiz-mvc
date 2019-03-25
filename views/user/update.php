

<div class="container mt-5  bg-info shadow-lg col-md-6">
<div class="card bg-dark ">
                <div class="card-header text-center text-danger"> <h2> Update Form </h2></div>
                <div class="card-body">
                <form action="index.php?action=update_info" method="post">
                   
                    <?php
                        foreach($data['$data_update'] as $row){
                    ?>
                            <input type="hidden" name="id" value="<?php echo $row['id']?>"> 
                        <!-- input username -->
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username" required value="<?php echo $row['username'];?>"> 
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="name" required value="<?php echo $row['name'];?>">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" required value="<?php echo md5($row['password']);?>">
                        </div>
                     
                            <button class="btn btn-success" type="submit" name="btn-update">Update </button>
                            <button class="btn btn-danger float-right" type="reset" name="">Cancel </button>
                            <br><br>
                        </div>
                    </form>
                    <?php
                     }
                    ?>
                </div>
            </div> 
</div>