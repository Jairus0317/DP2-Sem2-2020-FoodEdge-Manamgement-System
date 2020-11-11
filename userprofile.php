<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile</title>
    <meta charset="utf-8">
    <meta name="author" content="Eddie Liew">
    <meta name="description" content="Profile">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.
    css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style/feedback.css">
</head>

<body>

    <style>
        #avatarround {
            vertical-align: middle;
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
        
        #spacetop {
            margin-top: 15px;
            margin-bottom: 15px;
        }
        
        #centertxt {
            margin-left: auto;
            margin-right: auto;
            padding-left: 0%;
            padding-right: 0%;
        }
        
        #asd {
            margin-left: auto;
            margin-right: auto;
            padding-left: 0%;
            padding-right: 0%;
        }
        
        #apus-breadscrumb {
            text-align: center;
            background-color: #f7f7f7;
            margin: 0 0 30px;
        }
        
        .apus-breadscrumb {
            text-align: center;
            background-color: rgb(247, 247, 247);
            margin: 0px 0px 30px;
        }
        
        .apus-breadscrumb .wrapper-breads {
            padding: 30px 0;
        }
        
        .breadcrumb>li {
            display: inline-block;
            text-align: center;
        }
        
        .breadcrumb>li+li::before {
            content: ">>";
            font-family: FontAwesome;
            color: rgb(17, 17, 17) !important;
        }
        
        ol {
            display: block;
        }
        
        .breadscrumb-inner {
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
        
        #alignc {
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
        
        #txtc {
            text-align: center;
        }
        
        #textbold {
            font-weight: bold;
        }
    </style>

    <section id="apus-breadscrumb" class="breadcrumb-page apus-breadscrumb ">
        <div class="container">
            <div class="wrapper-breads  ">
                <div class="wrapper-breads-inner">
                    <h3 class="bread-title">My Profile</h3>
                    <p>Account Details</p>
                </div>
            </div>
        </div>
    </section>

    <section id="main-container" class="container inner">

        <div class="col-md personal-info" id="alignc">

            <form class="form-horizontal" role="form">
                <div class="form-group centertxt">
                    <label class="col-lg-3 control-label" id="textbold">First name:</label>
                    <div class="col-lg-7" id="alignc">
                        <input class="form-control" id="txtc" type="text " value="first name">
                    </div>
                </div>

                <div class="form-group ">
                    <label class="col-lg-3 control-label" id="textbold">Last name:</label>
                    <div class="col-lg-7" id="alignc">
                        <input class="form-control" id="txtc" type="text " value="last name">
                    </div>
                </div>

                <div class="form-group ">
                    <label class="col-lg-3 control-label" id="textbold">Contact Number:</label>
                    <div class="col-lg-7" id="alignc">
                        <input class="form-control " id="txtc" type="tel " pattern="[0-9]{3}-[0-9]{7} " value="012-3456789">
                    </div>
                </div>

                <div class="form-group ">
                    <label class="col-lg-3 control-label" id="textbold">Email:</label>
                    <div class="col-lg-7" id="alignc">
                        <input class="form-control " id="txtc" type="text " value="foodedgecatering@gamil.com">
                    </div>
                </div>

                <div class="form-group ">
                    <label class="col-lg-3 control-label" id="textbold">Address:</label>
                    <div class="col-lg-7" id="alignc">
                        <input class="form-control " id="txtc" type="text " value="address">
                    </div>
                </div>

                <div class="form-group ">
                    <label class="col-md-3 control-label" id="textbold">Username:</label>
                    <div class="col-md-7" id="alignc">
                        <input class="form-control" id="txtc" type="text " value="username" readonly>
                    </div>
                </div>

                <div class="form-group ">
                    <label class="col-md-3 control-label" id="textbold">Password:</label>
                    <div class="col-md-7 " id="alignc">
                        <input class="form-control" id="txtc" type="password" value="1234">
                    </div>
                </div>

                <div class="form-group ">
                    <label class="col-md-3 control-label" id="textbold">Re-enter Password:</label>
                    <div class="col-md-7 " id="alignc">
                        <input class="form-control" id="txtc" type="password" value="1234">
                    </div>
                </div>

                <div class="form-group ">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-7 " id="alignc">
                        <input type="button" class="btn btn-primary" value="Save Changes">
                        <span></span>
                        <input type="reset" class="btn btn-default" value="Cancel">
                    </div>
                </div>
            </form>
        </div>
        </div>
    </section>
    <hr>


</body>

</html>