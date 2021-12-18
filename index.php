<!DOCTYPE html>
<html lang="en">
    <head>
        <title>NS project</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="project.css">
        <?php include 'project.php'; ?>
    </head>
    <body>
        <form action="index.php" method="post">
            <div class="container">
                
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <select name="cipher" class="custom-select-sm">
                            <option selected>Algorithms Code</option>
                            <option value="denied">10</option>
                            <option value="denied">11</option>
                            <option value="denied">12</option>
                            <option value="denied">13</option>
                            <option value="denied">14</option>
                            <option value="denied">15</option>
                            <option value="cesar">16</option>
                            <option value="denied">17</option>
                            <option value="denied">18</option>
                            <option value="denied">19</option>
                            <option value="denied">20</option>
                        </select>
                    </div>                
                    <div class="col-lg-6">
                        <label for="key">KEY: </label>
                        <input type="text" class="key" name="key" id="key value="2">
                    </div>    
                </div>
                <hr/>
        
                
                <div class="row">
                    <div class="col-lg-8">
                        <label for="encrypted">Kode Enkripsi</label><br>
                        <textarea name="encrypted" id="encrypted"><?php 
                        if(isset($_POST['cipher']) && $_POST['cipher'] === "cesar") {
                            cesar();
                        }?></textarea>
                    </div> 
                 
                    <div class="col-lg-4 text-center">
                        <button class="btn btn-danger" name="decrypt" value="1">Result</button><br>
                    </div>  
              </div>   
              <hr>
              <div class="row">
                    <div class="col-lg-8">
                        <label for="origin">Hasil Enkripsi</label><br>
                        <textarea name="origin" id="origin"><?php if(isset($_POST['cipher']) && $_POST['cipher'] === "cesar" && $_POST['decrypt']) { decesar();}?></textarea>
                    </div>
                    <div class="col-lg-4 text-center">
                    </div>                
                </div>     
           </div>
            
          
        <script src="jquery-3.3.1.js"></script>
        <script src="bootstrap.min.js"></script>
    </body>
</html>