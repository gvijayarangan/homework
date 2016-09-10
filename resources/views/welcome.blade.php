
<!DOCTYPE html>
<html>
<body style="background-color:lightgrey;">
<h1 style="color:darkblue; text-align:center; font-size:200%"> <b>EAGLE FINANCIAL SOLUTIONS</b>.</h1>
<h1 style="text-align:center;"><img style="-webkit-user-select: none" src="http://nebula.wsimg.com/381b1a9a823b593df44577d8bfed4493?AccessKeyId=8C5D0257F10D0CEAECE7&disposition=0&alloworigin=1"
                                    alt="Eagle View" width="1000" height="500">
</h1>
</body>

</html>

<!DOCTYPE html>
<html>
<head>
    <title>EFS Home page</title>
    <h1 style="text-align:right;"> <a style="color:red; "href="http://www.w3schools.com"> HELP for HTML </a>

        <meta charset9="EFS-1">
        <script type="text/javascript">
            function portcheck(){
                var selected;
                alert("Click OK to continue viewing profile");
                var yourSelect = document.getElementById( "select-id" );
                var sel = yourSelect.options[ yourSelect.selectedIndex ].value;
                document.getElementsByTagName('option');

                if(sel=="Review customers portfolio")
                {
                    window.open("http://efs1-assign1-part1.herokuapp.com/customers");
                }
                else if(sel=="Update non stock investments")
                {
                    window.open("http://efs1-assign1-part1.herokuapp.com/investments");
                }
                else if(sel=="Update Stock Portfolio")
                {
                    window.open("http://efs1-assign1-part1.herokuapp.com/stocks");
                }
            }
        </script>
        </head>
<body>

<h1 style="text-align:Left; font-size:100%"><i>"Welcome Back!"</i></h1>
<h1 style="text-align:center; font-size:200%"><i>"We watch your financial security"</i></h1>

<h1 style="text-align:LEFT;"> <b>PORTFOLIO PLANNING OPTIONS </b>:</h1>

<body style="background-color:lightgrey;">

<form name="form1" id="Eagle_portfolio">
    <select name="Portfolio" id="select-id">
        <option value="Review customers portfolio" name="s1" id="1">Review customers portfolio</option>
        <option value="Update Stock Portfolio" id="2">Update Stock Portfolio</option>
        <option value="Update non stock investments" id="3">Update non stock investments</option>
    </select>
    <br><br>
    <input type="submit" onclick="portcheck()">
</form>

</body>
</html>