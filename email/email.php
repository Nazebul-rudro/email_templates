<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email template</title>
    <style>
        .fexdcolor{
            background-color:#337ab7;
            height: 200px;
            width: 100%;
           
            position: relative;
        }
        .styleDesgin{
            position: absolute;
            padding-left: 250px;
            
            margin-top: 80px;
            
        }
        .shadow-desgin{
            padding: 10px 20px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            background-color: #fff;
        }
        .footerdesgin{
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            background-color: #fff;
            
        }
        .padding{
            padding: 7px 0;
        }
    </style>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    


<div class="fexdcolor" >
    
    <div class="styleDesgin">
        <div class="shadow-desgin">
        <div class="card-title">
            <h2 class="text-center">Welcome!</h2>
        </div>
        <!-- content body -->
        <div class="card-text" style="margin-top: 40px;">
            
            <?php
            $content = <<<TEXT
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis quas hic minima harum autem numquam illo vero molestiae nostrum reiciendis.
            TEXT;
            echo $content;
            ?>
        </div>
        <div class="text-center" style="margin: 20px 0;">
        <a href="" onclick="confirm('Do you confirm your account!');" class="btn btn-primary">Confrim Account</a>
        </div>
        <div class="card-text">
            
            <?php
            $confirm_content = <<< TEXT
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit a vero repellat unde facilis eaque id, eos officiis voluptate ut.

            TEXT;
            echo $confirm_content;
            ?>
        </div>
        <div class="card-text" style="margin: 20px 0;">
            <a href="" class="text-primary">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a>
        </div>
        <div class="card-text">
            <?php
            $footer_content = <<<TEXT
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis nobis impedit facere ut aliquam ex dolor, sunt maxime assumenda obcaecati?
            TEXT;
            echo $footer_content;
            ?>
            
        </div>
        <div style="margin: 20px 0;">
            <?php
            $cheers = <<<OWNERNAME
            Cheers, <br/>
            The Cheej Tasre
            OWNERNAME;
            echo $cheers;
            ?>
        </div>
        <!-- footer-top -->
       
        </div>

        <div class="footerdesgin">
        <div class="bg-primary text-white text-center padding">
            <div class="py-4">
                <div>
                    <?php
                    $help = <<<HELP
                    Need more help
                    HELP;
                    echo $help;
                    ?>
                    <br>
                    <a href="" class="text-white" style="color:#000;">We're here, Ready to talk</a>
                </div>
                
            </div>
        </div>
        <!-- footer -->
        <div style="margin: 20px 0 0 0; padding:10px 20px;">
            <div>
                <a href="">Geeting</a>
                <a href="">Setting</a>
                <a href="">Help</a>
            </div>
        </div>
        </div>
    </div>
   
</div>



<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>