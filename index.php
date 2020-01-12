<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>B2Brazil - Test Developer</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid col-md-offset-1">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Tabs</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid">
    <div class="jumbotron col-md-offset-1 col-md-10">
        <h1>B2Brazil <small>- Development Test</small></h1>
        <p class="lead">Nullam semper augue at laoreet laoreet. Phasellus congue elit metus, eu euismod risus elementum et. Quisque faucibus sit amet sapien facilisis ornare. Proin bibendum ipsum nunc, ut rhoncus sem lacinia non. Suspendisse ultrices velit quam, ac volutpat elit cursus vel. Donec sed orci dignissim, pretium enim a, euismod metus.Nullam semper augue at laoreet laoreet.</p>
        <div class="row">
            <div class="col-sm-6 pull-right">
                <img src="img/img.png" class="img-responsive wide-size" alt="Imagem responsiva">
            </div>
            <div class="col-sm-6 pull-left">
                <p class="font-adjust"><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut magna at orci imperdiet mattis. Donec at urna a tortor suscipit tincidunt. Ut at tellus nulla.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. </small></p>
                <p class="font-adjust"><small>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas hendrerit nisi sed lorem tincidunt viverra. Praesent a feugiat nibh. Praesent venenatis sollicitudin purus, a laoreet mi viverra vitae. Ut eget eleifend leo. Donec iaculis, ante sit amet fringilla vestibulum, ipsum nunc tempor nibh, quis efficitur est massa in turpis.Donec iaculis, ante sit amet fringilla vestibulum, ipsum nunc tempor nibh, quis efficitur est massa in turpis.</small></p>
                <p class="font-adjust"><small>Quisque sed dapibus sapien. Nunc ac libero congue, lobortis lacus at, faucibus diam. Curabitur fermentum tempus nunc nec congue.Curabitur fermentum tempus nunc nec congue.</small></p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
            </div>
        </div>
    </div>
</div>
<div class="jumbotron">
    <div class="container-fluid">
        <div class="col-sm-5 pull-right" id="selector">
            <a class="btn btn-primary" role="button" id="button-one">
                Home
            </a>
            <a class="btn" role="button" id="button-two">
                Profile
            </a>
            <a class="btn" role="button" id="button-three">
                Names
            </a>
            <div id="box-one" class="show">
                <p><small>Quisque sed dapibus sapien. Nunc ac libero congue, lobortis lacus at, faucibus diam. Curabitur fermentum tempus nunc nec congue. Nunc ac maximus nisi, at auctor nunc.. Curabitur fermentum tempus nunc nec congue.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut magna at orci imperdiet mattis. Donec at urna a tortor suscipit tincidunt. Ut at tellus nulla.</small></p>
            </div>
            <div id="box-two"class="hide">
                <p><small>Cras vehicula sem vitae diam elementum, non dapibus urna euismod. Mauris fringilla nisl at velit consequat, at vestibulum quam malesuada. Aliquam ac nibh et velit vestibulum efficitur. In convallis facilisis tellus, ut ullamcorper odio dapibus ut. Sed hendrerit nunc vel erat gravida, congue semper neque malesuada.</small></p>
            </div>
            <div id="box-three"class="hide">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Primeiro Nome</th>
                        <th>Último Name</th>
                        <th>Nome de usuário</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    <tr class="hide" id="row-four">
                        <th scope="row">4</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr class="hide" id="row-five">
                        <th scope="row">5</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr class="hide" id="row-six">
                        <th scope="row">6</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    <tr class="hide" id="row-seven">
                        <th scope="row">7</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr class="hide" id="row-eight">
                        <th scope="row">8</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr class="hide" id="row-nine">
                        <th scope="row">9</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
                <div class="text-center box-layout" id="load-link">
                    <a role="button" id="load">Load more</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 pull-right">
            <img src="img/img.png" class="img-responsive pull-left wide-size" alt="Imagem responsiva">
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="col-md-offset-1 col-md-11">
        <div class="col-sm-6">
            <h2 class="panel-title">Contact Us</h2>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Full name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputTelephone" placeholder="Phone number" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="E-mail" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Subject" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="3" placeholder="Leave your message" required></textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Send message</button>
                </div>
            </form>
        </div>
        <div class="col-sm-6 google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13163.767009088728!2d150.88430374248978!3d-34.42823463898963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b1319a51f0b567b%3A0x5017d681632e720!2sWollongong%20Nova%20Gales%20do%20Sul%202500%2C%20Austr%C3%A1lia!5e0!3m2!1spt-BR!2sbr!4v1578792049205!5m2!1spt-BR!2sbr" width="700" height="375" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
</div>
<div class="space">

</div>
<!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
<script src="js/bootstrap.js"></script>
<script src="js/jquery.mask.js"></script>
<script src="js/configuration.js"></script>
</body>
</html>