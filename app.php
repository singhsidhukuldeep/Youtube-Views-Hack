<!--
CREDITS

Kuldeep Singh Sidhu

Github: github/singhsidhukuldeep https://github.com/singhsidhukuldeep

Website: Kuldeep Singh Sidhu (Website) http://kuldeepsinghsidhu.esy.es

LinkedIn: Kuldeep Singh Sidhu (LinkedIn) https://www.linkedin.com/in/kuldeep-singh-sidhu-96a67170/

Repository: https://github.com/singhsidhukuldeep/Youtube-Views-Hack

-->
<!-- PHP BLOCK  -->

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "u769469220_root", "luvulinkin", "u769469220_lean");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_POST['Name']);
$place = mysqli_real_escape_string($link, $_POST['Place']);
$qty = mysqli_real_escape_string($link, $_POST['Qty']);
$uom = mysqli_real_escape_string($link, $_POST['Uom']);
$pwd = mysqli_real_escape_string($link, $_POST['Pwd']);
$name = strtoupper($name);
$uom = strtoupper($uom);
if($pwd=="1234"){
// attempt insert query execution
$sql = "INSERT INTO dataset (name, place, qty, pwd, uom) VALUES ('$name', '$place', '$qty', '$pwd', '$uom')";
if(mysqli_query($link, $sql)){
	$res="1";
    header('Location: index.php?result='.$res.'&nam='.$name.'#features');
} else{
	$res="ERROR: Could not able to execute $sql." .mysqli_error($link);
	header('Location: index.php?result='.$res.'#features');
    //echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}}
else{
	$res="3";
    header('Location: index.php?result='.$res.'#features');
}
// close connection
mysqli_close($link);
?>



<!-- WEBSITE STARTS HERE  -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>YouTube Views Hack</title>
    <link href="css/hacker.css" rel="stylesheet">

    <style>
    .tall-row {
        margin-top: 40px;
    }
    .modal {
        position: relative;
        top: auto;
        right: auto;
        left: auto;
        bottom: auto;
        z-index: 1;
        display: block;
    }
    </style>
</head>

<body>

    <a href="https://github.com/singhsidhukuldeep/Youtube-Views-Hack"><img style="position: absolute; top: 0; left: 0; border: 0;z-index:1001;" src="img/fork.png" alt="Fork me on GitHub"></a>

    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">YouTube Views Hack</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Options<span class="caret"></span> </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="http://kuldeepsinghsidhu.esy.es">Main Website</a></li>
                            <li><a href="mailto:singhsidhukuldeep@gmail.com">Email Me</a></li>
                            <li><a href="http://youtube.com">YouTube</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">About Me</li>
                            <li><a href="https://github.com/singhsidhukuldeep">GitHub</a></li>
                            <li><a href="https://www.linkedin.com/in/kuldeep-singh-sidhu-96a67170/">Linked In</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="http://kuldeepsinghsidhu.esy.es" target="_blank">Main Website</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">

        <!-- Jumbotron -->
        <div class="jumbotron">
            <h1>YouTube Views Hack</h1>
            <p>This application lets you run multiple instances of the same video at once with ability to restart once it is over. Just enter the required variables and start gaining views!!!</p>
            <p>To hack around with the source or contribute, check out the project on Github</p>
            <p>
                <a class="btn btn-lg btn-primary" href="https://github.com/singhsidhukuldeep/Youtube-Views-Hack" role="button">View on Github »</a>
                <a class="btn btn-primary" href="https://github.com/singhsidhukuldeep/Youtube-Views-Hack" id="stars"></a>
            </p>
        </div>

        <!-- Dialogs -->
        <section id="dis">
        <div class="row tall-row">
            <div class="col-lg-12">
                <h1>Disclaimer</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div style="position:relative;height:0;padding-bottom:56.25%"><iframe id="myVideo"  src="https://www.youtube.com/embed/qZ4GOCBpRIU?ecver=2&autoplay=1&vq=tiny " width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0"></iframe></div>
                <div class="modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">It is <b>WRONG!!</b></h4>
                            </div>
                            <div class="modal-body">
                                <p>Using such type of tools is un-ethical and aginst YouTube's terms. <br>So please be sure, as you are the only person solely responsible for your actions!</p>
                            </div>
                            <div class="modal-footer">
                                <a href = "ItsOk.php"><button type="button" class="btn btn-default" data-dismiss="modal">Abort Mission</button></a>
                                <a href="#var"> <button type="button" class="btn btn-primary">Be a SAVAGE and Do It !!  </button> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div></section>

        <section id="var">
        <!-- Forms -->
        <div class="row tall-row">
            <div class="col-lg-12">
                <h1>Settings</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Details</h4>
                            </div>
            <div class="col-lg-12">
                <div class="well">
                    <form class="form-horizontal">
                        <fieldset>
                            <legend>YouTube Details</legend>
                            <div class="form-group">
                                <label for="inputEmail" class="col-lg-2 control-label">Link</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="Link" name="Link" placeholder="YouTube Video Link" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-2 control-label">Duration</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="Duration" name="Duration" placeholder="Duration in Seconds" type="number">
                                </div>
                            </div>
                            <legend>Repeat Details</legend>
                            <div class="form-group">
                                <label for="select" class="col-lg-2 control-label">Instances</label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="Inst" name="Inst">
                                        <option>0 (Select according  to your available bandwidth)</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-lg-2 control-label">Wait for</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="Blocks" name="Blocks" placeholder= "Repeat after (Seconds)" type="number">
                                </div>
                            </div>
                            <legend>Disclaimer Check</legend>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Disclaimer</label>
                                <div class="col-lg-10">
                                    <div class="radio">
                                        <label>
                                            <input name="optionsRadios" id="dis" value="option1" checked="" type="radio">
                                            I have read the <a href="#dis">Disclaimer</a> and understand fully what I am doing and take full responsibility of my actions.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button type="reset" class="btn btn-default">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div></div></div></div></div>
        </div>
    </section>



        <div class="row tall-row">
            <div class="col-md-12">
                <p>Created by <a href="https://github.com/singhsidhukuldeep">Kuldeep Singh Sidhu</a>. &copy; Forever</p>
            </div>
        </div>

    </div>

    <script src="jquery/1.11.2/jquery.min.js"></script>
    <script src="bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script>
    var myVideo =  iframe.getElementById('myVideo');
    myVideo.mute();
    </script>



</body>

</html>
