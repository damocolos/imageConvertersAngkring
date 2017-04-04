<html>
    <head>
        <title>Input Data Traditionaly</title>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
            #copybtn{
                margin-top: 10px;
            }
            #notification{
                display: none;
                position: fixed;
                text-align: center;
                bottom: 0;
                left: 0;
                color: #fff;
                padding: 2px;
                width: 100%;
                background: #5cb85c;
                z-index: 10000;
            }
        </style>
    </head>
    <body>
        <div class="main container">
            <h1>Input Data Traditionaly</h1>
            <hr>
            <form id="uploadimage" action="" method="post" enctype="multipart/form-data">
                <div id="selectImage">
                    <!-- <input type="file" name="file[]" id="file" required="required" multiple />
                    <input type="number" name="folder" value="450"> -->
                    <div class="form-group">
                        <label for="file">Images</label>
                        <input type="file" name="file[]" class="form-control input-lg" id="file" required multiple>
                      </div>
                    <div class="form-group">
                        <label for="folder">Folder Number</label>
                        <input type="number" name="folder" class="form-control input-lg" id="folder" value="450" required>
                      </div>
                    <input type="submit" value="Generate" class="submit btn btn-primary" />
                </div>
            </form>
            <div id="message">result</div>
            <button class="btn btn-success" id="copybtn">copy</button>
            <div class="notification" id="notification">
                <h3>Copied</h3>
            </div>
        </div>
    <script src="script.js"></script>
    <script type="text/javascript">
    $("#copybtn").click(function(e){
        console.log("copied");
        let t = document.createElement('textarea')
          t.id = 't'
          // Optional step to make less noise in the page, if any!
          t.style.height = 0
          // You have to append it to your page somewhere, I chose <body>
          document.body.appendChild(t)
          // Copy whatever is in your div to our new textarea
          t.value = document.getElementById('message').innerText
          // Now copy whatever inside the textarea to clipboard
          let selector = document.querySelector('#t')
          selector.select()
          document.execCommand('copy')
          // Remove the textarea
          document.body.removeChild(t)



          $("#notification").html("<h3>" + t.value + " copied</h3>").fadeIn(200).delay(300).fadeOut(100);
    });
    </script>
    </body>
</html>
