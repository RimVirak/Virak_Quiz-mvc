
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 ">
            <h2 class="text-center mb-5">Add News User</h2>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card border-danger shadow-lg">
                        <div class="card-header">
                            <h3 class="mb-0 my-0 text-center">Add Now</h3>
                        </div>
                        <div class="card-body">
                        <form method="post" action="#">
                        <!-- input username -->
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="username" required value> 
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="nick name" required value>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" required value>
                        </div>
    
                            <button class="btn btn-primary" type="submit" name="btn-user"> Add User </button>
                            <button class="btn btn-danger type="reset" name=""> Cancel </button>
                        
                        </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>