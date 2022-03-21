<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Elegant Contact Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patua+One">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>    
    body {
        color: #333;
        background: #fafafa;
        font-family: "Patua One", sans-serif;
    }
    .contact-form {
        padding: 50px;
        margin: 30px 0;
    }
    .contact-form h1 {
        color: #19bc9d;
        font-weight: bold;
        margin: 0 0 15px;
    }
    .contact-form .form-control, .contact-form .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .contact-form .form-control:focus {
        border-color: #19bc9d;
    }
    .contact-form .btn-primary {
        color: #fff;
        min-width: 150px;
        font-size: 16px;
        background: #19bc9d;
        border: none;
    }
    .contact-form .btn-primary:hover {
        background: #15a487; 
    }
    .contact-form .btn i {
        margin-right: 5px;
    }
    .contact-form label {
        opacity: 0.7;
    }
    .contact-form textarea {
        resize: vertical;
    }
    .hint-text {
        font-size: 15px;
        padding-bottom: 20px;
        opacity: 0.6;
    }
</style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="contact-form">
                <h1>Cadastro de Cliente</h1>
                <?php echo anchor('cliente', 'Volta','class="btn btn-success"') ;?>
                
                <!-- <form action="" method="post"> -->
                <?php echo form_open('cliente/store')?>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Nome</label>
                                <input type="text" name="nome" value="<?= isset($dados) ? $dados['nome']: ''?>" class="form-control" id="nome" required>
                            </div>
                        </div>                
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <!-- value="<?//= $dados['nome']?>" vvem do edit -->
                                <input type="email" name="email" value="<?= isset($dados)? $dados['email']: ''?>"class="form-control" id="email" required>
                            </div>
                        </div>
                       
                        </div>            
                            <input type="hidden" name="id" value="<?= isset($dados)? $dados['id']: ''?>">
                    <button type="submit" class="btn btn-primary"  > Cadastra</button>
                <?php form_close() ?>
                <!-- </form> -->
            </div>
        </div>
    </div>
</div>
</body>
</html>