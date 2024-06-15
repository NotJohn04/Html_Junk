<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charity Ease Malaysia</title>

    <style>
        body {
            margin: 0;
            overflow-x: hidden;
            height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
        }

        .header {
            background-color: #00171E;
            width: 100%;
            height: 140px;
            display: flex;
            align-items: center;
            padding: 20px;
        }

        .box1 {
            display: flex;
            align-items: center;
            margin-left: 100px;
            flex-grow: 1;
        }

        .box2 {
            flex-grow: 1;
        }

        .box3 {
            flex-grow: 1;
            display: flex;
            justify-content: flex-end;
            padding-right: 100px;
        }

        #charitylogo {
            width: 150px;
            height: auto;
        }

        #user {
            width: 60px;
            height: auto;
        }

        .header2 {
            background-color: #0da8e8;
            height: 60px;
            width: 100%;
            margin: 0;
            display: flex;
            align-items: center;
            padding-left: 100px;
        }

        #eventbtn {
            background-color: #00A8E8;
            border: none;
            border-radius: 30px;
            padding: 15px 50px;
            font-size: large;
            cursor: pointer;
            color: white;
        }

        #location-search {
            background-color: #0da8e8;
            border: none;
            font-size: x-large;
        }

        ::placeholder {
            color: white;
        }

        .header3 {
            background-color: #00171E;
            width: 100%;
            height: 500px;
            display: flex;
            flex-direction: column; /* Center items vertically */
            align-items: center;
            justify-content: center; /* Center items horizontally */
        }

        .box2 {
            background-color: white;
            width: 400px;
            padding: 20px;
            border-radius: 20px;
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .wlc {
            font-size: xx-large;
            padding-top: 10px;
            text-align: center;
            font-weight: 600;
        }

        .logo {
            width: 100px;
            height: auto;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .box2_1 {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .input-group {
            width: 100%;
            margin: 10px 0;
        }

        .input-group input {
            width: calc(100% - 20px);
            padding: 10px;
            font-size: 1.2em;
            border-radius: 10px;
            border: 1px solid #ccc;
        }

        .emaillogin,
        .passwordlogin {
            background-color: #00171E;
            color: white;
        }

        .btn-group {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .btn-group input[type="button"] {
            width: 48%;
            padding: 15px;
            font-size: 1.2em;
            border-radius: 10px;
            border: none;
            cursor: pointer;
        }

        .backlogin {
            background-color: #00171E;
            color: white;
        }

        .nextlogin {
            background-color: #00A8E8;
            color: white;
        }

        .homebtn {
            border: none;
            background-color: transparent;
            width: auto;
            height: auto;
            padding: 0;
            cursor: pointer;
            display: inline-block;
        }
        a:link {
            text-decoration: none;
            color: #00171E;
        }

a:visited {
  text-decoration: none;
  color: #00171E;
}

a:hover {
  text-decoration: underline;
  color: #00A8E8;
}

a:active {
  text-decoration: underline;
  color: #00A8E8;
}


        

        
    </style>
</head>
<body>
    <div class="header">
        <div class="box1">
            <button class="homebtn" onclick="window.location.href='home.html'">
                <img src="images/Charityeaselogo.jpg" alt="chairityeaselogo" id="charitylogo">
            </button>
            <button id="eventbtn" onclick="window.location.href='event.html'">Event</button>
        </div>
        <div class="box3">
            <img src="images/bananaman.png" alt="user" id="user">
        </div>
    </div>
    <div class="header2">
        <input type="text" name="location-search" id="location-search" placeholder="🔎 Location">
    </div>
    <div class="header3">
        <div class="box2">
            <div class="box2_1">
                <h1 class="wlc">Welcome</h1>
                <img src="images/Add a heading.png" alt="logo" class="logo">
                <div class="input-group">
                    <input type="text" name="emaillogin" class="emaillogin" placeholder="Email">
                </div>
                <div class="input-group">
                    <input type="password" name="passwordlogin" class="passwordlogin" placeholder="Password">
                </div>
                <div class="btn-group">
                    <input type="button" name="backlogin" class="backlogin" value="Back">
                    <input type="button" name="nextlogin" class="nextlogin" value="Next">
                    
                </div>
                <a href="register.html">click here to register</a>
                
            </div>
        </div>
    </div>
</body>
</html>
