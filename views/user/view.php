
<div id="users">
    <div class="col-md-12">
        <div class="pull-left">
            <input class="search" placeholder="Search" />
        </div>

        <!-- <div class="pull-right">
            <a href="index.php?action=add"><i class="glyphicon glyphicon-plus-sign" style="font-size:20px;"></i></a> &nbsp;
        </div> -->
        <div class="pull-right">
            <a href="index.php?action=viewuser"><button class="btn btn-success">ManageUser</button></i></a> &nbsp;
        </div>
    </div>
    <form action="user.php" method="POST">
        <table class="table-bordered col-md-12">
            <th class="sort text-center">ID</th>
            <th class="sort text-center" data-sort="fname">usermname</th>
            <th class="sort text-center" data-sort="lname">nick name</th>
            <th class="sort text-center" data-sort="lname">Password</th>
            
            <tbody class="list">
                  <?php 

                    if($data['user_data'] !=""){
                         $i = 1;
                         foreach($data['user_data'] as $row){

                             ?>
                             <tr>
                                  <td class="id text-center"><?php echo $i;?></td>
                                  <td class="perks text-center"><?php echo $row['username'];?></td>
                                  <td class="salary text-center"><?php echo $row['name'];?></td>
                                  <td class="email text-center"><?php echo $row['password'];?></td>
                             </tr>
                              <?php 
                              $i++;
                         }

                         }else{
                             echo "<tr><td coslspan='6> No record found..!</td></tr>";
                         }
                         
                    ?>
           </tbody>
        </table>
    </form>
</div>

<script>
    var options = {
        valueNames: ['id', 'username', 'name', 'password']
    };

    var userList = new List('user', options);
</script>